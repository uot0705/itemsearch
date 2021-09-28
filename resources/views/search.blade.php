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
                    <h1 class="display-4 fw-bolder">アイテム投稿一覧</h1>
                    <p class="lead fw-normal text-white-50 mb-0"></p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
       
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    
                @foreach ($items as $item)
                     <div class="col mb-5">
                        <div class="card h-100">
                          <!-- name-->
                          <h5 class="fw-bolder text-center py-2 mb-0 bg-secondary text-white">{{ $item->name }}</h5>
                            <!-- Product image-->
                            <img  src="{{ asset('storage/image/'.$item->image)}}">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- 一言-->
                                    <h5 class="fw-bolder">{{ $item->word }}</h5>
                                    <!-- 詳細-->
                                    
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ route('item.show', ['item_id'=>$item->id]) ,}}">詳細</a></div>
                            </div>
                            
                        </div>
                    </div>
                    @endforeach
                    
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
              
    </body>
</html>
@endsection