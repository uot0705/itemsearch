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
                    <h1 class="display-4 fw-bolder">マイページ</h1>
                    <p class="lead fw-normal text-white-50 mb-0"></p>
                </div>
            </div>
    </header>


<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="ml-3 relative">
                        <x-jet-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                        {{ Auth::user()->currentTeam->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            
                        </x-jet-dropdown>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                        </x-slot>

                        <x-slot name="content">
                        </x-slot>
                    </x-jet-dropdown>
                </div>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="flex-shrink-0 mr-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </div>
                @endif
             <div class="form-floating mb-3">
                <div class="form-control">{{ Auth::user()->name }}</div>
            </div>
            <div class="form-floating mb-3">
                <div class="form-control">{{ Auth::user()->email  }}</div>
            </div>

            </div>

            <div class="mt-3 space-y-1">
        
        <!--プロフィールコンテンツ-->
        <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <!--編集-->
            <div class="col mb-5">
                        <div class="card h-100">
                          <!-- name-->
                        <h5 class="fw-bolder"></h5>
                            <!-- Product image-->
                           
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- 一言-->
                                    <h5 class="fw-bolder"></h5>
                                    <!-- 詳細-->
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"> <a class="btn btn-outline-dark mt-auto" href="{{ route('user.edit')}}">編集</a></div>
                            </div>
                            
                        </div>
             </div>

             <!--投稿一覧-->
            <div class="col mb-5">
                        <div class="card h-100">
                          <!-- name-->
                        <h5 class="fw-bolder"></h5>
                            <!-- Product image-->
                           
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- 一言-->
                                    <h5 class="fw-bolder"></h5>
                                    <!-- 詳細-->
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"> <a class="btn btn-outline-dark mt-auto" href="{{ route('user.show', ['id'=>$user->id])}}">投稿一覧</a></div>
                            </div>
                            
                        </div>
             </div>
           
              <!--ログアウト-->
            <div class="col mb-5">
                        <div class="card h-100">
                          <!-- name-->
                        <h5 class="fw-bolder"></h5>
                            <!-- Product image-->
                           
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- 一言-->
                                    <h5 class="fw-bolder"></h5>
                                    <!-- 詳細-->
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">    
                                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-responsive-nav-link class="btn btn-outline-dark mt-auto text-dark" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('ログアウト') }}
                    </x-jet-responsive-nav-link>
                </form>
                                </div>
                            </div>
                            
                        </div>
             </div>

            <!--退会-->
            <div class="col mb-5">
                        <div class="card h-100">
                          <!-- name-->
                        <h5 class="fw-bolder"></h5>
                            <!-- Product image-->
                           
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- 一言-->
                                    <h5 class="fw-bolder"></h5>
                                    <!-- 詳細-->
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"> 
                                     @if(session('say'))　　　
                                        <div class="alert alert-success" role="alert">
                                                {{ session('say') }}
                                        </div>
                                    @endif

                                    @if(Auth::check() && Auth::id() == $user->id) 
                                        <form method="post" action="{{ route('user_delete', ['user' => Auth::id()]) }}">
                                            {{ csrf_field() }}
                                            <input type="submit" value="退会" class="btn btn-outline-dark mt-auto" onclick='return confirm("本当に退会しますか？");'>
                                        </form>
                                    @endif
                                </div>
                            </div>
                            
                        </div>
             </div>
        　</div>
       　 </div>
                   

                
            </div>
        </div>
    </div>
    
</nav>
</section>

@endsection