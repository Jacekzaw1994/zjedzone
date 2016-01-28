<?php

class Category_Model extends Model {
    function __construct() {
        parent::__construct();
    }

    public function categoryObject() {
       // $sth = $this->db->prepare('call get_recipe(:dish_id);'); /// pobieranie kategorii
        $sth->execute();
    }
}
