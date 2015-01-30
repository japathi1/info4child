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
		$SchoolSubmitForAtt = $_POST['SchoolSubmitForAtt'];
		$ClassSubmitForAtt = $_POST['ClassSubmitForAtt'];
		$SectionSubmitForAtt = $_POST['SectionSubmitForAtt'];
		$DateMonthSubmitForAtt = $_POST['DateMonthSubmitForAtt'];
		$DateDaySubmitForAtt = $_POST['DateDaySubmitForAtt'];
		$DateYearSubmitForAtt = $_POST['DateYearSubmitForAtt'];
		$AttendanceDate = $_POST['AttendanceDate'];
		$timestamp = time();
		$MadeBy = $_POST['MadeBy'];
		$IsPresent = $_POST['IsPresent'];
		
		//Check whether attendance made begins
		$sql = "SELECT * FROM attendance WHERE uid='$uidSubmitForAtt' AND AttSchool='$SchoolSubmitForAtt' AND AttClass='$ClassSubmitForAtt' AND AttSection='$SectionSubmitForAtt' AND date='$AttendanceDate'";
		$resultStudentPresent = mysqli_query($conn, $sql);
		if(mysqli_num_rows($resultStudentPresent) > 0){
			header('Location: ../teacher/attandence.php?success=no');
		}else{
			$sql = "INSERT INTO attendance (uid,
											AttSchool,
											AttClass,
											AttSection,		
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
											'$ClassSubmitForAtt',
											'$SectionSubmitForAtt',
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
		//Check whether attendance made ends	
	}
}
//Make Student Attendance ends

?>