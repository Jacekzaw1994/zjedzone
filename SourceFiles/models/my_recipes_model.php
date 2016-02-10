<?php

class My_Recipes_Model extends Model {
    function __construct() {
        parent::__construct();
    }

    public function getRecipesByCategory($user, $start, $perPage){

        $sth = $this->db->prepare('call get_my_recipes(:user, :start, :per_page);');
        $sth->execute(array(
            ':user' => $user,
            ':start' => $start,
            ':per_page' => $perPage
        ));


        $recipes= $sth->fetchAll();

        return $recipes;
    }

//    public function getCategory($category_id){
//
//        $sth = $this->db->prepare('call get_category_details(:category_id);');
//        $sth->execute(array(
//            ':category_id' => $category_id
//        ));
//
//        $category = $sth->fetchAll();
//        return $category;
//    }

    public function getNumberOfRecipes($user_id){
        $sth = $this->db->prepare('call get_number_of_my_recipes(:user_id);');
        $sth->execute(array(
            ':user_id' => $user_id
        ));

        $number = $sth->fetch();
        return $number;
    }


}
