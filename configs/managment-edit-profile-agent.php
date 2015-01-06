<?php
include 'connection.php';

//Edit Edit School Information begins
if(isset($_POST['EditSchoolInformation'])){
	$EditSchoolInformation = $_POST['EditSchoolInformation'];
	if($EditSchoolInformation == "EditSchoolInformation"){
		$mauid = $_POST['mauid'];
		$SchoolName = $_POST['SchoolName'];
		$SchoolLocation = $_POST['SchoolLocation'];
		$SchoolWebsite = $_POST['SchoolWebsite'];
		$SchoolOwnerFirstName = $_POST['SchoolOwnerFirstName'];
		$SchoolOwnerLastName = $_POST['SchoolOwnerLastName'];
		$OwnerSex = $_POST['OwnerSex'];		

		$sql = "UPDATE management
				SET SchoolName='$SchoolName',
					SchoolLocation='$SchoolLocation',
					SchoolWebsite='$SchoolWebsite',
					SchoolOwnerFirstName='$SchoolOwnerFirstName',
					SchoolOwnerLastName='$SchoolOwnerLastName',
					OwnerSex='$OwnerSex'
				WHERE mauid = '$mauid'";
		
		if ($conn->query($sql) === TRUE) {
			header('Location: ../managment/edit-profile.php?success=yes');
			//echo "Record updated successfully";
		} else {
			header('Location: ../managment/edit-profile.php?success=no');
			//echo "Error updating record: " . $conn->error;
		}
	
	}
}
//Edit Edit School Information ends

//Edit Address Information begins
if(isset($_POST['EditAddressInformation'])){
	$EditAddressInformation = $_POST['EditAddressInformation'];
	if($EditAddressInformation == "EditAddressInformation"){
				
		$mauid = $_POST['mauid'];
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

		$sql = "UPDATE management
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
				WHERE mauid = '$mauid'";
		
		if ($conn->query($sql) === TRUE) {
			header('Location: ../managment/edit-profile.php?success=yes');
			//echo "Record updated successfully";
		} else {
			header('Location: ../managment/edit-profile.php?success=no');
			//echo "Error updating record: " . $conn->error;
		}
	
	}
}

//Edit Address Information ends

//Change Profile Picture begins
if(isset($_POST['ChangeProfilePicture'])){
	$ChangeProfilePicture = $_POST['ChangeProfilePicture'];
	if($ChangeProfilePicture == "ChangeProfilePicture"){
		
		$ChangeProfilePicture = $_POST['ChangeProfilePicture'];
		$mauid = $_POST['mauid'];
		
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
			
			
				$sql = "UPDATE management SET ImageUpload='$content' WHERE mauid='$mauid'";
				
				if ($conn->query($sql) === TRUE) {
					header('Location: ../managment/edit-profile.php?success=yes');
					//echo "File $fileName uploaded";
				} else {
					header('Location: ../managment/edit-profile.php?success=no');
					//echo "Error updating record: " . $conn->error;
				}
			}else{
				header('Location: ../managment/edit-profile.php?success=no');
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
		
		$mauid = $_POST['mauid'];
		$OldPassword = $_POST['OldPassword'];
		$NewPassword = $_POST['password'];
		
		$sql = "SELECT * FROM login WHERE uid='$mauid' AND password='$OldPassword'";
		$result = mysqli_query($conn, $sql);
		
		if(mysqli_num_rows($result) > 0){
			//echo "1";
			//update password begins
			$sql = "UPDATE login
					SET password='$NewPassword' WHERE uid = '$mauid'";
			
			if ($conn->query($sql) === TRUE) {
				header('Location: ../managment/edit-profile.php?success=yes');
				//echo "password updated successfully";
			} else {
				header('Location: ../managment/edit-profile.php?success=no');
				//echo "Error updating password: " . $conn->error;
			}
			//update password ends			
		}else{
			header('Location: ../managment/edit-profile.php?success=no');
			//echo "0 result";	
		}	
	}
}
//Change Your Password ends

include 'connection-close.php';
?>