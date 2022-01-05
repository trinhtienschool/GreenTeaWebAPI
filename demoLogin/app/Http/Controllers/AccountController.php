<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AccountController extends Controller
{
    public $loginController ;
    public function __construct()
    {
        $loginController = new LoginController();
    }
 public function storeAccount(Request $request){
     $account = new Account();
     $account -> name = $request -> username;
     $account -> password = $request->password;
     $account -> birthday = $request -> birthday;
     $account -> address = $request -> address;
     $check = $account->save();
     if($check){
         //success
         return view('login');
     }else{
         //failure
         setcookie("error", "Register is not successful!", time() + 10, "/", "", 0);
         return view('signup');
     }

 }

    public function getAllAccounts(){
        $accounts = Account::all();
        return view('profile',compact('accounts'));
    }


}
