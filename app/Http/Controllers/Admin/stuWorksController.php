<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services\ImageService;

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
    public function create(Request $request,$rowVal=5)
    {
        //
        $datas=DB::table('stuworksclass')->get();
        $schools=DB::table('school')->orderBy('id','asc')->get();

        if($request->has('addValue')){
            $rowVal=$request->curentValue+$request->addValue;
            return view('admin.stuWorks.uploadForm',
            ['datas' => $datas,'rowVal' => $rowVal]);
        }
        return view('admin.stuWorks.uploadForm',
        ['datas' => $datas ,'rowVal' => $rowVal,'schools' => $schools]);
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
        $uid = Auth::user()->id;
        $stunames=$request->stunames;
        $worknames=$request->worknames;
        $files=$request->userfile;
        $classid=$request->classId;
        $schoolid=DB::table('stuworksclass')->where('id',$classid)->first()->schoolid;

        //
        $destinationPath = public_path().'/pdf/';

        $count=0;// conunt loop

        // dd($files);
        foreach($files as $file){
            if($file != null){
                echo "in2";
                // dd($file);
                $filetype = $file->getMimeType();
                if($filetype != 'application/pdf')
                    return "檔案格式錯誤(*.pdf)";
                $filename = $file->getclientoriginalname();
                $uniquename = md5($filename. time().rand() ).'.pdf';
                
                //move to public/img
                $file->move($destinationPath,$uniquename);

                //insert to database
                DB::table('stuworks')->insert([
                    'studentname' => $stunames[$count],
                    'context' => $worknames[$count],
                    'filepath' => 'pdf/'.$uniquename,
                    'classid' => $classid,
                    'schoolid' => $schoolid,
                    'uid' => $uid
                ]);

            }
            $count++;
        }
        $request->session()->flash('isupload','1');
        return back();
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
            [
                'className' => $request->input('className'),
                'schoolid' => $request->input('schoolid')
            ]
        );
        return back();
    }

    public function mfclassdel($id){
        $conunt=DB::table('stuworks')->where('classid',$id)->get();
        //必須要空才能刪除
        if($conunt==null){
            DB::table('stuworksclass')->where('id',$id)->delete();
        }
        return back();
    }

    public function showClass(){
        $datas=DB::table('stuworksclass')->get();
        return view('admin.stuWorks.selectClass',["datas" => $datas]);
    }

    public function showThatClass($id){
        $datas=DB::table('stuworks')->where('classid',$id)->orderBy('id','desc')->paginate(15);
        return view('admin.stuWorks.thatClass',['id' => $id, 'datas' => $datas]);
    }

    public function delworks(Request $request){
        try{   
            foreach($request->ids as $id){
                DB::table('stuworks')->where('id', $id)->delete();
            } 
        } 
        catch(\Exception $e){
            // 
        }
       return back();
    }
    
    public function mfclassimg(Request $request){
        $id = $request->classid;
        $img = $request->img;

        $imageService = new ImageService();
        $imgPath = $imageService->store($img);

        DB::table('stuworksclass')
            ->where('id',$id)
            ->update(['imgpath'=>$imgPath]);

        return back();
    }

}
