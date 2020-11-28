<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    public function showList() {
      return view('image.list');
    }
    //画像登録設定
    public function exeStore() {
      $img = $_FILES['img'];
      $filename = $img["name"];
      $file_path = $img["tmp_name"];
      $filerr = $img['error'];
      $filesize = $img['size'];
      $upload_dir = 'C:/MAMP/htdocs/PH/PhotoHits/public/images/';
      $save_filename = date('YmdHis') . $filename;
      $save_path = $upload_dir . $save_filename;
      $title = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_SPECIAL_CHARS);
      $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS);
      //画像登録
      if(is_uploaded_file($file_path)) {
      move_uploaded_file($file_path, $save_path);
      echo "登録しました";
      }else {
      echo "登録できませんでした";
      }
    }
}


