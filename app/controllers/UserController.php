<?php
namespace app\controllers;

use xbphp\base\Controller;
use app\models\UserModel;

class UserController extends Controller{
    public function index()
    {
        if($_SESSION['isLogin']==1){
            $this->assign('title',"welcome back!");
            $this->render();
        }else{
            $this->assign('title', 'hello,please login');
            $this->render();
        }

    }

    public function login()
    {
        $this->assign("title","login");
        $this->render();
    }

    public function checkLogin()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = (new UserModel())->search($username);
        if($password === $user[0]['password']){
            echo "login success";
            $_SESSION['username']=$username;
            $this->render();
        }else{
            echo "login failed";
        }
    }

    public function logOut()
    {
        $this->render();
    }

}