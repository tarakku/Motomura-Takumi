<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\BbsController;
use App\Http\Controllers\InfoController;

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/info', [InfoController::class, 'info']);
// 画像アップロードフォーム表示
Route::get('/upload', function () { return view('upload'); });

//アップロード処理
Route::post('/upload', [ImageUploadController::class, 'upload'])->name('image.upload');

// アルバム表示
Route::get('/album', [ImageUploadController::class, 'album'])->name('image.album');

//掲示板　書き込みフォーム表示
Route::get('/bbs',[BbsController::class, 'bbs']);

//書き込み
Route::post('/bbs',[BbsController::class, 'store'])->name('bbs.store');

//掲示板　書き込み一覧表示
Route::get('/showbbs',[BbsController::class, 'showbbs']);

//掲示板　削除フォーム表示
Route::get('deletebbs',[BbsController::class, 'deletebbs'])->name('deletebbs.show');

Route::delete('/deletebbs/{id}', [BbsController::class, 'destroy'])->name('bbs.destroy');