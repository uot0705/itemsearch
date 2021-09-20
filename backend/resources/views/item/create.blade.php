@extends('layouts.new-master')
@section('content')
<!DOCTYPE html>
<html lang="ja">
<body>

       
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
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Let's Get In Touch!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Ready to start your next project with us? Send us a messages and we will get back to you as soon as possible!</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
     <form method="post" action="{{ route('item.create') }}" enctype="multipart/form-data">
                  
                    @csrf
        <div class="form">
            <div class="form-floating mb-3">
             <input class="form-control" placeholder="Enter your name..." name="name" value="{{ old('name') }}">
             <label for="name">タイトル</label>
           　</div>

           <div class="form-floating mb-3">
             <input class="form-control" placeholder="Enter your name..." name="word" value="{{ old('word') }}">
             <label for="word">　一言</label> 
           </div>

           <div class="form-floating mb-3">
             <input class="form-control" placeholder="Enter your name..." name="situation" value="{{ old('situation') }}">
             <label for="situation">シチュエーション</label> 
           </div>

           <div class="form-floating mb-3">
             <input class="form-control" placeholder="Enter your name..." name="merit" value="{{ old('merit') }}">
             <label for="merit">メリット</label> 
           </div>

           <div class="form-floating mb-3">
             <textarea class="form-control" style="height: 10rem"　placeholder="Enter your name..." name="detail" cols="50" rows="10">{{ old('detail') }}</textarea>  
             <label for="detail" class="form-content">詳細</label>       
           </div>
           <div class="form-floating mb-3">
           <input class="form-control" type="file" name="image" accept="image/png, image/jpeg">
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
                    </div>
                </div>
               
            </div>
        </section>
@endsection