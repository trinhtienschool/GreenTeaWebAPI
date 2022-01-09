<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\CategoryController;
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
    return redirect()->route('productList');
});

Route::get('products',[\App\Http\Controllers\ProductController::class,'index'])->name('productList');
Route::get('categories',[\App\Http\Controllers\CategoryController::class,'index'])->name('categoryList');
Route::resource('product',ProductController::class);
Route::resource('category',CategoryController::class);
