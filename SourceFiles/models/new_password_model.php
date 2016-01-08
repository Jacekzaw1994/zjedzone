<?php

class Register_Model extends Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function changePassword( $new_password) {
        //password juz ma byc zakodowane w javascript i potem:
        // $salt = rand(0,10000)
        // zapisz salt do bazy danych;
        // $pass = hash('sha256',$passwrod.$salt);
        $new_password = Hash::create('sha256',$new_password ,HASH_PASSWORD_KEY);
        $current_user_email = $this->

        $sth = $this->db->prepare("UPDATE users SET password = :newpassword WHERE email = ");
        $sth->execute(array(
            ':newpassword' => $new_password
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