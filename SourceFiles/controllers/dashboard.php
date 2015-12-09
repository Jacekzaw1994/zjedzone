<?php
/**
 * Created by PhpStorm.
 * User: Jacek
 * Date: 2015-11-24
 * Time: 23:23
 */


class Dashboard extends Controller
{

    function __construct()
    {
        parent::__construct();
        //Session::init();
        $session = $_COOKIE['sessionId'];
        if($this->model->checkSession($session) != $session) {
            header("location: ../login");
        }

        /*$logged = Session::get('loggedIn');
        if ( $logged == false ) {
            Session::destroy();
            header('location: http://localhost/zjedz/zjedz/SourceFiles/dashboard');
            exit;
        }*/

        $this->view->js = array('dashboard/js/default.js');
    }

    function index()
    {
        $this->view->render('dashboard/index');
    }

    function logout() {
        Session::destroy();
        header('location: ../login');
        exit;
    }

    // xml http request
    function xhrInsert() {
        $this->model->xhrInsert();
    }

    function xhrGetListings() {
        $this->model->xhrGetListings();
    }

}
