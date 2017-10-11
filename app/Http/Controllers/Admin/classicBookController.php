<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class classicBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin/classicBookIndex');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/classicBookAdd');
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
            $destinationPath = public_path().'/img/';
            $filename = $request->imgFile->getclientoriginalname();
            $filetype=$request->imgFile->getMimeType();
            if($filetype!='image/jpeg'){ //格式jpg
                return "檔案格式錯誤(*.jpg)";
            }
            $unique_name = md5($filename. time()).'.jpg';
            $request->file('imgFile')->move($destinationPath,$unique_name);        
            
            //store
            $fileurl='/img/'.$unique_name;
            $title=$request->title;
            $context=$request->context;
            DB::table('classicbook')->insert(
                ['context' => $context, 
                'title' => $title,
                'filepath'=> $fileurl]
            );
            return redirect('webAdmin/classicBook');
        }
        catch (\Exception $e){
            return "發生錯誤";
        }
        return "ok";
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
    public function destroy($id)
    {
        //
    }
}
