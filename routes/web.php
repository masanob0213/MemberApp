<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});
//トップページ
Route::get('/', [UserController::class, 'top']);
//ユーザー情報表示ページ
Route::get('/user', [UserController::class, 'index']);
//ユーザー情報編集ページ
Route::get('/user/edit', [UserController::class, 'edit']);
Route::get('/user/edit', [UserController::class, 'completion']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
