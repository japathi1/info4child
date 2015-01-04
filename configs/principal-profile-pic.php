<?php
include("connection.php");

if(isset($_GET['pruid'])){
	$pruid = $_GET['pruid'];	
	$sql = "SELECT * FROM principal WHERE pruid='$pruid'";
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