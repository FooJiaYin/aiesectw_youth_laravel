<?php
namespace App\YouthSpeak\Core\Services;

use App\YouthSpeak\Press\Services\PressService;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

abstract class PaginationService
{
    /**
     * 把 pagination 實例轉成可以存成全部都是 post id 的 cache collection
     *
     * @param LengthAwarePaginator $Presses
     *
     * @return \Illuminate\Support\Collection
     *
     * @access     public
     * @author     Abel        abel@thenewslens.com
     * @date       2016-06-28
     */
    public static function changePaginationToCacheCollection(LengthAwarePaginator $Presses)
    {
        $press_ids = $Presses->pluck('id')->toArray(); // 文章編號群
        $total = $Presses->total();                // Pagination 全部頁數
        $perPage = $Presses->perPage();            // Pagination 一頁幾個資料

        return collect([
            'press_id'  => $press_ids,
            'total'     => (int)$total,
            'per_page'  => (string)$perPage,      // 符合原先 LengthAwarePaginator 資料型態
        ]);
    }

    /**
     * 把存成的
     * @param Collection    $cacheCollection
     *
     * @return LengthAwarePaginator
     *
     * @access     public
     * @author     Abel        abel@thenewslens.com
     * @date       2016-06-28
     */
    public static function changeCacheCollectionToPagination($cacheCollection)
    {
        $press_ids = $cacheCollection['press_id'];    // 文章群編號
        
        $PressService = new PressService();

        // 資料量比第一次吐出的還多
        // 第一次是全部到 view 才關聯 沒有 eager loading
        $Posts = collect();
        foreach($press_ids as $press_id){
            $Posts->push($PressService->find($press_id));
        }

        return $pagination = new LengthAwarePaginator(
            $Posts,
            $cacheCollection['total'],              // 全部頁數
            (string)$cacheCollection['per_page'],   // 一頁幾筆
            Paginator::resolveCurrentPage(),
            ['path' => Paginator::resolveCurrentPath()]
        );
    }

}