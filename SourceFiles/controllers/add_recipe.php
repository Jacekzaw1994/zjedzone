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
        $description = $_POST['recipe'];
        $ingredients = $_POST['ingredients'];
        $user_id = $this->view->user["id"];


        $dish_id = $this->model->createRecipe($category, $name, $description, $time, $level, $ingredients, $user_id );

       header('location: ../recipe?id=' . $dish_id);

    }
}