<?php
session_start();

$uid = $_SESSION['uid'];
$FirstName = $_SESSION['FirstName'];	
$DesignationHardCode = $_SESSION['DesignationHardCode'];	

if(($_SESSION['uid'] == "") || ($DesignationHardCode != "principal")){
	header('Location: ../login/login.php');
	exit();	
}

if(isset($_GET['success'])){
	$success = $_GET['success'];
}else{
	$success = "NotYesOrNo";	
}

include '../configs/connection.php';

//fetch data from principal table begins
$sql = "SELECT * FROM principal WHERE pruid='$uid'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    // login success - output data of each row
    while($row = mysqli_fetch_assoc($result)){
		$PrincipalFirstName = $row["PrincipalFirstName"];
		$PrincipalLastName = $row["PrincipalLastName"];
		$DateofBirth = $row["DateofBirth"];
		$EmailId = $row["EmailId"];
		$Mobile = $row["Mobile"];
		$Sex = $row["Sex"];
		$ImageUpload = $row["ImageUpload"];

		$TenthBoard = $row["TenthBoard"];
		$TenthSchoolName = $row["TenthSchoolName"];
		$TenthDateOfCompleted = $row["TenthDateOfCompleted"];
		$TenthMarksObtained = $row["TenthMarksObtained"];
		$TwelfthBoard = $row["TwelfthBoard"];
		$TwelftSchoolCollegeUniversity = $row["TwelftSchoolCollegeUniversity"];
		$TwelftDateOfCompleted = $row["TwelftDateOfCompleted"];
		$TwelftMarksObtained = $row["TwelftMarksObtained"];
		$Graduation = $row["Graduation"];
		$GraduationCollegeUniversity = $row["GraduationCollegeUniversity"];
		$GraduationHonoursSubject = $row["GraduationHonoursSubject"];
		$GraduationDateOfCompleted = $row["GraduationDateOfCompleted"];
		$GraduationMarksObtained = $row["GraduationMarksObtained"];
		$MasterDegree = $row["MasterDegree"];
		$MasterCollegeUniversity = $row["MasterCollegeUniversity"];
		$MasterHonoursSubject = $row["MasterHonoursSubject"];
		$MasterDateOfCompleted = $row["MasterDateOfCompleted"];
		$MasterMarksObtained = $row["MasterMarksObtained"];
		$OtherDegree = $row["OtherDegree"];
		$OtherCollegeUniversity = $row["OtherCollegeUniversity"];
		$OtherHonoursSubject = $row["OtherHonoursSubject"];
		$OtherDateOfCompleted = $row["OtherDateOfCompleted"];
		$OtherMarksObtained = $row["OtherMarksObtained"];	
		
		$OrganisationName = $row["OrganisationName"];
		$Designation = $row["Designation"];
		$TimePeriod = $row["TimePeriod"];
		$OrganisationRemarks = $row["OrganisationRemarks"];	
		
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
		
		$YourClass = $row["YourClass"];
		$YourSection = $row["YourSection"];
		$YourSubject = $row["YourSubject"];
		$YourClassRemarks = $row["YourClassRemarks"];

    }
}else{
    echo "0 results";
}
//fetch data from principal table ends

// profile picture begins
$DBPPPath = "../configs/principal-profile-pic.php?pruid=".$uid;
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
<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<!-- The fav icon -->
<link rel="shortcut icon" href="img/favicon.ico">
<script type="text/javascript">
//Edit Principal Information begins
function validEditPrincipalInformation(){
	if(document.EditPrincipalInformation.PrincipalFirstName.value == ""){
			alert("Please enter First Name");
			document.EditPrincipalInformation.PrincipalFirstName.focus();
			return false;
	}

	if(document.EditPrincipalInformation.PrincipalLastName.value == ""){
			alert("Please enter Last Name");
			document.EditPrincipalInformation.PrincipalLastName.focus();
			return false;
	}
	if(document.EditPrincipalInformation.DateofBirth.value == ""){
			alert("Please enter Date of Birth");
			document.EditPrincipalInformation.DateofBirth.focus();
			return false;
	}	
}
//Edit Principal Information ends

