<?php
session_start();

$uid = $_SESSION['uid'];
$FirstName = $_SESSION['FirstName'];
$DesignationHardCode = $_SESSION['DesignationHardCode'];

if(($_SESSION['uid'] == "") || ($DesignationHardCode != "student")){
	header('Location: ../login/login.php');
	exit();	
}

if(isset($_GET['success'])){
	$success = $_GET['success'];
}else{
	$success = "NotYesOrNo";	
}

include '../configs/connection.php';

//fetch data from school table begins
$sql = "SELECT * FROM student WHERE stuid='$uid'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    // login success - output data of each row
    while($row = mysqli_fetch_assoc($result)){
		$FirstName = $row["FirstName"];
		$LastName = $row["LastName"];
		$DateofBirth = $row["DateofBirth"];	
		$ContactNo = $row["ContactNo"];
		$EmailId = $row["EmailId"];
		$Class = $row["Class"];
		$Section = $row["Section"];
		$RegisterationNo = $row["RegisterationNo"];
		$RollNo = $row["RollNo"];
		$ImageUpload = $row["ImageUpload"];
		$Sex = $row["Sex"];
		
		$FatherName = $row["FatherName"];
		$FatherContactNo = $row["FatherContactNo"];
		$FatherEmailID = $row["FatherEmailID"];
		
		$MotherName = $row["MotherName"];
		$MotherContactNo = $row["MotherContactNo"];
		$MotherEmailID = $row["MotherEmailID"];
		
		$ClassTeacherName = $row["ClassTeacherName"];	

		$FatherDateofBirth = $row["FatherDateofBirth"];	
		$FatherOccupation = $row["FatherOccupation"];	
		$FatherCompanyName = $row["FatherCompanyName"];	
		$FatherDesignation = $row["FatherDesignation"];	
		$FatherQualification = $row["FatherQualification"];	

		$MotherDateofBirth = $row["MotherDateofBirth"];	
		$MotherOccupation = $row["MotherOccupation"];	
		$MotherCompanyName = $row["MotherCompanyName"];	
		$MotherDesignation = $row["MotherDesignation"];	
		$MotherQualification = $row["MotherQualification"];	

		$PresentAddress = $row["PresentAddress"];	
		$PresentLandmark = $row["PresentLandmark"];	
		$PresentCountry = $row["PresentCountry"];	
		$PresentState = $row["PresentState"];	
		$PresentCity = $row["PresentCity"];	
		$PresentPinCode = $row["PresentPinCode"];	

		$PermanentAddress = $row["PermanentAddress"];	
		$PermanentLandmark = $row["PermanentLandmark"];	
		$PermanentCountry = $row["PermanentCountry"];	
		$PermanentState = $row["PermanentState"];	
		$PermanentCity = $row["PermanentCity"];	
		$PermanentPinCode = $row["PermanentPinCode"];	

		$SiblingStudentID = $row["SiblingStudentID"];
		$Sibling = $row["Sibling"];
		$SiblingFatherName = $row["SiblingFatherName"];
		$SiblingDateofBirth = $row["SiblingDateofBirth"];
		
    }
}else{
    echo "0 results";
}
//fetch data from school table ends

// profile picture begins
$DBPPPath = "../configs/student-profile-pic.php?stuid=".$uid;
$DirectoryPPPath ="img/profile-pic.jpg";

if(!empty($ImageUpload)){
	$ProfilePicture = $DBPPPath;
}else{
	$ProfilePicture = $DirectoryPPPath;	
}
// profile picture ends

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>:: Info 4 Child ::</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- The styles -->
<link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">
<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	

	</style>
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/charisma-app.css" rel="stylesheet">
<link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
<link href='css/fullcalendar.css' rel='stylesheet'>
<link href='css/fullcalendar.print.css' rel='stylesheet'  media='print'>
<link href='css/chosen.css' rel='stylesheet'>
<link href='css/uniform.default.css' rel='stylesheet'>
<link href='css/colorbox.css' rel='stylesheet'>
<link href='css/jquery.cleditor.css' rel='stylesheet'>
<link href='css/jquery.noty.css' rel='stylesheet'>
<link href='css/noty_theme_default.css' rel='stylesheet'>
<link href='css/elfinder.min.css' rel='stylesheet'>
<link href='css/elfinder.theme.css' rel='stylesheet'>
<link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
<link href='css/opa-icons.css' rel='stylesheet'>
<link href='css/uploadify.css' rel='stylesheet'>
<link href='css/dropzone.css' rel='stylesheet'>


<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<!-- The fav icon -->
<link rel="shortcut icon" href="img/favicon.ico">
<script type="text/javascript">
$(function(){
		   $('#make_same').click(function(){
										  $('#present_address').val($('#permanent_address').val());
										  });
		   });
			
		</script>
        <script type="text/javascript">	
		function isNumber(e){
    e = e || window.event;
    var charCode = e.which ? e.which : e.keyCode;
    return /\d/.test(String.fromCharCode(charCode));
	
	
	
}


