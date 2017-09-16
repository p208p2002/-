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

Route::get('/', function () {
    return view('index');
});

//後台
Route::group(['prefix' => 'webAdmin','middleware' => 'isAdmin'], function () {
    Route::get('/', function () {
        return view('admin/index');
    });
    //最新消息
    Route::get('/newNews','Admin\newNewsController@create');
    Route::post('/newNews','Admin\newNewsController@store');

});




Route::auth();

Route::get('/home', 'HomeController@index');
