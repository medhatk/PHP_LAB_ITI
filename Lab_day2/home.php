<?php

session_start();

if (!isset($_SESSION["username"])) {

    echo "you must login first";

    exit();
}
?>

<h1>
    welcome
    <?php
    echo $_SESSION["username"];
    ?>
</h1>