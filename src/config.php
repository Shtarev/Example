<?php
/*
|--------------------------------------------------------------------------
| Configuration
|--------------------------------------------------------------------------
|
| Lorem ipsum
|
*/

ini_set('error_reporting', E_ALL);  
ini_set('display_errors', 1);  
ini_set('display_startup_errors', 1);

spl_autoload_register(function($className){  
    require_once(str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT'].'/'.$className.'.php'));  
});

require_once(str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT'].'/src/dump/dd.php'));