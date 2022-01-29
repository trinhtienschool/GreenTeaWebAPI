<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Address;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Route;
use function PHPUnit\Framework\exactly;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public $accountController;
    public $loginController;

    public function __construct()
    {
        $this->loginController=new LoginController();
        $this->accountController=new AccountController();
    }

    public function __invokeLogin()
    {
        // TODO: Implement __invoke() method.
         if(isset($_POST['username']) and isset($_POST['password'])) {
             $account = $this->loginController->checkLogin($_POST['username'], md5($_POST['password']));
             if ($account) {
                 setcookie("wasLogin",true, time() + 60, "/");
                 header("Location: /profile");
                 exit();
             } else {
                 setcookie("error", "Username of Password is incorrect!", time() + 10, "/", "", 0);
                 header("Location: /dologin");
                 exit();
             }
         }
    }
    public function __invokeRegister()
    {
        if (isset($_POST['username']) and isset($_POST['birthday']) and isset($_POST['address']) and isset($_POST['password']) and isset($_POST['re-password'])) {
            $checkExists = $this->loginController->checkUser($_POST['username']);
            if ($checkExists) {
                setcookie("error", "Username is exist! Please change username!", time() + 10, "/", "", 0);
                header("Location: /doRegister");
                exit();
            } else if ($_POST['username'] == null) {
                setcookie("error", "Username isn't empty! Please add username!", time() + 10, "/", "", 0);
                header("Location: /doRegister");
                exit();
            } else if ($_POST['password'] === $_POST['re-password']) {
               //header("Location: /didRegisterSuccess");
                header("Location: /didRegisterSuccess?username=" . $_POST['username'] . "&birthday=" . $_POST['birthday'] . "&address=" . $_POST['address'] . "&password=" . md5($_POST['password'])) ;
                exit();
            } else {
                setcookie("error", "Password and Re-password is not match! Please change password!", time() + 10, "/", "", 0);
                header("Location: /doRegister");
                exit();
            }

        }
    }
}


