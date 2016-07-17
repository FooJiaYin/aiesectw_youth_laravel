<?php
namespace App\YouthSpeak\Photo\Repository;

use App\YouthSpeak\Core\Repository\CoreRepository;
use App\YouthSpeak\Photo\Constant\PhotoConstant;
use App\YouthSpeak\Photo\Entities\Photo;
use Exception;

class PhotoRepository extends CoreRepository {
    /**
     * PhotoRepository constructor.
     */
    protected $Photo ;

    public function __construct()
    {
        parent::__construct();
        $this->Photo = new Photo();
    }

    /**
     * 存圖片
     * @param $origin_name
     * @param $file_path
     *
     * @return      Photo
     * @throws Exception
     *
     * @access      public
     * @author      Abel            abel@thenewslnes.com
     * @date        2016-07-17
     */
    public function store($origin_name, $file_path)
    {
        try {
            $Photo = $this->Photo;
            $Photo->title = $origin_name;
            $Photo->path = $file_path;
            $Photo->save();
            return $Photo;
        } catch (Exception $exception) {
            throw $exception;
        }
    }

    /**
     * 取得圖片List，不需要快取
     * @return      mixed
     * @throws Exception
     *
     * @access      public
     * @author      Abel            abel@thenewslnes.com
     * @date        2016-07-16
     */
    public function getList()
    {
        try {
            $photos = $this->Photo
                ->latest('updated_at')
                ->paginate(PhotoConstant::PHOTO_LIST_ROW_NUMBER);

            return $photos;
        } catch (Exception $exception) {
            throw $exception;
        }
    }

    public function delete($ids)
    {
        try {
            $delete_result = $this->Photo
                ->destroy($ids);

            return $delete_result;
        } catch (Exception $exception) {
            throw $exception;
        }
    }

    public function find($id)
    {
        try {
            return $this->Photo->find($id);
        } catch (Exception $exception) {
            throw $exception;
        }
    }
}