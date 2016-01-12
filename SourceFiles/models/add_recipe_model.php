<?php


class Add_Recipe_Model extends Model {
    function __construct() {
        parent::__construct();
    }

    public function createIngredients($ingredients, $calories, $protein, $fat, $carbohydrates, $dish_id ){

        foreach($ingredients as $value){
            $sth = $this->db->prepare("call save_ingredient(:category_id, :name, :calories, :protein, :fat, :carbohydrates, :type, :dish_id, :quantity");
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

        echo "dodano skladniki";
    }


    public function createRecipe( $category, $name, $description, $time, $level, $ingredients, $user_id ) {
        $short_description = implode(" ", array_slice(explode(" ",$description), 0, 25)) . "...";

        $sth = $this->db->prepare("select save_recipe( :category, :name, :description, :short_description, :time, :level, :user_id) as id;");
        $sth->execute(array(
            ":category" => $category,
            ":name" => $name,
            ":description" => $description,
            ":short_description" => $short_description,
            ":time" => $time,
            ":level" => $level,
            ":user_id" => $user_id
        ));

        $result = $sth->setFetchMode(PDO::FETCH_ASSOC);;
        $result = $sth->fetchAll();
        $current_dish_id = $result[0]['id'];

        echo "dodano danie o id=" . $current_dish_id;

        $this->createIngredients($ingredients, $category_id, $name, $calories, $protein, $fat, $carbohydrates, $type, $current_dish_id, $quantity );


    }
}
