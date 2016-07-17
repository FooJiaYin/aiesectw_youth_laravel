<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\YouthSpeak\Api\Services\ApiService;
use App\YouthSpeak\Photo\Services\PhotoService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;

class ApiController extends Controller
{
    protected $PhotoService;
    protected $ApiService;

    /**
     * ApiController constructor.
     */
    public function __construct()
    {
        $this->PhotoService = new PhotoService();
        $this->ApiService = new ApiService();
    }

    /**
     * @return      JsonResponse
     * @throws      Exception
     *
     * @access      public
     * @author      Abel            abel@thenewslnes.com
     * @date        2016-07-16
     */
    public function photo_list()
    {
        try {
            $photos = $this->PhotoService->getPhotoList();
            return $this->ApiService->response($photos->getCollection(), 'auth.photo._photoList');
        } catch (Exception $exception) {
            throw $exception;
        }

    }
}