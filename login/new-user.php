<?php
include '../configs/connection.php';

//Link check begins
if(isset($_GET['uid'])){
	$uid=$_GET['uid'];
	
	$des = substr($uid, 0, 2);
	
	if($des == "st"){
		echo $designation = "student";		
		
		$sql = "SELECT * FROM student WHERE stuid='$uid' AND designation='$designation' AND IsActive='no'";
		$result = mysqli_query($conn, $sql);
		
		if(mysqli_num_rows($result) > 0){
			// login success - output data of each row
			while($row = mysqli_fetch_assoc($result)){
				session_start();
				$_SESSION['uid'] = $row["stuid"];
				$_SESSION['FirstName'] = $row["FirstName"];
				$_SESSION['designation'] = $row["designation"];
				$_SESSION['EmailId'] = $row["EmailId"];	
				header('Location: create-username.php');			
				//echo "1 results";				
			}
		}else{
			header('Location: invalid-link.php');
			//echo "0 results";
		}					
	}elseif($des == "te"){
		echo $designation = "teacher";		
		echo "<br>teacherXX";		
		
	}elseif($des == "pr"){
		echo $designation = "principal";
		echo "<br>principalXX";
	}elseif($des == "ma"){
		echo $designation = "management";
		echo "<br>managementXX";
	}elseif($des == "ad"){
		echo $designation = "admin";
		echo "<br>adminXX";
	}	
}else{
	die();	
}


include '../configs/connection-close.php';
?>