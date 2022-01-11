<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login()
    {
        return view('admin.users.login', ['title' => 'đăng nhập hệ thống']);
    }
    public function handle_register(Request $request)
    {

//        dd($request->input());

        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = User::create([
            'name' => trim($request->input('username')),
            'email' => strtolower($request->input('email')),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect()->route('login');

    }
    public function logout(){
        Auth::logout();

        return view('admin.home',[
            'title'=>'home'
        ]);
    }
    public function handle_login(Request $request)
    {
//        dd($request->input());
        $this->validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required',
        ]);

        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ], $request->input('remember'))) {
            return redirect()->route('admin');
        }
        return redirect()->back();
    }
}
