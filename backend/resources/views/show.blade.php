@extends('layouts.new-master')
@section('content')
<?php $user = Auth::user(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
<link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet" />
<link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet" />
<link href="{{asset('css/styles.css')}}" rel="stylesheet" />
</head>
    <body>
    <!-- Header-->
    <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">「 {{$item->name}}　」の詳細</h1>
                    <p class="lead fw-normal text-white-50 mb-0"></p>
                </div>
            </div>
        </header>
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"> <img  src="{{ asset('storage/public/image/'.$item->image) }}"></div>
                    <div class="col-md-6">
                        <div class="small mb-1">
                        投稿者: <a href="{{ route('user.show', ['id'=>$item->user_id])}}">{{ $item->user->name }}</a>
                        </div>
                        <h1 class="display-5 fw-bolder">{{$item->name}}</h1>
                        <p class="lead">{{$item->word}}</p>
                       <div class="fs-5 mb-5">
                       </div>
                       
                       <!--利用シーン-->
                       <div class="mb-4">
                            <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                利用シーン</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$item->situation}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                       <!--メリット-->
                       <div class="mb-4">
                            <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                一番のメリット</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$item->merit}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                       <!--詳細-->
                       <div class="mb-4 ">
                            <div class="card border-left-secondary shadow h-100 py-2 ">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                詳細</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$item->detail}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                       

                        <div class="d-flex">
                        　@if (Auth::check()) 
                               @if  ($user->id == $item->user_id)
                            <a class="btn btn-primary btn-xl" href="{{route('item.edit',['id'=>$item->id])}}">{{ __('編集') }}</a>
                            <form method="POST" action="{{route('item.destroy',['id'=>$item->id])}}">
                            @csrf
                            <button class="btn btn-secondary btn-xl ml-3" type="submit">削除</button>
                    　　　　　</form>
                               @endif
                               @else

                           @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
@endsection
