<?php

namespace App\YouthSpeak\Core\Services;

use Exception;

/**
 * 唯一編號產生服務（Service）
 */
class UuidService
{
    /**
     *  產生包含表頭隨機字串
     *
     *  @param      String      $header             隨機字串表頭
     *  @param      Integer     $str_length         隨機字串包含表頭長度
     *  @param      String      $candidate_text     候選字串
     *
     *  @return     String                          唯一編號字串
     *
     *  @access     public
     *  @author     Abel        abel@thenewslens.com
     *  @date       2016-07-02
     */
    public static function generateRandomStringWithPrefix($header = '', $str_length = 20, $candidate_text = 'abcdefghijklmnopqrstuvwxyz1234567890')
    {
        // 隨機字串長度
        $rand_str_length = $str_length - strlen($header);

        return $header . static::generateRandomString($rand_str_length, $candidate_text);
    }

    /**
     *  產生隨機字串
     *
     *  @param      Integer     $rand_str_length    隨機字串包含表頭長度
     *  @param      String      $candidate_text     候選字串
     *
     *  @return     String                          唯一編號字串
     *
     *  @access     public
     *  @author     Abel        abel@thenewslens.com
     *  @date       2016-07-02
     */
    public static function generateRandomString($rand_str_length, $candidate_text = 'abcdefghijklmnopqrstuvwxyz1234567890')
    {
        // 亂數字串
        $rand_str = '';
        // 候選文字長度
        $candidate_text_length = strlen($candidate_text)-1;

        for ($i = 0; $i < $rand_str_length; ++$i) {
            // 隨機挑選文字
            $rand_str .= $candidate_text[mt_rand(0, $candidate_text_length)];
        }

        return $rand_str;
    }
}
