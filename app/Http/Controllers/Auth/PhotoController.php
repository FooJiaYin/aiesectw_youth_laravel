<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

class PhotoController extends Controller
{
    public function showDialog() {
        return view('auth.upload.image-dialog');
    }

    public function imageUpload(Request $request) {
        $file = $request->file('file');
        
        $file->move('uploads', 'test.jpg');
        $file_path = '/uploads/'.'test.jpg';
        return view('auth.upload.image-upload', compact('file_path'));
    }
}
