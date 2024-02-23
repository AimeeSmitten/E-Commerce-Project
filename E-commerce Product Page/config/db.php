<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eco-friendly";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbname, 3306);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

