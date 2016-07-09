<?php

namespace App\YouthSpeak\Press\Constant;


class PressConstant
{
    /**
     * 文章排序
     */
    const ORDER_CREATE_TIME_COLUMN = 'created_at';
    const ORDER_UPDATE_TIME_COLUMN = 'updated_at';
    const ORDER_PUBLISH_TIME_COLUMN = 'publish_time';
    const ORDER_DESCENDING = 'DESC';
    const ORDER_ASCENDING = 'ASC';
    /**
     * 文章狀態
     */
    const MODE_DRAFT        = 1;    // 草稿
    const MODE_SCHEDULE     = 2;    
    const MODE_PUBLISH      = 3;
    const MODE_PRIVATE      = 4;
    
    const CACHE_KEY_PRESS_ID = '[Press][Id][{press_id}]';
    const CACHE_KEY_PRESS_ORDER = '[Press][Order][{order_column}][{order_type}][{row_number}][{page}]';

}