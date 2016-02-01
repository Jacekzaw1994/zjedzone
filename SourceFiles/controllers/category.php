<?php

class Category extends Controller{

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->categories = $this->model->categoryObject();
        $this->view->render('category/index');
    }

}
