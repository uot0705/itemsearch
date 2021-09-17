@extends('layouts.app')
@section('content')
<form method="post" action="{{ route('item.create') }}" enctype="multipart/form-data">
 @csrf
 <div class="form">
           <div class="form-title">
           <label for="name">タイトル</label> 
             <input class="" name="name" value="{{ old('name') }}">
           </div>

           <div class="form-title">
           <label for="word">　一言</label> 
             <input class="" name="word" value="{{ old('word') }}">
           </div>

           <div class="form-title">
           <label for="situation">シチュエーション</label> 
             <input class="" name="situation" value="{{ old('situation') }}">
           </div>

           <div class="form-title">
           <label for="merit">メリット</label> 
             <input class="" name="merit" value="{{ old('merit') }}">
           </div>

           <div class="form-content">
             <label for="detail" class="form-content">詳細</label> 
             <textarea class="" name="detail" cols="50" rows="10">{{ old('detail') }}</textarea>        
           </div>
        

           <!--<div class="form-title">
           <label for="name">タイトル</label> 
             <input class="" name="name" value="{{ old('name') }}">
           </div>-->

          

           <div class="form-submit">
             <button type="submit">投稿する</button>
           </div>
       </div>
</form>
@endsection