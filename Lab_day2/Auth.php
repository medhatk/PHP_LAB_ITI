<?php

class Auth
{
    static $file = __DIR__ . "/users.txt";

    static function register($username, $password, $email)
    {
        $data =
            $username . "," .
            $password . "," .
            $email . "\n";

        file_put_contents(
            self::$file,
            $data,
            FILE_APPEND
        );
    }

    static function login($username, $password)
    {
        if (file_exists(self::$file)) {

            $users = file(self::$file);

            foreach ($users as $user) {

                $userData = explode(",", trim($user));

                if (
                    $userData[0] == $username &&
                    $userData[1] == $password
                ) {
                    return true;
                }
            }
        }

        return false;
    }
}