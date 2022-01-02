<?php

//use Illuminate\Support\Facades\Redirect;
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
Route::get("home", [HomeController::class,'index']);
//Route::get('about','AboutController@showDetail');
//Route::get('/', function () {
//    return view('welcome');
//});



////tạo 1 route mới
//Route::get('about',function (){
//return'About content-Route Test';
//});

//route nâng cao
Route::get('about/directions',function (){
    return'Directions go here';

});

//dùng với any thay get
Route::any('submit-form',function (){
    return 'Process Form';
});

//route tham số
Route::get('about/{theSubject}',function ($theSubject){
    return $theSubject. '  --content goes here';
});

//Route dùng ART và price
Route::get('about/classes/{theArt}/{thePrice}',function ($theArt,$thePrice){
    return "The product: $theArt and $thePrice";
});

//Route ủy quyền: chuyển sang link khác
Route::get('where',function(){
    return Redirect::route('directions');
});
