<?php
/**
 * Created by PhpStorm.
 * User: Jacek
 * Date: 2015-11-23
 * Time: 00:30
 */

class Index extends Controller {
    function __construct(){
        parent::__construct();
    }

    function index() {
        $this->view->render('index/index');
    }

    function details() {
        $this->view->render('index/index');
    }
}

