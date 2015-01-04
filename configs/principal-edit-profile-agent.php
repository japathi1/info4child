<?php
include 'connection.php';

//Edit Principal Information begins
if(isset($_POST['EditPrincipalInformation'])){
	$EditPrincipalInformation = $_POST['EditPrincipalInformation'];
	if($EditPrincipalInformation == "EditPrincipalInformation"){

		$pruid = $_POST['pruid'];
		$PrincipalFirstName = $_POST['PrincipalFirstName'];
		$PrincipalLastName = $_POST['PrincipalLastName'];
		$DateofBirth = $_POST['DateofBirth'];
		$Sex = $_POST['Sex'];

		$sql = "UPDATE principal
				SET PrincipalFirstName='$PrincipalFirstName', PrincipalLastName='$PrincipalLastName', DateofBirth='$DateofBirth', Sex='$Sex'
				WHERE pruid = '$pruid'";
		
		if ($conn->query($sql) === TRUE) {
			header('Location: ../principal/edit-profile.php?success=yes');
			//echo "Record updated successfully";
		} else {
			header('Location: ../principal/edit-profile.php?success=no');
			//echo "Error updating record: " . $conn->error;
		}
	
	}
}
//Edit Principal Information ends

//Edit Educational Background begins
if(isset($_POST['EditEducationalBackground'])){
	$EditEducationalBackground = $_POST['EditEducationalBackground'];
	if($EditEducationalBackground == "EditEducationalBackground"){
		
		$pruid = $_POST['pruid'];
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

		$sql = "UPDATE principal
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
				WHERE pruid = '$pruid'";
		
		if ($conn->query($sql) === TRUE) {
			header('Location: ../principal/edit-profile.php?success=yes');
			//echo "Record updated successfully";
		} else {
			header('Location: ../principal/edit-profile.php?success=no');
			//echo "Error updating record: " . $conn->error;
		}
	
	}
}
//Edit Educational Background ends

//Edit Work Experience begins
if(isset($_POST['EditWorkExperience'])){
	$EditWorkExperience = $_POST['EditWorkExperience'];
	if($EditWorkExperience == "EditWorkExperience"){

		$pruid = $_POST['pruid'];
		$OrganisationName = $_POST['OrganisationName'];
		$Designation = $_POST['Designation'];
		$TimePeriod = $_POST['TimePeriod'];
		$OrganisationRemarks = $_POST['OrganisationRemarks'];

		$sql = "UPDATE principal
				SET OrganisationName='$OrganisationName', Designation='$Designation', TimePeriod='$TimePeriod', OrganisationRemarks='$OrganisationRemarks'
				WHERE pruid = '$pruid'";
		
		if ($conn->query($sql) === TRUE) {
			header('Location: ../principal/edit-profile.php?success=yes');
			//echo "Record updated successfully";
		} else {
			header('Location: ../principal/edit-profile.php?success=no');
			//echo "Error updating record: " . $conn->error;
		}
	
	}
}
//Edit Work Experience ends

//Edit Address Information begins
if(isset($_POST['EditAddressInformation'])){
	$EditAddressInformation = $_POST['EditAddressInformation'];
	if($EditAddressInformation == "EditAddressInformation"){
				
		$pruid = $_POST['pruid'];
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

		$sql = "UPDATE principal
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
				WHERE pruid = '$pruid'";
		
		if ($conn->query($sql) === TRUE) {
			header('Location: ../principal/edit-profile.php?success=yes');
			//echo "Record updated successfully";
		} else {
			header('Location: ../principal/edit-profile.php?success=no');
			//echo "Error updating record: " . $conn->error;
		}
	
	}
}

//Edit Address Information ends

//Edit Academic Information begins
if(isset($_POST['EditAcademicInformation'])){
	$EditAcademicInformation = $_POST['EditAcademicInformation'];
	if($EditAcademicInformation == "EditAcademicInformation"){
				
		$pruid = $_POST['pruid'];
		$YourClass = $_POST['YourClass'];
		$YourSection = $_POST['YourSection'];
		$YourSubject = $_POST['YourSubject'];
		$YourClassRemarks = $_POST['YourClassRemarks'];		

		$sql = "UPDATE principal
				SET YourClass = '$YourClass',
					YourSection = '$YourSection',
					YourSubject = '$YourSubject',
					YourClassRemarks = '$YourClassRemarks'				
				WHERE pruid = '$pruid'";
		
		if ($conn->query($sql) === TRUE) {
			header('Location: ../principal/edit-profile.php?success=yes');
			//echo "Record updated successfully";
		} else {
			header('Location: ../principal/edit-profile.php?success=no');
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
		$pruid = $_POST['pruid'];
		
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
			
			
				$sql = "UPDATE principal SET ImageUpload='$content' WHERE pruid='$pruid'";
				
				if ($conn->query($sql) === TRUE) {
					header('Location: ../principal/edit-profile.php?success=yes');
					//echo "File $fileName uploaded";
				} else {
					header('Location: ../principal/edit-profile.php?success=no');
					//echo "Error updating record: " . $conn->error;
				}
			}else{
				header('Location: ../principal/edit-profile.php?success=no');
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
		
		$pruid = $_POST['pruid'];
		$OldPassword = $_POST['OldPassword'];
		$NewPassword = $_POST['password'];
		
		$sql = "SELECT * FROM login WHERE uid='$pruid' AND password='$OldPassword'";
		$result = mysqli_query($conn, $sql);
		
		if(mysqli_num_rows($result) > 0){
			//echo "1";
			//update password begins
			$sql = "UPDATE login
					SET password='$NewPassword' WHERE uid = '$pruid'";
			
			if ($conn->query($sql) === TRUE) {
				header('Location: ../principal/edit-profile.php?success=yes');
				//echo "password updated successfully";
			} else {
				header('Location: ../principal/edit-profile.php?success=no');
				//echo "Error updating password: " . $conn->error;
			}
			//update password ends			
		}else{
			header('Location: ../principal/edit-profile.php?success=no');
			//echo "0 result";	
		}	
	}
}
//Change Your Password ends

include 'connection-close.php';
?>