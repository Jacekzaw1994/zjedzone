<?php

// Always provide a TRAILING SLASH (/) AFTER A PATH

// Set rootdir as SourceFiles
define( 'ROOT_DIR',dirname(__FILE__));
define( 'SITE_ROOT', 'http://localhost:80/zjedz/zjedz/SourceFiles/');
define( 'LIBS', '/libs/');

// Database

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'student_meals');
define('DB_USER', 'root');
define('DB_PASS', '');


// The sitewide hashkey, do not change this because its used for passwords!
// This is for other hash keys ... not sure yet
define('HASH_GENERAL_KEY', 'MixitUp200');

// This is for database password only
define('HASH_PASSWORD_KEY','catsFLYhigh2000miles');

?>