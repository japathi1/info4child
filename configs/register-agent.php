<?php
session_start();

include 'connection.php';

if(isset($_POST['designation'])){
	$designation = $_POST['designation'];
	//Register Management begins
	if($designation == "management"){		
		echo $designation = $_POST['designation'];
		echo $uid = $_POST['uid'];
		echo $password = $_POST['password'];
		echo "<br>managementXX";
	}
	//Register Management ends
	
	//Register Principal begins
	if($designation == "principal"){			
		echo $designation = $_POST['designation'];
		echo $uid = $_POST['uid'];
		echo $password = $_POST['password'];
		echo "<br>principalXX";
	}
	//Register Principal ends	

	//Register Teacher begins
	if($designation == "teacher"){			
		echo $designation = $_POST['designation'];
		echo $uid = $_POST['uid'];
		echo $password = $_POST['password'];
		echo "<br>teacherXX";
	}
	//Register Teacher ends	
	
	//Register Student begins
	if($designation == "student"){			
		$designation = $_POST['designation'];
		$uid = $_POST['uid'];
		$password = $_POST['password'];
		
		$sql = "SELECT * FROM student WHERE stuid='$uid' AND TemporaryPassword='$password' AND designation='$designation' AND IsActive='no'";
		$result = mysqli_query($conn, $sql);
		
		if(mysqli_num_rows($result) > 0){
			// login success - output data of each row
			while($row = mysqli_fetch_assoc($result)){
				session_regenerate_id();
				$_SESSION['uid'] = $row["stuid"];
				$_SESSION['FirstName'] = $row["FirstName"];
				$_SESSION['designation'] = $row["designation"];
				$_SESSION['EmailId'] = $row["EmailId"];	
				header('Location: ../login/create-username.php');			
				//echo "1 results";				
			}
		}else{
			header('Location: ../login/register.php?success=no');
			//echo "0 results";
		}		
	}
	//Register Student ends
}



include 'connection-close.php';
?>