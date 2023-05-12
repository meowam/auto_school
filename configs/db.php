<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/function.php');

$server = "localhost";
$username = "root";
$password = "";
$dbname = "auto_school";

$conn = mysqli_connect($server, $username, $password, $dbname);
$conn->set_charset("utf8mb4");

if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}
