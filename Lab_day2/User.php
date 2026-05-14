<?php

require_once __DIR__ . "/Human.php";

class User extends Human
{
    protected $email;

    function __construct($username, $password, $email)
    {
        parent::__construct($username, $password);

        $this->email = $email;
    }

    function getEmail()
    {
        return $this->email;
    }

    function printData()
    {
        parent::printData();

        echo "email : " . $this->email . "<br>";
    }
}