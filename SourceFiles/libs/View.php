<?php
/**
 * Created by PhpStorm.
 * User: Jacek
 * Date: 2015-11-23
 * Time: 15:05
 */

class View{
    function __construct(){

    }

    public function render($name, $noInclude = false)
    {
        if( $noInclude == true){
            require ROOT_DIR . '/views/' . $name . '.php';
        } else {
            require ROOT_DIR . '/views/header.php';
            require ROOT_DIR . '/views/' . $name . '.php';
            require ROOT_DIR . '/views/footer.php';
        }
    }
}
