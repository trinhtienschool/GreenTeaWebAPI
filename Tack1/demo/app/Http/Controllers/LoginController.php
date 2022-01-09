<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;


class LoginController extends Controller
{
    public function index()
    {
        return view('login', [
            'title' => 'Dang Nhap He Thong'
        ]);
    }

    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
//        dd($request->input());
        $this->validate($request, [
            'password' => 'required',
            'name' => 'required',
        ]);
        if (Auth::attempt([
            'name' => $request->input('name'),
            'password' => $request->input('password')
        ])) {
            return route('home');
        }
    }

}
