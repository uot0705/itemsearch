@extends('layouts.new-master')
@section('content')
<!DOCTYPE html>
<html lang="ja">
<head>
<link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet" />
<link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet" />
<link href="{{asset('css/styles.css')}}" rel="stylesheet" />
</head>     
 <!-- Header-->
    <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">アイテム投稿</h1>
                    <p class="lead fw-normal text-white-50 mb-0"></p>
                </div>
            </div>
    </header>

    <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
     <form method="post" action="{{ route('item.create') }}" enctype="multipart/form-data">
                  
                    @csrf
        <div class="form">
            
            <div class="form-floating mb-3 mt-5">
             <input class="form-control" placeholder="Enter your name..." name="name" value="{{ old('name') }}">
             <label for="name">アイテム名</label>
           　</div>

           <div class="form-floating mb-3">
             <input class="form-control" placeholder="Enter your name..." name="word" value="{{ old('word') }}">
             <label for="word">　この商品一言で言うなら</label> 
           </div>

           <div class="form-floating mb-3">
             <input class="form-control" placeholder="Enter your name..." name="situation" value="{{ old('situation') }}">
             <label for="situation">利用シーン</label> 
           </div>

           <div class="form-floating mb-3">
             <input class="form-control" placeholder="Enter your name..." name="merit" value="{{ old('merit') }}">
             <label for="merit">メリット</label> 
           </div>

           <div class="form-floating mb-3">
             <textarea class="form-control" style="height: 10rem"　placeholder="Enter your name..." name="detail" cols="50" rows="10">{{ old('detail') }}</textarea>  
             <label for="detail" class="form-content">詳細(その他・公式サイトなど)</label>       
           </div>
           <div class="form-floating mb-3">
           <input class="form-control" type="file" name="image" accept="image/png, image/jpeg">
           </div>
        
           <div class="form-submit">
             <button class="btn btn-primary btn-xl" type="submit">投稿</button>
           </div>
       </div>
　　　　</form>
                    </div>
                </div>
               
            </div>
        </section>
@endsection