<?php

class Category_Model extends Model {
    function __construct() {
        parent::__construct();
    }

    public function categoryObject() {
        $sth = $this->db->prepare('call get_category();'); /// pobieranie kategorii
        $sth->execute();

        $category = $sth->fetchAll();

        var_dump($category);

        return $category;
    }
}
