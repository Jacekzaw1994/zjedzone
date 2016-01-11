<?php


class New_Password extends Controller {
    function __construct(){
        parent::__construct();
    }

    function index() {
        $this->view->render('new_password/index');
    }



    function run() {
        $current_passwd = $_POST['currentpasswd'];
        $new_passwd = $_POST['newpasswd'];
        $r_new_passwd = $_POST['repeatnewpasswd'];
        $current_passwd = Hash::create('sha256',$current_passwd ,HASH_PASSWORD_KEY);
        $user_email = $this->view->user['email'];
        if($current_passwd === $this->view->user['password']) {
            if ($new_passwd === $r_new_passwd) {
                $this->model->changePassword($new_passwd, $user_email);
            } else {
                echo "hasła są różne!";
            }
        } else {
            echo "wprowadzono nieprawidłowe hasło";
        }
    }
}