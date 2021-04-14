<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "canteen";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn)
{
    die("Error!!");
    exit();
}
?>