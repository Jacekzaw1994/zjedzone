<?php

//Config Paths
require './config.php';


// Use an autoloader!

// Also spl__autoload_register (Take a look at it if you want)
function __autoload($class){
    require ROOT_DIR . LIBS . $class . ".php";
}


$app = new Bootstrap();



