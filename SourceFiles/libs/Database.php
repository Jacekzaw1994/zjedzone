<?php


class Database extends PDO
{

    public function __construct()
    {
        parent::__construct(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS,
                            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));

        //parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTIONS);
    }

    /**
     * insert
     * @param string $table A name of table to insert into
     * @param string $data An associative array
     */
//    public function insert($table, $data)
//    {
//      //  ksort($data);
//
//        $fieldNames = implode('`, `', array_keys($data));
//        $fieldValues = ':' . implode(', :', array_keys($data));
//
//        echo $fieldNames;
//        echo $fieldValues;
//        $sth = $this->prepare("INSERT INTO $table (`$fieldNames`) VALUES ($fieldValues)");
//        echo $sth;
//        foreach ($data as $key => $value) {
//            $sth->bindValue(":$key", $value);
//        }
//
//        $sth->execute();
//    }

    /**
     * update
     * @param string $table A name of table to insert into
     * @param string $data An associative array
     * @param string $where the WHERE query part
     */
//    public function update($table, $data, $where)
//    {
//        ksort($data);
//
//        $fieldDetails = NULL;
//        foreach ($data as $key => $value) {
//            $fieldDetails .= "`$key`=:$key,";
//        }
//        $fieldDetails = rtrim($fieldDetails, ',');
//
//        $sth = $this->prepare("UPDATE $table SET $fieldDetails WHERE $where");
//
//        foreach ($data as $key => $value) {
//            $sth->bindValue(":$key", $value);
//        }
//
//        $sth->execute();
//    }

}