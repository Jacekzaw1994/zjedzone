<?php
/**
 * Created by PhpStorm.
 * User: Jacek
 * Date: 2015-11-23
 * Time: 14:33
 */

class Error extends Controller{

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->msg = 'This page doesnt exist';
        $this->view->render('error/index');
    }
}
