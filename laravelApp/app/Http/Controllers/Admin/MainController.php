<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;

class MainController extends Controller
{
    public function index()
    {



 return view('admin.main',[
     'title'=>'trang quản trị admin',
 ]);
    }
}
