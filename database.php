<?php
// MySQL database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "college";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set character set to utf8
$conn->set_charset("utf8");

// Uncomment the line below for debugging purposes
//echo "Connected successfully";
?>
