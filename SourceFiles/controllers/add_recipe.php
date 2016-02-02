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
        $file_name = $_FILES['image']['name'];
        $file_type = $_FILES['image']['type'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_error = $_FILES['image']['error'];

        if ($file_error > 0){
            $image_path = null;
        } else {
            if($file_type == "video/avi")
            {
                die("This format is not allowed!");
            }else {
                move_uploaded_file($file_tmp, ROOT_DIR . "/public/images/recipes_images/" . $file_name);
                $image_path = SITE_ROOT . "public/images/recipes_images/" . $file_name;
            }
        }


        $dish_id = $this->model->createRecipe($category, $name, $image_path, $description, $time, $level, $ingredients, $user_id );

       header('location: ../recipe?id=' . $dish_id);

    }
}