<?php

class Category extends Controller{

    function __construct() {
        parent::__construct();
    }

    function index() {
        $category_id = $_GET['id'];

        /// pagination site

        /// user input
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perPage = isset($_GET['per-page']) && $_GET['per-page'] <= 20 ? (int)$_GET['per-page'] : 4;

        /// Positioning

        $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;

        /// Pages

        $total =  $this->model->getNumberOfRecipes($category_id);
        $pages = ceil($total[0] / $perPage);
        $this->view->page = $page;
        $this->view->pagesNumber = $pages;
        $this->view->perPage = $perPage;


        /// Query
        $this->view->categoryDetails = $this->model->getCategory($category_id);
        $this->view->recipesByCategory = $this->model->getRecipesByCategory($category_id, $start, $perPage);
        $this->view->render('category/index');


    }

}
