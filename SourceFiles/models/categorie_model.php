<?php

class Categorie_Model extends Model {
    function __construct() {
        parent::__construct();
    }

    public function categorieObject() {
        $sth = $this->db->prepare('call get_category();'); /// pobieranie kategorii
        $sth->execute();

        $categorie = $sth->fetchAll();

        return $categorie;
    }
}
