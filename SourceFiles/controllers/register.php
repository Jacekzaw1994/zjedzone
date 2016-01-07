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
        $email = $_POST['email'];
        $login = $_POST['username'];
        $password = $_POST['password'];
        $r_password = $_POST['repeatpass'];
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];

        if($password === $r_password ){
            $this->model->createUser($email, $login, $password, $first_name, $last_name );
            header('location: ../login');
            exit;
        } else {
            echo "hasła są różne!";
        }
    }

    function checkEmail() {
        $email = $_POST['email'];
        $is_email_free = $this->model->isUserExist($email);
        header('Content-Type: application/json');
        echo json_encode(array('isUserExist' => $is_email_free));
        exit;
    }
}