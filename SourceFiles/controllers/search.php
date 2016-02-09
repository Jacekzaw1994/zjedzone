<?php


class Search extends Controller {
    function __construct(){
        parent::__construct();
    }

    function index() {
        $this->view->render('search/index');
    }

    function searchByIngredients() {
        if(isset($_POST['ingredient']) && $_POST['ingredient'] != ""){
            $piece = $_POST['ingredient'];
            $this->model->getAllByName($piece);
        }
        else {
        }
    }

    function run() {
        $ingredients = $_POST['ingredients'];
        $ingredient_array = explode('|', $ingredients);

        header('Content-Type: application/json');
        echo json_encode($this->model->getRecipesByIngredients($ingredient_array));
        exit;
    }
}
