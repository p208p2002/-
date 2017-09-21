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

Route::get('/test', function () {
    return view('index');
});

Route::get('/', function () {
    return view('website/index');
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
    Route::get('/newNews/delete/{page}','Admin\newNewsController@destroyPage');
    Route::post('/newNews/delete','Admin\newNewsController@destroy');

    //
    Route::get('/newNews/managerFilter','Admin\newNewsController@classManager');
    Route::get('/newNews/managerFilter/del/{id}','Admin\newNewsController@classManagerDel');
    Route::post('/newNews/managerFilter/add/','Admin\newNewsController@classManagerAdd');
    
    

    //課堂作業
    Route::get('/homework','Admin\homeworkController@index');
    Route::get('/homework/create','Admin\homeworkController@create');

    //我的開課
    Route::get('/myCourse','Admin\myCourseController@index');
    Route::get('/myCourse/create','Admin\myCourseController@create');
    Route::post('/myCourse/create','Admin\myCourseController@store');
    Route::get('/myCourse/manager','Admin\myCourseController@manager');

    

});

Route::get('/t1',function(){
    return "ok";
});

Route::auth();

Route::get('/home', 'HomeController@index');
