<?php

namespace App\YouthSpeak\Press\Repository;

// 常數
use App\YouthSpeak\Core\Services\PaginationService;
use App\YouthSpeak\Press\Constant\PressConstant;
// 服務
use App\YouthSpeak\Core\Services\UuidService;
// 請求
use App\YouthSpeak\Press\Requests\PressRequest;
// Repo
use App\YouthSpeak\Core\Repository\CoreRepository;
// Model
use App\YouthSpeak\Press\Entities\Press;
// 輔助
use Auth;
use Cache;
use DB;
use Exception;
use App\YouthSpeak\Core\Support\CacheTrait;
use Illuminate\Pagination\LengthAwarePaginator;

class PressRepository extends CoreRepository {
    use CacheTrait;
    protected $Press;

    public $cache_key_list = [
        'press_id'  => PressConstant::CACHE_KEY_PRESS_ID,       // 新聞稿快取
        'press_order' => PressConstant::CACHE_KEY_PRESS_ORDER,
    ];

    public function __construct()
    {
        parent::__construct();
        $this->Press = new Press();
    }

    public function putAllPressCache(Press $Press)
    {
        try {
            $cache_key = $this->getPressIdCacheKey($Press->id);
            $cache_minute = $this->getCacheExpiredMinutes();
            Cache::put($cache_key, $Press, $cache_minute);
        } catch (Exception $exception) {
            throw $exception;
        }
    }

    public function putPressOrderCache(LengthAwarePaginator $Presses, $cache_key)
    {
        try {
            $cache_minute = $this->getCacheExpiredMinutes();
            $cache_collection = PaginationService::changePaginationToCacheCollection($Presses);
            Cache::put($cache_key, $cache_collection, $cache_minute);
        } catch (Exception $exception) {
            throw $exception;
        }
    }
    public function getPressIdCacheKey($press_id)
    {
        $search = [
            '{press_id}',
        ];
        $replace = [
            $press_id,
        ];
        $cache_key = str_replace($search, $replace, $this->cache_key_list['press_id']);
        return $cache_key;
    }

    public function getPressOrderCacheKey($order_column, $order_type, $row_number, $page_number)
    {
        $search = [
            '{order_column}',
            '{order_type}',
            '{row_number}',
            '{page}'
        ];
        $replace = [
            $order_column,
            $order_type,
            $row_number,
            $page_number
        ];
        $cache_key = str_replace($search, $replace, $this->cache_key_list['press_order']);
        return $cache_key;        
    }

    public function getAdminOrderingPressList($order_column, $order_type, $row_number, $need_cache = true)
    {
        try {
            
            $Presses = $this->Press->orderBy($order_column, $order_type)
                ->paginate($row_number);
            
            return $Presses;
        } catch (Exception $exception) {
            throw $exception;
        }
    }

    public function getPublishOrderingPressList($order_column, $order_type, $row_number, $need_cache = true)
    {
        try {
            $page = request('page', 1);

            $cache_key = $this->getPressOrderCacheKey($order_column, $order_type, $row_number, $page);

            if($need_cache && Cache::has($cache_key)){
                return PaginationService::changeCacheCollectionToPagination(Cache::get($cache_key));
            }

            $Presses = $this->Press
                ->where('status', PressConstant::MODE_PUBLISH)
                ->orderBy($order_column, $order_type)
                ->paginate($row_number);

            if(count($Presses)){
                $this->putPressOrderCache($Presses, $cache_key);
            }

            return $Presses;
        } catch (Exception $exception) {
            throw $exception;
        }
    }

    public function storeNewPress(PressRequest $request)
    {
        try {
            DB::beginTransaction();
            
            $NewPress = $this->Press;
            $NewPress->id = UuidService::generateRandomStringWithPrefix('PRS', 20);
            $NewPress->user_id = Auth::user()->id;
            $NewPress->category_id = $request->get('category_id', 0);
            $NewPress->photo_id = $request->get('photo_id', 0);
            $NewPress->status = $request->get('status');
            $NewPress->title = $request->get('title');
            $NewPress->content = $request->get('content');
            $NewPress->excerpt = $request->get('excerpt');
            $NewPress->save();
            
            DB::commit();
            return $NewPress;
        } catch (Exception $exception) {
            throw $exception;
        }
    }

    public function updateExistPress(PressRequest $request, $id)
    {
        $save_press_result = false;
        try {
            DB::beginTransaction();

            $Press = $this->Press->find($id);
            $Press->user_id = Auth::user()->id;
            $Press->category_id = $request->get('category_id', 0);
            $Press->photo_id = $request->get('photo_id', 0);
            $Press->status = $request->get('status');
            $Press->title = $request->get('title');
            $Press->content = $request->get('content');
            $Press->excerpt = $request->get('excerpt');
            $Press->save();
            $save_press_result = true;
            DB::commit();
            return $save_press_result;
        } catch (Exception $exception) {
            throw $exception;
        }
    }

    public function find($press_id, $need_cache = true)
    {
        try {
            $cache_key = $this->getPressIdCacheKey($press_id);

            if($need_cache && Cache::has($cache_key)){
                return Cache::get($cache_key);
            }

            $Press = $this->Press
                ->find($press_id);

            if(!is_null($Press)){
                $this->putAllPressCache($Press);
            }
            return $Press;
        } catch (Exception $exception) {
            throw $exception;
        }

    }

    public function findPublishOrFail($press_id)
    {
        try {
            $cache_key = $this->getPressIdCacheKey($press_id);

            if(Cache::has($cache_key)){
                return Cache::get($cache_key);
            }

            $Press = $this->Press
                ->where('id', $press_id)
                ->where('status', PressConstant::MODE_PUBLISH)
                ->firstOrFail();

            if(!is_null($Press)){
                $this->putAllPressCache($Press);
            }
            return $Press;
        } catch (Exception $exception) {
            throw $exception;
        }

    }

}