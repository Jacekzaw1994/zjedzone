<?php


class Add_Recipe_Model extends Model {
    function __construct() {
        parent::__construct();
    }

    public function createRecipe( $category, $name, $time, $level, $description, $user ) {
        $short_description = implode(" ", array_slice(explode(" ",$description), 0, 25)) . "...";
        $user_id = $user['id'];
        $sth = $this->db->prepare("INSERT INTO dishes VALUES (NULL, 1, :name, :description, :short_description, :time, :level, :user_id)");
        $sth->execute(array(
            ':name' => $name,
            ':description' => $description,
            ':short_description' => $short_description,
            ':time' => $time,
            ':level' => $level,
            ':user_id' => $user_id
        ));

    }
}
