<?php

session_start();

require_once __DIR__ . "/Auth.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $check = Auth::login(
        $username,
        $password
    );

    if ($check) {

        $_SESSION["username"] = $username;

        header("location:home.php");

    } else {

        $error = "invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>login</title>
</head>

<body>

    <h1>form login</h1>

    <form method="post">

        <input type="text"
            name="username"
            placeholder="enter username">

        <br><br>

        <input type="password"
            name="password"
            placeholder="enter password">

        <br><br>

        <input type="submit"
            value="login">

    </form>

    <br>

    <?php
    echo $error;
    ?>

</body>

</html>