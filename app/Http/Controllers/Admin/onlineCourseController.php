<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class onlineCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.onlineCourseIndex');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $datas=DB::table('onlinecourseclass')->get();
        return view('admin.onlineCourseAdd',["datas"=>$datas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        try{
            
            DB::table('onlinecourse')->insert(
                ['classid' => $request->input('classId'),
                'createrid' => Auth::user()->id,
                'title' => $request->input('title') ,
                'context' => $request->input('context'),
                'videoframe' =>$request->input('videoframe')
                ]
            );
        }
        catch (\Exception $e){
           return "標題或內文<b>不可為空</b>，返回<a href=".url('webAdmin/newNews').">上一頁</a>從新操作";
        }
        return redirect('webAdmin/online-course');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try{   
            foreach($request->ids as $id){
                DB::table('onlinecourse')->where('id', $id)->delete();
            } 
        } 
        catch(\Exception $e){
            // 
        }
       return back();
    }

    public function destroypage()
    {
        $datas=DB::table('onlinecourse')->orderBy('id','desc')->paginate(15);
        return view('admin.onlineCourseDelList',["datas"=>$datas]);
    }

    //分類管理
    public function mfclass(){
        $datas=DB::table('onlinecourseclass')->get();
        return view ('admin.onlineCourseClassManagerFilter',["datas"=>$datas]);
    }

    public function mfclassadd(Request $request){
        DB::table('onlinecourseclass')->insert(
            ['className' => $request->input('className')]
        );
        return back();
    }

    public function mfclassdel($id){
        DB::table('onlinecourseclass')->where('id',$id)->delete();
        return back();
    }
}
