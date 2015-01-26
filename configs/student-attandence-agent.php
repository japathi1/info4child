<?php
include 'connection.php';
//Make Student Attendance begins
if(isset($_POST['MakeStudentAttendance'])){
	$MakeStudentAttendance = $_POST['MakeStudentAttendance'];
	if($MakeStudentAttendance == "MakeStudentAttendance"){

		$uidSubmitForAtt = $_POST['uidSubmitForAtt'];
		$AttendanceDate = $_POST['AttendanceDate'];
		$MadeBy = $_POST['MadeBy'];
		$IsPresent = $_POST['IsPresent'];		
				
		$sql = "INSERT INTO attendance (uid,
										date,
										MadeBy,
										IsPresent
										) VALUES (
										'$uidSubmitForAtt',
										'$AttendanceDate',
										'$MadeBy',
										'$IsPresent'
										)";
																							
		if ($conn->query($sql) === TRUE) {
			//header('Location: ../admin/addschoolrecord.php?success=yes');
			echo "New record created successfully";
		} else {
			//header('Location: ../admin/addschoolrecord.php?success=no');
			echo "Error: " . $sql . "<br>" . $conn->error;
		}		
	}
}
//Make Student Attendance ends

?>