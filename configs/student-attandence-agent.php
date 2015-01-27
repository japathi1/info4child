<?php
include 'connection.php';
//Make Student Attendance begins
$DateMonth = date("m");
$DateDay = date("d");
$DateYear = date("Y");
$timestamp = time();
if(isset($_POST['MakeStudentAttendance'])){
	$MakeStudentAttendance = $_POST['MakeStudentAttendance'];
	if($MakeStudentAttendance == "MakeStudentAttendance"){

		$uidSubmitForAtt = $_POST['uidSubmitForAtt'];
		$DateMonthSubmitForAtt = $_POST['DateMonthSubmitForAtt'];
		$DateDaySubmitForAtt = $_POST['DateDaySubmitForAtt'];
		$DateYearSubmitForAtt = $_POST['DateYearSubmitForAtt'];
		$AttendanceDate = $_POST['AttendanceDate'];
		$timestamp = time();
		$MadeBy = $_POST['MadeBy'];
		$IsPresent = $_POST['IsPresent'];		
				
		$sql = "INSERT INTO attendance (uid,
										DateMonth,
										DateDay,
										DateYear,
										date,
										timestamp,
										MadeBy,
										IsPresent
										) VALUES (
										'$uidSubmitForAtt',
										'$DateMonthSubmitForAtt',
										'$DateDaySubmitForAtt',
										'$DateYearSubmitForAtt',
										'$AttendanceDate',
										'$timestamp',
										'$MadeBy',
										'$IsPresent'
										)";
																							
		if ($conn->query($sql) === TRUE) {
			header('Location: ../teacher/attandence.php');
			//echo "New record created successfully";
		} else {
			header('Location: ../teacher/attandence.php');
			//echo "Error: " . $sql . "<br>" . $conn->error;
		}		
	}
}
//Make Student Attendance ends

?>