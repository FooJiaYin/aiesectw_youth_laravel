<?php

namespace App\Http\Controllers;

class PageController extends Controller {

    public function index(){
        return view('page.index');
    }
    public function next_talk(){
        return view('page.nextTalk');
    }

    public function forum(){
        return view('page.forum');
    }
}