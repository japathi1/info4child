<?php
$servername = "qmaxprojector.db.13186736.hostedresource.com";
$username = "qmaxprojector";
$password = "Projector123#";
$dbname = "qmaxprojector";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>