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

//使用者後台
Route::group(['prefix' => 'memberPlantform','middleware' => 'isMember'], function () {
    Route::get('/', function () {
        return "ok";
    });
});

//管理者後台
Route::group(['prefix' => 'webAdmin','middleware' => 'isAdmin'], function () {
    Route::get('/', function () {
        return view('admin/index');
    });
    //最新消息
    Route::get('/newNews','Admin\newNewsController@index');
    Route::get('/newNews/create','Admin\newNewsController@create');
    Route::post('/newNews','Admin\newNewsController@store');
    Route::get('/newNews/delete',function(){
        $datas=DB::table('newnewsarticle')->get();
        return view('admin/newNewsDeleteList',['datas'=>$datas]);
    });

    //課堂作業
    Route::get('/homework','Admin\homeworkController@index');
    Route::get('/homework/create','Admin\homeworkController@create');

});




Route::auth();

Route::get('/home', 'HomeController@index');
