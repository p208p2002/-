<?php

namespace App\Http\Controllers\StuCenter;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MyWorksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('stuCenter.myWorks.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $datas=DB::table('stuworksclass')->get();
        $schools=DB::table('school')->orderBy('id','asc')->get();

        return view('stuCenter.myWorks.upload', ['datas' => $datas ,'schools' => $schools]);
    }

    public function showManagement(){
        $uid = Auth::user()->id;
        // dd($uName);
        $data = DB::SELECT('
            SELECT stuworks.id,stuworks.context,stuworksclass.className,school.name
            FROM  stuworks, stuworksclass, school
            WHERE 
                stuworks.classid = stuworksclass.id 
                AND stuworks.schoolid = school.id
                AND stuworks.uid ="' .$uid.'"'
        );
        dd($data);
        return view('stuCenter.myWorks.managmentUpload');
    }
}
