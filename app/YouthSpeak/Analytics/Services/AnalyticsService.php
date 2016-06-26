<?php
namespace App\YouthSpeak\Analytics\Services;

// 第三方套件
use Spatie\Analytics\Analytics;
use Spatie\Analytics\AnalyticsClient;
use Spatie\Analytics\Period;
use Jenssegers\Date\Date;
use Ixudra\Curl\Facades\Curl;
// 輔助
use Carbon\Carbon;
use Illuminate\Support\Collection;

class AnalyticsService extends Analytics {

    public function __construct()
    {
        $client = app(AnalyticsClient::class);
        $analyticsConfig = config('laravel-analytics');
        parent::__construct($client, $analyticsConfig['view_id']);
    }

    /**
     * @return Collection
     */
    public function fetchTwoWeeksVisitorsAndPageViews(): Collection
    {
        $analyticsStartDate = Carbon::today()->startOfWeek()->subWeek(); // 上禮拜一
        $analyticsEndDate = Carbon::yesterday(); // 昨天
        $period = Period::create($analyticsStartDate, $analyticsEndDate);

        $response = $this->performQuery(
            $period,
            'ga:users, ga:pageviews',
            ['dimensions' => 'ga:date']
        );

        return collect($response['rows'] ?? [])->map(function (array $dataRow) {
            return [
                'date' => \Date::createFromFormat('Ymd', $dataRow[0])->format('D'),
                'visitors' => (int) $dataRow[1],
                'pageViews' => (int) $dataRow[2],
            ];
        });
    }

    /**
     * @return Collection
     */
    public function fetchMonthClickSoldButtonEvent(): Collection
    {
        $analyticsStartDate = Carbon::today()->subDays(30);
        $analyticsEndDate = Carbon::yesterday(); // 昨天
        $period = Period::create($analyticsStartDate, $analyticsEndDate);

        $response = $this->performQuery(
            $period,
            'ga:totalEvents',
            [
                'dimensions' => 'ga:eventCategory',
                'filters'    => 'ga:eventCategory==SoldButton'
            ]
        );

        return collect($response['rows'] ?? [])->map(function (array $dataRow) {
            return [
                'totalEvent' => (int) $dataRow[1],
            ];
        });
    }

    public function fetchMonthlyDeviceTypeSessions(): Collection
    {
        $analyticsStartDate = Carbon::today()->subDays(30);
        $analyticsEndDate = Carbon::yesterday(); // 昨天
        $period = Period::create($analyticsStartDate, $analyticsEndDate);

        $response = $this->performQuery(
            $period,
            'ga:sessions',
            [
                'dimensions' => 'ga:deviceCategory'
            ]
        );

        return collect($response['rows'] ?? [])->map(function (array $dataRow) {
            return [
                'label'    => trans('dashboard.'.$dataRow[0]),
                'value'    => (int) $dataRow[1]
            ];
        });
    }

    public function fetchHourlyClickyActions(): Collection
    {
        $analyticsStartDate = Carbon::yesterday()->format('Y-m-d'); // 昨天
        $analyticsEndDate = Carbon::today()->format('Y-m-d'); // 今天
        // Clicky api 請求昨天跟今天每小時活動數
        $api_url = "https://api.clicky.com/api/stats/4?site_id=100967232&sitekey=1da9862848de607c&type=actions&hourly=1&date={$analyticsStartDate},{$analyticsEndDate}&output=json";
        $response = json_decode(Curl::to($api_url)->get());
        $collection = collect([]);
        foreach($response[0]->dates as $dateData){
            $date = Carbon::createFromFormat('Y-m-d', $dateData->date)->isToday() ? 'today' : 'yesterday'; // 判斷日期是昨天還是今天
            foreach($dateData->items as $items){
                if($collection->has($items->hour)){ // 如果資料裡已經有存過該小時
                    $temp = $collection[$items->hour]; // 先把裡面內容抓出來
                    $temp[$date] = (int)$items->value; // 在寫入新的資料
                    $collection[$items->hour] = $temp; // 最後再寫回去覆蓋
                } else {
                    // 都沒有該小時資料，則創建一個
                    $collection->put($items->hour, [
                        $date => (int)$items->value
                    ]);
                }
            }
        }
        return $collection = $collection
            ->map(function($value, $key){  // 將key移進value陣列裡面
                $value['hour'] = $key;
                return $value;
            })
            ->sortBy('hour')               // 依據hour整理collection順序
            ->map(function($value, $key){
                $value['hour'] = str_pad($key, 2, "0", STR_PAD_LEFT).":00"; // 將hour易讀性調高
                return $value;
            });
        //

    }

}

