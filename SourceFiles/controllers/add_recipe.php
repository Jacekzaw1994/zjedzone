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
        $ingredients = $_POST['ingredients'];
        $user_id = $this->view->user["id"];

        $sth->$this->db->prepare("call save_recipe(:category,:name, :description, :short_description, :time, :level, :user_id);");
        $sth->execute(array(
            ":category" => $category,
            ":name" => $name,
            ":description" => $recipe,
            ":short_description" => $recipe,
            ":time" => $time,
            ":level" => $level,
            ":user_id" => $user_id
        ));

        foreach($ingredients as $value1){

        }

        var_dump($_POST);

        $this->model->createRecipe($category, $name, $time, $level, $recipe, $this->view->user );

        header('location: ../recipe');

    }
}