<?php
include 'connection.php';

//Edit Teacher Information begins
if(isset($_POST['EditTeacherInformation'])){
	$EditTeacherInformation = $_POST['EditTeacherInformation'];
	if($EditTeacherInformation == "EditTeacherInformation"){

		$teuid = $_POST['teuid'];
		$TeacherFirstName = $_POST['TeacherFirstName'];
		$TeacherLastName = $_POST['TeacherLastName'];
		$DateofBirth = $_POST['DateofBirth'];
		$Sex = $_POST['Sex'];

		$sql = "UPDATE teacher
				SET TeacherFirstName='$TeacherFirstName', TeacherLastName='$TeacherLastName', DateofBirth='$DateofBirth', Sex='$Sex'
				WHERE teuid = '$teuid'";
		
		if ($conn->query($sql) === TRUE) {
			header('Location: ../teacher/edit-profile.php?success=yes');
			//echo "Record updated successfully";
		} else {
			header('Location: ../teacher/edit-profile.php?success=no');
			//echo "Error updating record: " . $conn->error;
		}
	
	}
}
//Edit Teacher Information ends

//Edit Educational Background begins
if(isset($_POST['EditEducationalBackground'])){
	$EditEducationalBackground = $_POST['EditEducationalBackground'];
	if($EditEducationalBackground == "EditEducationalBackground"){
		
		$teuid = $_POST['teuid'];
		$TenthBoard = $_POST['TenthBoard'];
		$TenthSchoolName = $_POST['TenthSchoolName'];
		$TenthDateOfCompleted = $_POST['TenthDateOfCompleted'];
		$TenthMarksObtained = $_POST['TenthMarksObtained'];
		$TwelfthBoard = $_POST['TwelfthBoard'];
		$TwelftSchoolCollegeUniversity = $_POST['TwelftSchoolCollegeUniversity'];
		$TwelftDateOfCompleted = $_POST['TwelftDateOfCompleted'];
		$TwelftMarksObtained = $_POST['TwelftMarksObtained'];
		$Graduation = $_POST['Graduation'];
		$GraduationCollegeUniversity = $_POST['GraduationCollegeUniversity'];
		$GraduationHonoursSubject = $_POST['GraduationHonoursSubject'];
		$GraduationDateOfCompleted = $_POST['GraduationDateOfCompleted'];
		$GraduationMarksObtained = $_POST['GraduationMarksObtained'];
		$MasterDegree = $_POST['MasterDegree'];
		$MasterCollegeUniversity = $_POST['MasterCollegeUniversity'];
		$MasterHonoursSubject = $_POST['MasterHonoursSubject'];
		$MasterDateOfCompleted = $_POST['MasterDateOfCompleted'];
		$MasterMarksObtained = $_POST['MasterMarksObtained'];
		$OtherDegree = $_POST['OtherDegree'];
		$OtherCollegeUniversity = $_POST['OtherCollegeUniversity'];
		$OtherHonoursSubject = $_POST['OtherHonoursSubject'];
		$OtherDateOfCompleted = $_POST['OtherDateOfCompleted'];
		$OtherMarksObtained = $_POST['OtherMarksObtained'];		

		$sql = "UPDATE teacher
				SET TenthBoard = '$TenthBoard',
					TenthSchoolName = '$TenthSchoolName',
					TenthDateOfCompleted = '$TenthDateOfCompleted',
					TenthMarksObtained = '$TenthMarksObtained',
					TwelfthBoard = '$TwelfthBoard',
					TwelftSchoolCollegeUniversity = '$TwelftSchoolCollegeUniversity',
					TwelftDateOfCompleted = '$TwelftDateOfCompleted',
					TwelftMarksObtained = '$TwelftMarksObtained',
					Graduation = '$Graduation',
					GraduationCollegeUniversity = '$GraduationCollegeUniversity',
					GraduationHonoursSubject = '$GraduationHonoursSubject',
					GraduationDateOfCompleted = '$GraduationDateOfCompleted',
					GraduationMarksObtained = '$GraduationMarksObtained',
					MasterDegree = '$MasterDegree',
					MasterCollegeUniversity = '$MasterCollegeUniversity',
					MasterHonoursSubject = '$MasterHonoursSubject',
					MasterDateOfCompleted = '$MasterDateOfCompleted',
					MasterMarksObtained = '$MasterMarksObtained',
					OtherDegree = '$OtherDegree',
					OtherCollegeUniversity = '$OtherCollegeUniversity',
					OtherHonoursSubject = '$OtherHonoursSubject',
					OtherDateOfCompleted = '$OtherDateOfCompleted',
					OtherMarksObtained = '$OtherMarksObtained'
				WHERE teuid = '$teuid'";
		
		if ($conn->query($sql) === TRUE) {
			header('Location: ../teacher/edit-profile.php?success=yes');
			//echo "Record updated successfully";
		} else {
			header('Location: ../teacher/edit-profile.php?success=no');
			//echo "Error updating record: " . $conn->error;
		}
	
	}
}
//Edit Educational Background ends

