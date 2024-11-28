<?php

namespace App\Http\Controllers;

use App\Models\Bbs; // ここでPostモデルをインポート
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash; // ハッシュ化用

class BbsController extends Controller
{
    public function bbs()
    {
        return view('bbs');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'pass' => 'required|string|min:4',
        ]);
    
        // データベースに保存
        Bbs::create([
            'name' => $request->name,
            'title' => $request->title,
            'body' => $request->body,
            'date' => now(), // 現在の日付を設定
            'pass' => Hash::make($request->pass), // ハッシュ化して保存
        ]);


        // リダイレクトやレスポンスを返す
        return redirect()->back()->with('success', '投稿が保存されました！');
    }

    // データを表示
    public function showbbs()
    {
        $bbs = Bbs::all(); // 全ての投稿を取得
        // ビューにデータを渡す
        return view('showbbs', compact('bbs'));
    }

    public function deletebbs()
    {
        $bbs = Bbs::all(); // 全ての投稿を取得
        // ビューにデータを渡す
        return view('deletebbs', compact('bbs'));
    }

    public function destroy(Request $request,$id)
    {
        // 入力されたパスワード
    $inputPassword = $request->input('password');

    // 該当する投稿を取得
    $bbs = Bbs::findOrFail($id);

    // パスワード確認 (投稿の保存されたパスワードと照合)
    if ($bbs->password === $inputPassword) {
        $bbs->delete();
        return redirect()->route('deletebbs.show')->with('success', '投稿を削除しました。');
    } else {
        return back()->withErrors(['password' => 'パスワードが正しくありません。']);
    }
    }
}
