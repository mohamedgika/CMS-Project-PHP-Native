<?php
namespace CMS\core;
class helper{

    static function redirect($path){
        header("LOCATION: ".URL.$path);
    }

    static function url($path){
        return URL."/".$path;
    }


}

?>