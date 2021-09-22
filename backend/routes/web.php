<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;

Route::get('/', [ItemController::class, 'index'])->name('item.index');
//検索結果
Route::get('/item/search', [ItemController::class, 'search'])->name('item.search');

//未ログインでも閲覧可能
//新規登録//
Route::get('/item', [ItemController::class, 'showCreateForm'])->name('user.new');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//アイテム投稿確認
Route::get('/item/{item}', [ItemController::class, 'detail'])->name('item.detail');
//アイテム詳細
Route::get('/item/{item_id}', [ItemController::class, 'show'])->name('item.show');
// ユーザー投稿の一覧表示画面
Route::get('/user/item/{id}', [UserController::class, 'show'])->name('user.show');

//ログインで閲覧可能
Route::group(['middleware' => 'auth'], function() {
//アイテム
Route::get('/item', [ItemController::class, 'showCreateForm'])->middleware(['auth'])->name('item.create');
Route::post('/item', [ItemController::class, 'create']);
Route::get('edit/{id}', [ItemController::class, 'edit'])->name('item.edit');
Route::post('update/{id}', [ItemController::class, 'update'])->name('item.update');
Route::post('destroy/{id}', [ItemController::class, 'destroy'])->name('item.destroy');
//ユーザー
Route::get('/my.page', [UserController::class, 'index'])->name('my.page');
Route::get('/my.page/edit', [UserController::class, 'edit'])->name('user.edit');
Route::post('user/edit', [UserController::class, 'update'])->name('user.update');
Route::post('/user/{user}/delete', [UserController::class, 'softDeleteUser'])->name('user_delete');
});


