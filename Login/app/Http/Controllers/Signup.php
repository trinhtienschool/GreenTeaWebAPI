<?php

namespace App\Http\Controllers;

use App\Models\User_login;
use Illuminate\Http\Request;

class Signup extends Controller
{
    public function signup(Request $request){
//        dd($request->all());
        $user_login = new User_login($request->get('fname'),
            $request->get('lname')
            ,$request->get('pass')
            ,$request->get('email')
            ,$request->get('phone')
        );
        $user_login->save();
        return view('signup');
    }
    public function signin(Request $request){
        $users = \DB::table('user_login')->get();
        $email = $request['email'];
        $pass = $request['pass'];
//        $user = $users[1];
//        $email = $user->email;
        foreach ($users as $user){
            if($user->email ==$email and $user->pass == $pass){
                return "Dang nhap thanh cong";
            }
        }
        return view('login');
    }

}
