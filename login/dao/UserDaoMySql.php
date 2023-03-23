<?php
require("../config.php");
require_once("../models/User.php");

class UserDaoMySql{
    private $pdo;
    public function __construct($engine){
        $this->pdo = $engine;
    }

    public function all(){

    }

    public function create(User $user){
        $sql = $this->pdo->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
        if($this->getUserByEmail($user->getUserAttribute("email"))){
            header("Location:../register.php");
            exit;
        } else {
            $sql->bindValue(":name", $user->getUserAttribute("name"));
            $sql->bindValue(":email", $user->getUserAttribute("email"));
            $sql->bindValue(":password", $user->getUserAttribute("password"));
            $sql->execute();

            header("Location:../index.php");
            exit;
        }
    }

    public function getUserByEmail(string $email){
        $sql = $this->pdo->prepare("SELECT * FROM users WHERE email = :email");
        $sql->bindValue(":email", $email);
        $sql->execute();

        if($sql->rowCount() > 0){
            return false;
        } else {
            return $sql->fetch(PDO::FETCH_ASSOC);
        }
    }
}