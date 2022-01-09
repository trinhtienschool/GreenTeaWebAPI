<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController
{
    public function showFromRegister()
    {
        return view('signup', [
            'title' => 'Dang Nhap He Thong'
        ]);
    }
    public function register(Request $request)
    {
       $user = new User();
       $user->name = $request->name;
       $user->email= $request->email;
       $user->password = bcrypt($request->password);
       $user->save();
       return redirect()->route('show-form-register')->with("success","Dang ki thanh cong");
    }
    public function logout()
    {
        return view('login', [
            'title' => 'Dang Nhap He Thong'
        ]);
    }
}
