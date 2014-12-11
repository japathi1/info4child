<?php
session_start();

include 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$designation = $_SESSION['designation'];
$email = $_SESSION['EmailId'];
$uid = $_SESSION['uid'];
$FirstName = $_SESSION['FirstName'];

$_SESSION['CheckUsername'];

$sql = "INSERT INTO login (username,
							password,
							designation,
							email,
							uid,
							FirstName
							) VALUES (							
							'$username',
							'$password',
							'$designation',
							'$email',
							'$uid',
							'$FirstName'										
							)";
							
if ($conn->query($sql) === TRUE) {
	$sql = "UPDATE student SET IsActive='yes' WHERE stuid='uid'";
	
	if ($conn->query($sql) === TRUE) {
		header('Location: ../login/register-done.php');
		//echo "Account activated";
	} else {
		echo "Error Account active: " . $conn->error;
	}	
	//echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}		



include 'connection-close.php';
?>