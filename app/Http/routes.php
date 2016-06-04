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


Route::get('/', 'PageController@index');

Route::get('/next-talk', 'PageController@next_talk');

Route::get('/forum', 'PageController@forum');

