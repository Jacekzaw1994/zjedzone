<?php

class Recipe_Model extends Model {
    function __construct() {
        parent::__construct();
    }

    public function getRecipeFromDB($dish_id){

        $sth = $this->db->prepare('call get_recipe(:dish_id);');
        $sth->execute(array(
           ':dish_id' => $dish_id
        ));

        $recipe = $sth->fetch();
        $sth->nextRowset();
        $recipe['ingredients'] = $sth->fetchAll();
        return $recipe;
    }
}
