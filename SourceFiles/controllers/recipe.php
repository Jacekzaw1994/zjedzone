<?php

class Recipe extends Controller {
    function __construct(){
        parent::__construct();
    }

    function index() {
        $dish_id = $_GET['id'];
        $user_id = $this->view->user['id'];
        $this->view->fullRecipe = $this->model->getRecipeFromDB($dish_id);
        $this->view->recipeId = $dish_id;
        $this->view->isFavorite = $this->model->checkIfItsFavorite($user_id, $dish_id);
        $this->view->render('recipe/index');
    }

    function addToFavorites() {
        $favorite = $_GET['id'];
        $user_id = $this->view->user['id'];
        $this->model->addFavorite($user_id, $favorite);
        header('location: ../recipe?id=' . $favorite);
    }

}