<?php

namespace CMS\core;

class veiw{

public function veiw($path,$para =[]){
    extract($para);
    require VEIWS.$path.".php";

    // $a = "Original";
    // $my_array = array("a" => "Cat","b" => "Dog", "c" => "Horse");
    // extract($my_array);
    // echo "\$a = $a; \$b = $b; \$c = $c";
}
}
?>