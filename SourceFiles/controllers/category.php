<?php

class Category extends Controller{

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->render('category/index');
    }

    function getCategory() {
        return categoryObject();
    }
}
