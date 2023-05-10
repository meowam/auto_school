<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/function.php');

// Дані для підключення до бази даних
$server = "localhost";
$username = "root";
$password = "";
$dbname = "auto_school";

// підключення до бази даних 
$conn = mysqli_connect($server, $username, $password, $dbname);
$conn->set_charset("utf8mb4");
//  встановимо кодування для коректного відображення кирилиці
if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}
