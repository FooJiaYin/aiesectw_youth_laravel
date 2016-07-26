<?php
namespace App\YouthSpeak\Photo\Services;

use App\YouthSpeak\Core\Services\CoreService;
use App\YouthSpeak\Core\Services\UuidService;
use App\YouthSpeak\Photo\Entities\Photo;
use App\YouthSpeak\Photo\Repository\PhotoRepository;
use App\YouthSpeak\Photo\Requests\PhotoRequest;
use Carbon\Carbon;
use Exception;

class PhotoService extends CoreService {

    protected $PhotoRepo;
    /**
     * PhotoService constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->PhotoRepo = new PhotoRepository();
    }

    public function storeNewPhoto(PhotoRequest $request)
    {
        $store_image_result = false;
        try {
            $file = $request->file('file');
            $origin_name = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $file_name = UuidService::generateRandomStringWithPrefix('IMG', 20);
            $date_folder = Carbon::today()->format('Y/m/d');
            $move_result = $file->move('uploads/'.$date_folder , $file_name.'.'.$extension);

            if($move_result){
                $file_path = '/uploads/'.$date_folder.'/'.$file_name.'.'.$extension;
                $photo = $this->PhotoRepo->store($origin_name, $file_path);
                return $photo;
            }
            return $store_image_result;

        } catch (Exception $exception) {
            throw $exception;
        }
    }

    public function storeMultiPhoto(PhotoRequest $request)
    {
        $store_image_result = false;
        try {
            $files = $request->file('file');
            $photos = collect([]);

            if(is_array($files)){
                foreach ($files as $file){
                    $origin_name = $file->getClientOriginalName();
                    $extension = $file->getClientOriginalExtension();
                    $origin_name = explode('.'.$extension, $origin_name)[0];
                    $file_name = UuidService::generateRandomStringWithPrefix('IMG', 20);
                    $date_folder = Carbon::today()->format('Y/m/d');
                    $move_result = $file->move('uploads/'.$date_folder , $file_name.'.'.$extension);

                    if($move_result){
                        $file_path = '/uploads/'.$date_folder.'/'.$file_name.'.'.$extension;
                        $photo = $this->PhotoRepo->store($origin_name, $file_path);
                        $photos->push($photo);
                    }
                }
            }else{
                $origin_name = $files->getClientOriginalName();
                $extension = $files->getClientOriginalExtension();
                $origin_name = explode('.'.$extension, $origin_name)[0];
                $file_name = UuidService::generateRandomStringWithPrefix('IMG', 20);
                $date_folder = Carbon::today()->format('Y/m/d');
                $move_result = $files->move('uploads/'.$date_folder , $file_name.'.'.$extension);

                if($move_result){
                    $file_path = '/uploads/'.$date_folder.'/'.$file_name.'.'.$extension;
                    $photo = $this->PhotoRepo->store($origin_name, $file_path);
                    $photos->push($photo);
                }
            }

            return $photos;

        } catch (Exception $exception) {
            throw $exception;
        }
    }

    public function getPhotoList()
    {
        try {
            return $this->PhotoRepo->getList();
        } catch (Exception $exception) {
            throw $exception;
        }
    }

    public function deletePhoto($ids)
    {
        try {
            return $this->PhotoRepo->delete($ids);
        } catch (Exception $exception) {
            throw $exception;
        }
    }

    public function find($id, $need_cache = true)
    {
        try {
            return $this->PhotoRepo->find($id, $need_cache);
        } catch (Exception $exception) {
            throw $exception;
        }
    }
}