<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\YouthSpeak\Core\Services\UuidService;
use App\YouthSpeak\Photo\Entities\Photo;
use App\YouthSpeak\Photo\Requests\PhotoRequest;
use App\YouthSpeak\Photo\Services\PhotoService;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

use App\Http\Requests;

class PhotoController extends Controller
{
    protected $Photo;
    protected $PhotoService;
    public function __construct()
    {
        $this->Photo = new Photo();
        $this->PhotoService = new PhotoService();
    }

    public function index()
    {
        try {
            $photos = $this->PhotoService->getPhotoList();
            return view('auth.photo.index', compact('photos'));
        } catch (Exception $exception) {
            throw $exception;
        }
    }

    public function browse()
    {
        try {
            $photos = $this->PhotoService->getPhotoList();
            return view('auth.photo.browse', compact('photos'));
        } catch (Exception $exception) {
            throw $exception;
        }
    }

    public function delete()
    {
        try {
            $ids = request('id', 0);
            $delete_result = $this->PhotoService->deletePhoto($ids);
            if($delete_result){
                return response()->json(['status'=> 'success']);
            }
            return response()->json(['status' => 'error']);
        } catch (Exception $exception) {
            throw $exception;
            abort(404);
        }
    }

    public function upload(PhotoRequest $request)
    {
        try {
            $photos = $this->PhotoService->storeMultiPhoto($request);
            return view('auth.photo._photoList', compact('photos'));
        } catch (Exception $exception) {
            throw $exception;
        }
    }

    public function showDialog() {
        $Photo = $this->Photo;
        return view('auth.photo.image-dialog');
    }

    public function imageUpload(PhotoRequest $request) {
        try {
            $photo = $this->PhotoService->storeNewPhoto($request);
            $file_path = $photo->path;
            return view('auth.photo.image-upload', compact('file_path'));
        } catch (Exception $exception) {
            throw $exception;
            abort(404);
        }
    }
}
