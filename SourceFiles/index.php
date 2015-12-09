<?php

//Config Paths
require './config/paths.php';

// Use an autoloader!
require ROOT_DIR . '/libs/Bootstrap.php';
require ROOT_DIR . '/libs/Controller.php';
require ROOT_DIR . '/libs/Model.php';
require ROOT_DIR . '/libs/View.php';

// Libraries

require ROOT_DIR . '/libs/Database.php';
require ROOT_DIR . '/libs/Session.php';


// Config Database
require ROOT_DIR . '/config/database.php';

$app = new Bootstrap();


