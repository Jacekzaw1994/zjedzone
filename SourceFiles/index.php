<?php

//Config Paths
require './config/paths.php';

// Config Database
require ROOT_DIR . '/config/database.php';
require ROOT_DIR . '/config/constants.php';

$app = new Bootstrap();

// Use an autoloader!

// Also spl__autoload_register (Take a look at it if you want)
function __autoload($class){
    require ROOT_DIR . LIBS . $class . ".php";
}


//require ROOT_DIR . '/libs/Bootstrap.php';
//require ROOT_DIR . '/libs/Controller.php';
//require ROOT_DIR . '/libs/Model.php';
//require ROOT_DIR . '/libs/View.php';
//
//// Libraries
//
//require ROOT_DIR . '/libs/Database.php';
//require ROOT_DIR . '/libs/Session.php';
//require ROOT_DIR . '/libs/Hash.php';



