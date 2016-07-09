<?php

namespace App\YouthSpeak\Core\Support;

use Crypt;
use Hash;
/**
 *  快取資料管理
 */
trait CacheTrait {
    /**
     *  取得快取過期時間
     *
     *  @param      void
     *
     *  @return     Integer             快取過期時間（分鐘）
     *
     *  @access     public
     *  @author     Abel       abel@thenewslens.com
     *  @date       2016-07-05
     */
    public function getCacheExpiredMinutes()
    {
        // 取得預設快取過期時間，若沒有設定環境變數，預設為 5 分鐘
        $cache_expired_minutes = env('CACHE_EXPIRED_MINUTES', 5);

        if (isset($this->cache_expired_minutes)) {
            // 若類別有設定快取過期時間，使用預設設定的過期時間
            $cache_expired_minutes = (int) $this->cache_expired_minutes;
        }

        return $cache_expired_minutes;
    }

    /**
     *  加密快取鍵值
     *
     *  @param      void
     *
     *  @return     Integer             快取過期時間（分鐘）
     *
     *  @access     public
     *  @author     Abel       abel@thenewslens.com
     *  @date       2016-07-05
     */
    public function encryptCacheKey($cache_key)
    {
        $encrypt_cache_key = md5($cache_key);

        return $encrypt_cache_key;
    }
}