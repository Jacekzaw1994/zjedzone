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

    public function addFavorite($favorite, $user_id){
        $sth = $this->db->prepare('call add_favorite(:favorite, :user_id);');
        $sth->execute(array(
            ':favorite' => $favorite,
            ':user_id' => $user_id
        ));
    }

    public function checkIfItsFavorite($user_id, $dish_id){
        $sth = $this->db->prepare('call select_favorite(:user_id);');
        $sth->execute(array(
            ':user_id' => $user_id
        ));
        $flag = 0;
        $favorites = $sth->fetchAll();
        var_dump($favorites);
        foreach($favorites as $value){
            if($dish_id == $value['id']){
                $flag = 1;
            }
        }
        return $flag;
    }
}