//Edit Work Experience begins
if(isset($_POST['EditWorkExperience'])){
	$EditWorkExperience = $_POST['EditWorkExperience'];
	if($EditWorkExperience == "EditWorkExperience"){

		$teuid = $_POST['teuid'];
		$OrganisationName = $_POST['OrganisationName'];
		$Designation = $_POST['Designation'];
		$TimePeriod = $_POST['TimePeriod'];
		$OrganisationRemarks = $_POST['OrganisationRemarks'];

		$sql = "UPDATE teacher
				SET OrganisationName='$OrganisationName', Designation='$Designation', TimePeriod='$TimePeriod', OrganisationRemarks='$OrganisationRemarks'
				WHERE teuid = '$teuid'";
		
		if ($conn->query($sql) === TRUE) {
			header('Location: ../teacher/edit-profile.php?success=yes');
			//echo "Record updated successfully";
		} else {
			header('Location: ../teacher/edit-profile.php?success=no');
			//echo "Error updating record: " . $conn->error;
		}
	
	}
}
//Edit Work Experience ends

//Edit Address Information begins
if(isset($_POST['EditAddressInformation'])){
	$EditAddressInformation = $_POST['EditAddressInformation'];
	if($EditAddressInformation == "EditAddressInformation"){
				
		$teuid = $_POST['teuid'];
		$PresentAddress = $_POST['PresentAddress'];
		$PresentLandmark = $_POST['PresentLandmark'];
		$PresentCountry = $_POST['PresentCountry'];
		$PresentState = $_POST['PresentState'];
		$PresentCity = $_POST['PresentCity'];
		$PresentPinCode = $_POST['PresentPinCode'];
		$PermanentAddress = $_POST['PermanentAddress'];
		$PermanentLandmark = $_POST['PermanentLandmark'];
		$PermanentCountry = $_POST['PermanentCountry'];
		$PermanentState = $_POST['PermanentState'];
		$PermanentCity = $_POST['PermanentCity'];
		$PermanentPinCode = $_POST['PermanentPinCode'];	

		$sql = "UPDATE teacher
				SET PresentAddress = '$PresentAddress',
					PresentLandmark = '$PresentLandmark',
					PresentCountry = '$PresentCountry',
					PresentState = '$PresentState',
					PresentCity = '$PresentCity',
					PresentPinCode = '$PresentPinCode',
					PermanentAddress = '$PermanentAddress',
					PermanentLandmark = '$PermanentLandmark',
					PermanentCountry = '$PermanentCountry',
					PermanentState = '$PermanentState',
					PermanentCity = '$PermanentCity',
					PermanentPinCode = '$PermanentPinCode'							
				WHERE teuid = '$teuid'";
		
		if ($conn->query($sql) === TRUE) {
			header('Location: ../teacher/edit-profile.php?success=yes');
			//echo "Record updated successfully";
		} else {
			header('Location: ../teacher/edit-profile.php?success=no');
			//echo "Error updating record: " . $conn->error;
		}
	
	}
}

