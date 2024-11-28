<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use File;// ファイル操作用のクラス

class ImageUploadController extends Controller
{
    public function upload(Request $request)
    {
        // バリデーション（検証）
        //requiredは空ではないか
        //image　与えられたデータが画像であるか
        //mimes は　jpegとpngとjpgとgifを許可
        //最大2MB
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        // 画像を保存
        $imageName = time() . '.' . $request->image->extension();//時間と拡張子(extension)を結合して　ファイルの名前を作る
        $request->image->move(public_path('images'), $imageName);//指定されたディレクトリに画像を保存 public/image

        return back()
            ->with('success', '画像がアップロードされました。') //成功したらこれが出る
            ->with('image', $imageName);
    }

    // アルバム画面表示
    public function album()
    {
        // public/images ディレクトリにある全ての画像ファイルを取得
        $images = File::allFiles(public_path('images'));

        // 画像のパスを配列としてビューに渡す
        $imagePaths = [];
        foreach ($images as $image) {
            $imagePaths[] = 'images/' . $image->getFilename();
        }

        return view('album', compact('imagePaths'));
    }
}
