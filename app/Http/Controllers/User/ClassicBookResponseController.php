<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Auth;

class ClassicBookResponseController extends Controller
{
    //
    public function store(Request $request)
    {
        //
        $bookid = $request->pageid;
        $context = $request->context;
        $uid = Auth::user()->id;
        DB::table('classicbookresponse')->insert(['uid'=>$uid,'bookid'=>$bookid,'context'=>$context]);
        return back();
    }
}
