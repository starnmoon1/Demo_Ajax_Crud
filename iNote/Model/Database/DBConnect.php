<?php

use PDO;
class DBConnect
{
    public $dsn;
    public $user;
    public $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost; dbname=iNote; charset = utf8";
        $this->user = "thangdo";
        $this->password = "@Dohuythang123";
    }

    public function connect()
    {
        $conn = null;
        try{
            $conn = new \PDO($this->dsn, $this->user, $this->password);
        }
        catch (PDOException $e){
            echo $e->getMessage();
        }

        return $conn;
    }


}