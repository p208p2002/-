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

//index
Route::get('/', function () {
    //查詢前10筆最新消息
    $datas=DB::table('newnewsarticle')
    ->skip(0)
    ->take(10)
    ->orderBy('id', 'desc')
    ->get();
    return view('website/index',["datas"=>$datas]);
});

Route::get('/newNewsDetail/{page}',function($page){  
    //
    $datas=DB::table('newnewsarticle')
    ->skip($page*10)
    ->take(10)
    ->orderBy('id', 'desc')
    ->get();
    return view('website.newNewsDetail',['datas'=>$datas,'page'=>$page]);
});

Route::get('newNewsCheck/{id}',function($id){
    $datas=DB::table('newnewsarticle')->where('id', $id)->get();
    return view('/website/newNewsCheck',['datas'=>$datas]);
});

Route::get('/goodArticle',function(){
   $firstData=App\GoodArticle::skip(0)->orderBy('id','desc')->take(1)->get();
   $datas=DB::table('goodarticle')->orderBy('id','desc')->paginate(15);
   return view('website.goodArticle',['firstData'=>$firstData,'datas'=>$datas]);
});

Route::get('/goodArticle/{id}',function($id){
    $datas=DB::table('goodArticle')->where('id', $id)->get();
    return view('website.goodArticleShow',['datas'=>$datas]);
 });

 Route::get('/videoTrip',function(){
    $datas=DB::table('videotrip')->orderBy('id','desc')->paginate(15);
    return view('website.videoTrip',['datas'=>$datas]);
 });

 Route::get('/videoTrip/{id}',function($id){
    $datas=DB::table('videotrip')->where('id',$id)->get();
    return view('website.videoTripDetial',['datas'=>$datas]);
 });
 
Route::get('/calendar',function(){
    $datas=DB::table('calendar')->get();
    return view('website.calendar',['datas'=>$datas]);
});

Route::get('/calendar/{id}',function($id){
    $datas=DB::table('calendar')->where('id',$id)->get();
    return view('website.calendarCheck',['datas'=>$datas]);
});

Route::get('/courseMainPoint',function(){
    $datas=DB::table('coursemainpoint')->get();
    return view('website.courseMainPonint',['datas'=>$datas]);
});

Route::get('/courseMainPoint/{id}',function($id){
    $datas=DB::table('coursemainpoint')->where('id',$id)->get();
    return view('website.courseMainPonintCheck',['datas'=>$datas]);
});

Route::get('/classicBookShare',function(){
    $datas=DB::table('classicbook')->orderBy('id','desc')->paginate(15);
    return view('website.classicBookShare',['datas'=>$datas]);
});

Route::get('/classicBookShare/{id}',function($id){
    $datas=DB::table('classicbook')->where('id',$id)->get();
    return view('website.classicBookCheck',['datas'=>$datas]);
});

Route::get('/SpeechActivities',function(){
    $datas=DB::table('speeches')->orderBy('id','desc')->paginate(15);
    return view('website.speechActivities',['datas'=>$datas]);
});

Route::get('/SpeechActivities/{id}',function($id){
    $datas=DB::table('speeches')->where('id',$id)->get();
    return view('website.speechActivitiesCheck',['datas'=>$datas]);
});

Route::get('/curse-objectives',function(){
    $data=DB::table('courseobjectives')->orderBy('id','desc')->first();
    return view('website.courseObjectives',['data'=>$data]);
});

Route::get('/online-course',function(){
    $datas=DB::table('onlinecourse')->orderBy('id','desc')->paginate(15);
    return view('website.onlineCourse',['datas'=>$datas]);
});

