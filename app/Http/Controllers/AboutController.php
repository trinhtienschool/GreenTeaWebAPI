<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
class AboutController extends  BaseController
{
public function showDetail(){
    return'About Detail Information';
}
}
