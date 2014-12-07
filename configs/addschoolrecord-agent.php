<?php

//Add Management begins
if(isset($_POST['AddManagement'])){
	echo $AddManagement = $_POST['AddManagement'];echo "<br>";
	if($AddManagement == "AddManagement"){		
		echo $OwnerFirstName = $_POST['OwnerFirstName'];echo "<br>";
		echo $OwnerLastName = $_POST['OwnerLastName'];echo "<br>";
		echo $ContactNo = $_POST['ContactNo'];echo "<br>";
		echo $EmailId = $_POST['EmailId'];echo "<br>";
		echo $Sex = $_POST['Sex'];echo "<br>";
		//$ImageUpload = $_POST['ImageUpload'];
		echo $MAUID = $_POST['MAUID'];echo "<br>";
		echo $MaTemporaryPassword = $_POST['MaTemporaryPassword'];echo "<br>";
	}
}
//Add Management begins

//Add Principal begins
if(isset($_POST['AddPrincipal'])){
	echo $AddPrincipal = $_POST['AddPrincipal'];echo "<br>";
	if($AddPrincipal == "AddPrincipal"){	
		echo $SchoolName = $_POST['SchoolName'];echo "<br>";
		echo $Title = $_POST['Title'];echo "<br>";
		echo $PrincipalFirstName = $_POST['PrincipalFirstName'];echo "<br>";
		echo $PrincipalLastName = $_POST['PrincipalLastName'];echo "<br>";
		echo $Sex = $_POST['Sex'];echo "<br>";
		//echo $IDProof = $_POST['IDProof'];echo "<br>";
		echo $PhoneCode = $_POST['PhoneCode'];echo "<br>";
		echo $PhoneNo = $_POST['PhoneNo'];echo "<br>";
		echo $MobileCode = $_POST['MobileCode'];echo "<br>";
		echo $MobileNo = $_POST['MobileNo'];echo "<br>";
		echo $Email = $_POST['Email'];echo "<br>";
		echo $EducationalQualification = $_POST['EducationalQualification'];echo "<br>";
		//echo $ImageUpload = $_POST['ImageUpload'];echo "<br>";
		echo $Salary = $_POST['Salary'];echo "<br>";
		echo $PRUID = $_POST['PRUID'];echo "<br>";
		echo $PrTemporaryPassword = $_POST['PrTemporaryPassword'];echo "<br>";	
	}
}
//Add Principal ends

//Add Teacher ends
if(isset($_POST['AddTeacher'])){
	echo $AddTeacher = $_POST['AddTeacher'];echo "<br>";
	if($AddTeacher == "AddTeacher"){
		echo $TeacherSchoolName = $_POST['TeacherSchoolName'];echo "<br>";	
		echo $TeacherFirstName = $_POST['TeacherFirstName'];echo "<br>";	
		echo $TeacherLastName = $_POST['TeacherLastName'];echo "<br>";	
		echo $ContactNo = $_POST['ContactNo'];echo "<br>";	
		echo $EmailId = $_POST['ContactNo'];echo "<br>";	
		echo $Subject = $_POST['Subject'];echo "<br>";	
		echo $Sex = $_POST['Sex'];echo "<br>";	
		//echo $ImageUpload = $_POST['ImageUpload'];echo "<br>";	
		echo $Salary = $_POST['Salary'];echo "<br>";	
		echo $TEUID = $_POST['TEUID'];echo "<br>";	
		echo $TeTemporaryPassword = $_POST['TeTemporaryPassword'];echo "<br>";			
	}
}
//Add Teacher begins


//Add Student begins
if(isset($_POST['AddStudent'])){
	echo $AddStudent = $_POST['AddStudent'];echo "<br>";
	if($AddStudent == "AddStudent"){
		echo $School = $_POST['School'];echo "<br>";
		echo $FirstName = $_POST['FirstName'];echo "<br>";
		echo $LastName = $_POST['LastName'];echo "<br>";
		echo $ContactNo = $_POST['ContactNo'];echo "<br>";
		echo $EmailId = $_POST['EmailId'];echo "<br>";
		echo $Class = $_POST['Class'];echo "<br>";
		echo $Section = $_POST['Section'];echo "<br>";
		echo $ClassTeacherName = $_POST['ClassTeacherName'];echo "<br>";
		echo $DateofBirth = $_POST['DateofBirth'];echo "<br>";
		echo $Sex = $_POST['Sex'];echo "<br>";
		//echo $ImageUpload = $_POST['ImageUpload'];
		echo $BloodGroup = $_POST['BloodGroup'];echo "<br>";
		echo $FatherName = $_POST['FatherName'];echo "<br>";
		echo $FaterEmailID = $_POST['FaterEmailID'];echo "<br>";
		echo $FatherContactNo = $_POST['FatherContactNo'];echo "<br>";
		echo $MotherName = $_POST['MotherName'];echo "<br>";
		echo $MotherEmailID = $_POST['MotherEmailID'];echo "<br>";
		echo $MotherContactNo = $_POST['MotherContactNo'];echo "<br>";
		echo $Sibling = $_POST['Sibling'];echo "<br>";
		//echo $ChooseaUsername = $_POST['ChooseaUsername'];echo "<br>";
		//echo $ChooseaPassword = $_POST['ChooseaPassword'];echo "<br>";
		//echo $ConfirmPassword = $_POST['ConfirmPassword'];
		echo $stuid = $_POST['STUID']; echo "<br>";
		echo $TemporaryPassword = $_POST['TemporaryPassword'];
		
	}	
}
//Add Student ends

?>