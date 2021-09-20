<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Auth;
use Validator;
use App\Image;

class ItemController extends Controller
{
   
    public function index(Request $request)
   {
    $item = Item::all();
    
       return view('index', compact('item'));
   }

   public function show(Request $request, int $item_id){
    return view('show', ['id'=>$item_id]);
}

public function edit($id)
  {
    $item=Item::find($id);

    return view('edit', compact('item'));
  }

  public function update(Request $request, $id)
  {
  
    
    $item=Item::find($id);
    $item->name=$request->input('name');
    $item->word=$request->input('word');
    $item->situation=$request->input('situation');
    $item->merit=$request->input('merit');
    $item->detail=$request->input('detail');

    $img = $request->image;
    if( !is_null( $img ) ) {
    $image = $img->store('public/image/');
    $image = str_replace('public/image/', '', $image);
    $item->image = $image;
    }

    //DBに保存
    $item->save();

    //処理が終わったらmember/indexにリダイレクト
    return redirect('/');
}

public function destroy($id)
  {
    $item=Item::find($id);

    $item->delete();

    return redirect('/');
  }



    public function showCreateForm()
   {
       return view('item/create');
   }

   public function create(Request $request)
   {
    //画像保存
    $image = $request->image->store('public/image');
    $image = str_replace('public/image/', '', $image);

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
       
       $item->image = $image;
       
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
        return view('show', compact('item'));   
        
    }

}
