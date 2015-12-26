<?php

class Register_Model extends Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function createUser( $username, $password, $name, $surname) {
        //password juz ma byc zakodowane w javascript i potem:
        // $salt = rand(0,10000)
        // zapisz salt do bazy danych;
        // $pass = hash('sha256',$passwrod.$salt);
        $password = hash('sha256',$password);

        $sth = $this->db->prepare("INSERT INTO users VALUES (NULL, :username, :password, :name, :surname, 666)");
        $sth->execute(array(
            ':username' => $username,
            ':password' => $password,
            ':name' => $name,
            ':surname' => $surname
        ));

    }


}

?>