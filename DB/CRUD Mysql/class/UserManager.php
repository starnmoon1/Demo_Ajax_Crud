<?php
class UserManager{
    protected $userDB;

    public function __construct()
    {
        $db = new DBConnect("mysql:host=localhost;dbname=CRUDtrain",'root','password');
        $this->userDB = new UserDB($db->conncect());
    }

    public function getList(){
        return $this->userDB->getList();
    }
    public function add($user)
    {
        $this->userDB->create($user);
    }

    public function delete($id)
    {
        $this->userDB->delete($id);
    }

    public function getId($id){
      return  $this->userDB->getID($id);
    }

    public function edit( $id,$name,$age,$address,$avatar ){
        return  $this->userDB->edit( $id,$name,$age,$address,$avatar );
    }


}