//Edit Educational Background begins
function validEditEducationalBackground(){
	if(document.EditEducationalBackground.TenthBoard.value == ""){
			alert("Please enter 10th Board");
			document.EditEducationalBackground.TenthBoard.focus();
			return false;
	}
	if(document.EditEducationalBackground.TenthDateOfCompleted.value == ""){
			alert("Please enter Date of Completed");
			document.EditEducationalBackground.TenthDateOfCompleted.focus();
			return false;
	}
	if(document.EditEducationalBackground.TenthMarksObtained.value == ""){
			alert("Please enter Marks Obtained");
			document.EditEducationalBackground.TenthMarksObtained.focus();
			return false;
	}
	if(document.EditEducationalBackground.TwelfthBoard.value == ""){
			alert("Please enter 12th Board");
			document.EditEducationalBackground.TwelfthBoard.focus();
			return false;
	}
	if(document.EditEducationalBackground.TwelftDateOfCompleted.value == ""){
			alert("Please enter Date of Completed");
			document.EditEducationalBackground.TwelftDateOfCompleted.focus();
			return false;
	}
	if(document.EditEducationalBackground.TwelftMarksObtained.value == ""){
			alert("Please enter Marks Obtained");
			document.EditEducationalBackground.TwelftMarksObtained.focus();
			return false;
	}
	if(document.EditEducationalBackground.Graduation.value == ""){
			alert("Please enter Graduation");
			document.EditEducationalBackground.Graduation.focus();
			return false;
	}
	if(document.EditEducationalBackground.GraduationCollegeUniversity.value == ""){
			alert("Please enter College/University");
			document.EditEducationalBackground.GraduationCollegeUniversity.focus();
			return false;
	}
	if(document.EditEducationalBackground.GraduationDateOfCompleted.value == ""){
			alert("Please enter Date of Completed");
			document.EditEducationalBackground.GraduationDateOfCompleted.focus();
			return false;
	}
	if(document.EditEducationalBackground.GraduationMarksObtained.value == ""){
			alert("Please enter Marks Obtained");
			document.EditEducationalBackground.GraduationMarksObtained.focus();
			return false;
	}		
}
//Edit Educational Background ends

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
          <li><a class="ajax-link" href="profile.php"><i class="icon-user"></i><span class="hidden-tablet"> View Profile</span></a></li>
		   <li><a class="ajax-link" href="edit-profile.php"><i class="icon-user"></i><span class="hidden-tablet"> Edit Profile</span></a></li>
          <li><a class="ajax-link" href="gallery.php"><i class="icon-briefcase"></i><span class="hidden-tablet"> Gallery</span></a></li>
          <li><a class="ajax-link" href="event-calender.php"><i class="icon-eye-close"></i><span class="hidden-tablet"> Event Calender</span></a></li>
		  <li><a class="ajax-link" href="time-table.php"><i class="icon-tags"></i><span class="hidden-tablet"> Class Time Table</span></a></li>
           <li><a class="ajax-link" href="message.php"><i class="icon-bullhorn"></i><span class="hidden-tablet">Message Centre</span></a></li>
          <li><a class="ajax-link" href="notification.php"><i class="icon-eye-open"></i><span class="hidden-tablet"> Notification</span></a></li>
		  <li><a class="ajax-link" href="student-profile.php"><i class="icon-bell"></i><span class="hidden-tablet"> View Student Profile</span></a></li>
           <li><a class="ajax-link" href="attandence.php"><i class=" icon-envelope"></i><span class="hidden-tablet"> Attandance</span></a></li>
          <li><a class="ajax-link" href="report-card.php"><i class="icon-picture"></i><span class="hidden-tablet"> Report Card</span></a></li>
           <li><a class="ajax-link" href="medical.php"><i class="icon-picture"></i><span class="hidden-tablet"> Manage Medical Report</span></a></li>
            <li><a class="ajax-link" href="assignment.php"><i class="icon-picture"></i><span	class="hidden-tablet"> Generate Assignment</span></a></li>
		 
          
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
          <li> <a href="#">Edit Profile</a> </li>
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
						<h2><i class="icon-picture"></i> Profile Managemnt</h2>
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
                                    <li><a href="#one"><i class="icon-adjust"></i>Edit Principal Info</a></li>
                                    <li><a href="#two"><i class=" icon-certificate"></i>Edit Educational Background</a></li>
                                    <li><a href="#seven"><i class="icon-globe"></i>Work Experience</a></li>
                                     <li><a href="#three"><i class="icon-magnet"></i>Edit Address Info</a></li>
                                    <li><a href="#four"><i class="icon-eye-close" ></i> Edit Academic Info</a></li>
                                    <li><a href="#five"><i class="icon-picture" ></i> Edit Profile Picture</a></li>
                                    <li><a href="#six"><i class="icon-exclamation-sign" ></i> Change Password</a></li>
                                    
                                </ul>
                             
                            </div>
                            <div class="span9 mCustomScrollbar" style="height:500px; border:1px solid #ddd; overflow-y: scroll; padding:10px;">

							<a name="one"></a>
                            <h3>Edit Principal Information</h3>
                            <hr>
							<form name="EditPrincipalInformation" class="form-horizontal" action="../configs/principal-edit-profile-agent.php" method="post" onSubmit="return validEditPrincipalInformation();">
								<div class="form-horizontal">
									<div class="control-group">
										<label class="control-label" for="focusedInput">First Name:*</label>
										<div class="controls">
                                          <input name="EditPrincipalInformation" type="hidden" value="EditPrincipalInformation">
                                          <input name="pruid" type="hidden" value="<?php echo $uid; ?>">                          
										  <input name="PrincipalFirstName" class="input-xlarge focused" id="focusedInput2" type="text" value="<?php echo $PrincipalFirstName; ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="focusedInput">Last Name:*</label>
										<div class="controls">
										  <input name="PrincipalLastName" class="input-xlarge focused" id="focusedInput" type="text" value="<?php echo $PrincipalLastName; ?>">
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
										<label class="control-label" for="appendedInput">Mobile:</label>
										<div class="controls">
										 <div class="input-append">
										  <span class="input-xlarge uneditable-input"><?php echo $Mobile; ?></span><button class="btn btn-setting" type="button">Send Request For Change</button>
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
                            <h3>Edit Educational Background</h3>    
                            <hr>
							<form name="EditEducationalBackground" class="form-horizontal" action="../configs/principal-edit-profile-agent.php" method="post" onSubmit="return validEditEducationalBackground();">
								<div class="form-horizontal">
									<div class="control-group">
										<label class="control-label" for="focusedInput">10th Board:*</label>
										<div class="controls">
                                          <input name="EditEducationalBackground" type="hidden" value="EditEducationalBackground">
                                          <input name="pruid" type="hidden" value="<?php echo $uid; ?>">                          
										  <input name="TenthBoard" class="input-xlarge focused" id="focusedInput2" type="text" value="<?php echo $TenthBoard; ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="focusedInput">School Name:</label>
										<div class="controls">
										  <input name="TenthSchoolName" class="input-xlarge focused" id="focusedInput" type="text" value="<?php echo $TenthSchoolName; ?>">
										</div>
									</div>
									<div class="control-group">
									  <label class="control-label" for="date01">Date Of Completed:*</label>
									  <div class="controls">
										<input name="TenthDateOfCompleted" type="text" class="input-xlarge datepicker" id="date01" value="<?php echo $TenthDateOfCompleted; ?>">
									  </div>
									</div>
									<div class="control-group">
										<label class="control-label" for="focusedInput">Marks Obtained(In Percentage):*</label>
										<div class="controls">
										  <input name="TenthMarksObtained" class="input-xlarge focused" id="focusedInput2" type="text" value="<?php echo $TenthMarksObtained; ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="focusedInput">12th Board:*</label>
										<div class="controls">
										  <input name="TwelfthBoard" class="input-xlarge focused" id="focusedInput2" type="text" value="<?php echo $TwelfthBoard; ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="focusedInput">School/College/University:</label>
										<div class="controls">
										  <input name="TwelftSchoolCollegeUniversity" class="input-xlarge focused" id="focusedInput" type="text" value="<?php echo $TwelftSchoolCollegeUniversity; ?>">
										</div>
									</div>
									<div class="control-group">
									  <label class="control-label" for="date01">Date Of Completed:*</label>
									  <div class="controls">
										<input name="TwelftDateOfCompleted" type="text" class="input-xlarge datepicker" id="date01" value="<?php echo $TwelftDateOfCompleted; ?>">
									  </div>
									</div>
									<div class="control-group">
										<label class="control-label" for="focusedInput">Marks Obtained(In Percentage):*</label>
										<div class="controls">
										  <input name="TwelftMarksObtained" class="input-xlarge focused" id="focusedInput2" type="text" value="<?php echo $TwelftMarksObtained; ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="focusedInput">Graduation:*</label>
										<div class="controls">
										  <input name="Graduation" class="input-xlarge focused" id="focusedInput2" type="text" value="<?php echo $Graduation; ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="focusedInput">College/University:*</label>
										<div class="controls">
										  <input name="GraduationCollegeUniversity" class="input-xlarge focused" id="focusedInput" type="text" value="<?php echo $GraduationCollegeUniversity; ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="focusedInput">Honours Subject:</label>
										<div class="controls">
										  <input name="GraduationHonoursSubject" class="input-xlarge focused" id="focusedInput" type="text" value="<?php echo $GraduationHonoursSubject; ?>">
										</div>
									</div>
									<div class="control-group">
									  <label class="control-label" for="date01">Date Of Completed:*</label>
									  <div class="controls">
										<input name="GraduationDateOfCompleted" type="text" class="input-xlarge datepicker" id="date01" value="<?php echo $GraduationDateOfCompleted; ?>">
									  </div>
									</div>
									<div class="control-group">
										<label class="control-label" for="focusedInput">Marks Obtained(In Percentage):*</label>
										<div class="controls">
										  <input name="GraduationMarksObtained" class="input-xlarge focused" id="focusedInput2" type="text" value="<?php echo $GraduationMarksObtained; ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="focusedInput">Master Degree:</label>
										<div class="controls">
										  <input name="MasterDegree" class="input-xlarge focused" id="focusedInput2" type="text" value="<?php echo $MasterDegree; ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="focusedInput">College/University:</label>
										<div class="controls">
										  <input name="MasterCollegeUniversity" class="input-xlarge focused" id="focusedInput" type="text" value="<?php echo $MasterCollegeUniversity; ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="focusedInput">Honours Subject:</label>
										<div class="controls">
										  <input name="MasterHonoursSubject" class="input-xlarge focused" id="focusedInput" type="text" value="<?php echo $MasterHonoursSubject; ?>">
										</div>
									</div>
									<div class="control-group">
									  <label class="control-label" for="date01">Date Of Completed:</label>
									  <div class="controls">
										<input name="MasterDateOfCompleted" type="text" class="input-xlarge datepicker" id="date01" value="<?php echo $MasterDateOfCompleted; ?>">
									  </div>
									</div>
									<div class="control-group">
										<label class="control-label" for="focusedInput">Marks Obtained(In Percentage):</label>
										<div class="controls">
										  <input name="MasterMarksObtained" class="input-xlarge focused" id="focusedInput2" type="text" value="<?php echo $MasterMarksObtained; ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="focusedInput">Other:</label>
										<div class="controls">
										  <input name="OtherDegree" class="input-xlarge focused" id="focusedInput2" type="text" value="<?php echo $OtherDegree; ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="focusedInput">College/University:</label>
										<div class="controls">
										  <input name="OtherCollegeUniversity" class="input-xlarge focused" id="focusedInput" type="text" value="<?php echo $OtherCollegeUniversity; ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="focusedInput">Honours Subject:</label>
										<div class="controls">
										  <input name="OtherHonoursSubject" class="input-xlarge focused" id="focusedInput" type="text" value="<?php echo $OtherHonoursSubject; ?>">
										</div>
									</div>
									<div class="control-group">
									  <label class="control-label" for="date01">Date Of Completed:</label>
									  <div class="controls">
										<input name="OtherDateOfCompleted" type="text" class="input-xlarge datepicker" id="date01" value="<?php echo $OtherDateOfCompleted; ?>">
									  </div>
									</div>
									<div class="control-group">
										<label class="control-label" for="focusedInput">Marks Obtained(In Percentage):</label>
										<div class="controls">
										  <input name="OtherMarksObtained" class="input-xlarge focused" id="focusedInput2" type="text" value="<?php echo $OtherMarksObtained; ?>">
										</div>
									</div>
									<div class="form-actions">
									  <button type="submit" class="btn btn-primary">Save</button>
									  <button type="reset" class="btn">Cancel</button>
									</div>
								</div>
							</form>
							
							<a name="seven"></a>
                            <h3>Edit Work Experience</h3>
                            <hr>
                            <h4> Write your last job only. </h4>
							<form name="EditWorkExperience" class="form-horizontal" action="../configs/principal-edit-profile-agent.php" method="post" onSubmit="return validEditWorkExperience();">
								<div class="form-horizontal">
									<div class="control-group">
										<label class="control-label" for="focusedInput">Organisation Name:</label>
										<div class="controls">
                                          <input name="EditWorkExperience" type="hidden" value="EditWorkExperience">
                                          <input name="pruid" type="hidden" value="<?php echo $uid; ?>">                          
										  <input name="OrganisationName" class="input-xlarge focused" id="focusedInput" type="text" value="<?php echo $OrganisationName; ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="focusedInput">Designation:</label>
										<div class="controls">
										  <input name="Designation" class="input-xlarge focused" id="focusedInput" type="text" value="<?php echo $Designation; ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="focusedInput">Time Period:</label>
										<div class="controls">
										  <input name="TimePeriod" class="input-xlarge focused" id="focusedInput" type="text" value="<?php echo $TimePeriod; ?>">
										</div>
									</div>
									<div class="control-group">
									  <label class="control-label" for="textarea2">Remarks:</label>
									  <div class="controls">
										<textarea name="OrganisationRemarks"  id="permanent_address" rows="8" cols="20" class="span6"><?php echo $OrganisationRemarks; ?></textarea>
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
							<form name="EditAddressInformation" class="form-horizontal" action="../configs/principal-edit-profile-agent.php" method="post" onSubmit="return validEditAddressInformation();">
								<div class="form-horizontal">
									<h4>Present Address </h4>
									<div class="control-group">
									  <label class="control-label" for="textarea2">Address:</label>
									  <div class="controls">
                                        <input name="EditAddressInformation" type="hidden" value="EditAddressInformation">
                                        <input name="pruid" type="hidden" value="<?php echo $uid; ?>">                            
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
							<form name="EditAcademicInformation" class="form-horizontal" action="../configs/principal-edit-profile-agent.php" method="post" onSubmit="return validEditAcademicInformation();">
								<div class="form-horizontal">
									<div class="control-group">
										<label class="control-label" for="selectError3">Choose Your Class:</label>
										<div class="controls">
                                          <input name="EditAcademicInformation" type="hidden" value="EditAcademicInformation">
                                          <input name="pruid" type="hidden" value="<?php echo $uid; ?>">                          								
										  <select name="YourClass" id="selectError3" class="span6" >
											<option value="5"<?php if($YourClass == "5"){echo " selected";} ?>>STD. 5</option>
											<option value="6"<?php if($YourClass == "6"){echo " selected";} ?>>STD. 6</option>
											<option value="7"<?php if($YourClass == "7"){echo " selected";} ?>>STD. 7</option>
											<option value="8"<?php if($YourClass == "8"){echo " selected";} ?>>STD. 8</option>
											<option value="9"<?php if($YourClass == "9"){echo " selected";} ?>>STD. 9</option>
											<option value="10"<?php if($YourClass == "10"){echo " selected";} ?>>STD. 10</option>
											<option value="11"<?php if($YourClass == "11"){echo " selected";} ?>>STD. 11</option>
											<option value="12"<?php if($YourClass == "12"){echo " selected";} ?>>STD. 12</option>									  
										  </select>
										</div>
									</div>								
									<div class="control-group">
										<label class="control-label" for="selectError3">Choose Your Section:</label>
										<div class="controls">
										  <select name="YourSection" id="selectError3" class="span6">
											<option value="A"<?php if($YourSection == "A"){echo " selected";} ?>>Section A</option>
											<option value="B"<?php if($YourSection == "B"){echo " selected";} ?>>Section B</option>
											<option value="C"<?php if($YourSection == "C"){echo " selected";} ?>>Section C</option>
											<option value="D"<?php if($YourSection == "D"){echo " selected";} ?>>Section D</option>
										  </select>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="selectError3">Choose Your Subject:</label>
										<div class="controls">
										  <select name="YourSubject" id="selectError3" class="span6">
											<option value="Hindi"<?php if($YourSubject == "Hindi"){echo " selected";} ?>>Hindi</option>
											<option value="English"<?php if($YourSubject == "English"){echo " selected";} ?>>English</option>
											<option value="Mathematics"<?php if($YourSubject == "Mathematics"){echo " selected";} ?>>Mathematics</option>
											<option value="Science"<?php if($YourSubject == "Science"){echo " selected";} ?>>Science</option>
											<option value="SocialStudy"<?php if($YourSubject == "SocialStudy"){echo " selected";} ?>>Social Study</option>
											<option value="PhysicalScience"<?php if($YourSubject == "PhysicalScience"){echo " selected";} ?>>Physical Science</option>							
										  </select>
										</div>
									</div>									
									<div class="control-group">
									  <label class="control-label" for="textarea2">Remarks:</label>
									  <div class="controls">
										<textarea name="YourClassRemarks"  id="permanent_address" rows="8" cols="20" class="span6"><?php echo $YourClassRemarks; ?></textarea>
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
								<form name="ChangeProfilePicture" enctype="multipart/form-data" class="form-horizontal" action="../configs/principal-edit-profile-agent.php" method="post" onSubmit="return validChangeProfilePicture();">
                                    <input name="ChangeProfilePicture" type="hidden" value="ChangeProfilePicture">
                                    <input name="pruid" type="hidden" value="<?php echo $uid; ?>">										
									<input accept="image/*" name="userfile" type="file">
									<button name="upload" type="submit">Upload</button>
								</form>								
							</div>
                            <br />	

							<a name="six"></a>
                            <h3>Change Your Password</h3>    
                            <hr>
							<form name="ChangeYourPassword" class="form-horizontal" action="../configs/principal-edit-profile-agent.php" method="post" onSubmit="return validChangeYourPassword();">
								<div class="form-horizontal">
								<div class="control-group">
                                    <input name="ChangeYourPassword" type="hidden" value="ChangeYourPassword">
                                    <input name="pruid" type="hidden" value="<?php echo $uid; ?>">								
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
      <h3>Settings</h3>
    </div>
    <div class="modal-body">
      <p>Here settings can be configured...</p>
    </div>
    <div class="modal-footer"> <a href="#" class="btn" data-dismiss="modal">Close</a> <a href="#" class="btn btn-primary">Save changes</a> </div>
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
</body>
</html>
<?php
include '../configs/connection-close.php';
?>