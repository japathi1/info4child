<?php
include 'connection.php';

//Edit Student Information begins
if(isset($_POST['EditStudentInformation'])){
	$EditStudentInformation = $_POST['EditStudentInformation'];
	if($EditStudentInformation == "EditStudentInformation"){

		$stuid = $_POST['stuid'];
		$FirstName = $_POST['FirstName'];
		$LastName = $_POST['LastName'];
		$DateofBirth = $_POST['DateofBirth'];
		$Sex = $_POST['Sex'];

		$sql = "UPDATE student
				SET FirstName='$FirstName', LastName='$LastName', DateofBirth='$DateofBirth', Sex='$Sex'
				WHERE stuid = '$stuid'";
		
		if ($conn->query($sql) === TRUE) {
			header('Location: ../student/edit-profile.php?success=yes');
			//echo "Record updated successfully";
		} else {
			header('Location: ../student/edit-profile.php?success=no');
			//echo "Error updating record: " . $conn->error;
		}
	
	}
}
//Edit Student Information ends

//Edit Parent Information begins
if(isset($_POST['EditParentInformation'])){
	$EditParentInformation = $_POST['EditParentInformation'];
	if($EditParentInformation == "EditParentInformation"){
		
		$stuid = $_POST['stuid'];
		$FatherName = $_POST['FatherName'];
		$FatherDateofBirth = $_POST['FatherDateofBirth'];
		$FatherOccupation = $_POST['FatherOccupation'];
		$FatherCompanyName = $_POST['FatherCompanyName'];
		$FatherDesignation = $_POST['FatherDesignation'];
		$FatherQualification = $_POST['FatherQualification'];
		$MotherName = $_POST['MotherName'];
		$MotherDateofBirth = $_POST['MotherDateofBirth'];
		$MotherOccupation = $_POST['MotherOccupation'];
		$MotherCompanyName = $_POST['MotherCompanyName'];
		$MotherDesignation = $_POST['MotherDesignation'];
		$MotherQualification = $_POST['MotherQualification'];		

		$sql = "UPDATE student
				SET FatherName = '$FatherName',
					FatherDateofBirth = '$FatherDateofBirth',
					FatherOccupation = '$FatherOccupation',
					FatherCompanyName = '$FatherCompanyName',
					FatherDesignation = '$FatherDesignation',
					FatherQualification = '$FatherQualification',
					MotherName = '$MotherName',
					MotherDateofBirth = '$MotherDateofBirth',
					MotherOccupation = '$MotherOccupation',
					MotherCompanyName = '$MotherCompanyName',
					MotherDesignation = '$MotherDesignation',
					MotherQualification = '$MotherQualification'				
				WHERE stuid = '$stuid'";
		
		if ($conn->query($sql) === TRUE) {
			header('Location: ../student/edit-profile.php?success=yes');
			//echo "Record updated successfully";
		} else {
			header('Location: ../student/edit-profile.php?success=no');
			//echo "Error updating record: " . $conn->error;
		}
	
	}
}
//Edit Parent Information ends

//Edit Address Information begins
if(isset($_POST['EditAddressInformation'])){
	$EditAddressInformation = $_POST['EditAddressInformation'];
	if($EditAddressInformation == "EditAddressInformation"){
				
		$stuid = $_POST['stuid'];
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

		$sql = "UPDATE student
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
				WHERE stuid = '$stuid'";
		
		if ($conn->query($sql) === TRUE) {
			header('Location: ../student/edit-profile.php?success=yes');
			//echo "Record updated successfully";
		} else {
			header('Location: ../student/edit-profile.php?success=no');
			//echo "Error updating record: " . $conn->error;
		}
	
	}
}

//Edit Address Information ends

//Edit Academic Information begins
if(isset($_POST['EditAcademicInformation'])){
	$EditAcademicInformation = $_POST['EditAcademicInformation'];
	if($EditAcademicInformation == "EditAcademicInformation"){
				
		$stuid = $_POST['stuid'];
		$Class = $_POST['Class'];
		$Section = $_POST['Section'];
		$RegisterationNo = $_POST['RegisterationNo'];
		$RollNo = $_POST['RollNo'];
		$ClassTeacherName = $_POST['ClassTeacherName'];
		$SiblingStudentID = $_POST['SiblingStudentID'];
		$Sibling = $_POST['Sibling'];
		$SiblingFatherName = $_POST['SiblingFatherName'];
		$SiblingDateofBirth = $_POST['SiblingDateofBirth'];	

		$sql = "UPDATE student
				SET Class = '$Class',
					Section = '$Section',
					RegisterationNo = '$RegisterationNo',
					RollNo = '$RollNo',
					ClassTeacherName = '$ClassTeacherName',
					SiblingStudentID = '$SiblingStudentID',
					Sibling = '$Sibling',
					SiblingFatherName = '$SiblingFatherName',
					SiblingDateofBirth = '$SiblingDateofBirth'						
				WHERE stuid = '$stuid'";
		
		if ($conn->query($sql) === TRUE) {
			header('Location: ../student/edit-profile.php?success=yes');
			//echo "Record updated successfully";
		} else {
			header('Location: ../student/edit-profile.php?success=no');
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
		$stuid = $_POST['stuid'];
		
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
			
			
				$sql = "UPDATE student SET ImageUpload='$content' WHERE stuid='$stuid'";
				
				if ($conn->query($sql) === TRUE) {
					header('Location: ../student/edit-profile.php?success=yes');
					//echo "File $fileName uploaded";
				} else {
					header('Location: ../student/edit-profile.php?success=no');
					//echo "Error updating record: " . $conn->error;
				}
			}else{
				header('Location: ../student/edit-profile.php?success=no');
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
		
		$stuid = $_POST['stuid'];
		$OldPassword = $_POST['OldPassword'];
		$NewPassword = $_POST['password'];
		
		$sql = "SELECT * FROM login WHERE uid='$stuid' AND password='$OldPassword'";
		$result = mysqli_query($conn, $sql);
		
		if(mysqli_num_rows($result) > 0){
			//echo "1";
			//update password begins
			$sql = "UPDATE login
					SET password='$NewPassword' WHERE uid = '$stuid'";
			
			if ($conn->query($sql) === TRUE) {
				header('Location: ../student/edit-profile.php?success=yes');
				//echo "password updated successfully";
			} else {
				header('Location: ../student/edit-profile.php?success=no');
				//echo "Error updating password: " . $conn->error;
			}
			//update password ends			
		}else{
			header('Location: ../student/edit-profile.php?success=no');
			//echo "0 result";	
		}	
	}
}
//Change Your Password ends

include 'connection-close.php';
?>