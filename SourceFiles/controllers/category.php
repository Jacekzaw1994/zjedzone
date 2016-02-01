<?php

class Category extends Controller{

    function __construct() {
        parent::__construct();
    }

    function index() {
        $category_id = $_GET['id'];
        $this->view->recipesByCategory = $this->model->getRecipesByCategory($category_id);
        $this->view->render('category/index');
    }
}
