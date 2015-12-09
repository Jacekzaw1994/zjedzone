<?php

class Login extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->render('login/index');
    }

    function run()
    {
        $login = $_POST['username'];
        $password = $_POST['password'];
        $userId = $this->model->getUser($login, $password);
        if($userId >= 0){
            $random = rand(0,100000);
            setcookie("sessionId",$random, null, "/");
            $this->model->saveSessionId($userId, $random);
            header('location: http://localhost/zjedz/zjedz/SourceFiles/dashboard');
            exit();
        }else{
            header("location: ../login");
            exit();
        };

    }

}

