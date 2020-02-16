<?php

class UserDB
{

    protected $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getList()
    {
        $sql = "SELECT * FROM users";
        $stmt = $this->conn->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];

        foreach ($result as $value) {
            $user = new User($value['id'], $value['name'], $value['age'], $value['address'], $value['avatar']);
            array_push($arr, $user);
        }

        return $arr;
    }

    public function create($user)
    {
        $id = $this->conn->lastInsertID();
        $name = $user->getName();
        $age = $user->getAge();
        $address = $user->getAddress();
        $avatar = $user->getAvatar();

        $sql = "INSERT INTO users (id,name,age,address,avatar) VALUES (?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->bindParam(2, $name);
        $stmt->bindParam(3, $age);
        $stmt->bindParam(4, $address);
        $stmt->bindParam(5, $avatar);
        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM users WHERE id = $id ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

    public function getID($id)
    {
        $sql = "SELECT * FROM users WHERE id = $id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        var_dump($result);
       return new User( $result[0]['id'], $result[0]['name'],$result[0]['age'],$result[0]['address'],$result[0]['avatar']
        );
    }
    public function edit( $id,$name,$age,$address,$avatar )
    {
//        $sql = "UPDATE users SET name = '$name', age = $age, address = '$address', avatar = '$avatar' WHERE id=$id";
//        $stmt = $this->conn->prepare($sql);
//        $stmt->execute();
        $sql = "UPDATE users SET name = '$name' , age = $age, address = '$address', avatar = '$avatar' WHERE id = $id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

}