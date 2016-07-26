<?php

namespace App\YouthSpeak\Press\Services;

use App\YouthSpeak\Category\Services\CategoryService;
use App\YouthSpeak\Core\Services\CoreService;
use App\YouthSpeak\Photo\Services\PhotoService;
use App\YouthSpeak\Press\Constant\PressConstant;
use App\YouthSpeak\Press\Entities\Press;
use App\YouthSpeak\Press\Repository\PressRepository;
use App\YouthSpeak\Press\Requests\PressRequest;
use App\YouthSpeak\User\Services\UserService;
use Exception;

class PressService extends CoreService {
    
    protected $PressRepo;
    protected $CategoryService;
    protected $UserService;
    protected $PhotoService;
    const ASCENDING = PressConstant::ORDER_ASCENDING;
    const DESCENDING = PressConstant::ORDER_DESCENDING;
    const CREATE_TIME = PressConstant::ORDER_CREATE_TIME_COLUMN;
    const PUBLISH_TIME = PressConstant::ORDER_PUBLISH_TIME_COLUMN;
    
    /**
     * PressService constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->PressRepo = new PressRepository();
        $this->CategoryService = new CategoryService();
        $this->UserService = new UserService();
        $this->PhotoService = new PhotoService();
    }

    public function getPressExtraInfo(Press $Press, $need_cache = true)
    {
        try {
            $category = $this->CategoryService->find($Press->category_id, $need_cache);
            $Press->category = $category;

            $user = $this->UserService->find($Press->user_id, $need_cache);
            $Press->user = $user;

            $photo = $this->PhotoService->find($Press->photo_id, $need_cache);
            $Press->photo = $photo;


            return $Press;
        } catch (Exception $exception) {
            throw $exception;
        }
    }

    public function getAdminPressListByOrder($order_column = self::CREATE_TIME, $order_type = self::ASCENDING)
    {
        try {
            $Presses = $this->PressRepo->getAdminOrderingPressList($order_column, $order_type, config('backend.per_page'), $need_cache = false);

            foreach ($Presses as &$Press){
                $Press = $this->getPressExtraInfo($Press, $need_cache = false);
            }
            return $Presses;
        } catch (Exception $exception) {
            throw $exception;
        }
    }
    
    public function getPressListByOrder($order_column = self::PUBLISH_TIME, $order_type = self::DESCENDING, $row_number)
    {
        $Presses = $this->PressRepo->getPublishOrderingPressList($order_column, $order_type, $row_number, $need_cache = true);

        foreach ($Presses as &$Press){
            $Press = $this->getPressExtraInfo($Press);
        }
        return $Presses;
    }

    public function storeNewPress(PressRequest $request)
    {
        try {
            $NewPress = $this->PressRepo->storeNewPress($request);
            return $NewPress;
        } catch (Exception $exception) {
            throw $exception;
        }
    }

    public function updateExistPress(PressRequest $request, $id)
    {
        try {
            $press = $this->PressRepo->updateExistPress($request, $id);
            return $press;
        } catch (Exception $exception) {
            throw $exception;
        }
    }

    public function find($id, $need_cache = true)
    {
        try {
            $Press = $this->PressRepo->find($id, $need_cache);
            
            return $Press;
        } catch (Exception $exception) {
            throw $exception;
        }
    }

    public function getExtraInfo(Press $Press)
    {
        try {
            // 存圖片關聯進新聞稿
            $press_photo_id = $Press->photo_id;
            $press_photo = $this->PhotoService->find($press_photo_id);
            if(!is_null($press_photo)){
                $Press->photo = $press_photo;
            }

            return $Press;
        } catch (Exception $exception) {
            throw $exception;
        }
    }

    public function findPublishOrFail($id)
    {
        try {
            $Press = $this->PressRepo->findPublishOrFail($id);

            if(!is_null($Press)){
                $Press = $this->getPressExtraInfo($Press);
            }

            return $Press;
        } catch (Exception $exception) {
            throw $exception;
        }
    }

}