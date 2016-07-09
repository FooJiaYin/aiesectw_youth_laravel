<?php
namespace App\YouthSpeak\User\Repository;

// 常數
use App\YouthSpeak\User\Constant\UserConstant;
// 服務
use App\YouthSpeak\Core\Services\UuidService;
// 請求
// Repo
use App\YouthSpeak\Core\Repository\CoreRepository;
// Model
use App\YouthSpeak\User\Entities\User;
// 輔助
use Auth;
use Cache;
use DB;
use Exception;
use App\YouthSpeak\Core\Support\CacheTrait;
use Illuminate\Support\Collection;

class UserRepository extends CoreRepository {
    use CacheTrait;
    protected $User;

    public $cache_key_list = [
        'user_id'  => UserConstant::CACHE_KEY_USER_ID,       // 分類快取
    ];

    public function __construct()
    {
        parent::__construct();
        $this->User = new User();
    }

    /**
     * 存入單一使用者快取
     * @param       User            $User
     *
     * @throws      Exception
     *
     * @access      public
     * @author      Abel            abel@thenewslnes.com
     * @date        2016-07-08
     */
    public function putUserCache(User $User)
    {
        try {
            $cache_minute = $this->getCacheExpiredMinutes();

            $user_id_cache_key = $this->getUserIdCacheKey($User->id);
            Cache::put($user_id_cache_key, $User, $cache_minute);

        } catch (Exception $exception) {
            throw $exception;
        }
    }
    

    /**
     * 取得分類編號快取鍵值
     * @param $user_id
     *
     * @return mixed
     *
     * @access      public
     * @author      Abel            abel@thenewslnes.com
     * @date        2016-07-08
     */
    public function getUserIdCacheKey($user_id)
    {
        $user_id_cache_key = $this->encryptCacheKey($user_id);
        $search = [
            '{user_id}',
        ];
        $replace = [
            $user_id_cache_key,
        ];
        $cache_key = str_replace($search, $replace, $this->cache_key_list['user_id']);
        return $cache_key;
    }
    

    /**
     * 取得該使用者編號分使用者資料
     *
     * @param       integer         $user_id
     * @param       bool            $need_cache
     *
     * @return      mixed
     * @throws      Exception
     *
     * @access      public
     * @author      Abel            abel@thenewslnes.com
     * @date        2016-07-08
     */
    public function find($user_id, $need_cache = true)
    {
        try {
            $cache_key = $this->getUserIdCacheKey($user_id);

            if($need_cache && Cache::has($cache_key)){
                return Cache::get($cache_key);
            }

            $User = $this->User
                ->find($user_id);

            if(!is_null($User)){
                $this->putUserCache($User);
            }
            return $User;
        } catch (Exception $exception) {
            throw $exception;
        }

    }
    

}