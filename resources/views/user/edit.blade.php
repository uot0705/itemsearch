@extends('layouts.new-master')
@section('content')
<!DOCTYPE html>
<html lang="ja"> 
          
 <!-- Header-->
    <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">ユーザ情報編集</h1>
                    <p class="lead fw-normal text-white-50 mb-0"></p>
                </div>
            </div>
    </header>

<section class="page-section" id="contact">
 <div class="container m-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">ユーザー登録内容の変更</div>
        <div class="card-body">
          <form method="POST" action="{{ route('user.update') }}">
            <div class="form-group">
              <label for="name">
                名前
              </label>
              <div>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
              </div>
            </div>
            <div class="form-group">
              <label for="email">
                email
              </label>
              <div>
                <input type="text" name="email" class="form-control" value="{{ $user->email }}">
              </div>
              <div class="form-group">
              
              <button class="btn btn-primary btn-xl" type="submit" class="user-btn">変更</button>
              {{ csrf_field() }}
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
@endsection