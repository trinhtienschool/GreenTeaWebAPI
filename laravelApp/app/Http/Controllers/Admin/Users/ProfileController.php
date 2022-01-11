<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
   public function index(){
       return view('admin.users.profile',[
           'title' => 'profile me'
       ]);
   }
}
