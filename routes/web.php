<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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


Route::get('/home', [HomeController::class,'index'])->name('home.index');
Route::get('/user', [UserController::class,'index'])->name('user.index');
Route::get('/posts', [ClientController::class,'getAllPost'])->name('posts.getallpost');
Route::get('/posts/{id}', [ClientController::class,'getPostById'])->name('posts.getpostbyid');