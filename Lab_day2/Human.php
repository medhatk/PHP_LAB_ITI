<?php

class Human
{
    protected $username;
    protected $password;

    function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    function getUsername()
    {
        return $this->username;
    }

    function getPassword()
    {
        return $this->password;
    }

    function printData()
    {
        echo "username : " . $this->username . "<br>";
        echo "password : " . $this->password . "<br>";
    }
}