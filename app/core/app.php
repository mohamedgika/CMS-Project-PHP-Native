<?php
namespace CMS\core;

class app{

    private $controller = "home";
    private $method = "index";
    private $para = [];

    public function __construct()
    {
        $this -> url();
        $this -> render();
    }

    private function url(){   //Set

        if(!empty($_SERVER['QUERY_STRING'])){

            $url = explode("/",$_SERVER['QUERY_STRING']);

            //controller
            $this -> controller = isset($url[0]) ? $url[0] : "home"; // ? = if   After ? Execute  : = else Execute

            //method
            $this -> method = isset($url[1]) ? $url[1] : "index";

            //Delete Control And Method In Array
            unset($url[0],$url[1]);
            
            //para
            $this->para = array_values($url);


        }
    }

    private function render(){ //Get
        $controller = "CMS\\controller\\".$this -> controller."control"; // usercontrol 
        if(class_exists($controller)){ //class Found Or Not
            $controller = new $controller; // Obj from Class Controller
        }
        if(method_exists($controller , $this->method)){ //(Obj,Method)  
            call_user_func_array([$controller,$this -> method],$this->para);
        }
}
}

?>