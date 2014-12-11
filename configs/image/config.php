<?php
/*
	* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
	* Developed By : www.smartcoderszone.com [ Amit Kumar Paliwal ] *
	* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
*/

// Database connection variables
$dbServer = "localhost";
$dbDatabase = "testblob";
$dbUsername = "root";
$dbPassword = "";

$Conn = mysql_connect($dbServer, $dbUsername, $dbPassword) or die("Couldn't connect to database server");
mysql_select_db($dbDatabase, $Conn) or die("Couldn't connect to database $dbDatabase");

?>