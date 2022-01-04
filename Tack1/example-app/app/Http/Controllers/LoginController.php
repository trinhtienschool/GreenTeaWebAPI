<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController
{
    public function index(){
        return view('admin.login',[
            'title' => 'Dang Nhap He Thong'
        ]);
    }
public function store(Request $request){
        dd($request->input());
}

}
