<?php

class Category_Model extends Model {
    function __construct() {
        parent::__construct();
    }

    public function getRecipesByCategory($category, $start, $perPage){

        $sth = $this->db->prepare('call get_recipe_list(:category, :start, :per_page);');
        $sth->execute(array(
            ':category' => $category,
            ':start' => $start,
            ':per_page' => $perPage
        ));


        $recipes= $sth->fetchAll();

        return $recipes;
    }

    public function getCategory($category_id){

        $sth = $this->db->prepare('call get_category_details(:category_id);');
        $sth->execute(array(
            ':category_id' => $category_id
        ));

        $category = $sth->fetchAll();
        return $category;
    }

    public function getNumberOfRecipes($category_id){
        $sth = $this->db->prepare('call get_number_of_recipes(:category_id);');
        $sth->execute(array(
            ':category_id' => $category_id
        ));

        $number = $sth->fetch();
        return $number;
    }


}
