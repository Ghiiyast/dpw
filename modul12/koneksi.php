<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "db_praktik";

$con = new mysqli($hostname, $username, $password, $database);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>