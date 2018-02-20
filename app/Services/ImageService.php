<?php
namespace App\Services;
use DB;
use Exception;
class ImageService
{
    public function store($imgFile){
        if($imgFile==null)
            return back();

        $destinationPath = public_path().'/img/';
        $filename = $imgFile->getclientoriginalname();
        $filetype=$imgFile->getMimeType();
        if($filetype!='image/jpeg'){ //格式jpg
            throw new Exception("圖片格式錯誤");
        }
        $unique_name = md5($filename. time()).'.jpg';
        $imgFile->move($destinationPath,$unique_name);        
        
        //store
        $fileurl='/img/'.$unique_name;
        DB::table('imgtable')->insert(
            ['filename' => $unique_name,
            'filename_origin' => $filename,
            'path'=> $fileurl]
        );

        return $fileurl;
    }
}