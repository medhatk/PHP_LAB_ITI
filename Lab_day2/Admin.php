<?php

require_once __DIR__ . "/Human.php";

class Admin extends Human
{
    static function message()
    {
        echo "welcome admin";
    }
}