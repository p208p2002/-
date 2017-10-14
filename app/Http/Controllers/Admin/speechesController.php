<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class speechesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.speeches');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.speechesAdd');
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
            //pdf處理
            if($request->pdfFile!=null){
                $destinationPath = public_path().'/pdf/';
                $filename = $request->pdfFile->getclientoriginalname();
                $filetype=$request->pdfFile->getMimeType();
                if($filetype!='application/pdf'){
                    return "檔案格式錯誤";
                }
                $unique_name = md5($filename. time()).'.pdf';
                $request->file('pdfFile')->move($destinationPath,$unique_name);        
                //
                $pdffile='/pdf/'.$unique_name;
            }else{
                $pdffile="empty";
            }

            //圖片處理
            if($request->imgFile!=null){
                $destinationPath = public_path().'/img/';
                $filename = $request->imgFile->getclientoriginalname();
                $filetype=$request->imgFile->getMimeType();
                if($filetype!='image/jpeg'){ //格式jpg
                    return "檔案格式錯誤(*.jpg)";
                }
                $unique_name = md5($filename. time()).'.jpg';
                $request->file('imgFile')->move($destinationPath,$unique_name);        
                //
                $imgfile='/img/'.$unique_name;
            }else{
                $imgfile="empty";
            }


            //request
            $eventname=$request->eventname;
            $date=$request->datetime;
            $context=$request->context;

            //
            DB::table('speeches')->insert(
                ['eventname' => $eventname, 
                'eventdate' => $date,
                'pdffile'=> $pdffile,
                'imgfile'=>$imgfile,
                'context'=>$context]
            );
            return redirect('webAdmin/speeches');
        }
        catch (\Exception $e){
            return "發生錯誤";
        }
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
