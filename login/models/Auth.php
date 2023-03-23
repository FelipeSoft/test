<?php
require_once("../dao/UserDaoMySql.php");

class Auth{
    private string $email;
    private string $password;
    private $pdo;

    public function __construct(string $email, string $password, $engine){
        $this->email = $email;
        $this->password = $password;
        $this->pdo = $engine;
    }

    public function checkCredentials(){
        // $dao = new UserDaoMySql($this->pdo);
        // if(password_verify($this->password, $dao->getUserByEmail($this->email)["password"])){
        //     return true;
        // }
        // return false;
    }
}