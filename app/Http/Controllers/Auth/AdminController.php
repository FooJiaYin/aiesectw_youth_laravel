<?php

namespace App\Http\Controllers\Auth;

// 控制器
use App\Http\Controllers\Controller;

// 輔助
use App\Http\Requests;
use App\YouthSpeak\Analytics\Services\AnalyticsService;
use Carbon\Carbon;
use GA;
use Illuminate\Http\Request;
use Exception;
use Log;
use Spatie\Analytics\Period;
use Spatie\Analytics\Analytics;


class AdminController extends Controller
{
    protected $AnalyticsService ;
    /*
     * 建構子
     */
    public function __construct()
    {
        $this->AnalyticsService = new AnalyticsService;
    }
    /*
     * 後台首頁
     */
    public function index()
    {
        try{
            $thisWeekPageViews      = null;
            $thisWeekVisitors       = null;
            $lastWeekPageViews      = null;
            $lastWeekVisitors       = null;
            $weeklyPageViewsChart   = collect([]);
            $weeklyPageViewsCount   = 0;
            $weeklyVisitorsChart    = collect([]);
            $weeklyVisitorsCount    = 0;


            $twoWeekAnalytics = $this->AnalyticsService->fetchTwoWeeksVisitorsAndPageViews();
            $lastWeekAnalytics = $twoWeekAnalytics->slice(0,7);
            $thisWeekAnalytics = $twoWeekAnalytics->slice(7,7)->values();
//            dd($lastWeekAnalytics, $thisWeekAnalytics);
            $thisWeekPageViews = $thisWeekAnalytics->sum('pageViews');
            $thisWeekVisitors = $thisWeekAnalytics->sum('visitors');
            $lastWeekPageViews = $lastWeekAnalytics->sum('pageViews');
            $lastWeekVisitors = $lastWeekAnalytics->sum('visitors');

            $thisWeekPageViewsMax = $thisWeekAnalytics->max('pageViews');
            $thisWeekVisitorsMax = $thisWeekAnalytics->max('visitors');
            $lastWeekPageViewsMax = $lastWeekAnalytics->max('pageViews');
            $lastWeekVisitorsMax = $lastWeekAnalytics->max('visitors');
//            dd($thisWeekPageViews, $thisWeekVisitors, $lastWeekPageViews, $lastWeekVisitors);
//            $thisWeekPageViews = 130;
//            $lastWeekPageViews = 40;
//            $thisWeekVisitors= 130;
//            $lastWeekVisitors= 10;
            $pageViewsPercentage = $lastWeekPageViews == 0 ? 100 : $thisWeekPageViews / $lastWeekPageViews * 100;
            $visitorsPercentage = $lastWeekVisitors == 0 ? 100 : $thisWeekVisitors / $lastWeekVisitors * 100;

            $soldEventAnalytics = $this->AnalyticsService->fetchMonthClickSoldButtonEvent();
            $soldClickEvent = count($soldEventAnalytics) ? $soldEventAnalytics->first()['totalEvent'] : 0 ;

            foreach($lastWeekAnalytics as $lastWeekData){
                $push_array = [
                    'week' => $lastWeekData['date'],
                    'lastPageViews'=> $lastWeekData['pageViews'],
                ];
                ! isset($thisWeekAnalytics[$weeklyPageViewsCount]) ?: $push_array['thisPageViews'] = $thisWeekAnalytics[$weeklyPageViewsCount]['pageViews'];
                $weeklyPageViewsChart->push($push_array);
                $weeklyPageViewsCount ++;
            }

            foreach($lastWeekAnalytics as $lastWeekData){
                $push_array = [
                    'week' => $lastWeekData['date'],
                    'lastVisitors'=> $lastWeekData['visitors'],
                ];
                ! isset($thisWeekAnalytics[$weeklyVisitorsCount]) ?: $push_array['thisVisitors'] = $thisWeekAnalytics[$weeklyVisitorsCount]['visitors'];
                $weeklyVisitorsChart->push($push_array);
                $weeklyVisitorsCount ++;
            }

            $weeklyPageViewsString = $weeklyPageViewsChart->toJson();
            $weeklyVisitorsString = $weeklyVisitorsChart->toJson();

            $monthlyDeviceTypeSessions = $this->AnalyticsService->fetchMonthlyDeviceTypeSessions();
            $monthlyDeviceTypeString = $monthlyDeviceTypeSessions->toJson();

            $hourlyAnalytics = $this->AnalyticsService->fetchHourlyClickyActions();
            $hourlyActionString = $hourlyAnalytics->toJson();
//            dd( $hourlyAnalytics);
//            dd($monthlyDeviceTypeSessions);

//            dd($sevenDaysAnalytics->sum('visitors'),$sevenDaysAnalytics);
            $binding = [
                'thisWeekPageViews'         => $thisWeekPageViews,
                'thisWeekVisitors'          => $thisWeekVisitors,
                'lastWeekPageViews'         => $lastWeekPageViews,
                'lastWeekVisitors'          => $lastWeekVisitors,
                'pageViewsPercentage'       => (int)$pageViewsPercentage,
                'visitorsPercentage'        => (int)$visitorsPercentage,
                'soldClickEvent'            => (int)$soldClickEvent,
                'weeklyPageViewsString'     => $weeklyPageViewsString,
                'weeklyVisitorsString'      => $weeklyVisitorsString,
                'monthlyDeviceTypeString'   => $monthlyDeviceTypeString,
                'monthlyDeviceTypeSessions' => $monthlyDeviceTypeSessions,
                'thisWeekPageViewsMax'      => $thisWeekPageViewsMax,
                'thisWeekVisitorsMax'       => $thisWeekVisitorsMax,
                'lastWeekPageViewsMax'      => $lastWeekPageViewsMax,
                'lastWeekVisitorsMax'       => $lastWeekVisitorsMax,
                'hourlyActionString'        => $hourlyActionString,
            ];

//            dd($binding);
            return view('auth.index', $binding);

        } catch (Exception $exception) {
            Log::info($exception);
            abort(404);
        }
    }


}
