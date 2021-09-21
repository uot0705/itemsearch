<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Auth;
use Validator;
use App\Image;

class UserController extends Controller
{
    //下記を追加

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
  }