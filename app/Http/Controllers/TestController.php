<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Services\ImageService;

class TestController extends Controller
{
    public function imagetest(Request $request){
        $imageService = new ImageService();
        $imgPath = $imageService->store($request->img);
        return $imgPath;
    }
}
