<?php

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

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('login');
});

Route::get('dologin',[\App\Http\Controllers\LoginController::class,'index']);
Route::post('didlogin',[\App\Http\Controllers\Controller::class,'__invokeLogin']);

//Route::post('didlogin', function () {
//    return 'Login success';
//});
Route::get('doRegister',[\App\Http\Controllers\RegisterController::class,'index']);

Route::post('didRegister',[\App\Http\Controllers\Controller::class,'__invokeRegister']);
Route::get('didRegisterSuccess',[\App\Http\Controllers\AccountController::class,'storeAccount']);
Route::post('didRegisterSuccess',[\App\Http\Controllers\AccountController::class,'storeAccount']);
//Route::post('createAccount', [\App\Http\Controllers\AccountController::class,'storeAccount']);
Route::get('profile',[\App\Http\Controllers\AccountController::class,'getAllAccounts']);

