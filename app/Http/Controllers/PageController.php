<?php

namespace App\Http\Controllers;

use App\YouthSpeak\Press\Constant\PressConstant;
use App\YouthSpeak\Press\Services\PressService;

class PageController extends Controller {

    protected $PressService;

    /**
     * PageController constructor.
     */
    public function __construct()
    {
        $this->PressService = new PressService();
        \DB::enableQueryLog();
    }

    public function index(){
        $presses = $this->PressService->getPressListByOrder(PressConstant::ORDER_PUBLISH_TIME_COLUMN, PressConstant::ORDER_DESCENDING, config('frontend.index_press'));
        return view('page.index', compact('presses'));
    }
    public function next_talk(){
        return view('page.nextTalk');
    }

    public function forum(){
        return view('page.forum');
    }
}