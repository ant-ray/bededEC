<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return ['Laravel' => app()->version()];
// });
########### 商品ページ##########
# topページ
Route::get('/', [ProductController::class, 'top'])->name('top');
# lookページ
Route::get('/look', [ProductController::class, 'look'])->name('look');
# productページ
Route::get('/product/{product_id}', [ProductController::class, 'product'])->name('product');
########### ログイン機能 #############
# 新規登録
Route::post('/register', [UserController::class, 'register'])->name('register');
# ログイン機能
Route::post('/login', [UserController::class, 'login'])->name('login');
# ログアウト機能
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
# パスワードリセット機能
Route::post('/reset', [UserController::class, 'reset'])->name('reset');



# require __DIR__.'/auth.php';
