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

        if($new_passwd === $r_new_passwd ){
            $this->model->changePassword($new_passwd );
        } else {
            echo "hasła są różne!";
        }
    }
}