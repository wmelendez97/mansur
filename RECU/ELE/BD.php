<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "sipm";

$con = mysqli_connect($servername, $username, $password,$db);
$con->set_charset("utf8");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>