Route::get('/online-course/{id}',function($id){
    $datas=DB::table('onlinecourse')->where('id',$id)->get();
    return view('website.onlineCourseDetial',['datas'=>$datas]);
 });

 Route::get('about-us',function(){
     return view('website.aboutUs');
 });

 Route::get('activity-record',function(){
    $datas=DB::table('activityrecord')->orderBy('id','desc')->paginate(15);
    return view('website.activityRecord',["datas"=>$datas]);
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
    //其他
    Route::get('/video-insert-help',function(){
        return view('admin.videoInsertHelp');
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

    //好文閱讀
    Route::get('/goodArticle','Admin\goodArticleController@index');
    Route::get('/goodArticle/create','Admin\goodArticleController@create');
    Route::post('/goodArticle/store','Admin\goodArticleController@store');
    Route::get('/goodArticle/delete','Admin\goodArticleController@destroypage');
    Route::post('/goodArticle/delete','Admin\goodArticleController@destroy');

    Route::get('/goodArticle/managerFilter','Admin\goodArticleController@classManager');
    Route::get('/goodArticle/managerFilter/del/{id}','Admin\goodArticleController@classDel');
    Route::post('/goodArticle/managerFilter/add','Admin\goodArticleController@classAdd');
    
    //影音之旅
    Route::get('/videoTrip','Admin\videoTripController@index');
    Route::get('/videoTrip/create','Admin\videoTripController@create');
    Route::post('/videoTrip/create','Admin\videoTripController@store');
    Route::get('/videoTrip/del','Admin\videoTripController@destroypage');
    Route::post('/videoTrip/del','Admin\videoTripController@destroy');

    //行事曆
    Route::get('/calendar','Admin\calendarController@index');
    Route::get('/calendar/add','Admin\calendarController@create');
    Route::post('/calendar/add','Admin\calendarController@store');
    Route::get('/calendar/del','Admin\calendarController@destroypage');
    Route::post('/calendar/del','Admin\calendarController@destroy');

    //課程大綱
    Route::get('/courseMainPoint','Admin\courseMainPointController@index');
    Route::get('/courseMainPoint/add','Admin\courseMainPointController@create');
    Route::post('/courseMainPoint/add','Admin\courseMainPointController@store');
    Route::get('/courseMainPoint/del','Admin\courseMainPointController@destroypage');
    Route::post('/courseMainPoint/del','Admin\courseMainPointController@destroy');

    //經典著作
    Route::get('/classicBook','Admin\classicBookController@index');
    Route::get('/classicBook/add','Admin\classicBookController@create');
    Route::post('/classicBook/add','Admin\classicBookController@store');
    Route::get('/classicBook/del','Admin\classicBookController@destroypage');
    Route::post('/classicBook/del','Admin\classicBookController@destroy');
    
    //演講活動
    Route::get('/speeches','Admin\speechesController@index');
    Route::get('/speeches/add','Admin\speechesController@create');
    Route::post('/speeches/add','Admin\speechesController@store');
    Route::get('/speeches/del','Admin\speechesController@destroypage');
    Route::post('/speeches/del','Admin\speechesController@destroy');

    //教學目標
    Route::get('/course-objectives','Admin\courseObjectivesController@create');
    Route::post('/course-objectives','Admin\courseObjectivesController@store');

    //線上課程
    Route::get('/online-course','Admin\onlineCourseController@index');
    Route::get('/online-course/add','Admin\onlineCourseController@create');
    Route::post('/online-course/add','Admin\onlineCourseController@store');
    Route::get('/online-course/del','Admin\onlineCourseController@destroypage');
    Route::post('/online-course/del','Admin\onlineCourseController@destroy');

    Route::get('/online-course/manager-filter','Admin\onlineCourseController@mfclass');
    Route::post('/online-course/manager-filter','Admin\onlineCourseController@mfclassadd');
    Route::get('/online-course/manager-filter/{id}','Admin\onlineCourseController@mfclassdel');

    //活動紀實(相簿)
    Route::get('/activity-record','Admin\activityController@index');
    Route::get('/activity-record/upload/{default?}','Admin\activityController@create');
    Route::post('/activity-record/upload','Admin\activityController@store');
    Route::get('/activity-record/manager-filter','Admin\activityController@mfclass');
    Route::post('/activity-record/manager-filter','Admin\activityController@mfclassadd');
    Route::get('/activity-record/manager-filter/{id}','Admin\activityController@mfclassdel');
    Route::get('/activity-record/select-album','Admin\activityController@showalbums');
    Route::get('/activity-record/select-album/{id}','Admin\activityController@showalbum');
    Route::post('/activity-record/select-album/del','Admin\activityController@delphoto');

    //學生成果展示
    Route::get('/stu-works','Admin\stuWorksController@index');
    Route::get('/stu-works/upload','Admin\stuWorksController@create');
    Route::post('/stu-works/upload','Admin\stuWorksController@create');
    Route::get('/stu-works/manager-filter','Admin\stuWorksController@mfclass');
    Route::post('/stu-works/manager-filter','Admin\stuWorksController@mfclassadd');
    Route::get('/stu-works/manager-filter/{id}','Admin\stuWorksController@mfclassdel');

});

Route::get('/t1',function(){
    $filepath='img/b0751d0e3357dbbcff41250357e55be0.jpg';
    dd(File::exists($filepath));
    return "ok";
});

Route::auth();

Route::get('/home', 'HomeController@index');
