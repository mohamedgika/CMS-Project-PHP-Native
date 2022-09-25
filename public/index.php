<?php

use CMS\core\app;
use CMS\core\db;

define('BS',DIRECTORY_SEPARATOR); // Define Back Slash 
define('ROOT',dirname(__dir__)); // ROOT


//Root File 
define('CMS_PROJECT','CMS Project');

//File Project
define('file',ROOT.BS);


// File App
define('APP',file."app".BS);

//File public
define('URL',"http://localhost/CMS%20Project/public/");


define('MODELS',APP."models".BS);
define('CONTROLLER',APP."controller".BS);
define('VEIWS',APP."veiws".BS);
define('CORE',APP."core".BS);
define('VENDOR',ROOT.BS.'vendor'.BS);

// echo VENDOR;

// require CORE."app.php";
require_once VENDOR."autoload.php";

$app = new CMS\core\app();
?>