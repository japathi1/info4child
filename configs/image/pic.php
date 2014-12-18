<?php
include("../connection.php");
$sql = "SELECT * FROM student WHERE id='5'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    // login success - output data of each row
    while($row = mysqli_fetch_assoc($result)){
		$image = $row["ImageUpload"];		
    }
}else{
	//header('Location: ../login/login.php');
    echo "0 results";
}

if(!empty($image)){
	echo "<img src=\"see.php?id=5\" width=\"240\" height=\"240\">";
}else{
	echo "no image";	
}
?>