</script>
<script type="text/javascript">
//Edit Student Information begins
function validEditStudentInformation(){
	if(document.EditStudentInformation.FirstName.value == ""){
			alert("Please enter First Name");
			document.EditStudentInformation.FirstName.focus();
			return false;
	}
	if(document.EditStudentInformation.LastName.value == ""){
			alert("Please enter Last Name");
			document.EditStudentInformation.LastName.focus();
			return false;
	}
	if(document.EditStudentInformation.DateofBirth.value == ""){
			alert("Please select Date of Birth");
			document.EditStudentInformation.DateofBirth.focus();
			return false;
	}		
}
//Edit Student Information ends

//Edit Parent Information begins
function validEditParentInformation(){
	if(document.EditParentInformation.FatherName.value == ""){
			alert("Please enter Father Name");
			document.EditParentInformation.FatherName.focus();
			return false;
	}
	if(document.EditParentInformation.FatherOccupation.value == ""){
			alert("Please enter Father Occupation");
			document.EditParentInformation.FatherOccupation.focus();
			return false;
	}
	if(document.EditParentInformation.MotherName.value == ""){
			alert("Please enter Mother Name");
			document.EditParentInformation.MotherName.focus();
			return false;
	}
	if(document.EditParentInformation.MotherOccupation.value == ""){
			alert("Please enter Mother Occupation");
			document.EditParentInformation.MotherOccupation.focus();
			return false;
	}	
		
}
//Edit Parent Information ends

//Edit Address Information begins
function validEditAddressInformation(){
	if(document.EditAddressInformation.PermanentAddress.value == ""){
			alert("Please enter Permanent Address");
			document.EditAddressInformation.PermanentAddress.focus();
			return false;
	}
	if(document.EditAddressInformation.PermanentCountry.value == ""){
			alert("Please enter Country");
			document.EditAddressInformation.PermanentCountry.focus();
			return false;
	}
	if(document.EditAddressInformation.PermanentState.value == ""){
			alert("Please enter State");
			document.EditAddressInformation.PermanentState.focus();
			return false;
	}
	if(document.EditAddressInformation.PermanentCity.value == ""){
			alert("Please enter City");
			document.EditAddressInformation.PermanentCity.focus();
			return false;
	}
	if(document.EditAddressInformation.PermanentPinCode.value == ""){
			alert("Please enter Pin Code");
			document.EditAddressInformation.PermanentPinCode.focus();
			return false;
	}	
			
}
//Edit Address Information ends

//Edit Academic Information begins
function validEditAcademicInformation(){
	if(document.EditAcademicInformation.ClassTeacherName.value == ""){
			alert("Please enter Class Teacher Name");
			document.EditAcademicInformation.ClassTeacherName.focus();
			return false;
	}	
			
}
//Edit Academic Information ends	

//Change Profile Picture begins
function validChangeProfilePicture(){
	if(document.ChangeProfilePicture.userfile.value == ""){
			alert("Please select Profile Picture");
			document.ChangeProfilePicture.userfile.focus();
			return false;
	}	
			
}
//Change Profile Picture ends

//Change Your Password begins
function validChangeYourPassword(){
	if(document.ChangeYourPassword.OldPassword.value == ""){
			alert ( "Please enter Old Password");
			document.ChangeYourPassword.OldPassword.focus();
			return false;
	}
	if(document.ChangeYourPassword.password.value == ""){
			alert ( "Please enter Password");
			document.ChangeYourPassword.password.focus();
			return false;
	}
	if(document.ChangeYourPassword.repassword.value == ""){
			alert ( "Please re enter Password");
			document.ChangeYourPassword.repassword.focus();
			return false;
	}
	var password = document.getElementById ("password");
	var repassword = document.getElementById ("repassword");
	if (password.value.length < 8) {
		alert ("The password must be at least 8 characters long");
		return false;
	}
	if (repassword.value != password.value) {
		alert ("These passwords don't match");
		return false;
	}	
			
}
//Change Your Password ends	
</script>
</head>
<body>
<!-- topbar starts -->
<div class="navbar">
  <div class="navbar-inner">
    <div class="container-fluid"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="index.php"> <img alt=""/> <span>ABC</span></a>
      <!-- theme selector starts -->
      <div class="btn-group pull-right theme-container" > <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <i class="icon-tint"></i><span class="hidden-phone"> Change Theme / Skin</span> <span class="caret"></span> </a>
        <ul class="dropdown-menu" id="themes">
          <li><a data-value="classic" href="#"><i class="icon-blank"></i> 1</a></li>
          <li><a data-value="cerulean" href="#"><i class="icon-blank"></i> Default</a></li>
          <li><a data-value="cyborg" href="#"><i class="icon-blank"></i> 2</a></li>
          <li><a data-value="redy" href="#"><i class="icon-blank"></i> 3</a></li>
          <li><a data-value="journal" href="#"><i class="icon-blank"></i> 4</a></li>
          <li><a data-value="simplex" href="#"><i class="icon-blank"></i> 5</a></li>
          <li><a data-value="slate" href="#"><i class="icon-blank"></i> 6</a></li>
          <li><a data-value="spacelab" href="#"><i class="icon-blank"></i> 7</a></li>
          <li><a data-value="united" href="#"><i class="icon-blank"></i> 8</a></li>
        </ul>
      </div>
      <!-- theme selector ends -->
      <!-- user dropdown starts -->
      <div class="btn-group pull-right">
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone">Welcome <?php echo $FirstName; ?>!</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="profile.php">View Profile</a></li>
						<li class="divider"></li>
						<li><a href="../login/login.php">Logout</a></li>
					</ul>
				</div>
      <!-- user dropdown ends -->
      <div class="top-nav nav-collapse">
        <ul class="nav">
          <li><a href="#">Visit Site</a></li>
          <li>
            <form class="navbar-search pull-left">
              <input placeholder="Search" class="search-query span2" name="query" type="text">
            </form>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>
