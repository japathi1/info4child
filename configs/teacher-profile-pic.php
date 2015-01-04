<?php
include("connection.php");

if(isset($_GET['teuid'])){
	$teuid = $_GET['teuid'];	
	$sql = "SELECT * FROM teacher WHERE teuid='$teuid'";
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
			$Image =  $row["ImageUpload"];
		}
	}
	header("Content-type: image/jpeg");
	echo $Image;
}

include("connection-close.php");
?>