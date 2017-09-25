<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Auth;
class goodArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin/goodArticle');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $datas=DB::table('goodarticleclass')->get();
        return view('admin/goodArticleCreate',['datas'=>$datas]);
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
            DB::table('goodarticle')->insert(
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
        return redirect('webAdmin/goodArticle');
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
                 DB::table('goodarticle')->where('id', $id)->delete();
             } 
         } 
         catch(\Exception $e){
             // 
         }
        return redirect('webAdmin/goodArticle/delete');
     }

    public function destroypage()
    {
        //
        $datas=DB::table('goodarticle')->orderBy('id','desc')->paginate(15);
        return view('admin/goodArticleDelList',['datas'=>$datas]);
    }

    public function classManager()
    {
        
        $datas=DB::table('goodarticleclass')->get();
        return view('admin/goodArticleClassManager',['datas'=>$datas]);
    }

    public function classDel($id){
        DB::table('goodarticleclass')->where('id',$id)->delete();
        return redirect('webAdmin/goodArticle/managerFilter');
    }

    public function classAdd(Request $request){
        DB::table('goodarticleclass')->insert(
            ['className' => $request->input('className')]
        );
        return redirect('webAdmin/goodArticle/managerFilter');
    }
}
