<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class courseObjectivesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.courseObjectivesAdd');
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
            $destinationPath = public_path().'/pdf/';
            $filename = $request->pdffile->getclientoriginalname();
            $filetype=$request->pdffile->getMimeType();
            if($filetype!='application/pdf'){
                return "檔案格式錯誤";
            }
            $unique_name = md5($filename. time()).'.pdf';
            $request->file('pdffile')->move($destinationPath,$unique_name);        
            
            //store
            $fileurl='/pdf/'.$unique_name;
            DB::table('courseobjectives')->insert(
                ['pdffile'=> $fileurl]
            );
            $request->session()->flash('isupload','1');
            return back();
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
