<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "madenilife";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
} 
?>