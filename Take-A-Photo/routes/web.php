<?php

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
    return view('principal');
})->name('main');

Route::post('/user',[UserController::class,'CreateUser'])->name('user.create');
Route::post('/user-login',[UserController::class,'LogIn'])->name('user.login');
Route::get('/user-logout',[UserController::class,'LogOut'])->name('user.logout');