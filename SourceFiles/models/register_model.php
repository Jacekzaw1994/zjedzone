<?php

class Register_Model extends Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function createUser( $email, $username, $password, $name, $surname) {
        //password juz ma byc zakodowane w javascript i potem:
        // $salt = rand(0,10000)
        // zapisz salt do bazy danych;
        // $pass = hash('sha256',$passwrod.$salt);
        $password = Hash::create('sha256',$password ,HASH_PASSWORD_KEY);

//        $this->db->insert('users', array(
//            'id' => null,
//            'username' => $username,
//            'password' => $password,
//            'name' => $name,
//            'surname' => $surname,
//            'salt' => HASH_PASSWORD_KEY
//        ));

        $sth = $this->db->prepare("INSERT INTO users VALUES (NULL, :email, :username, :password, :name, :surname, :salt)");
        $sth->execute(array(
            ':email' => $email,
            ':username' => $username,
            ':password' => $password,
            ':name' => $name,
            ':surname' => $surname,
            ':salt' => HASH_PASSWORD_KEY
        ));

    }

    public function isUserExist( $email ) {
        $sth = $this->db->prepare("SELECT id FROM users WHERE email = :email");
        $sth->execute(array(
            ':email' => $email
        ));
        $results = $sth->fetchAll();
        return count($results) > 0;
    }
}

?>