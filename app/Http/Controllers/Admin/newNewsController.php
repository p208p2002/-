<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use Auth;

class newNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/newNewsIndex');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas=DB::table('newNewsClass')->get();
        return view('admin/newNews',['datas'=>$datas]);
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
            DB::table('newnewsarticle')->insert(
                ['classid' => $request->input('classId'),
                'createrid' => Auth::user()->id,
                'title' => $request->input('title') ,
                'context' => $request->input('context'),
                ]
            );
        }
        catch (\Exception $e){
            return "標題或內文<b>不可為空</b>，返回<a href=".url('webAdmin/newNews').">上一頁</a>從新操作";
        }
        return redirect('webAdmin/newNews');
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
                DB::table('newnewsarticle')->where('id', $id)->delete();
            } 
        } 
        catch(\Exception $e){
            // 
        }
       return redirect('webAdmin/newNews/delete/0');
    }

    public function destroyPage(Request $request,$page)
    {       
        $datas=DB::table('newnewsarticle')
        ->skip($page*10)
        ->take(10)
        ->orderBy('id', 'desc')
        ->get();
        return view('admin/newNewsDeleteList',['datas'=>$datas,'page'=>$page]);
    }    

    public function classManager()
    {
        $datas=DB::table('newnewsclass')->get();
        return view('admin/managerFilter',['datas'=>$datas]);
    }
}

