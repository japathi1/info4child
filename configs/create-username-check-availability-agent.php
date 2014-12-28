<?php
include 'connection.php';

if(isset($_POST['CheckAvailability'])){
	$CheckAvailability = $_POST['CheckAvailability'];
	if($CheckAvailability == "CheckAvailability"){
		$username = $_POST['username'];
		session_start();
		$_SESSION['CheckUsername'] = $_POST['username'];
		
		$sql = "SELECT * FROM login WHERE username='$username' LIMIT 1";
		$result = mysqli_query($conn, $sql);
		
		if(mysqli_num_rows($result) > 0){
			// username is already in db
			header('Location: ../login/create-username.php?success=no');
			//echo "1 results";
		}else{
			// username is not in db
			header('Location: ../login/new-username-password.php');
			echo "0 results";
		}		
		
		
		
	}
}


include 'connection-close.php';

?>