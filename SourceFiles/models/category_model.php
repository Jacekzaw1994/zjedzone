<?php

class Category_Model extends Model {
    function __construct() {
        parent::__construct();
    }

    public function getRecipesByCategory($category){

        $sth = $this->db->prepare('call get_recipe_list(:category);');
        $sth->execute(array(
            ':category' => $category
        ));

        $recipes= $sth->fetchAll();
        return $recipes;
    }


}
