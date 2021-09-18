<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Auth;
use Validator;
use App\Image;

class ItemController extends Controller
{
   
    public function index()
   {
       return view('index');
   }
    public function showCreateForm()
   {
       return view('item/create');
   }

   public function create(Request $request)
   {
    
       // Postモデルのインスタンスを作成する
       $item = new Item();
       // 名前
       $item->name = $request->name;
       //一言
       $item->word = $request->word;
       //シチュエーション
       $item->situation = $request->situation;
       //メリット
       $item->merit = $request->merit;
       //詳細
       $item->detail = $request->detail;
       //画像
       $item->image = $request->image;
         
       //登録ユーザーからidを取得
       $item->user_id = Auth::id();
       // インスタンスの状態をデータベースに書き込む
       $item->save();
       //「投稿する」をクリックしたら投稿情報表示ページへリダイレクト        
       return redirect()->route('item.detail', [
           'item' => $item->id,
           
       ]);
   }

   /**
    * 詳細ページ
    */
    public function detail(Item $item)
    {
        return view('show', [
            'name' => $item->name,
            'word' => $item->word,
            'situation' => $item->situation,
            'merit' => $item->merit,
            'detail' => $item->detail,
            'image' => $item->image,
            'user_id' => $item->user_id
        ]);        
    }

}