</div>
<!-- topbar ends -->
<div class="container-fluid">
  <div class="row-fluid">
    <!-- left menu starts -->
    <div class="span2 main-menu-span">
      <div class="well nav-collapse sidebar-nav">
        <ul class="nav nav-tabs nav-stacked main-menu">
          <li class="nav-header hidden-tablet">Menu</li>
          <li><a class="ajax-link" href="index.php"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>
          <li><a class="ajax-link" href="profile.php"><i class="icon-camera"></i><span class="hidden-tablet"> View Profile</span></a></li>
		   <li><a class="ajax-link" href="edit-profile.php"><i class="icon-edit"></i><span class="hidden-tablet"> Edit Profile</span></a></li>
          <li><a class="ajax-link" href="message.php"><i class="icon-inbox"></i><span class="hidden-tablet"> Message Center</span></a></li>
          <li><a class="ajax-link" href="assignment.php"><i class="icon-book"></i><span class="hidden-tablet">View Assignment </span></a></li>
		  <li><a class="ajax-link" href="school-result.php"><i class="icon-star"></i><span class="hidden-tablet"> School Exam/Result</span></a></li>
		    <li><a class="ajax-link" href="notice-board.php"><i class="icon-bullhorn"></i><span class="hidden-tablet">School Notice Board</span></a></li>
          <li><a class="ajax-link" href="attandance.php"><i class="icon-signal"></i><span class="hidden-tablet">Attandance Record</span></a></li>
          <li><a class="ajax-link" href="gallery.php"><i class="icon-picture"></i><span class="hidden-tablet">Photo Gallery </span></a></li>
		  <li><a class="ajax-link" href="medical.php"><i class="icon-plus"></i><span class="hidden-tablet"> Medical Report</span></a></li>
		   <li><a class="ajax-link" href="holiday.php"><i class="icon-bell"></i><span class="hidden-tablet"> Holiday Calender</span></a></li>
		    <li><a class="ajax-link" href="event.php"><i class="icon-calendar"></i><span class="hidden-tablet"> Event Calender</span></a></li>
			<li><a class="ajax-link" href="time-table.php"><i class="icon-time"></i><span class="hidden-tablet"> School Time Table</span></a></li>
			 <li><a class="ajax-link" href="exam-center.php"><i class="icon-thumbs-up"></i><span class="hidden-tablet"> I4C Exam Center</span></a></li>
        </ul>
        <label id="for-is-ajax" class="hidden-tablet" for="is-ajax">
        <input id="is-ajax" type="checkbox">
        Ajax on menu</label>
      </div>
      <!--/.well -->
    </div>
    <!--/span-->
    <!-- left menu ends -->
    <noscript>
    <div class="alert alert-block span10">
      <h4 class="alert-heading">Warning!</h4>
      <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
    </div>
    </noscript>
    <div id="content" class="span10">
      <!-- content starts -->
      <div>
        <ul class="breadcrumb">
          <li> <a href="index.php">Home</a> <span class="divider">/</span> </li>
          <li> <a href="gallery.php">Gallery</a> </li>
        </ul>
      </div>
    <!--submit alert begins --->
    <?php
    if($success == "yes"){
        echo "<div class=\"alert alert-success\">";
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>";
            echo "<strong>Well done!</strong> Your profile was successfully updated";
        echo "</div>";
    }
    if($success == "no"){
        echo "<div class=\"alert alert-danger\">";
          echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>";
          echo "<strong>Oh snap!</strong> Change a few things up and try saving again.";
        echo "</div>";
    }				
    ?>	            
    <!--submit alert ends --->	      
      <div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-picture"></i> Gallery</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						 <div class="row-fluid">
               <div class="span12">
                  <div class="widget">
                       
                        <div class="widget-body">
                            <div class="span3">
                               
                                <ul class="nav nav-tabs nav-stacked">
                                    <li><a href="#one"><i class="icon-adjust"></i>Edit Student Info</a></li>
                                    <li><a href="#two"><i class=" icon-eye-close"></i>Edit Parent Info</a></li>
                                     <li><a href="#three"><i class="icon-magnet"></i>Edit Address Info</a></li>
                                    <li><a href="#four"><i class="icon-certificate" ></i> Edit Academic Detail</a></li>
                                    <li><a href="#five"><i class="icon-picture" ></i> Edit Profile Picture</a></li>
                                    <li><a href="#six"><i class="icon-exclamation-sign" ></i> Change Password</a></li>
                                    
                                </ul>
                             
                            </div>
                            <div class="span9 mCustomScrollbar" style="height:500px; border:1px solid #ddd; overflow-y: scroll; padding:10px;">
							<a name="one"></a>
                            <h3>Edit Student Information</h3>
                            <hr>
							<form name="EditStudentInformation" class="form-horizontal" action="../configs/student-edit-profile-agent.php" method="post" onSubmit="return validEditStudentInformation();">
								<div class="form-horizontal">
								<div class="control-group">
									<label class="control-label" for="focusedInput">First Name:*</label>
									<div class="controls">
                                      <input name="EditStudentInformation" type="hidden" value="EditStudentInformation">
                                      <input name="stuid" type="hidden" value="<?php echo $uid; ?>">
                                      <input name="FirstName" class="input-xlarge focused" id="focusedInput2" type="text" value="<?php echo $FirstName; ?>">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="focusedInput">Last Name:*</label>
									<div class="controls">
									  <input name="LastName" class="input-xlarge focused" id="focusedInput"   type="text" value="<?php echo $LastName; ?>">
									</div>
								</div>
								<div class="control-group">
								  <label class="control-label" for="date01">Date of Birth:*</label>
								  <div class="controls">
									<input name="DateofBirth" type="text" class="input-xlarge datepicker" id="date01" value="<?php echo $DateofBirth; ?>">
								  </div>
								</div>
								<div class="control-group">
									<label class="control-label" for="appendedInput">Email Id:</label>
									<div class="controls">
									 <div class="input-append">
									  <span class="input-xlarge uneditable-input"><?php echo $EmailId; ?></span><button class="btn  btn-setting" type="button">Send Request For Change</button>
									   </div>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="appendedInput">Contact No:</label>
									<div class="controls">
									 <div class="input-append">
									  <span class="input-xlarge uneditable-input"><?php echo $ContactNo; ?></span><button class="btn btn-setting" type="button">Send Request For Change</button>
									
									 </div>
									</div>
								</div>
								<div class="control-group">
                                	<?php
									if($Sex == "male"){
										$MaleChecked = 'checked=""';	
									}else{
										$MaleChecked = '';
									}
									
									if($Sex == "female"){
										$FemaleChecked = 'checked=""';	
									}else{
										$FemaleChecked = '';
									}									
									?>
									<label class="control-label">Sex:</label>
									<div class="controls">
									  <label class="radio">
										<input type="radio" name="Sex" id="optionsRadios1" value="male" <?php echo $MaleChecked; ?>>
										Male
									  </label>
									  <div style="clear:both"></div>
									  <label class="radio">
										<input type="radio" name="Sex" id="optionsRadios2" value="female" <?php echo $FemaleChecked; ?>>
										Female
									  </label>
									</div>
								</div>								
								<div class="form-actions">
								  <button type="submit" class="btn btn-primary">Save</button>
								  <button type="reset" class="btn">Cancel</button>
								</div>
								</div>
							</form>
							
							<a name="two"></a>
                            <h3>Edit Parent Information</h3>
                            <hr>
							<form name="EditParentInformation" class="form-horizontal" action="../configs/student-edit-profile-agent.php" method="post" onSubmit="return validEditParentInformation();">
								<div class="form-horizontal">
								<h4> Father's Information </h4>
								<div class="control-group">
									<label class="control-label" for="focusedInput">Father Name:*</label>
									<div class="controls">
                                      <input name="EditParentInformation" type="hidden" value="EditParentInformation">
                                      <input name="stuid" type="hidden" value="<?php echo $uid; ?>">									
									  <input name="FatherName" class="input-xlarge focused" id="focusedInput2" type="text" value="<?php echo $FatherName; ?>">
									</div>
								</div>
								<div class="control-group">
								  <label class="control-label" for="date01">Date of Birth:</label>
								  <div class="controls">
									<input name="FatherDateofBirth" type="text" class="input-xlarge datepicker" id="date01" value="<?php echo $FatherDateofBirth; ?>">
								  </div>
								</div>
								<div class="control-group">
									<label class="control-label" for="appendedInput">Father Contact No:</label>
									<div class="controls">
									 <div class="input-append">
									  <span class="input-xlarge uneditable-input"><?php echo $FatherContactNo; ?></span><button class="btn btn-setting" type="button">Send Request For Change</button>
									
									 </div>
									</div>
								</div>                               
								<div class="control-group">
									<label class="control-label" for="selectError3">Occupation:</label>
									<div class="controls">
									  <select name="FatherOccupation" id="selectError3">
										<option value="SelfEmployee"<?php if($FatherOccupation == "SelfEmployee"){echo " selected";} ?>>Self Employee</option>
										<option value="PrivateSector"<?php if($FatherOccupation == "PrivateSector"){echo " selected";} ?>>Private Sector</option>
										<option value="GovtSector"<?php if($FatherOccupation == "GovtSector"){echo " selected";} ?>>Govt. Sector</option>
										<option value="BusinessMan"<?php if($FatherOccupation == "BusinessMan"){echo " selected";} ?>>Business Man</option>
										<option value="Other"<?php if($FatherOccupation == "Other"){echo " selected";} ?>>Other</option>
									  </select>
									</div>
								</div>								
								<div class="control-group">
									<label class="control-label" for="focusedInput">Company Name:</label>
									<div class="controls">
									  <input name="FatherCompanyName" class="input-xlarge focused" id="focusedInput" type="text" value="<?php echo $FatherCompanyName; ?>">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="focusedInput">Designation:</label>
									<div class="controls">
									  <input name="FatherDesignation" class="input-xlarge focused" id="focusedInput" type="text" value="<?php echo $FatherDesignation; ?>">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="appendedInput">Email Id:</label>
									<div class="controls">
									 <div class="input-append">
									  <span class="input-xlarge uneditable-input"><?php echo $FatherEmailID; ?></span><button class="btn  btn-setting" type="button">Send Request For Change</button>
									 </div>
									</div>
								</div>
							    <div class="control-group">
									<label class="control-label" for="selectError3">Qualification:</label>
									<div class="controls">
									  <select name="FatherQualification" id="selectError3">
										<option value="UnEducated"<?php if($FatherQualification == "UnEducated"){echo " selected";} ?>>UnEducated</option>
										<option value="Under10th"<?php if($FatherQualification == "Under10th"){echo " selected";} ?>>Under 10th</option>
										<option value="10thPass"<?php if($FatherQualification == "10thPass"){echo " selected";} ?>>10th Pass</option>
										<option value="12thPass"<?php if($FatherQualification == "12thPass"){echo " selected";} ?>>12th Pass</option>
										<option value="Graduate"<?php if($FatherQualification == "Graduate"){echo " selected";} ?>>Graduate</option>
										<option value="MasterDegree"<?php if($FatherQualification == "MasterDegree"){echo " selected";} ?>>Master Degree</option>
										<option value="PhD"<?php if($FatherQualification == "PhD"){echo " selected";} ?>>PhD</option>
										<option value="Other"<?php if($FatherQualification == "Other"){echo " selected";} ?>>Other</option>
									  </select>
									</div>
                                </div>  							
								<h4>Mother's Information </h4>
								<div class="control-group">
									<label class="control-label" for="focusedInput">Mother Name:*</label>
									<div class="controls">
									  <input name="MotherName" class="input-xlarge focused" id="focusedInput2" type="text" value="<?php echo $MotherName; ?>">
									</div>
								</div>
								<div class="control-group">
								  <label class="control-label" for="date01">Date of Birth:</label>
								  <div class="controls">
									<input name="MotherDateofBirth" type="text" class="input-xlarge datepicker" id="date01" value="<?php echo $MotherDateofBirth; ?>">
								  </div>
								</div>
								<div class="control-group">
									<label class="control-label" for="appendedInput">Mother Contact No:</label>
									<div class="controls">
									 <div class="input-append">
									  <span class="input-xlarge uneditable-input"><?php echo $MotherContactNo; ?></span><button class="btn btn-setting" type="button">Send Request For Change</button>
									 </div>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="selectError3">Occupation:</label>
									<div class="controls">
									  <select name="MotherOccupation" id="selectError3">
										<option value="SelfEmployee"<?php if($MotherOccupation == "SelfEmployee"){echo " selected";} ?>>Self Employee</option>
										<option value="PrivateSector"<?php if($MotherOccupation == "PrivateSector"){echo " selected";} ?>>Private Sector</option>
										<option value="GovtSector"<?php if($MotherOccupation == "GovtSector"){echo " selected";} ?>>Govt. Sector</option>
										<option value="BusinessMan"<?php if($MotherOccupation == "BusinessMan"){echo " selected";} ?>>Business Man</option>
										<option value="Other"<?php if($MotherOccupation == "Other"){echo " selected";} ?>>Other</option>
									  </select>
									</div>
								</div>																	
								<div class="control-group">
									<label class="control-label" for="focusedInput">Company Name:</label>
									<div class="controls">
									  <input name="MotherCompanyName" class="input-xlarge focused" id="focusedInput" type="text" value="<?php echo $MotherCompanyName; ?>">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="focusedInput">Designation:</label>
									<div class="controls">
									  <input name="MotherDesignation" class="input-xlarge focused" id="focusedInput" type="text" value="<?php echo $MotherDesignation; ?>">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="appendedInput">Email Id:</label>
									<div class="controls">
									 <div class="input-append">
									  <span class="input-xlarge uneditable-input"><?php echo $MotherEmailID; ?></span><button class="btn  btn-setting" type="button">Send Request For Change</button>
									 </div>
									</div>
								</div>
							    <div class="control-group">
									<label class="control-label" for="selectError3">Qualification:</label>
									<div class="controls">
									  <select name="MotherQualification" id="selectError3">
										<option value="UnEducated"<?php if($MotherQualification == "UnEducated"){echo " selected";} ?>>UnEducated</option>
										<option value="Under10th"<?php if($MotherQualification == "Under10th"){echo " selected";} ?>>Under 10th</option>
										<option value="10thPass"<?php if($MotherQualification == "10thPass"){echo " selected";} ?>>10th Pass</option>
										<option value="12thPass"<?php if($MotherQualification == "12thPass"){echo " selected";} ?>>12th Pass</option>
										<option value="Graduate"<?php if($MotherQualification == "Graduate"){echo " selected";} ?>>Graduate</option>
										<option value="MasterDegree"<?php if($MotherQualification == "MasterDegree"){echo " selected";} ?>>Master Degree</option>
										<option value="PhD"<?php if($MotherQualification == "PhD"){echo " selected";} ?>>PhD</option>
										<option value="Other"<?php if($MotherQualification == "Other"){echo " selected";} ?>>Other</option>
									  </select>
									</div>
                                </div> 								
								<div class="form-actions">
								  <button type="submit" class="btn btn-primary">Save</button>
								  <button type="reset" class="btn">Cancel</button>
								</div>
								</div>
							</form>
                        
							<a name="three"></a>
                            <h3>Edit Address Information</h3>    
                            <hr>
							<form name="EditAddressInformation" class="form-horizontal" action="../configs/student-edit-profile-agent.php" method="post" onSubmit="return validEditAddressInformation();">
								<div class="form-horizontal">
								<h4>Present Address </h4>
								<div class="control-group">
								  <label class="control-label" for="textarea2">Address:</label>
								  <div class="controls">
                                    <input name="EditAddressInformation" type="hidden" value="EditAddressInformation">
                                    <input name="stuid" type="hidden" value="<?php echo $uid; ?>">								  
									<textarea name="PresentAddress"  id="present_address" rows="3"><?php echo $PresentAddress; ?></textarea>
								  </div>
								</div>
								<div class="control-group">
									<label class="control-label" for="focusedInput">Landmark:</label>
									<div class="controls">
									  <input name="PresentLandmark" class="input-xlarge focused" id="focusedInput2" type="text" value="<?php echo $PresentLandmark; ?>">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="focusedInput">Country:</label>
									<div class="controls">
									  <input name="PresentCountry" class="input-xlarge focused" id="focusedInput2" type="text" value="<?php echo $PresentCountry; ?>">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="focusedInput">State:</label>
									<div class="controls">
									  <input name="PresentState" class="input-xlarge focused" id="focusedInput2" type="text" value="<?php echo $PresentState; ?>">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="focusedInput">City:</label>
									<div class="controls">
									  <input name="PresentCity" class="input-xlarge focused" id="focusedInput2" type="text" value="<?php echo $PresentCity; ?>">
									</div>
								</div>								
								<div class="control-group">
									<label class="control-label" for="focusedInput">Pin Code:</label>
									<div class="controls">
									  <input name="PresentPinCode" class="input-xlarge focused" name="myinput" id="myinput" onKeyPress="return isNumber(event);"    type="text" value="<?php echo $PresentPinCode; ?>">
									</div>
								</div>
							    <h4>Permanent Address </h4>
								<!--
                                <label class="checkbox-inline">
									<input type="checkbox" onClick="javascript:return function("click")" id="make_same" value="option1"> If both are same address ! Click Here
                                </label>
								-->
								<div class="control-group">
								  <label class="control-label" for="textarea2">Address:*</label>
								  <div class="controls">
									<textarea name="PermanentAddress"  id="permanent_address" rows="3"><?php echo $PermanentAddress; ?></textarea>
								  </div>
								</div>
								<div class="control-group">
									<label class="control-label" for="focusedInput">Landmark:</label>
									<div class="controls">
									  <input name="PermanentLandmark" class="input-xlarge focused" id="focusedInput2" type="text" value="<?php echo $PermanentLandmark; ?>">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="focusedInput">Country:*</label>
									<div class="controls">
									  <input name="PermanentCountry" class="input-xlarge focused" id="focusedInput2" type="text" value="<?php echo $PermanentCountry; ?>">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="focusedInput">State:*</label>
									<div class="controls">
									  <input name="PermanentState" class="input-xlarge focused" id="focusedInput2" type="text" value="<?php echo $PermanentState; ?>">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="focusedInput">City:*</label>
									<div class="controls">
									  <input name="PermanentCity" class="input-xlarge focused" id="focusedInput2" type="text" value="<?php echo $PermanentCity; ?>">
									</div>
								</div>	
								<div class="control-group">
									<label class="control-label" for="focusedInput">Pin Code:*</label>
									<div class="controls">
									  <input name="PermanentPinCode" class="input-xlarge focused" name="myinput" id="myinput" onKeyPress="return isNumber(event);"  type="text" value="<?php echo $PermanentPinCode; ?>">
									</div>
								</div>
								<div class="form-actions">
								  <button type="submit" class="btn btn-primary">Save</button>
								  <button type="reset" class="btn">Cancel</button>
								</div>
								</div>
							</form>
                        
							<a name="four"></a>
                            <h3>Edit Academic Information</h3>    
                            <hr>
							<form name="EditAcademicInformation" class="form-horizontal" action="../configs/student-edit-profile-agent.php" method="post" onSubmit="return validEditAcademicInformation();">
								<div class="form-horizontal">
								<div class="control-group">
									<label class="control-label" for="selectError3">Choose Your Class:</label>
									<div class="controls">
                                      <input name="EditAcademicInformation" type="hidden" value="EditAcademicInformation">
                                      <input name="stuid" type="hidden" value="<?php echo $uid; ?>">									
									  <select name="Class" id="selectError3" class="span6" >
										<option value="5"<?php if($Class == "5"){echo " selected";} ?>>STD. 5</option>
										<option value="6"<?php if($Class == "6"){echo " selected";} ?>>STD. 6</option>
										<option value="7"<?php if($Class == "7"){echo " selected";} ?>>STD. 7</option>
										<option value="8"<?php if($Class == "8"){echo " selected";} ?>>STD. 8</option>
										<option value="9"<?php if($Class == "9"){echo " selected";} ?>>STD. 9</option>
										<option value="10"<?php if($Class == "10"){echo " selected";} ?>>STD. 10</option>
										<option value="11"<?php if($Class == "11"){echo " selected";} ?>>STD. 11</option>
										<option value="12"<?php if($Class == "12"){echo " selected";} ?>>STD. 12</option>									  
									  </select>
									</div>
								</div>								
								<div class="control-group">
									<label class="control-label" for="selectError3">Choose Your Section:</label>
									<div class="controls">
									  <select name="Section" id="selectError3" class="span6">
										<option value="A"<?php if($Section == "A"){echo " selected";} ?>>Section A</option>
										<option value="B"<?php if($Section == "B"){echo " selected";} ?>>Section B</option>
										<option value="C"<?php if($Section == "C"){echo " selected";} ?>>Section C</option>
										<option value="D"<?php if($Section == "D"){echo " selected";} ?>>Section D</option>
									  </select>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="focusedInput">Registeration No</label>
									<div class="controls">
									  <input name="RegisterationNo" class="input-xlarge focused" id="focusedInput2" type="text" value="<?php echo $RegisterationNo; ?>">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="focusedInput">Roll No</label>
									<div class="controls">
									  <input name="RollNo" class="input-xlarge focused" id="focusedInput2" type="text" value="<?php echo $RollNo; ?>">
									</div>
								</div>                                
                                                                
								<div class="control-group">
									<label class="control-label" for="focusedInput">Class Teacher:*</label>
									<div class="controls">
									  <input name="ClassTeacherName" class="input-xlarge focused" id="focusedInput2" type="text" value="<?php echo $ClassTeacherName; ?>">
									</div>
								</div>								
                                <h4>If Sibling is studying in the same school  </h4>
								<div class="control-group">
									<label class="control-label" for="focusedInput">Student ID:</label>
									<div class="controls">
									  <input name="SiblingStudentID" class="input-xlarge focused" id="focusedInput" type="text" value="<?php echo $SiblingStudentID; ?>">
									</div>
								</div>
								<div class="control-group">
									<center>OR </center>
									<br>								
									<label class="control-label" for="focusedInput">Name:</label>
									<div class="controls">
									  <input name="Sibling" class="input-xlarge focused" id="focusedInput" type="text" value="<?php echo $Sibling; ?>">
									</div>
								</div>								
								<div class="control-group">
									<label class="control-label" for="focusedInput">Father Name:</label>
									<div class="controls">
									  <input name="SiblingFatherName" class="input-xlarge focused" id="focusedInput" type="text" value="<?php echo $SiblingFatherName; ?>">
									</div>
								</div>
								<div class="control-group">
								  <label class="control-label" for="date01">Date of Birth:</label>
								  <div class="controls">
									<input name="SiblingDateofBirth" type="text" class="input-xlarge datepicker" id="date01" value="<?php echo $SiblingDateofBirth; ?>">
								  </div>
								</div>
								<div class="form-actions">
									<button type="submit" class="btn btn-primary">Save</button>
									<button type="reset" class="btn">Cancel</button>
								</div>
								</div>
							</form>
                        
							<a name="five"></a>
                            <h3>Change Profile Picture</h3>    
                            <hr>
							<div class="widget-body form">
                                <div class="text-center profile-pic">
                                    <img src="<?php echo $ProfilePicture; ?>" width="240" height="240">
                                </div>
								<form name="ChangeProfilePicture" enctype="multipart/form-data" class="form-horizontal" action="../configs/student-edit-profile-agent.php" method="post" onSubmit="return validChangeProfilePicture();">
                                    <input name="ChangeProfilePicture" type="hidden" value="ChangeProfilePicture">
                                    <input name="stuid" type="hidden" value="<?php echo $uid; ?>">										
									<input accept="image/*" name="userfile" type="file">
									<button name="upload" type="submit">Upload</button>
								</form>								
							</div>
                            <br />							
							<a name="six"></a>
                            <h3>Change Your Password</h3>    
                            <hr>
							<form name="ChangeYourPassword" class="form-horizontal" action="../configs/student-edit-profile-agent.php" method="post" onSubmit="return validChangeYourPassword();">
								<div class="form-horizontal">
								<div class="control-group">
                                    <input name="ChangeYourPassword" type="hidden" value="ChangeYourPassword">
                                    <input name="stuid" type="hidden" value="<?php echo $uid; ?>">								
									<label class="control-label" for="focusedInput">Old Password:*</label>
									<div class="controls">
									  <input name="OldPassword" class="input-xlarge focused" id="focusedInput2" type="Password">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="focusedInput">New Password:*</label>
									<div class="controls">
									  <input name="password" class="input-xlarge focused" id="password" data-rel="popover" data-content="Password Should be Alphanumeric Contents Only" title="Password Hint's" type="Password">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="focusedInput">Confirm New Password:*</label>
									<div class="controls">
									  <input name="repassword" class="input-xlarge focused" id="repassword" type="password">
									</div>
								</div>
								<div class="form-actions">
									<button type="submit" class="btn btn-primary">Save</button>
									<button type="reset" class="btn">Cancel</button>
								</div>
								</div>
							</form>
                            </div>
                            <div class="space5"></div>
                        </div>
                  </div>
               </div>
            </div>

					</div>
				</div><!--/span-->
			
			</div>
      <!--/row-->
      <!-- content ends -->
    </div>
    <!--/#content.span10-->
  </div>
  <!--/fluid-row-->
  <hr>
	<div class="modal hide fade" id="myModal">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">×</button>
      <h3>Send for request</h3>
    </div>
    <div class="modal-body">
		<p>You can not change right now</p>
		<!--
        <div class="control-group warning">
			<label class="control-label" for="inputWarning">Input with warning</label>
			<div class="controls">
			  <input type="text" id="inputWarning">
			  <span class="help-inline">Something may have gone wrong</span>
			</div>
		</div>
		<div class="control-group error">
			<label class="control-label" for="inputError">Input with error</label>
			<div class="controls">
			  <input type="text" id="inputError">
			  <span class="help-inline">Please correct the error</span>
			</div>
		</div>
		<div class="control-group success">
			<label class="control-label" for="inputSuccess">Input with success</label>
			<div class="controls">
			  <input type="text" id="inputSuccess">
			  <span class="help-inline">Woohoo!</span>
			</div>
		</div>
		<form class="form-inline" role="form">
			<div class="control-group has-success has-feedback">
				<label class="control-label" for="inputSuccess4">Input with success</label>
				<div class="controls">
				<input type="text" class="form-control" id="inputSuccess4">
				<span class="glyphicon glyphicon-ok form-control-feedback"></span>
				</div>
			</div>
		</form>
		-->
    </div>
    <div class="modal-footer"> <a href="#" class="btn" data-dismiss="modal">Close</a> <a href="#" class="btn btn-primary">Save request</a> </div>
	</div>
  <footer>
    <p class="pull-left">&copy; <a href="#" target="_blank">Info 4 Child</a> 2014</p>
    <p class="pull-right">Powered by: <a href="#">Info 4 Child</a></p>
  </footer>
