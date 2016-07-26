<?php
namespace App\YouthSpeak\Photo\Repository;

use App\YouthSpeak\Core\Repository\CoreRepository;
use App\YouthSpeak\Core\Support\CacheTrait;
use App\YouthSpeak\Photo\Constant\PhotoConstant;
use App\YouthSpeak\Photo\Entities\Photo;
use Cache;
use Exception;

class PhotoRepository extends CoreRepository {
    use CacheTrait;
    /**
     * PhotoRepository constructor.
     */
    protected $Photo ;

    public $cache_key_list = [
        'photo_id'  => PhotoConstant::CACHE_KEY_PHOTO_ID,       // 圖片快取
    ];

    public function __construct()
    {
        parent::__construct();
        $this->Photo = new Photo();
    }

    /**
     * 存圖片
     * @param $origin_name
     * @param $file_path
     *
     * @return      Photo
     * @throws Exception
     *
     * @access      public
     * @author      Abel            abel@thenewslnes.com
     * @date        2016-07-17
     */
    public function store($origin_name, $file_path)
    {
        try {
            $Photo = $this->Photo;
            $Photo->title = $origin_name;
            $Photo->path = $file_path;
            $Photo->save();
            return $Photo;
        } catch (Exception $exception) {
            throw $exception;
        }
    }

    /**
     * 取得圖片List，不需要快取
     * @return      mixed
     * @throws Exception
     *
     * @access      public
     * @author      Abel            abel@thenewslnes.com
     * @date        2016-07-16
     */
    public function getList()
    {
        try {
            $photos = $this->Photo
                ->latest('updated_at')
                ->paginate(PhotoConstant::PHOTO_LIST_ROW_NUMBER);

            return $photos;
        } catch (Exception $exception) {
            throw $exception;
        }
    }

    public function delete($ids)
    {
        try {
            $delete_result = $this->Photo
                ->destroy($ids);

            return $delete_result;
        } catch (Exception $exception) {
            throw $exception;
        }
    }

    /**
     * 存入單一圖片快取
     * @param       Photo           $photo
     *
     * @throws      Exception
     *
     * @access      public
     * @author      Abel            abel@thenewslnes.com
     * @date        2016-07-26
     */
    public function putPhotoCache(Photo $photo)
    {
        try {
            $cache_minute = $this->getCacheExpiredMinutes();

            $photo_id_cache_key = $this->getPhotoIdCacheKey($photo->id);
            Cache::put($photo_id_cache_key, $photo, $cache_minute);

        } catch (Exception $exception) {
            throw $exception;
        }
    }


    /**
     * 取得圖片編號快取鍵值
     * @param       $photo_id
     *
     * @return      mixed
     *
     * @access      public
     * @author      Abel            abel@thenewslnes.com
     * @date        2016-07-08
     */
    public function getPhotoIdCacheKey($photo_id)
    {
        $photo_id_cache_key = $this->encryptCacheKey($photo_id);
        $search = [
            '{photo_id}',
        ];
        $replace = [
            $photo_id_cache_key,
        ];
        $cache_key = str_replace($search, $replace, $this->cache_key_list['photo_id']);
        return $cache_key;
    }

    /**
     * 找尋圖片
     * @param       $id
     * @param       bool            $need_cache
     *
     * @return      mixed
     * @throws      Exception
     *
     * @access      public
     * @author      Abel            abel@thenewslnes.com
     * @date        2016-07-26
     */
    public function find($id, $need_cache = true)
    {
        try {
            $cache_key = $this->getPhotoIdCacheKey($id);

            if($need_cache && Cache::has($cache_key)){
                return Cache::get($cache_key);
            }

            $Photo = $this->Photo
                ->find($id);

            if(!is_null($Photo)){
                $this->putPhotoCache($Photo);
            }
            return $Photo;

        } catch (Exception $exception) {
            throw $exception;
        }
    }
}