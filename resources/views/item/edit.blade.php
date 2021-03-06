@extends('layouts.new-master')
@section('content')
<!DOCTYPE html>
<html lang="ja">
<head>
<link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet" />
<link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet" />
<link href="{{asset('css/styles.css')}}" rel="stylesheet" />
<title>アイテム編集 / Item Search</title>
</head>
 <!-- Header-->
    <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">アイテム編集</h1>
                    <p class="lead fw-normal text-white-50 mb-0"></p>
                </div>
            </div>
    </header>

  <section class="page-section" id="contact">
    <div class="container px-4 px-lg-5 ">
      <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
        <div class="col-lg-6">
        <form method="POST" action="{{route('item.update',['id' =>$item->id])}}" enctype="multipart/form-data">
                  
                    @csrf
               <div class="form">

               
            <div class="form-floating mb-3 mt-5">
             <input class="form-control" placeholder="Enter your name..." name="name" value="{{$item->name}}">
             <label for="name">タイトル</label>
           　</div>

           <div class="form-floating mb-3">
             <input class="form-control" placeholder="Enter your name..." name="word" value="{{$item->word}}">
             <label for="word">　一言</label> 
           </div>

           <div class="form-floating mb-3">
             <input class="form-control" placeholder="Enter your name..." name="situation" value="{{$item->situation}}">
             <label for="situation">シチュエーション</label> 
           </div>

           <div class="form-floating mb-3">
             <input class="form-control" placeholder="Enter your name..." name="merit" value="{{$item->merit}}">
             <label for="merit">メリット</label> 
           </div>

           <div class="form-floating mb-3">
             <textarea class="form-control" style="height: 10rem"　placeholder="Enter your name..." name="detail" cols="50" rows="10" >{{$item->detail}}</textarea>  
             <label for="detail" class="form-content">詳細</label>       
           </div>
           <div class="form-floating mb-3">
           <input class="form-control" type="file" name="image" accept="image/png, image/jpeg" value="{{$item->image}}">
           </div>
          
           <div class="form-submit">
             <button class="btn btn-primary btn-xl" type="submit">編集する</button>
           </div>
       </div>
     </form>
        </div>
      </div>
    </div>
  </section>
@endsection