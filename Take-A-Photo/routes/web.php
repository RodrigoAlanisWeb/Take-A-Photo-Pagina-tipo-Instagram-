<?php

use App\Http\Controllers\PostController;
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

Route::get('/',[PostController::class,'index'])->name('main');

// User
Route::post('/user',[UserController::class,'CreateUser'])->name('user.create');
Route::post('/user-login',[UserController::class,'LogIn'])->name('user.login');
Route::get('/user-logout',[UserController::class,'LogOut'])->name('user.logout');

// Post

Route::get('/post/{post}',[PostController::class,'show'])->name('post.show');