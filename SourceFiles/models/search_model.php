<?php

class Search_Model extends Model {
    function __construct() {
        parent::__construct();
    }

    public function getAllByName($piece) {
        $sth = $this->db->prepare('call live_search(:piece);');
        $sth->execute(array(
            ':piece' => $piece
        ));
        if ($sth->rowCount() == 0){
            echo "Nie znaleziono składników.";
        } else {
            while($data = $sth->fetch()){
                echo '<div>' . $data['name'] . '</div>';
            }
        }
    }

    public function getRecipesByIngredients($ingredients){
        $number_of_ingredients = count($ingredients);
        $qMarks = str_repeat('?,', $number_of_ingredients - 1) . '?';
        $sth = $this->db->prepare("SELECT dishes.id, dishes.categorie_id, dishes.name, dishes.image_path,
                                   dishes.short_description, dishes.time, dishes.level, dishes.user_id
                                   FROM dishes JOIN dish_ingredients ON dishes.id = dish_ingredients.dish_id
                                   JOIN products ON dish_ingredients.product_id = products.id WHERE
                                   products.name IN ($qMarks) GROUP BY dishes.id, dishes.categorie_id, dishes.name,
                                   dishes.image_path, dishes.short_description, dishes.time, dishes.level, dishes.user_id
                                   HAVING COUNT(DISTINCT products.name) = ($number_of_ingredients)");
        $sth->execute($ingredients);

        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

}
