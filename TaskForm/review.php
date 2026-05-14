<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $firstname  = $_POST['FirstName'];
    $lastname   = $_POST['LastName'];
    $address    = $_POST['address'];
    $department = $_POST['Department'];
    $gender     = $_POST['gender'];

    $php        = isset($_POST['php'])        ? $_POST['php']        : "";
    $j2se       = isset($_POST['j2se'])       ? $_POST['j2se']       : "";
    $mysql      = isset($_POST['mysql'])      ? $_POST['mysql']      : "";
    $postgresql = isset($_POST['postgresql']) ? $_POST['postgresql'] : "";

    $title = ($gender == "Male") ? "Mr." : "Miss";

    echo "Thanks $title $firstname $lastname <br><br>";
    echo "Please Review Your Information: <br><br>";
    echo "Name: $firstname $lastname <br><br>";
    echo "Address: $address <br><br>";

echo "Your Skills: <br>";
if ($php)        echo "<br>  $php";
if ($j2se)       echo "<br>  $j2se";
if ($mysql)      echo "<br>  $mysql";
if ($postgresql) echo "<br> $postgresql";

    echo "<br>";
    echo "Department: $department <br>";
}
?>