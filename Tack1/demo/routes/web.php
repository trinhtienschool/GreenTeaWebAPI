<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
Route::get('/dologin', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('signup');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/home',)->name('home');

Route::get('/dologin', [LoginController::class, 'index']);
Route::post('/dologin/store', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'showFromRegister'])->name('show-form-register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::get('/logout', [RegisterController::class, 'logout'])->name('logout');

