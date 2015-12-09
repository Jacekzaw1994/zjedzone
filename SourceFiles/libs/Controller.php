<?php

class Controller {

    function __construct() {
        //echo 'Main controller<br />';
        $this->view = new View();
        require_once( ROOT_DIR . '/models/session_model.php');
        $this->session = new Session_Model();
    }


    public function loadModel($name) {

        $path = ROOT_DIR . '/models/'.$name.'_model.php';

        if (file_exists($path)) {
            require ROOT_DIR . '/models/'.$name.'_model.php';

            $modelName = $name . '_Model';
            $this->model = new $modelName();
        }
    }

}
