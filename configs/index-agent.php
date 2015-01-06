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
		if($row["designation"] == "admin"){
			session_regenerate_id();
			$_SESSION['uid'] = $row["uid"];
			$_SESSION['FirstName'] = $row["FirstName"];	
			$_SESSION['DesignationHardCode'] = "admin";		
			header('Location: ../admin/index.php');
			//echo $row["designation"]."<br> Under construction";
		}elseif($row["designation"] == "management"){
			session_regenerate_id();
			echo $_SESSION['uid'] = $row["uid"];
			echo $_SESSION['FirstName'] = $row["FirstName"];	
			echo $_SESSION['DesignationHardCode'] = "management";	
			header('Location: ../managment/index.php');			
			//echo $row["designation"]."<br> Under construction";	
		}elseif($row["designation"] == "principal"){
			session_regenerate_id();
			echo $_SESSION['uid'] = $row["uid"];
			echo $_SESSION['FirstName'] = $row["FirstName"];	
			echo $_SESSION['DesignationHardCode'] = "principal";	
			header('Location: ../principal/index.php');		
			//echo $row["designation"]."<br> Under construction";	
		}elseif($row["designation"] == "teacher"){
			session_regenerate_id();
			echo $_SESSION['uid'] = $row["uid"];
			echo $_SESSION['FirstName'] = $row["FirstName"];	
			echo $_SESSION['DesignationHardCode'] = "teacher";	
			header('Location: ../teacher/index.php');				
			//echo $row["designation"]."<br> Under construction";
		}elseif($row["designation"] == "student"){
			session_regenerate_id();
			$_SESSION['uid'] = $row["uid"];
			$_SESSION['FirstName'] = $row["FirstName"];	
			$_SESSION['DesignationHardCode'] = "student";	
			header('Location: ../student/index.php');			
			//echo $row["designation"]."<br> Under construction";
		}else{
			echo "no designation";	
		}		
    }
}else{
	header('Location: ../login/login.php?success=no');
    //echo "0 results";
}



include 'connection-close.php';
?>