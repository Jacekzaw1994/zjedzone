<?php

class Add_Recipe extends Controller {
    function __construct(){
        parent::__construct();
    }

    function index() {
        $this->view->render('add_recipe/index');
    }



    function run() {
        $category = $_POST['category'];
        $name = $_POST['name'];
        $time = $_POST['time'];
        $level = $_POST['level'];
        $recipe = $_POST['recipe'];

        $this->model->createRecipe($category, $name, $time, $level, $recipe, $this->view->user );
        echo "dodalo sie";

    }
}