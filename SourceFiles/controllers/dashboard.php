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
        $this->view->someoneIsLoggedIn = 1;
        if($this->isLoggedIn()) {
            $this->view->someoneIsLoggedIn = 0;
            header("location: login");
            exit();
        }
        $this->view->js = array('dashboard/js/default.js');
    }

    function index()
    {
        $this->view->render('dashboard/index');
    }


    // xml http request
    function xhrInsert() {
        $this->model->xhrInsert();
    }

    function xhrGetListings() {
        $this->model->xhrGetListings();
    }

    function xhrDeleteListing()
    {
        $this->model->xhrDeleteListing();
    }

}
