<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */

class User
{
    protected string $email;
    protected string $password;

    public function __construct(){

    }

    public function login() : array {
        return ["login" => $this->email, "password" => $this->password];
    }
}