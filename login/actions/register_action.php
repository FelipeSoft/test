<?php
require("../config.php");
require_once("../dao/UserDaoMySql.php");
require_once("../models/User.php");

$user = new User();
$dao = new UserDaoMySql($pdo);

$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

if($name && $email && $password){
    $info = [
        'name' => $name,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT)
    ];
    $user->setUser($info);
    $dao->create($user);

    header("Location:../index.php");
    exit;
}

header("Location:../register.php");
exit;



