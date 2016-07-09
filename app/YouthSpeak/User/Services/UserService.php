<?php

namespace App\YouthSpeak\User\Services;

use App\YouthSpeak\Core\Services\CoreService;
use App\YouthSpeak\User\Constant\UserConstant;
use App\YouthSpeak\User\Repository\UserRepository;
use Exception;

class UserService extends CoreService {

    protected $UserRepo;

    /**
     * UserService constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->UserRepo = new UserRepository();
    }

    /**
     * @param                       $user_id
     * @param       bool            $need_cache
     *
     * @return      mixed
     * @throws      Exception
     *
     * @access      public
     * @author      Abel            abel@thenewslnes.com
     * @date        2016-07-09
     */
    public function find($user_id, $need_cache = true)
    {
        try {
            $Category = $this->UserRepo->find($user_id, $need_cache);
            return $Category;
        } catch (Exception $exception) {
            throw $exception;
        }
    }


}