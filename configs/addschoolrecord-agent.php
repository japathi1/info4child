<?php
include 'connection.php';
//Add Management begins
if(isset($_POST['AddManagement'])){
	$AddManagement = $_POST['AddManagement'];
	if($AddManagement == "AddManagement"){
						
		$OwnerFirstName = $_POST['OwnerFirstName'];
		$OwnerLastName = $_POST['OwnerLastName'];
		$ContactNo = $_POST['ContactNo'];
		$EmailId = $_POST['EmailId'];
		$Sex = $_POST['Sex'];
		$ImageUpload = "No Image";
		$MAUID = $_POST['MAUID'];
		$MaTemporaryPassword = $_POST['MaTemporaryPassword'];
		
		$sql = "INSERT INTO management (OwnerFirstName,
										OwnerLastName,
										ContactNo,
										EmailId,
										Sex,
										ImageUpload,
										MAUID,
										MaTemporaryPassword
										) VALUES (							
										'$OwnerFirstName',
										'$OwnerLastName',
										'$ContactNo',
										'$EmailId',
										'$Sex',
										'$ImageUpload',
										'$MAUID',
										'$MaTemporaryPassword'										
										)";
									
		if ($conn->query($sql) === TRUE) {
			header('Location: ../admin/addschoolrecord.php?success=yes');
			//echo "New record created successfully";
		} else {
			header('Location: ../admin/addschoolrecord.php?success=no');
			//echo "Error: " . $sql . "<br>" . $conn->error;
		}		
	}
}
//Add Management ends

//Add Principal begins
if(isset($_POST['AddPrincipal'])){
	$AddPrincipal = $_POST['AddPrincipal'];
	if($AddPrincipal == "AddPrincipal"){	
		$SchoolName = $_POST['SchoolName'];
		$Title = $_POST['Title'];
		$PrincipalFirstName = $_POST['PrincipalFirstName'];
		$PrincipalLastName = $_POST['PrincipalLastName'];
		$Sex = $_POST['Sex'];
		$IDProof = "No ID Proof";
		$PhoneCode = $_POST['PhoneCode'];
		$PhoneNo = $_POST['PhoneNo'];
		$MobileCode = $_POST['MobileCode'];
		$MobileNo = $_POST['MobileNo'];
		$Email = $_POST['Email'];
		$EducationalQualification = $_POST['EducationalQualification'];
		$ImageUpload = "No Image";
		$Salary = $_POST['Salary'];
		$PRUID = $_POST['PRUID'];
		$PrTemporaryPassword = $_POST['PrTemporaryPassword'];	
		
		$sql = "INSERT INTO principal (SchoolName,
										Title,
										PrincipalFirstName,
										PrincipalLastName,
										Sex,
										IDProof,
										PhoneCode,
										PhoneNo,
										MobileCode,
										MobileNo,
										Email,
										EducationalQualification,
										ImageUpload,
										Salary,
										PRUID,
										PrTemporaryPassword
										) VALUES (							
										'$SchoolName',
										'$Title',
										'$PrincipalFirstName',
										'$PrincipalLastName',
										'$Sex',
										'$IDProof',
										'$PhoneCode',
										'$PhoneNo',
										'$MobileCode',
										'$MobileNo',
										'$Email',
										'$EducationalQualification',
										'$ImageUpload',
										'$Salary',
										'$PRUID',
										'$PrTemporaryPassword'	
										)";
									
		if ($conn->query($sql) === TRUE) {
			header('Location: ../admin/addschoolrecord.php?success=yes');
			//echo "New record created successfully";
		} else {
			header('Location: ../admin/addschoolrecord.php?success=no');
			//echo "Error: " . $sql . "<br>" . $conn->error;
		}		
	}
}
//Add Principal ends

