<?php

class Controller {

    function __construct() {
        $this->db = new Database();
        require_once( ROOT_DIR . '/models/session_model.php');
        $this->session = new Session_Model();
        $this->view = new View();
        $this->view->user = $this->getLoggedUser();
        $this->view->loggedInUsers = $this->getNumberOfLoggedIn();
    }


    public function loadModel($name) {

        $path = ROOT_DIR . '/models/'.$name.'_model.php';

        if (file_exists($path)) {
            require ROOT_DIR . '/models/'.$name.'_model.php';

            $modelName = $name . '_Model';
            $this->model = new $modelName();
        }
    }

    public function isLoggedIn() {
        $session = $_COOKIE['sessionId'];
        return $this->session->checkSession($session) != $session;
    }

    public function getLoggedUser(){
        $session = $_COOKIE['sessionId'];
        return $this->session->getSessionUser($session);
    }

    public function getNumberOfLoggedIn(){
        return $this->session->getNoLoggedInUsers();
    }


}
