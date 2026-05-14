<?php

require_once __DIR__ . "/Auth.php";
require_once __DIR__ . "/User.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    $user = new User(
        $username,
        $password,
        $email
    );

    Auth::register(
        $user->getUsername(),
        $user->getPassword(),
        $user->getEmail()
    );

    echo "register success";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>register</title>
</head>

<body>

    <h1>form register</h1>

    <form method="post">

        <input type="text"
            name="username"
            placeholder="enter username">

        <br><br>

        <input type="password"
            name="password"
            placeholder="enter password">

        <br><br>

        <input type="email"
            name="email"
            placeholder="enter email">

        <br><br>

        <input type="submit"
            value="register">

    </form>

</body>

</html>