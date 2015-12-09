<?php
/**
 * Created by PhpStorm.
 * User: Jacek
 * Date: 2015-11-24
 * Time: 23:23
 */


class Register extends Controller {
    function __construct(){
        parent::__construct();
    }

    function index() {
        $this->view->render('register/index');
    }

    function run() {
        $this->model->inputData();
    }
}