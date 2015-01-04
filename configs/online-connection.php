<?php
$servername = "85.10.205.173";
$username = "info4childroot";
$password = "rootpass";
$dbname = "info4childdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>