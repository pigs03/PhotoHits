<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use Illuminate\Http\Request;
use App\Models\Image;

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
    $inputs = $request->all();
    Image::create($inputs);
    }
   
}


