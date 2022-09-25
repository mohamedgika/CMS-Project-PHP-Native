<?php
namespace CMS\models;
use CMS\core\db;

class usermodel extends db{

  private static $object;


    public function GetUserInfoByEmailAndPassword($email,$password){
       $user = $this->sqlquery_select("SELECT * FROM `user` WHERE `email`='$email' AND `password`='$password'");
       if(isset($user)){
       return $user[0];
      }else{
        return false;
      }
    }
}
?>