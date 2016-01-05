<?php


class Add_Recipe extends Controller {
    function __construct(){
        parent::__construct();
    }

    function index() {
        $this->view->render('add_recipe/index');
    }
}
