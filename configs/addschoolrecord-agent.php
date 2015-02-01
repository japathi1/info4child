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
		
		$sql = "INSERT INTO management (TitleDesignation,
										SchoolOwnerFirstName,
										SchoolOwnerLastName,
										OwnerMobile,
										OwnerEmailId,
										OwnerSex,
										mauid,
										MaTemporaryPassword,
										IsActive
										) VALUES (
										'management',
										'$OwnerFirstName',
										'$OwnerLastName',
										'$ContactNo',
										'$EmailId',
										'$Sex',
										'$MAUID',
										'$MaTemporaryPassword',
										'no'
										)";

		//send email begins	
		$SubEmail = $OwnerFirstName . ", Complete your Info4Child sign up‏";
		$UserURL = "http://info4child.azurewebsites.net/login/new-user.php?uid=".$MAUID;

		require("PHPMailer_5.2.4/class.phpmailer.php");
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPAuth = true;
		$body="<body><div id=\"bodyreadMessagePartBodyControl712f\" class=\"ExternalClass MsgBodyContainer\" data-link=\"class{:~tag.cssClasses(PlainText, IsContentFiltered)}\"><title>Info4Child</title><table width=\"98%\" border=\"0\" cellspacing=\"0\" cellpadding=\"40\"><tbody><tr><td bgcolor=\"#f7f7f7\" width=\"100%\" style=\"font-family:'lucida grande',tahoma,verdana,arial,sans-serif;\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"620\"><tbody><tr><td style=\"background:#3b5998;color:#FFFFFF;font-weight:bold;font-family:'lucida grande',tahoma,verdana,arial,sans-serif;vertical-align:middle;padding:4px 8px;font-size:16px;letter-spacing:-0.03em;text-align:left;\">Info4Child</td><td style=\"background:#3b5998;color:#FFFFFF;font-weight:bold;font-family:'lucida grande',tahoma,verdana,arial,sans-serif;vertical-align:middle;padding:4px 8px;font-size:11px;text-align:right;\"></td></tr><tr><td colspan=\"2\" style=\"background-color:#FFFFFF;border-bottom:1px solid #3b5998;border-left:1px solid #CCCCCC;border-right:1px solid #CCCCCC;padding:15px;font-family:'lucida grande',tahoma,verdana,arial,sans-serif;\" valign=\"top\"><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\"><tbody><tr><td width=\"100%\" style=\"font-size:12px;\" valign=\"top\" align=\"left\"><div style=\"font-size:12px;font-family:'lucida grande',tahoma,verdana,arial,sans-serif;\">Hi ".$OwnerFirstName.",</div><div style=\"\">There's just one more step before you're ready to go.</div><div style=\"\"><div style=\"border-bottom:1px solid #cccccc;line-height:5px;\">&nbsp;</div><br><div style=\"padding:2px 2px 3px 8px;border-left:5px solid green;\">Click the link below to go to the next step.<br><a href=\"".$UserURL."\" style=\"color:#3b5998;text-decoration:none;\" target=\"_blank\" class=\"\"><b>".$UserURL."</b></a></div><br><div style=\"border-bottom:1px solid #cccccc;line-height:5px;\">&nbsp;</div></div><div style=\"\"></div></td></tr></tbody></table><br><table cellspacing=\"0\" cellpadding=\"0\" style=\"border-collapse:collapse;width:100%;\"><tbody><tr><td style=\"font-size:11px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px;background-color:#fff9d7;border-left:1px solid #e2c822;border-right:1px solid #e2c822;border-top:1px solid #e2c822;border-bottom:1px solid #e2c822;\"><div style=\"font-weight:bold;font-size:11px;\">If something's not working on Info4Child, or you think there's a bug, use the link below to report bugs.</div><a href=\"https://www.linkedin.com/in/mdaliakhtar/\" style=\"color:#3b5998;text-decoration:none;font-size:11px;\" target=\"_blank\">https://www.linkedin.com/in/mdaliakhtar/<br></a><a href=\"https://twitter.com/mdaliakhtar/\" style=\"color:#3b5998;text-decoration:none;font-size:11px;\" target=\"_blank\">https://twitter.com/mdaliakhtar/<br></a><a href=\"https://www.facebook.com/ALImdaliakhtar/\" style=\"color:#3b5998;text-decoration:none;font-size:11px;\" target=\"_blank\">https://www.facebook.com/ALImdaliakhtar/</a><div style=\"font-weight:bold;font-size:11px;\">Giving more detail (ex: adding a screenshot and description) helps us find the problem. We may contact you for more details as we investigate. Reporting issues when they happen helps make Info4Child better, and we appreciate the time it takes to give us this information.</div></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></div></body>";
		$mail->AddAddress($EmailId);
		$mail->Subject = $SubEmail;
		$mail->MsgHTML($body);
		$mail->Header='Content-type: text/html; charset=iso-8859-1';
		if(!$mail->Send())
			echo "Error sending: ".$mail->ErrorInfo;
		//else
			//echo 'email is sent!';
		//send email ends
													
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
		$PrincipalFirstName = $_POST['PrincipalFirstName'];
		$PrincipalLastName = $_POST['PrincipalLastName'];
		$Sex = $_POST['Sex'];
		$MobileNo = $_POST['MobileNo'];
		$Email = $_POST['Email'];
		$Salary = $_POST['Salary'];
		$PRUID = $_POST['PRUID'];
		$PrTemporaryPassword = $_POST['PrTemporaryPassword'];	
		
		$sql = "INSERT INTO principal (TitleDesignation,
										PrincipalSchoolName,
										PrincipalFirstName,
										PrincipalLastName,
										Sex,
										Mobile,
										EmailId,
										Salary,
										pruid,
										PrTemporaryPassword,
										IsActive
										) VALUES (
										'principal',							
										'$SchoolName',
										'$PrincipalFirstName',
										'$PrincipalLastName',
										'$Sex',
										'$MobileNo',
										'$Email',
										'$Salary',
										'$PRUID',
										'$PrTemporaryPassword',
										'no'	
										)";

		//send email begins	
		$SubEmail = $PrincipalFirstName . ", Complete your Info4Child sign up‏";
		$UserURL = "http://info4child.azurewebsites.net/login/new-user.php?uid=".$PRUID;

		require("PHPMailer_5.2.4/class.phpmailer.php");
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPAuth = true;
		$body="<body><div id=\"bodyreadMessagePartBodyControl712f\" class=\"ExternalClass MsgBodyContainer\" data-link=\"class{:~tag.cssClasses(PlainText, IsContentFiltered)}\"><title>Info4Child</title><table width=\"98%\" border=\"0\" cellspacing=\"0\" cellpadding=\"40\"><tbody><tr><td bgcolor=\"#f7f7f7\" width=\"100%\" style=\"font-family:'lucida grande',tahoma,verdana,arial,sans-serif;\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"620\"><tbody><tr><td style=\"background:#3b5998;color:#FFFFFF;font-weight:bold;font-family:'lucida grande',tahoma,verdana,arial,sans-serif;vertical-align:middle;padding:4px 8px;font-size:16px;letter-spacing:-0.03em;text-align:left;\">Info4Child</td><td style=\"background:#3b5998;color:#FFFFFF;font-weight:bold;font-family:'lucida grande',tahoma,verdana,arial,sans-serif;vertical-align:middle;padding:4px 8px;font-size:11px;text-align:right;\"></td></tr><tr><td colspan=\"2\" style=\"background-color:#FFFFFF;border-bottom:1px solid #3b5998;border-left:1px solid #CCCCCC;border-right:1px solid #CCCCCC;padding:15px;font-family:'lucida grande',tahoma,verdana,arial,sans-serif;\" valign=\"top\"><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\"><tbody><tr><td width=\"100%\" style=\"font-size:12px;\" valign=\"top\" align=\"left\"><div style=\"font-size:12px;font-family:'lucida grande',tahoma,verdana,arial,sans-serif;\">Hi ".$PrincipalFirstName.",</div><div style=\"\">There's just one more step before you're ready to go.</div><div style=\"\"><div style=\"border-bottom:1px solid #cccccc;line-height:5px;\">&nbsp;</div><br><div style=\"padding:2px 2px 3px 8px;border-left:5px solid green;\">Click the link below to go to the next step.<br><a href=\"".$UserURL."\" style=\"color:#3b5998;text-decoration:none;\" target=\"_blank\" class=\"\"><b>".$UserURL."</b></a></div><br><div style=\"border-bottom:1px solid #cccccc;line-height:5px;\">&nbsp;</div></div><div style=\"\"></div></td></tr></tbody></table><br><table cellspacing=\"0\" cellpadding=\"0\" style=\"border-collapse:collapse;width:100%;\"><tbody><tr><td style=\"font-size:11px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px;background-color:#fff9d7;border-left:1px solid #e2c822;border-right:1px solid #e2c822;border-top:1px solid #e2c822;border-bottom:1px solid #e2c822;\"><div style=\"font-weight:bold;font-size:11px;\">If something's not working on Info4Child, or you think there's a bug, use the link below to report bugs.</div><a href=\"https://www.linkedin.com/in/mdaliakhtar/\" style=\"color:#3b5998;text-decoration:none;font-size:11px;\" target=\"_blank\">https://www.linkedin.com/in/mdaliakhtar/<br></a><a href=\"https://twitter.com/mdaliakhtar/\" style=\"color:#3b5998;text-decoration:none;font-size:11px;\" target=\"_blank\">https://twitter.com/mdaliakhtar/<br></a><a href=\"https://www.facebook.com/ALImdaliakhtar/\" style=\"color:#3b5998;text-decoration:none;font-size:11px;\" target=\"_blank\">https://www.facebook.com/ALImdaliakhtar/</a><div style=\"font-weight:bold;font-size:11px;\">Giving more detail (ex: adding a screenshot and description) helps us find the problem. We may contact you for more details as we investigate. Reporting issues when they happen helps make Info4Child better, and we appreciate the time it takes to give us this information.</div></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></div></body>";
		$mail->AddAddress($Email);
		$mail->Subject = $SubEmail;
		$mail->MsgHTML($body);
		$mail->Header='Content-type: text/html; charset=iso-8859-1';
		if(!$mail->Send())
			echo "Error sending: ".$mail->ErrorInfo;
		//else
			//echo 'email is sent!';
		//send email ends				
				
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
		$EmployeeId = $_POST['EmployeeId'];
		$TeacherFirstName = $_POST['TeacherFirstName'];	
		$TeacherLastName = $_POST['TeacherLastName'];	
		$ContactNo = $_POST['ContactNo'];	
		$EmailId = $_POST['EmailId'];	
		$Subject = $_POST['Subject'];	
		$Sex = $_POST['Sex'];	
		$ImageUpload = "No Image";;	
		$Salary = $_POST['Salary'];	
		$TEUID = $_POST['TEUID'];	
		$TeTemporaryPassword = $_POST['TeTemporaryPassword'];			
		
		$sql = "INSERT INTO teacher (TitleDesignation,
										TeacherSchoolName,
										EmployeeId,
										TeacherFirstName,
										TeacherLastName,
										Mobile,
										EmailId,
										YourSubject,
										Sex,
										Salary,
										teuid,
										TeTemporaryPassword,
										IsActive
										) VALUES (
										'teacher',										
										'$TeacherSchoolName',
										'$EmployeeId',
										'$TeacherFirstName',
										'$TeacherLastName',
										'$ContactNo',
										'$EmailId',
										'$Subject',
										'$Sex',
										'$Salary',
										'$TEUID',
										'$TeTemporaryPassword',
										'no'
										)";

		//send email begins	
		$SubEmail = $TeacherFirstName . ", Complete your Info4Child sign up‏";
		$UserURL = "http://info4child.azurewebsites.net/login/new-user.php?uid=".$TEUID;

		require("PHPMailer_5.2.4/class.phpmailer.php");
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPAuth = true;
		$body="<body><div id=\"bodyreadMessagePartBodyControl712f\" class=\"ExternalClass MsgBodyContainer\" data-link=\"class{:~tag.cssClasses(PlainText, IsContentFiltered)}\"><title>Info4Child</title><table width=\"98%\" border=\"0\" cellspacing=\"0\" cellpadding=\"40\"><tbody><tr><td bgcolor=\"#f7f7f7\" width=\"100%\" style=\"font-family:'lucida grande',tahoma,verdana,arial,sans-serif;\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"620\"><tbody><tr><td style=\"background:#3b5998;color:#FFFFFF;font-weight:bold;font-family:'lucida grande',tahoma,verdana,arial,sans-serif;vertical-align:middle;padding:4px 8px;font-size:16px;letter-spacing:-0.03em;text-align:left;\">Info4Child</td><td style=\"background:#3b5998;color:#FFFFFF;font-weight:bold;font-family:'lucida grande',tahoma,verdana,arial,sans-serif;vertical-align:middle;padding:4px 8px;font-size:11px;text-align:right;\"></td></tr><tr><td colspan=\"2\" style=\"background-color:#FFFFFF;border-bottom:1px solid #3b5998;border-left:1px solid #CCCCCC;border-right:1px solid #CCCCCC;padding:15px;font-family:'lucida grande',tahoma,verdana,arial,sans-serif;\" valign=\"top\"><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\"><tbody><tr><td width=\"100%\" style=\"font-size:12px;\" valign=\"top\" align=\"left\"><div style=\"font-size:12px;font-family:'lucida grande',tahoma,verdana,arial,sans-serif;\">Hi ".$TeacherFirstName.",</div><div style=\"\">There's just one more step before you're ready to go.</div><div style=\"\"><div style=\"border-bottom:1px solid #cccccc;line-height:5px;\">&nbsp;</div><br><div style=\"padding:2px 2px 3px 8px;border-left:5px solid green;\">Click the link below to go to the next step.<br><a href=\"".$UserURL."\" style=\"color:#3b5998;text-decoration:none;\" target=\"_blank\" class=\"\"><b>".$UserURL."</b></a></div><br><div style=\"border-bottom:1px solid #cccccc;line-height:5px;\">&nbsp;</div></div><div style=\"\"></div></td></tr></tbody></table><br><table cellspacing=\"0\" cellpadding=\"0\" style=\"border-collapse:collapse;width:100%;\"><tbody><tr><td style=\"font-size:11px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px;background-color:#fff9d7;border-left:1px solid #e2c822;border-right:1px solid #e2c822;border-top:1px solid #e2c822;border-bottom:1px solid #e2c822;\"><div style=\"font-weight:bold;font-size:11px;\">If something's not working on Info4Child, or you think there's a bug, use the link below to report bugs.</div><a href=\"https://www.linkedin.com/in/mdaliakhtar/\" style=\"color:#3b5998;text-decoration:none;font-size:11px;\" target=\"_blank\">https://www.linkedin.com/in/mdaliakhtar/<br></a><a href=\"https://twitter.com/mdaliakhtar/\" style=\"color:#3b5998;text-decoration:none;font-size:11px;\" target=\"_blank\">https://twitter.com/mdaliakhtar/<br></a><a href=\"https://www.facebook.com/ALImdaliakhtar/\" style=\"color:#3b5998;text-decoration:none;font-size:11px;\" target=\"_blank\">https://www.facebook.com/ALImdaliakhtar/</a><div style=\"font-weight:bold;font-size:11px;\">Giving more detail (ex: adding a screenshot and description) helps us find the problem. We may contact you for more details as we investigate. Reporting issues when they happen helps make Info4Child better, and we appreciate the time it takes to give us this information.</div></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></div></body>";
		$mail->AddAddress($EmailId);
		$mail->Subject = $SubEmail;
		$mail->MsgHTML($body);
		$mail->Header='Content-type: text/html; charset=iso-8859-1';
		if(!$mail->Send())
			echo "Error sending: ".$mail->ErrorInfo;
		//else
			//echo 'email is sent!';
		//send email ends										
				
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
	$AddStudent = $_POST['AddStudent'];
	if($AddStudent == "AddStudent"){
		$School = $_POST['School'];
		$FirstName = $_POST['FirstName'];
		$LastName = $_POST['LastName'];
		$ContactNo = $_POST['ContactNo'];
		$EmailId = $_POST['EmailId'];
		$Class = $_POST['Class'];
		$Section = $_POST['Section'];
		$RegisterationNo = $_POST['RegisterationNo'];
		$RollNo = $_POST['RollNo'];		
		$ClassTeacherName = $_POST['ClassTeacherName'];
		$DateofBirth = $_POST['DateofBirth'];
		$Sex = $_POST['Sex'];
		//$ImageUpload = "No Image";
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
		
		$sql = "INSERT INTO student (designation,
									School,
									FirstName,
									LastName,
									ContactNo,
									EmailId,
									Class,
									Section,
									RegisterationNo,
									RollNo,									
									ClassTeacherName,
									DateofBirth,
									Sex,
									BloodGroup,
									FatherName,
									FatherEmailID,
									FatherContactNo,
									MotherName,
									MotherEmailID,
									MotherContactNo,
									Sibling,
									stuid,
									TemporaryPassword,
									IsActive
									) VALUES (
									'student',							
									'$School',
									'$FirstName',
									'$LastName',
									'$ContactNo',
									'$EmailId',
									'$Class',
									'$Section',
									'$RegisterationNo',
									'$RollNo',									
									'$ClassTeacherName',
									'$DateofBirth',
									'$Sex',
									'$BloodGroup',
									'$FatherName',
									'$FaterEmailID',
									'$FatherContactNo',
									'$MotherName',
									'$MotherEmailID',
									'$MotherContactNo',
									'$Sibling',
									'$stuid',
									'$TemporaryPassword',
									'no'
									)";

		//send email begins	
		$SubEmail = $FirstName . ", Complete your Info4Child sign up‏";
		$UserURL = "http://info4child.azurewebsites.net/login/new-user.php?uid=".$stuid;

		require("PHPMailer_5.2.4/class.phpmailer.php");
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPAuth = true;
		$body="<body><div id=\"bodyreadMessagePartBodyControl712f\" class=\"ExternalClass MsgBodyContainer\" data-link=\"class{:~tag.cssClasses(PlainText, IsContentFiltered)}\"><title>Info4Child</title><table width=\"98%\" border=\"0\" cellspacing=\"0\" cellpadding=\"40\"><tbody><tr><td bgcolor=\"#f7f7f7\" width=\"100%\" style=\"font-family:'lucida grande',tahoma,verdana,arial,sans-serif;\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"620\"><tbody><tr><td style=\"background:#3b5998;color:#FFFFFF;font-weight:bold;font-family:'lucida grande',tahoma,verdana,arial,sans-serif;vertical-align:middle;padding:4px 8px;font-size:16px;letter-spacing:-0.03em;text-align:left;\">Info4Child</td><td style=\"background:#3b5998;color:#FFFFFF;font-weight:bold;font-family:'lucida grande',tahoma,verdana,arial,sans-serif;vertical-align:middle;padding:4px 8px;font-size:11px;text-align:right;\"></td></tr><tr><td colspan=\"2\" style=\"background-color:#FFFFFF;border-bottom:1px solid #3b5998;border-left:1px solid #CCCCCC;border-right:1px solid #CCCCCC;padding:15px;font-family:'lucida grande',tahoma,verdana,arial,sans-serif;\" valign=\"top\"><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\"><tbody><tr><td width=\"100%\" style=\"font-size:12px;\" valign=\"top\" align=\"left\"><div style=\"font-size:12px;font-family:'lucida grande',tahoma,verdana,arial,sans-serif;\">Hi ".$FirstName.",</div><div style=\"\">There's just one more step before you're ready to go.</div><div style=\"\"><div style=\"border-bottom:1px solid #cccccc;line-height:5px;\">&nbsp;</div><br><div style=\"padding:2px 2px 3px 8px;border-left:5px solid green;\">Click the link below to go to the next step.<br><a href=\"".$UserURL."\" style=\"color:#3b5998;text-decoration:none;\" target=\"_blank\" class=\"\"><b>".$UserURL."</b></a></div><br><div style=\"border-bottom:1px solid #cccccc;line-height:5px;\">&nbsp;</div></div><div style=\"\"></div></td></tr></tbody></table><br><table cellspacing=\"0\" cellpadding=\"0\" style=\"border-collapse:collapse;width:100%;\"><tbody><tr><td style=\"font-size:11px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px;background-color:#fff9d7;border-left:1px solid #e2c822;border-right:1px solid #e2c822;border-top:1px solid #e2c822;border-bottom:1px solid #e2c822;\"><div style=\"font-weight:bold;font-size:11px;\">If something's not working on Info4Child, or you think there's a bug, use the link below to report bugs.</div><a href=\"https://www.linkedin.com/in/mdaliakhtar/\" style=\"color:#3b5998;text-decoration:none;font-size:11px;\" target=\"_blank\">https://www.linkedin.com/in/mdaliakhtar/<br></a><a href=\"https://twitter.com/mdaliakhtar/\" style=\"color:#3b5998;text-decoration:none;font-size:11px;\" target=\"_blank\">https://twitter.com/mdaliakhtar/<br></a><a href=\"https://www.facebook.com/ALImdaliakhtar/\" style=\"color:#3b5998;text-decoration:none;font-size:11px;\" target=\"_blank\">https://www.facebook.com/ALImdaliakhtar/</a><div style=\"font-weight:bold;font-size:11px;\">Giving more detail (ex: adding a screenshot and description) helps us find the problem. We may contact you for more details as we investigate. Reporting issues when they happen helps make Info4Child better, and we appreciate the time it takes to give us this information.</div></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></div></body>";
		$mail->AddAddress($EmailId);
		$mail->Subject = $SubEmail;
		$mail->MsgHTML($body);
		$mail->Header='Content-type: text/html; charset=iso-8859-1';
		if(!$mail->Send())
			echo "Error sending: ".$mail->ErrorInfo;
		//else
			//echo 'email is sent!';
		//send email ends
	
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