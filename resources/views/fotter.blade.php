<!DOCTYPE html>
<html lang="ja">
    <head>
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    <link href="{{asset('css/footer.css')}}" rel="stylesheet" />
    </head>
    <body>
       <div>
       @yield('content')
      </div>
      
         <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">@Item Search</p></div>
        </footer> 
    </body>