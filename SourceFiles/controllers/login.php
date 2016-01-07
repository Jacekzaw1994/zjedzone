<?php

class Login extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->someoneIsLoggedIn = 1;
        if($this->isLoggedIn()) {
            $this->view->someoneIsLoggedIn = 0;
        }
    }

    function index()
    {
        $this->view->render('login/index');
    }

    function run()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $userId = $this->model->getUser($email, $password);
        // pobierz z DB salt i $password = hash(sha512, $password.pobrana z bazy danych salt) i to jest Twoje haslo ktore porownujesz
        if($userId >= 0){
            $random = rand(0,100000);
            setcookie("sessionId",$random, null, "/");
            $this->model->saveSessionId($userId, $random);
            header('location: ../dashboard');
            exit();
        }else{
            header("location: ../login");
            exit();
        };

    }

}

