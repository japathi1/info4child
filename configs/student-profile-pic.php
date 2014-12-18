<?php
include("connection.php");

if(isset($_GET['stuid'])){
	$stuid = $_GET['stuid'];	
	$sql = "SELECT * FROM student WHERE stuid='$stuid'";
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