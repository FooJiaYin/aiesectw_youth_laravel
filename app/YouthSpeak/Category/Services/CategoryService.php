<?php

namespace App\YouthSpeak\Category\Services;

use App\YouthSpeak\Core\Services\CoreService;
use App\YouthSpeak\Category\Constant\CategoryConstant;
use App\YouthSpeak\Category\Repository\CategoryRepository;
use App\YouthSpeak\Category\Requests\CategoryRequest;
use Exception;

class CategoryService extends CoreService {
    
    protected $CategoryRepo;
    /**
     * CategoryService constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->CategoryRepo = new CategoryRepository();
    }

    /**
     * @return      mixed
     * @throws Exception
     *
     * @access      public
     * @author      Abel            abel@thenewslnes.com
     * @date        2016-07-08
     */
    public function getAll()
    {
        try {
            $Categories = $this->CategoryRepo->getAll();
            return $Categories;
        } catch (Exception $exception) {
            throw $exception;
        }
    }

    public function find($category_id, $need_cache = true)
    {
        try {
            $Category = $this->CategoryRepo->find($category_id, $need_cache);
            return $Category;
        } catch (Exception $exception) {
            throw $exception;
        }
    }
    

}