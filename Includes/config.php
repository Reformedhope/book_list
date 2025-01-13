<?php
ob_start();//turns on output buffering.
session_start();
date_default_timezone_set("America/Detroit");

try {
    $con = new PDO("mysql:dbname=books;host=localhost:3307", "root", "");
    $con ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

}catch(PDOException $e) {
    exit("connection failed:" . $e ->getMessage());
    

}

// $servername = "localhost";
// $username = "root";
// $password = "root";

// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli('localhost', 'user', 'pass', 'db_name', 4306);
// $mysqli->set_charset('utf8mb4');

?>