</div>
<!--/.fluid-container-->
<!-- external javascript
	================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- jQuery -->
<script src="js/jquery-1.7.2.min.js"></script>
<!-- jQuery UI -->
<script src="js/jquery-ui-1.8.21.custom.min.js"></script>
<!-- transition / effect library -->
<script src="js/bootstrap-transition.js"></script>
<!-- alert enhancer library -->
<script src="js/bootstrap-alert.js"></script>
<!-- modal / dialog library -->
<script src="js/bootstrap-modal.js"></script>
<!-- custom dropdown library -->
<script src="js/bootstrap-dropdown.js"></script>
<!-- scrolspy library -->
<script src="js/bootstrap-scrollspy.js"></script>
<!-- library for creating tabs -->
<script src="js/bootstrap-tab.js"></script>
<!-- library for advanced tooltip -->
<script src="js/bootstrap-tooltip.js"></script>
<!-- popover effect library -->
<script src="js/bootstrap-popover.js"></script>
<!-- button enhancer library -->
<script src="js/bootstrap-button.js"></script>
<!-- accordion library (optional, not used in demo) -->
<script src="js/bootstrap-collapse.js"></script>
<!-- carousel slideshow library (optional, not used in demo) -->
<script src="js/bootstrap-carousel.js"></script>
<!-- autocomplete library -->
<script src="js/bootstrap-typeahead.js"></script>
<!-- tour library -->
<script src="js/bootstrap-tour.js"></script>
<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calander plugin -->
<script src='js/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>
<!-- chart libraries start -->
<script src="js/excanvas.js"></script>
<script src="js/jquery.flot.min.js"></script>
<script src="js/jquery.flot.pie.min.js"></script>
<script src="js/jquery.flot.stack.js"></script>
<script src="js/jquery.flot.resize.min.js"></script>
<!-- chart libraries end -->
<!-- select or dropdown enhancer -->
<script src="js/jquery.chosen.min.js"></script>
<!-- checkbox, radio, and file input styler -->
<script src="js/jquery.uniform.min.js"></script>
<!-- plugin for gallery image view -->
<script src="js/jquery.colorbox.min.js"></script>
<!-- rich text editor library -->
<script src="js/jquery.cleditor.min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- file manager library -->
<script src="js/jquery.elfinder.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>
<!-- application script for Dropzone part -->
<script src="js/dropzone.js"></script>
</body>
</html>
<?php
include '../configs/connection-close.php';
?>