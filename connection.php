<?php
$SERVER = "localhost";
$USER = "root";
$PASSWORD = "";
$db_NAME = "cms";

$con = mysqli_connect($SERVER, $USER, $PASSWORD, $db_NAME);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>