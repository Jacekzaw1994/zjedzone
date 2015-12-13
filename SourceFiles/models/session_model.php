<?php

class Session_Model extends Model {
    function __construct() {
        parent::__construct();
    }

    function checkSession($session){
        $sth = $this->db->prepare("SELECT session_id from users_sesions WHERE session_id = $session");
        $sth->execute();
        $sessionToReturn = -1;
        foreach($sth->fetchAll() as $val){
            $sessionToReturn = $val['session_id'];
        }
        return $sessionToReturn;
    }

    function test() {
        echo "Hello";
    }
}

?>