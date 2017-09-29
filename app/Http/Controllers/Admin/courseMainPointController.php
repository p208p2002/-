<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class courseMainPointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin/courseMainPoint');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/courseMainPointAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $destinationPath = public_path().'/pdf/';
            $filename = $request->pdfFile->getclientoriginalname();
            $filetype=$request->pdfFile->getMimeType();
            if($filetype!='application/pdf'){
                return "檔案格式錯誤";
            }
            $unique_name = md5($filename. time()).'.pdf';
            $request->file('pdfFile')->move($destinationPath,$unique_name);        
            
            //store
            $fileurl='/pdf/'.$unique_name;
            $title=$request->title;
            $schoolName=$request->school;
            DB::table('coursemainpoint')->insert(
                ['schoolName' => $schoolName, 
                'title' => $title,
                'filepath'=> $fileurl]
            );
            return redirect('webAdmin/calendar');
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
    public function destroy(Request $request)
    {
        try{   
            foreach($request->ids as $id){
                DB::table('coursemainpoint')->where('id', $id)->delete();
            } 
        } 
        catch(\Exception $e){
            // 
        }
       return back();
    }

    public function destroypage()
    {
        $datas=DB::table('coursemainpoint')->orderBy('id','desc')->paginate(15);
        return view('admin/courseMainPointDelList',['datas'=>$datas]);
    }
}
