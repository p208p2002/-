<?php
namespace App\Services;
use DB;
class ImageService
{
    public function store($imgFile){
        try{
            $destinationPath = public_path().'/img/';
            $filename = $imgFile->getclientoriginalname();
            $filetype=$imgFile->getMimeType();
            if($filetype!='image/jpeg'){ //格式jpg
                return "error";
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
        }
        catch (\Exception $e){
            return "error";
        }
        return url($fileurl);
    }
}