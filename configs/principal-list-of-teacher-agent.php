<?php
session_start();

if(isset($_POST['ListofTachForAttendance'])){
	$ListofTachForAttendance = $_POST['ListofTachForAttendance'];
	if($ListofTachForAttendance == "ListofTachForAttendance"){
		$_SESSION['ListofTachForAttendance'] = $_POST['ListofTachForAttendance'];
		$_SESSION['SchoolForAtt'] = $_POST['PrincipalSchoolName'];
		$_SESSION['AttendanceDate'] = $_POST['AttendanceDate'];			
	}
}

header('Location: ../principal/teacher-atten.php');

?>