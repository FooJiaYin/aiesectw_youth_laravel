<?php

namespace App\YouthSpeak\Api\Services;


use App\YouthSpeak\Core\Services\CoreService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;
use Response;

class ApiService extends CoreService
{
    public function __construct()
    {
        parent::__construct();
    }

    public function response(Collection $collection, $view_path)
    {
        try {
            $return_html = request('html', 0);
            if($return_html){
                return $this->parseCollectionToHTML($collection, $view_path);
            }else{
                return $this->parseCollectionToJsonResponse($collection);
            }
        } catch (Exception $exception) {
            throw $exception;
        }
    }
    /**
     * 將 Collection 轉成 json 格式的 response
     * @param       Collection      $collection
     *
     * @return      JsonResponse
     *
     * @access      public
     * @author      Abel            abel@thenewslnes.com
     * @date        2016-07-16
     */
    public function parseCollectionToJsonResponse(Collection $collection): JsonResponse
    {
        $collection_array = $collection->toArray();

        return response()->json($collection_array);
    }

    /**
     * 依照視圖路徑給與view html
     * @param       Collection      $collection
     * @param                       $view_path
     *
     * @return      string
     * @throws      Exception
     *
     * @access      public
     * @author      Abel            abel@thenewslnes.com
     * @date        2016-07-16
     */
    public function parseCollectionToHTML(Collection $collection, $view_path): string
    {
        try {
            switch ($view_path){
                default:
                case 'auth.photo._photoList':
                    $binding = [
                        'photos' => $collection,
                    ];
                    break;
            }
            return view('auth.photo._photoList', $binding)->render();

        } catch (Exception $exception) {
            throw $exception;
        }
    }
}