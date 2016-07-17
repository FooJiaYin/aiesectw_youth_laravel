<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::post('/deploy', 'DeployController@deploy'); // Deploy

Route::group(['middleware' => 'web'], function(){

    // Auth
//    Route::auth();
    // Authentication Routes...
    Route::get('login', 'Auth\AuthController@showLoginForm');
    Route::post('login', 'Auth\AuthController@login');
    Route::get('logout', 'Auth\AuthController@logout');

    // Password Reset Routes...
    Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
    Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
    Route::post('password/reset', 'Auth\PasswordController@reset');

    // Page

    Route::get('/', 'PageController@index');

    Route::get('/next-talk', 'PageController@next_talk');

    Route::get('/forum', 'PageController@forum');

    Route::get('/press', 'PressController@index');
    Route::get('/press/{id}', 'PressController@show');


});


Route::group(['middleware' => ['web','auth']], function(){

    Route::group(['prefix' => 'admin'], function() {

        Route::get('/', 'Auth\AdminController@index');

        // Registration Routes...
        Route::get('/register', 'Auth\AuthController@showRegistrationForm');
        Route::post('/register', 'Auth\AuthController@register');
        // 新聞稿
        Route::get('/press', 'Auth\PressController@index');
        Route::get('/press/create', 'Auth\PressController@create');
        Route::post('/press', 'Auth\PressController@store');
        Route::get('/press/{id}/edit', 'Auth\PressController@edit');
        Route::put('/press/{id}', 'Auth\PressController@update');
        Route::delete('/press/{id}', 'Auth\PressController@destroy');
        // 媒體庫
        Route::get('/gallery', 'Auth\PhotoController@index');
        Route::post('/gallery/delete', 'Auth\PhotoController@delete');
        Route::post('/gallery/upload', 'Auth\PhotoController@upload');
        Route::get('/gallery/browse', 'Auth\PhotoController@browse');
        //
        Route::get('/upload', 'Auth\PhotoController@showDialog');
        Route::post('/upload', 'Auth\PhotoController@imageUpload');


    });

    Route::group(['prefix' => 'api'], function(){
        // 媒體櫃
        Route::get('/gallery', 'Auth\ApiController@photo_list');

    });
});



