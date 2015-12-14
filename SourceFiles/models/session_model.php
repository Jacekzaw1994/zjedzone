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

    function getSessionUser($session) {
        $sth = $this->db->prepare("SELECT users.* FROM users JOIN users_sesions ON users.id = users_sesions.user_id WHERE session_id = $session");
        $sth->execute();
        $results = $sth->fetchAll();
        if (count($results) > 0){
            return $results[0];
        } else {
            return null;
        }

    }

    function deleteSession($session) {
        $sth = $this->db->prepare("DELETE FROM users_sesions WHERE session_id = $session ");
        $sth->execute();
    }
}

?>