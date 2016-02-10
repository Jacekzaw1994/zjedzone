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

    public function addFavorite($user_id, $favorite){
        $sth = $this->db->prepare('call add_favorite(:user_id, :favorite);');
        $sth->execute(array(
            ':user_id' => $user_id,
            ':favorite' => $favorite
        ));
    }

    public function checkIfItsFavorite($user_id, $dish_id){
        $sth = $this->db->prepare('call select_favorite(:user_id);');
        $sth->execute(array(
            ':user_id' => $user_id
        ));
        $flag = 0;
        $favorites = $sth->fetchAll();
        foreach($favorites as $value){
            if($dish_id == $value['dish_id']){
                $flag = 1;
            }
        }
        return $flag;
    }
}
