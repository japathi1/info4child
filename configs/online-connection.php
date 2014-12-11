<?php
$servername = "sql2.freemysqlhosting.net";
$username = "sql260707";
$password = "tZ3%vF9%";
$dbname = "sql260707";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>