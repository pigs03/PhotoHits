<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use Illuminate\Http\Request;
use App\Models\Image;
use GuzzleHttp\Promise\Create;

class ImageController extends Controller
{
    //
    public function showList() {
      return view('image.list');
    }
    //画像登録画面に移動
    public function showCreate() {
      return view('image.upload');
    }

    //画像登録
    public function exeStore(ImageRequest $request) {
      $file_data = $request->except('img');
     $file_path = $request->file('img');
    dd($file_path);
    /*Image::create($file_data, $file_path);*/
    /*$inputs = $request->all();
    Image::create($inputs);*/
    }
   
}


