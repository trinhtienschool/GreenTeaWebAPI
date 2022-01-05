<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Facade\FlareClient\Http\Exceptions\NotFound;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        return view('login');
    }


public function checkUser(string $name): bool
{
    $check = DB::table('accounts')->where('name', $name)->Count();
    if($check==1) return true;
    return false;
}

    public function checkLogin(string $name,string $pass)
    {
        if(!$this->checkUser($name))return null;
        $accountTemp = DB::table('accounts')
            ->where('name', $name)
            ->where('password',$pass);
        if($accountTemp->exists()){
          return $accountTemp->first();
        }else
            return null;
    }

}
