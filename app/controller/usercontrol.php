<?php

namespace CMS\controller;  // NameProject / File
use CMS\core\veiw;
use CMS\models\usermodel;
use CMS\core\helper;



class usercontrol extends veiw{

    public function login(){
        session_start();
        if(isset($_SESSION['user'])){
            helper::redirect("dashboard/index");
        }
         return $this->veiw("Dashboard/user/login");
    }

    public function loginReq(){
        session_start();
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = new usermodel();
        $userdata = $user->GetUserInfoByEmailAndPassword($email,$password);

       if(!empty($userdata)){
        $_SESSION['user'] = $userdata;
        $_SESSION['error']=[];  
        //This
        // $helper = new helper();
        // $helper->redirect();
        //Or
        //This;
        helper::redirect("dashboard/index");

       }else{
        $_SESSION['error'][]="Please Try Again!";
        helper::redirect("user/login");
       }
    }

    public function logout(){
        session_start();
        session_destroy();
        helper::redirect("user/login");
    }

}
?>