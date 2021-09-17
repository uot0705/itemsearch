<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ItemController;
Route::get('/', [ItemController::class, 'index']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/item', [ItemController::class, 'showCreateForm'])->name('item.create');
Route::post('/item', [ItemController::class, 'create']);
//投稿確認ページ
Route::get('/item/{item}', [ItemController::class, 'detail'])->name('item.detail');