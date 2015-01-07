<?php
session_start();

$uid = $_SESSION['uid'];
$FirstName = $_SESSION['FirstName'];	
$DesignationHardCode = $_SESSION['DesignationHardCode'];	

if(($_SESSION['uid'] == "") || ($DesignationHardCode != "management")){
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
$sql = "SELECT * FROM management WHERE mauid='$uid'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    // login success - output data of each row
    while($row = mysqli_fetch_assoc($result)){
		$SchoolName = $row["SchoolName"];
		$SchoolLocation = $row["SchoolLocation"];
		$SchoolEmailId = $row["SchoolEmailId"];
		$SchoolPhone = $row["SchoolPhone"];
		$SchoolWebsite = $row["SchoolWebsite"];
		$SchoolOwnerFirstName = $row["SchoolOwnerFirstName"];
		$SchoolOwnerLastName = $row["SchoolOwnerLastName"];
		$OwnerEmailId = $row["OwnerEmailId"];
		$OwnerMobile = $row["OwnerMobile"];
		$OwnerSex = $row["OwnerSex"];
		
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
		
		$ImageUpload = $row["ImageUpload"];
    }
}else{
    echo "0 results";
}
//fetch data from principal table ends

// profile picture begins
$DBPPPath = "../configs/managment-profile-pic.php?mauid=".$uid;
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
//Edit managment Information begins
function validEditSchoolInformation(){
	if(document.EditSchoolInformation.SchoolName.value == ""){
			alert("Please enter School Name");
			document.EditSchoolInformation.SchoolName.focus();
			return false;
	}
	if(document.EditSchoolInformation.SchoolLocation.value == ""){
			alert("Please enter Location");
			document.EditSchoolInformation.SchoolLocation.focus();
			return false;
	}
	if(document.EditSchoolInformation.SchoolOwnerFirstName.value == ""){
			alert("Please enter School Owner First Name");
			document.EditSchoolInformation.SchoolOwnerFirstName.focus();
			return false;
	}
	if(document.EditSchoolInformation.SchoolOwnerLastName.value == ""){
			alert("Please enter School Owner LastName");
			document.EditSchoolInformation.SchoolOwnerLastName.focus();
			return false;
	}	
}
//Edit managment Information ends

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
          <li><a class="ajax-link" href="salary-module.php"><i class="icon-briefcase"></i><span class="hidden-tablet"> Salary Module</span></a></li>
          <li><a class="ajax-link" href="fees-mgmt.php"><i class="icon-eye-close"></i><span class="hidden-tablet"> Student Fees mgmt</span></a></li>
		  <li><a class="ajax-link" href="other-profile.php"><i class="icon-tags"></i><span class="hidden-tablet"> View Other's Profile</span></a></li>
           <li><a class="ajax-link" href="notification.php"><i class="icon-bullhorn"></i><span class="hidden-tablet">Notification</span></a></li>
          <li><a class="ajax-link" href="time-table.php"><i class="icon-eye-open"></i><span class="hidden-tablet"> School Time Table</span></a></li>
		  <li><a class="ajax-link" href="event-calender.php"><i class="icon-bell"></i><span class="hidden-tablet"> Event Calender</span></a></li>
           <li><a class="ajax-link" href="message.php"><i class=" icon-envelope"></i><span class="hidden-tablet">Message Center</span></a></li>
          <li><a class="ajax-link" href="gallery.php"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
		 
          
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
                                    <li><a href="#one"><i class="icon-adjust"></i>Edit School Info</a></li>
              
                                     <li><a href="#three"><i class="icon-magnet"></i>Edit Address Info</a></li>
                                   
                                    <li><a href="#five"><i class="icon-picture" ></i> Upload School Logo</a></li>
                                    <li><a href="#six"><i class="icon-exclamation-sign" ></i> Change Password</a></li>
                                    
                                </ul>
                             
                            </div>
                            <div class="span9 mCustomScrollbar" style="height:500px; border:1px solid #ddd; overflow-y: scroll; padding:10px;">
                            
						<a name="one"></a>
						<h3>Edit School Information</h3>
						<hr>
							<form name="EditSchoolInformation" class="form-horizontal" action="../configs/managment-edit-profile-agent.php" method="post" onSubmit="return validEditSchoolInformation();">
								<div class="form-horizontal" action="#">
									<div class="control-group">
										<label class="control-label" for="focusedInput">School Name:*</label>
										<div class="controls">
                                          <input name="EditSchoolInformation" type="hidden" value="EditSchoolInformation">
                                          <input name="mauid" type="hidden" value="<?php echo $uid; ?>">
										  <input name="SchoolName" class="input-xlarge focused" id="focusedInput2" type="text" value="<?php echo $SchoolName; ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="focusedInput">Location:*</label>
										<div class="controls">
										  <input name="SchoolLocation" class="input-xlarge focused" id="focusedInput" type="text" value="<?php echo $SchoolLocation; ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="appendedInput">Email Id:</label>
										<div class="controls">
										 <div class="input-append">
										  <span class="input-xlarge uneditable-input"><?php echo $SchoolEmailId; ?></span><button class="btn  btn-setting" type="button">Send Request For Change</button>
										   </div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="appendedInput">Phone:</label>
										<div class="controls">
										 <div class="input-append">
										  <span class="input-xlarge uneditable-input"><?php echo $SchoolPhone; ?></span><button class="btn btn-setting" type="button">Send Request For Change</button>
										
										   </div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="focusedInput">Website:</label>
										<div class="controls">
										  <input name="SchoolWebsite" class="input-xlarge focused" id="focusedInput" type="text" value="<?php echo $SchoolWebsite; ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="focusedInput">School Owner First Name:*</label>
										<div class="controls">
										  <input name="SchoolOwnerFirstName" class="input-xlarge focused" id="focusedInput" type="text" value="<?php echo $SchoolOwnerFirstName; ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="focusedInput">School Owner Last Name:*</label>
										<div class="controls">
										  <input name="SchoolOwnerLastName" class="input-xlarge focused" id="focusedInput" type="text" value="<?php echo $SchoolOwnerLastName; ?>">
										</div>
									</div>                                    
									<div class="control-group">
										<label class="control-label" for="appendedInput">Email Id:</label>
										<div class="controls">
										 <div class="input-append">
										  <span class="input-xlarge uneditable-input"><?php echo $OwnerEmailId; ?></span><button class="btn  btn-setting" type="button">Send Request For Change</button>
										   </div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="appendedInput">Mobile:</label>
										<div class="controls">
										 <div class="input-append">
										  <span class="input-xlarge uneditable-input"><?php echo $OwnerMobile; ?></span><button class="btn btn-setting" type="button">Send Request For Change</button>
										
										   </div>
										</div>
									</div>
									<div class="control-group">
										<?php
										if($OwnerSex == "male"){
											$MaleChecked = 'checked=""';	
										}else{
											$MaleChecked = '';
										}
										
										if($OwnerSex == "female"){
											$FemaleChecked = 'checked=""';	
										}else{
											$FemaleChecked = '';
										}									
										?>
										<label class="control-label">Sex:</label>
										<div class="controls">
										  <label class="radio">
											<input type="radio" name="OwnerSex" id="optionsRadios1" value="male" <?php echo $MaleChecked; ?>>
											Male
										  </label>
										  <div style="clear:both"></div>
										  <label class="radio">
											<input type="radio" name="OwnerSex" id="optionsRadios2" value="female" <?php echo $FemaleChecked; ?>>
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
                        
                        <a name="three"></a>
                        <h3>Edit Address Information</h3>
                        <hr>
							<form name="EditAddressInformation" class="form-horizontal" action="../configs/managment-edit-profile-agent.php" method="post" onSubmit="return validEditAddressInformation();">
								<div class="form-horizontal">
									<h4>Present Address </h4>
									<div class="control-group">
									  <label class="control-label" for="textarea2">Address:</label>
									  <div class="controls">
                                        <input name="EditAddressInformation" type="hidden" value="EditAddressInformation">
                                        <input name="mauid" type="hidden" value="<?php echo $uid; ?>">                            
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
						
                        <a name="five"></a>
                        <h3>Change School Logo</h3>
                        <hr>
							<div class="widget-body form">
                                <div class="text-center profile-pic">
                                    <img src="<?php echo $ProfilePicture; ?>" width="240" height="240">
                                </div>
								<form name="ChangeProfilePicture" enctype="multipart/form-data" class="form-horizontal" action="../configs/managment-edit-profile-agent.php" method="post" onSubmit="return validChangeProfilePicture();">
                                    <input name="ChangeProfilePicture" type="hidden" value="ChangeProfilePicture">
                                    <input name="mauid" type="hidden" value="<?php echo $uid; ?>">										
									<input accept="image/*" name="userfile" type="file">
									<button name="upload" type="submit">Upload</button>
								</form>								
							</div>
                            <br />

                        <a name="six"></a>
                        <h3>Change Your Password</h3>
                        <hr>
							<form name="ChangeYourPassword" class="form-horizontal" action="../configs/managment-edit-profile-agent.php" method="post" onSubmit="return validChangeYourPassword();">
								<div class="form-horizontal">
								<div class="control-group">
                                    <input name="ChangeYourPassword" type="hidden" value="ChangeYourPassword">
                                    <input name="mauid" type="hidden" value="<?php echo $uid; ?>">								
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