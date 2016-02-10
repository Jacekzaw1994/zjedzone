<?php


class Add_Recipe_Model extends Model {
    function __construct() {
        parent::__construct();
    }


    public function createRecipe( $category, $name, $image_path, $description, $time, $level, $ingredients, $user_id ) {
        $this->db->beginTransaction();
        try
        {
            $this->db->query("SET TRANSACTION ISOLATION LEVEL READ UNCOMMITTED");

            $short_description = implode(" ", array_slice(explode(" ", $description), 0, 25)) . "...";
            $sth = $this->db->prepare("select save_recipe( :category, :name, :image_path, :description, :short_description, :time, :level, :user_id) as id;");
            $sth->execute(array(
                ":category" => $category,
                ":name" => $name,
                ":image_path" => $image_path,
                ":description" => $description,
                ":short_description" => $short_description,
                ":time" => $time,
                ":level" => $level,
                ":user_id" => $user_id
            ));
            $result = $sth->setFetchMode(PDO::FETCH_ASSOC);;
            $result = $sth->fetchAll();
            $current_dish_id = $result[0]['id'];
            $this->createIngredients($ingredients, 0, 0, 0, 0, $current_dish_id);

            $this->db->commit();

            return $current_dish_id;
        }catch (PDOException $e)
        {
            $this->db->rollback();

            return null;
        }



    }


    public function createIngredients($ingredients, $calories, $protein, $fat, $carbohydrates, $dish_id ){

        foreach($ingredients as $value){
            $sth = $this->db->prepare("call save_ingredient(:category_id, :name, :calories, :protein, :fat, :carbohydrates, :type, :dish_id, :quantity);");
            $sth->execute(array(
                ":category_id" => $value['category'],
                ":name" => $value['name'],
                ":calories" => $calories,
                ":protein" => $protein,
                ":fat" => $fat,
                ":carbohydrates" => $carbohydrates,
                ":type" => $value['type'],
                ":dish_id" => $dish_id,
                ":quantity" => $value['quantity']
            ));


        }

    }
}
