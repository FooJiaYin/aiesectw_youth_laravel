<?php
namespace App\YouthSpeak\Category\Repository;

// 常數
use App\YouthSpeak\Category\Constant\CategoryConstant;
// 服務
use App\YouthSpeak\Core\Services\UuidService;
// 請求
use App\YouthSpeak\Category\Requests\CategoryRequest;
// Repo
use App\YouthSpeak\Core\Repository\CoreRepository;
// Model
use App\YouthSpeak\Category\Entities\Category;
// 輔助
use Auth;
use Cache;
use DB;
use Exception;
use App\YouthSpeak\Core\Support\CacheTrait;
use Illuminate\Support\Collection;

class CategoryRepository extends CoreRepository {
    use CacheTrait;
    protected $Category;

    public $cache_key_list = [
        'all_category' => CategoryConstant::CACHE_KEY_ALL_CATEGORY,
        'category_id'  => CategoryConstant::CACHE_KEY_CATEGORY_ID,       // 分類快取
    ];

    public function __construct()
    {
        parent::__construct();
        $this->Category = new Category();
    }

    /**
     * 存入單一分類快取
     * @param       Category        $Category
     *
     * @throws      Exception
     * 
     * @access      public
     * @author      Abel            abel@thenewslnes.com
     * @date        2016-07-08   
     */
    public function putCategoryCache(Category $Category)
    {
        try {
            $cache_minute = $this->getCacheExpiredMinutes();

            $category_id_cache_key = $this->getCategoryIdCacheKey($Category->id);
            Cache::put($category_id_cache_key, $Category, $cache_minute);

        } catch (Exception $exception) {
            throw $exception;
        }
    }

    /**
     * 存入全部分類快取
     * @param Collection $Categories
     *
     * @throws Exception
     *
     * @access      public
     * @author      Abel            abel@thenewslnes.com
     * @date        2016-07-08
     */
    public function putAllCategoryCache(Collection $Categories)
    {
        try {
            $cache_minute = $this->getCacheExpiredMinutes();

            $category_all_cache_key = $this->getAllCategoryCacheKey();
            Cache::put($category_all_cache_key, $Categories, $cache_minute);

        } catch (Exception $exception) {
            throw $exception;
        }
    }

    /**
     * 取得分類編號快取鍵值
     * @param $category_id
     *
     * @return mixed
     *
     * @access      public
     * @author      Abel            abel@thenewslnes.com
     * @date        2016-07-08
     */
    public function getCategoryIdCacheKey($category_id)
    {
        $category_id_cache_key = $this->encryptCacheKey($category_id);
        $search = [
            '{category_id}',
        ];
        $replace = [
            $category_id_cache_key,
        ];
        $cache_key = str_replace($search, $replace, $this->cache_key_list['category_id']);
        return $cache_key;
    }

    public function getAllCategoryCacheKey()
    {
        return $this->cache_key_list['all_category'];
    }


    /**
     * 取得該分類編號分類資料
     * @param       integer         $category_id
     * @param       bool            $need_cache
     *
     * @return      mixed
     * @throws      Exception
     *
     * @access      public
     * @author      Abel            abel@thenewslnes.com
     * @date        2016-07-08
     */
    public function find($category_id, $need_cache = true)
    {
        try {
            $cache_key = $this->getCategoryIdCacheKey($category_id);

            if($need_cache && Cache::has($cache_key)){
                return Cache::get($cache_key);
            }

            $Category = $this->Category
                ->find($category_id);

            if(!is_null($Category)){
                $this->putCategoryCache($Category);
            }
            return $Category;
        } catch (Exception $exception) {
            throw $exception;
        }
        
    }
    
    /**
     * 取得所有分類
     * @return      mixed
     * @throws      Exception
     *
     * @access      public
     * @author      Abel            abel@thenewslnes.com
     * @date        2016-07-08
     */
    public function getAll()
    {
        try {
            $cache_key = $this->getAllCategoryCacheKey();

            if(Cache::has($cache_key)){
                return Cache::get($cache_key);
            }

            $Category = $this->Category
                ->get();

            if(!is_null($Category)){
                $this->putAllCategoryCache($Category);
            }
            
            return $Category;

        } catch (Exception $exception) {
            throw $exception;
        }
    }

}