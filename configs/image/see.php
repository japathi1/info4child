<?php
include("../connection.php");

if(isset($_GET['id'])){
	$id = $_GET['id'];	

$sql = "SELECT * FROM student WHERE id='$id'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
		$Image =  $row["ImageUpload"];
	}
}
	header("Content-type: image/jpeg");
	echo $Image;
}
?>