<?php
include 'connection.php';
//Make teacher Attendance begins
if(isset($_POST['MakeTeacherAttendance'])){
	$MakeTeacherAttendance = $_POST['MakeTeacherAttendance'];
	if($MakeTeacherAttendance == "MakeTeacherAttendance"){
		
		$uidSubmitForAtt = $_POST['uidSubmitForAtt'];
		$SchoolSubmitForAtt = $_POST['SchoolSubmitForAtt'];
		$DateMonthSubmitForAtt = $_POST['DateMonthSubmitForAtt'];
		$DateDaySubmitForAtt = $_POST['DateDaySubmitForAtt'];
		$DateYearSubmitForAtt = $_POST['DateYearSubmitForAtt'];
		$AttendanceDate = $_POST['AttendanceDate'];
		$timestamp = time();
		$MadeBy = $_POST['MadeBy'];
		$IsPresent = $_POST['IsPresent'];
		//Check whether attendance made begins
		$sql = "SELECT * FROM attendance WHERE uid='$uidSubmitForAtt' AND AttSchool='$SchoolSubmitForAtt' AND date='$AttendanceDate'";
		$resultTeacherPresent = mysqli_query($conn, $sql);
		if(mysqli_num_rows($resultTeacherPresent) > 0){
			header('Location: ../principal/teacher-atten.php?success=no');
			//echo "attendance made";
		}else{
			$sql = "INSERT INTO attendance (uid,
											AttSchool,
											DateMonth,
											DateDay,
											DateYear,
											date,
											timestamp,
											MadeBy,
											IsPresent
											) VALUES (
											'$uidSubmitForAtt',
											'$SchoolSubmitForAtt',
											'$DateMonthSubmitForAtt',
											'$DateDaySubmitForAtt',
											'$DateYearSubmitForAtt',
											'$AttendanceDate',
											'$timestamp',
											'$MadeBy',
											'$IsPresent'
											)";
																								
			if ($conn->query($sql) === TRUE) {
				header('Location: ../principal/teacher-atten.php');
				//echo "New record created successfully";
			} else {
				header('Location: ../principal/teacher-atten.php');
				//echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}		
		//Check whether attendance made ends	
	}
}
//Make teacher- Attendance ends

?>