//Add Teacher ends
if(isset($_POST['AddTeacher'])){
	echo $AddTeacher = $_POST['AddTeacher'];
	if($AddTeacher == "AddTeacher"){
		$TeacherSchoolName = $_POST['TeacherSchoolName'];	
		$TeacherFirstName = $_POST['TeacherFirstName'];	
		$TeacherLastName = $_POST['TeacherLastName'];	
		$ContactNo = $_POST['ContactNo'];	
		$EmailId = $_POST['ContactNo'];	
		$Subject = $_POST['Subject'];	
		$Sex = $_POST['Sex'];	
		$ImageUpload = "No Image";;	
		$Salary = $_POST['Salary'];	
		$TEUID = $_POST['TEUID'];	
		$TeTemporaryPassword = $_POST['TeTemporaryPassword'];			
		
		$sql = "INSERT INTO teacher (TeacherSchoolName,
										TeacherFirstName,
										TeacherLastName,
										ContactNo,
										EmailId,
										Subject,
										Sex,
										ImageUpload,
										Salary,
										TEUID,
										TeTemporaryPassword
										) VALUES (							
										'$TeacherSchoolName',
										'$TeacherFirstName',
										'$TeacherLastName',
										'$ContactNo',
										'$EmailId',
										'$Subject',
										'$Sex',
										'$ImageUpload',
										'$Salary',
										'$TEUID',
										'$TeTemporaryPassword'
										)";
									
		if ($conn->query($sql) === TRUE) {
			header('Location: ../admin/addschoolrecord.php?success=yes');
			//echo "New record created successfully";
		} else {
			header('Location: ../admin/addschoolrecord.php?success=no');
			//echo "Error: " . $sql . "<br>" . $conn->error;
		}		
	}
}
//Add Teacher begins


//Add Student begins
if(isset($_POST['AddStudent'])){
	echo $AddStudent = $_POST['AddStudent'];
	if($AddStudent == "AddStudent"){
		$School = $_POST['School'];
		$FirstName = $_POST['FirstName'];
		$LastName = $_POST['LastName'];
		$ContactNo = $_POST['ContactNo'];
		$EmailId = $_POST['EmailId'];
		$Class = $_POST['Class'];
		$Section = $_POST['Section'];
		$ClassTeacherName = $_POST['ClassTeacherName'];
		$DateofBirth = $_POST['DateofBirth'];
		$Sex = $_POST['Sex'];
		$ImageUpload = "No Image";
		$BloodGroup = $_POST['BloodGroup'];
		$FatherName = $_POST['FatherName'];
		$FaterEmailID = $_POST['FaterEmailID'];
		$FatherContactNo = $_POST['FatherContactNo'];
		$MotherName = $_POST['MotherName'];
		$MotherEmailID = $_POST['MotherEmailID'];
		$MotherContactNo = $_POST['MotherContactNo'];
		$Sibling = $_POST['Sibling'];
		$stuid = $_POST['STUID'];
		$TemporaryPassword = $_POST['TemporaryPassword'];
		
		$sql = "INSERT INTO student (School,
									FirstName,
									LastName,
									ContactNo,
									EmailId,
									Class,
									Section,
									ClassTeacherName,
									DateofBirth,
									Sex,
									ImageUpload,
									BloodGroup,
									FatherName,
									FatherEmailID,
									FatherContactNo,
									MotherName,
									MotherEmailID,
									MotherContactNo,
									Sibling,
									stuid,
									TemporaryPassword
									) VALUES (							
									'$School',
									'$FirstName',
									'$LastName',
									'$ContactNo',
									'$EmailId',
									'$Class',
									'$Section',
									'$ClassTeacherName',
									'$DateofBirth',
									'$Sex',
									'$ImageUpload',
									'$BloodGroup',
									'$FatherName',
									'$FaterEmailID',
									'$FatherContactNo',
									'$MotherName',
									'$MotherEmailID',
									'$MotherContactNo',
									'$Sibling',
									'$stuid',
									'$TemporaryPassword'
									)";
									
		if ($conn->query($sql) === TRUE) {
			header('Location: ../admin/addschoolrecord.php?success=yes');
			//echo "New record created successfully";
		} else {
			header('Location: ../admin/addschoolrecord.php?success=no');
			//echo "Error: " . $sql . "<br>" . $conn->error;
		}		
	}	
}
//Add Student ends
include 'connection-close.php';
?>