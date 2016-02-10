<?php

class Error extends Controller{

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->msg = 'Ta strona nie istnieje! Sprawdż czy poprawnie wpisałeś adres.';
        $this->view->render('error/index');
    }
}
