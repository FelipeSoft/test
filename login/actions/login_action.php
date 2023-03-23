<?php
require("../config.php");
require_once("../models/User.php");
require_once("../models/Auth.php");

$user = new User();
$dao = new UserDaoMySql($pdo);

$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

if($email && $password){
    print_r($dao->getUserByEmail($email));
    // $auth = new Auth($email, $password, $pdo);
    // if($auth->checkCredentials()){
    //     header("Location:../index.php");
    //     exit;
    // }
    // header("Location:../login.php");
    // exit;
}