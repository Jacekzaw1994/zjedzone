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
        if($this->isLoggedIn()) {
            header("location: login");
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

}
