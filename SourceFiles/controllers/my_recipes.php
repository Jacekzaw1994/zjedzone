<?php

class My_Recipes extends Controller{

    function __construct() {
        parent::__construct();
    }

    function index() {
        $user_id = $_GET['id'];

        /// pagination site

        /// user input
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perPage = isset($_GET['per-page']) && $_GET['per-page'] <= 20 ? (int)$_GET['per-page'] : 8;

        /// Positioning

        $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;

        /// Pages

        $total =  $this->model->getNumberOfRecipes($user_id);
        $pages = ceil($total[0] / $perPage);
        $this->view->page = $page;
        $this->view->pagesNumber = $pages;
        $this->view->perPage = $perPage;


        /// Query
//        $this->view->categoryDetails = $this->model->getCategory($user_id);
        $this->view->recipesByUser = $this->model->getRecipesByCategory($user_id, $start, $perPage);
        $this->view->render('my_recipes/index');


    }

}
