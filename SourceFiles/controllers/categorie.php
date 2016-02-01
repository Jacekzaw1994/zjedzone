<?php

class Categorie extends Controller{

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->categories = $this->model->categorieObject();
        $this->view->render('categorie/index');
    }


}
