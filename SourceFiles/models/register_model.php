<?php

class Register_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function inputData() {
        $username = $_POST['username'];
        $password = hash('sha256',$_POST['password']);
      //  $r_password = $_POST['repeatpass'];
     //   if( $password != $r_password ){
     //       echo 'rozne hasla';
     //   } else
     //   {
     //       $password = hash('sha256',$_POST['password']);
     //   }

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $sth = $this->db->prepare("INSERT INTO users VALUES NULL, $username, $password, $name, $surname, 2 ");
        $sth->execute(array(
            ':username' => $_POST['username'],
            ':password' => $password,
            ':name' => $name,
            ':surname' => $surname
        ));

    }
}

?>