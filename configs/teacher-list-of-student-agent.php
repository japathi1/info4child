<?php
session_start();

if(isset($_POST['ListofStudForAttendance'])){
	$ListofStudForAttendance = $_POST['ListofStudForAttendance'];
	if($ListofStudForAttendance == "ListofStudForAttendance"){
		$_SESSION['ListofStudForAttendance'] = $_POST['ListofStudForAttendance'];
		$_SESSION['SchoolForAtt'] = $_POST['TeacherSchoolName'];
		$_SESSION['ClassForAtt'] = $_POST['ClassFromTe'];
		$_SESSION['SectionForAtt'] = $_POST['SectionFromTe'];
		$_SESSION['AttendanceDate'] = $_POST['AttendanceDate'];			
	}
}

header('Location: ../teacher/attandence.php');

?>