//Edit Address Information ends

//Edit Academic Information begins
if(isset($_POST['EditAcademicInformation'])){
	$EditAcademicInformation = $_POST['EditAcademicInformation'];
	if($EditAcademicInformation == "EditAcademicInformation"){
				
		$teuid = $_POST['teuid'];
		$YourClass = $_POST['YourClass'];
		$YourSection = $_POST['YourSection'];
		$YourSubject = $_POST['YourSubject'];
		$YourClassRemarks = $_POST['YourClassRemarks'];		

		$sql = "UPDATE teacher
				SET YourClass = '$YourClass',
					YourSection = '$YourSection',
					YourSubject = '$YourSubject',
					YourClassRemarks = '$YourClassRemarks'				
				WHERE teuid = '$teuid'";
		
		if ($conn->query($sql) === TRUE) {
			header('Location: ../teacher/edit-profile.php?success=yes');
			//echo "Record updated successfully";
		} else {
			header('Location: ../teacher/edit-profile.php?success=no');
			//echo "Error updating record: " . $conn->error;
		}
	
	}
}

//Edit Academic Information ends

//Change Profile Picture begins
if(isset($_POST['ChangeProfilePicture'])){
	$ChangeProfilePicture = $_POST['ChangeProfilePicture'];
	if($ChangeProfilePicture == "ChangeProfilePicture"){
		
		$ChangeProfilePicture = $_POST['ChangeProfilePicture'];
		$teuid = $_POST['teuid'];
		
		if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0){
			$fileName = $_FILES['userfile']['name'];
			$tmpName  = $_FILES['userfile']['tmp_name'];
			$fileSize = $_FILES['userfile']['size'];
			$fileType = $_FILES['userfile']['type'];
			
			if($fileSize < 1024000){
				$fp      = fopen($tmpName, 'r');
				$content = fread($fp, filesize($tmpName));
				$content = addslashes($content);
				fclose($fp);
			
			
				$sql = "UPDATE teacher SET ImageUpload='$content' WHERE teuid='$teuid'";
				
				if ($conn->query($sql) === TRUE) {
					header('Location: ../teacher/edit-profile.php?success=yes');
					//echo "File $fileName uploaded";
				} else {
					header('Location: ../teacher/edit-profile.php?success=no');
					//echo "Error updating record: " . $conn->error;
				}
			}else{
				header('Location: ../teacher/edit-profile.php?success=no');
				//echo "file size is too big, upload less than 1 MB";	
			}
		}		
	}
}

//Change Profile Picture ends

//Change Your Password begins
if(isset($_POST['ChangeYourPassword'])){
	$ChangeYourPassword = $_POST['ChangeYourPassword'];
	if($ChangeYourPassword == "ChangeYourPassword"){
		
		$teuid = $_POST['teuid'];
		$OldPassword = $_POST['OldPassword'];
		$NewPassword = $_POST['password'];
		
		$sql = "SELECT * FROM login WHERE uid='$teuid' AND password='$OldPassword'";
		$result = mysqli_query($conn, $sql);
		
		if(mysqli_num_rows($result) > 0){
			//echo "1";
			//update password begins
			$sql = "UPDATE login
					SET password='$NewPassword' WHERE uid = '$teuid'";
			
			if ($conn->query($sql) === TRUE) {
				header('Location: ../teacher/edit-profile.php?success=yes');
				//echo "password updated successfully";
			} else {
				header('Location: ../teacher/edit-profile.php?success=no');
				//echo "Error updating password: " . $conn->error;
			}
			//update password ends			
		}else{
			header('Location: ../teacher/edit-profile.php?success=no');
			//echo "0 result";	
		}	
	}
}
//Change Your Password ends

include 'connection-close.php';
?>