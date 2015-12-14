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

            $sth = $this->db->prepare("INSERT INTO users_sesions VALUES(null,$userId,$session);");
            $sth->execute();

        }
        catch(Exception $e){

        }
    }
}
