<?php

class User{
    private string $name;
    private string $email;
    private string $password;

    public function setUser(array $info){
        $this->name = $info['name'];
        $this->email = $info['email'];
        $this->password = $info['password'];
    }

    public function getUserAttribute(string $attribute){
        return $this->$attribute;
    }
}