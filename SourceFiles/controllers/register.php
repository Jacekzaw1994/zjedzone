<?php
/**
 * Created by PhpStorm.
 * User: Jacek
 * Date: 2015-11-24
 * Time: 23:23
 */


class Register extends Controller {
    function __construct(){
        parent::__construct();
    }

    function index() {
        $this->view->render('register/index');
    }



    function run() {
        $login = $_POST['username'];
        $password = $_POST['password'];
        $r_password = $_POST['repeatpass'];
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];

        if($password === $r_password ){
            $this->model->createUser($login, $password, $first_name, $last_name );
            header('location: ../login');
        } else
        {
            echo "hasła są różne!";
        }
    }
}