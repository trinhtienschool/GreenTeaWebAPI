<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\Users\LoginController;
use \App\Http\Controllers\Admin\MainController;
use \App\Http\Controllers\Admin\Users\ProfileController;
use \App\Http\Controllers\Admin\Users\ProductController;
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

Route::get('/',  [LoginController::class, 'logout']);

Route::get('/admin/users/login', [LoginController::class, 'login'])->name('login');

Route::post('/admin/users/login/handle_login', [LoginController::class, 'handle_login'])->name('handle_login');
Route::post('/admin/users/login/handle_register', [LoginController::class, 'handle_register'])->name('handle_register');
Route::post('/admin/users/login/handle_logout', [LoginController::class, 'handle_logout'])->name('handle_logout');


Route::middleware(['auth'])->group(function (){

    Route::prefix('admin')->group(function (){
        Route::get('users/profile', [ProfileController::class, 'index'])->name('profile');
        Route::get('/', [MainController::class ,'index'])->name('admin');
        Route::get('main', [MainController::class ,'index']);
    });
    Route::prefix('product')->group(function (){
        Route::get('/', [ProductController::class ,'index'])->name('product');
        Route::get('edit/{id}', [ProductController::class ,'edit'])->name('edit');
        Route::post('edit/{id}', [ProductController::class ,'handle_edit']);
        Route::get('review/{id}', [ProductController::class ,'review'])->name('review');
        Route::get('add', [ProductController::class ,'add'])->name('add');
        Route::post('add', [ProductController::class ,'handle_add']);
        Route::get('delete/{id}', [ProductController::class ,'delete'])->name('delete');
    });

});

