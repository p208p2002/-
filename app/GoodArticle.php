<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class GoodArticle extends Model
{
    //
    protected $table = 'goodarticle';

    public function getPoster($posterid){
        try{
            $rs=DB::table('users')->where('id', $posterid )->first();
            return $rs->name;
        }
        catch (\Exception $e){
            return "unknow";
        }
        return "unknow";
    }
}
