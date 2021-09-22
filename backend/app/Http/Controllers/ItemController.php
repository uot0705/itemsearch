<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\User;
use Auth;
use Validator;
use App\Image;

class ItemController extends Controller
{
//トップページ
    public function index(Request $request)
   {
    $item = Item::all();
    
       return view('index', compact('item'));
   }


//検索画面
   public function search(Request $request)
   {
    // ユーザー一覧をページネートで取得
    $items = Item::paginate(20);
    // 検索フォームで入力された値を取得する
    $search = $request->input('search');
     // クエリビルダ
    $query = Item::query();
    // もし検索フォームにキーワードが入力されたら
        if ($search !== null) {
            // 全角スペースを半角に変換
            $spaceConversion = mb_convert_kana($search, 's');
            // 単語を半角スペースで区切り、配列にする（例："山田 翔" → ["山田", "翔"]）
            $wordArraySearched = preg_split('/[\s,]+/', $spaceConversion, -1, PREG_SPLIT_NO_EMPTY);
// 単語をループで回し、ユーザーネームと部分一致するものがあれば、$queryとして保持される
foreach($wordArraySearched as $value) {
    $query->where('name', 'like', '%'.$value.'%');}
    // 上記で取得した$queryをページネートにし、変数$usersに代入
    $items = $query->paginate(20);
        }
       return view('search')->with([
        'items' => $items,
        'search' => $search,
       ]);
   }

//アイテム詳細
public function show(Request $request, int $item_id){
    return view('show', ['id'=>$item_id]);
}

//アイテム編集
public function edit($id)
  {
    $item=Item::find($id);

    return view('item/edit', compact('item'));
  }

//アイテムアップデート
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

//アイテム削除
public function destroy($id)
  {
    $item=Item::find($id);

    $item->delete();

    return redirect('/');
  }


//アイテム作成
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
