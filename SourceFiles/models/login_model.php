<?php

class Login_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function getUser($login, $password){
        try {
            $sth = $this->db->prepare("call get_user(:login,:password);");
            $sth->execute(array(
                ":login" => $login,
                ":password" => hash('sha256', $password)
            ));
            $id = -1;
            if ($sth->rowCount() > 0) {
                foreach ($sth->fetchAll() as $value) {
                    $id = $value['id'];
                }
                return $id;
            } else {
                return $id;
            }
        }catch(Exception $e){
            return -1;
        }
    }

    public function saveSessionId($userId, $session){
        try{

            $sth = $this->db->prepare("INSERT INTO users_sesions VALUES(null,$userId,$session)");
            $sth->execute();

        }
        catch(Exception $e){

        }
    }
/*
    public function run() {
        $password = hash('sha256',$_POST['password']);
        $sth = $this->db->prepare("SELECT id FROM users WHERE
				username = :username AND password = :password");
        $sth->execute(array(
            ':username' => $_POST['username'],
            ':password' => $password
        ));

        //$data = $sth->fetchAll();
        $count = $sth->rowCount();
        if ($count > 0) {
            //login

            $id = md5(rand(-10000, 10000) . microtime()) . md5(crc32(microtime()));
            $this->db->prepare("DELETE FROM users_sessions WHERE user_id = $sth");
            $this->db->prepare("INSERT INTO sesja (id, user_id, created_at) VALUES
              ('$id','$sth','$data')");

            setcookie('id',$id, time()+1200);
            setcookie('user_id',$sth,time()+1200);
            echo "zalogowano pomyślnie!";
            header('location: ../dashboard');
        } else {
            echo "błąd logowania!";
            header('location: ../login');
        };

            /*Session::init();
            Session::set('loggedIn', true);
            header('location: ../dashboard');
        }else {
            header('location: ../login');
        }*/
  //  } */
}
