<?php
namespace App\Http\Controllers;

use App\YouthSpeak\Press\Services\PressService;

class PressController extends Controller  {
    protected $PressService;
    public function __construct()
    {
        $this->PressService = new PressService();
    }

    public function index()
    {
        
    }
    public function show($press_id)
    {
        $press = $this->PressService->findPublishOrFail($press_id);
        
        return view('page.press', compact('press'));
    }

}