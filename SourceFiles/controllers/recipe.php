<?php

class Recipe extends Controller {
    function __construct(){
        parent::__construct();
    }

    function index() {
        $dish_id = $_GET['id'];
        $this->view->fullRecipe = $this->model->getRecipeFromDB($dish_id);
        $this->view->render('recipe/index');
    }
}