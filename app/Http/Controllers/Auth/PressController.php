<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// 服務
use App\YouthSpeak\Category\Services\CategoryService;
use App\YouthSpeak\Press\Constant\PressConstant;
use App\YouthSpeak\Press\Requests\PressRequest;
use App\YouthSpeak\Press\Services\PressService;
use Exception;
use Illuminate\Http\Request;

use App\Http\Requests;

class PressController extends Controller
{
    protected $PressService;
    
    protected $CategoryService; 

    const CREATE_TIME = PressConstant::ORDER_CREATE_TIME_COLUMN;

    const ASCENDING = PressConstant::ORDER_ASCENDING;

    public function __construct()
    {
        $this->PressService = new PressService();
        $this->CategoryService = new CategoryService();
    }

    public function index()
    {
        $presses = $this->PressService->getAdminPressListByOrder(self::CREATE_TIME, self::ASCENDING);
        return view('auth.press.index', compact('presses'));
    }

    public function create()
    {
        $categories = $this->CategoryService->getAll();

        return view('auth.press.edit', compact('categories'));
    }

    public function store(PressRequest $request)
    {
        try {
            $this->PressService->storeNewPress($request);
            
            $presses = $this->PressService->getAdminPressListByOrder(self::CREATE_TIME, self::ASCENDING);
            return view('auth.press.index', compact('presses'));
        } catch (Exception $exception) {
            throw $exception;
        }
    }

    public function edit($id)
    {
        try {
            $press = $this->PressService->find($id, $need_cache = false);
            $categories = $this->CategoryService->getAll();
            $press = $this->PressService->getPressExtraInfo($press, false);

            return view('auth.press.edit', compact('press', 'categories'));
        } catch (Exception $exception) {
            throw $exception;
        }
    }

    public function update(PressRequest $request, $id)
    {
        if($request->get('status') == PressConstant::MODE_PUBLISH){
            $this->validate($request, [
                'excerpt'   => 'required',
                'photo_id'  => 'required',
                'status'    => 'required',
            ]);
        }

        $this->PressService->updateExistPress($request, $id);

        $presses = $this->PressService->getAdminPressListByOrder(self::CREATE_TIME, self::ASCENDING);
        return view('auth.press.index', compact('presses'));
    }

    public function destroy(PressRequest $request, $id)
    {

    }


}
