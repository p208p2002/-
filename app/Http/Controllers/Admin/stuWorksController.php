<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class stuWorksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.stuWorks.stuWorks');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$rowVal=3)
    {
        //
        $datas=DB::table('stuworksclass')->get();

        if($request->has('addValue')){
            $rowVal=$request->curentValue+$request->addValue;
            return view('admin.stuWorks.uploadForm',
            ['datas' => $datas,'rowVal' => $rowVal]);
        }
        return view('admin.stuWorks.uploadForm',
        ['datas' => $datas ,'rowVal' => $rowVal]);
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
        $stunames=$request->stunames;
        $worknames=$request->worknames;
        $files=$request->userfile;

        //
        $destinationPath = public_path().'/pdf/';

        $count=0;// conunt loop

        // dd($files);
        foreach($files as $file){
            if($file != null){
                echo "in2";
                $filetype = $file->getMimeType();
                if($filetype != 'application/pdf')
                    return "檔案格式錯誤(*.pdf)";
                $filename = $file->getclientoriginalname();
                $uniquename = md5($filename. time().rand() ).'.pdf';
                
                //move to public/img
                $file->move($destinationPath,$uniquename);

                //insert database
                // dd($destinationPath.$uniquename);
                
            }
            $count++;
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

    public function mfclass(){
        $datas=DB::table('stuworksclass')->get();
        return view('admin.stuWorks.stuClassManager',['datas'=>$datas]);
    }

    public function mfclassadd(Request $request){
        DB::table('stuworksclass')->insert(
            ['className' => $request->input('className')]
        );
        return back();
    }

    public function mfclassdel($id){
        DB::table('stuworksclass')->where('id',$id)->delete();
        return back();
    }

}