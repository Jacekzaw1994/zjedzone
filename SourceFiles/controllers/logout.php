<?php

class Logout extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index() {
        $session = $_COOKIE['sessionId'];
        $this->session->deleteSession($session);
        setcookie("sessionId", "", time()-3600);
        header("location: " . SITE_ROOT . "index");
    }

}

