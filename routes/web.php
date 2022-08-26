<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
//     return view('home');
// });
Route::get('/', function () {
    return redirect()->route('welcome');
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'main'])->name('welcome')->withoutMiddleware('auth');
Route::resource('/home', HomeController::class);
// 포스트 후 view로 페이지 이동 하였을 때 index에 있는 db get 쿼리를 못 읽어 옴..
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
