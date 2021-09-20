@extends('layouts.app')
@section('content')
<p>商品名：{{ $name }}</p>
<p>一言：{{ $word }}</p>
<p>利用シーン：{{ $situation }}</p>
<p>メリット：{{ $merit }}</p>
<p>詳細：{{ $detail }}</p>
<p>画像：{{ $image }}</p>
<p>ユーザID：{{ $user_id }}</p>
@endsection