<?php
session_start();

include 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];
$designation = $_POST['designation'];

$sql = "SELECT * FROM login WHERE username='$username' AND password='$password' AND designation='$designation'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    // login success - output data of each row
    while($row = mysqli_fetch_assoc($result)){
		$row["id"];
		$row["username"];
		$row["password"];
		$row["designation"];
		$row["email"];
		If($row["designation"] == "admin"){
			session_regenerate_id();
			$_SESSION['uid'] = $row["uid"];
			$_SESSION['FirstName'] = $row["FirstName"];			
			header('Location: ../admin/index.php');
			//echo $row["designation"]."<br> Under construction";
		}elseif($row["designation"] == "management"){
			echo $row["designation"]."<br> Under construction";	
		}elseif($row["designation"] == "principal"){
			echo $row["designation"]."<br> Under construction";	
		}elseif($row["designation"] == "teacher"){
			echo $row["designation"]."<br> Under construction";
		}else{
			echo $row["designation"]."<br> Under construction";	
		}		
    }
}else{
	header('Location: ../login/login.php');
    //echo "0 results";
}



include 'connection-close.php';
?>