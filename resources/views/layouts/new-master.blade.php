<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="public/img/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->

<link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    </head>
          <!-- Navigation-->
          <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="/">Item Search</a>     
                    <form class="d-flex">
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 ">
                          @auth    <!--ログイン中の場合-->
                            <a class="dropdown-item" href="{{ route('my.page')}}">マイページ</a>
                            <a class="dropdown-item" href="{{ route('item.create')}}">アイテム投稿</a>
                          @else     <!--未ログインの場合-->
                            <a class="dropdown-item" href="{{ route('login') }}" class="text-sm text-gray-700 underline">ログイン</a>
                            @if (Route::has('register'))
                              <a class="dropdown-item" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">アカウント作成</a>
                            @endif
                          @endif
                        </div>
                    @endif
                        
                    </form>
                </div>
            </div>
        </nav>
    <body>
       <div>
       @yield('content')
      </div>
      
         
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</html>
