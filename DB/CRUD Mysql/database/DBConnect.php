<?php

class DBConnect {
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct($dsn,$username,$password)
    {
        $this->username = $username;
        $this->password = $password;
        $this->dsn = $dsn;
    }

    public function conncect() {
        $conn = null;
        try {
            $conn = new PDO($this->dsn,$this->username,$this->password);
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }
        return $conn;
    }



}