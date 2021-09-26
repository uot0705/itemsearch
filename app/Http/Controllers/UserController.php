<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\User;
use Auth;
use Validator;
use App\Image;

class UserController extends Controller
{
  public function show(User $user,$id)
  {
      $user = User::find($id); //idが、リクエストされた$userのidと一致するuserを取得
      $item = Item::where('user_id', $id) //$userによる投稿を取得
          ->orderBy('created_at', 'desc') // 投稿作成日が新しい順に並べる
          ->paginate(10); // ページネーション; 
      return view('user/show', [
          'user_name' => $user->name, // $user名をviewへ渡す
          'item' => $item, // $userの書いた記事をviewへ渡す
      ]);
  }

    //userデータの取得
    public function index() {
      return view('user/user', ['user' => Auth::user() ]);
    }
    //userデータの編集
    public function edit() {
        return view('user/edit', ['user' => Auth::user() ]);
    }
    //userデータの保存
    public function update(Request $request) {

        $user_form = $request->all();
        $user = Auth::user();
        //不要な「_token」の削除
        unset($user_form['_token']);
        //保存
        $user->fill($user_form)->save();
        //リダイレクト
        return view('user/user', ['user' => Auth::user() ]);
    }

    public function softDeleteUser(User $user) 
{
  if(Auth::check() && Auth::id() == $user->id ) {
      $user->delete();
       return redirect()->route('item.index')->with('say', '退会処理が完了しました');
   } else {
      return redirect()->route('my_page', ['user' => Auth::id()])->with('say', '何らかの理由で退会処理が出来ませんでした、取引中の商品などを確認してください。');
   }
   
}

  }