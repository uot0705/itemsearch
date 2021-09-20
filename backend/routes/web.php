<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ItemController;
Route::get('/', [ItemController::class, 'index']);

//新規登録//
Route::get('/item', [ItemController::class, 'showCreateForm'])->name('user.new');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//アイテム//
Route::get('/item', [ItemController::class, 'showCreateForm'])->middleware(['auth'])->name('item.create');
Route::post('/item', [ItemController::class, 'create']);
//投稿確認ページ
Route::get('/item/{item}', [ItemController::class, 'detail'])->name('item.detail');
Route::get('/item/{item_id}', [ItemController::class, 'show'])->name('item.show');
Route::get('edit/{id}', [ItemController::class, 'edit'])->name('item.edit');
Route::post('update/{id}', [ItemController::class, 'update'])->name('item.update');
Route::post('destroy/{id}', [ItemController::class, 'destroy'])->name('item.destroy');