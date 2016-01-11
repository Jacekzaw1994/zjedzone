<?php

class New_Password_Model extends Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function changePassword( $new_password, $user_email) {
        //password juz ma byc zakodowane w javascript i potem:
        // $salt = rand(0,10000)
        // zapisz salt do bazy danych;
        // $pass = hash('sha256',$passwrod.$salt);
        $new_password = Hash::create('sha256',$new_password ,HASH_PASSWORD_KEY);

        $sth = $this->db->prepare("UPDATE users SET password = :newpassword WHERE email = :useremail ");
        $sth->execute(array(
            ':newpassword' => $new_password,
            ':useremail' => $user_email
        ));

    }
}

?>