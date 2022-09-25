<?php
namespace CMS\controller;
use CMS\core\veiw;
use CMS\models\postmodel;
use CMS\core\helper;

class testcontrol extends postmodel{
public function index(){
$post = new postmodel();
print_r($post->GetCategory());
}


}
    













?>