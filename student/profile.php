<?php
session_start();

$uid = $_SESSION['uid'];
$FirstName = $_SESSION['FirstName'];
$DesignationHardCode = $_SESSION['DesignationHardCode'];

if(($_SESSION['uid'] == "") || ($DesignationHardCode != "student")){
	header('Location: ../login/login.php');
	exit();	
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
		$ImageUpload = $row["ImageUpload"];
		
		$FatherName = $row["FatherName"];
		$FatherContactNo = $row["FatherContactNo"];
		$FatherEmailID = $row["FatherEmailID"];
		
		$MotherName = $row["MotherName"];
		$MotherContactNo = $row["MotherContactNo"];
		$MotherEmailID = $row["MotherEmailID"];
		
		$ClassTeacherName = $row["ClassTeacherName"];		
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

//Attendance On Calendar form begins
if(isset($_POST['AttendanceOnCalendar'])){
	$AttendanceOnCalendar = $_POST['AttendanceOnCalendar'];
	if($AttendanceOnCalendar == "AttendanceOnCalendar"){
		$YearForAtn = $_POST['DateYear'];
		$MonthForAtn = $_POST['DateMonth'];
	}
}else{
	$MonthForAtn = date("m");
	$YearForAtn = date("Y");	
}

if($MonthForAtn == "01"){
	$MonthOnCal = "January";
}
if($MonthForAtn == "02"){
	$MonthOnCal = "February";
}
if($MonthForAtn == "03"){
	$MonthOnCal = "March";
}
if($MonthForAtn == "04"){
	$MonthOnCal = "April";
}
if($MonthForAtn == "05"){
	$MonthOnCal = "May";
}
if($MonthForAtn == "06"){
	$MonthOnCal = "June";
}
if($MonthForAtn == "07"){
	$MonthOnCal = "July";
}
if($MonthForAtn == "08"){
	$MonthOnCal = "August";
}
if($MonthForAtn == "09"){
	$MonthOnCal = "September";
}
if($MonthForAtn == "10"){
	$MonthOnCal = "October";
}
if($MonthForAtn == "11"){
	$MonthOnCal = "November";
}
if($MonthForAtn == "12"){
	$MonthOnCal = "December";
}
//Attendance On Calendar form ends

//fetch data from attendance table begins
$sqlAttendance = "SELECT DISTINCT DateYear FROM attendance WHERE uid='$uid'";
$resultAttendance = mysqli_query($conn, $sqlAttendance);

$sqlIsPresent = "SELECT * FROM attendance WHERE uid='$uid' AND DateMonth='$MonthForAtn' AND DateYear='$YearForAtn'";
$resultIsPresent = mysqli_query($conn, $sqlIsPresent);

if(mysqli_num_rows($resultIsPresent) > 0){
    while($rowIsPresent = mysqli_fetch_assoc($resultIsPresent)){
		$rowIsPresentArray[] = $rowIsPresent["IsPresent"];
	}
}


//fetch data from attendance table ends
	
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
//Attendance On Calendar form begins
function validAttendanceOnCalendar(){
	if(document.AttendanceOnCalendar.DateYear.value == "SelectYear"){
			alert("Please Select Year");
			document.AttendanceOnCalendar.DateYear.focus();
			return false;
	}
	if(document.AttendanceOnCalendar.DateMonth.value == "SelectMonth"){
			alert("Please Select Month");
			document.AttendanceOnCalendar.DateMonth.focus();
			return false;
	}		
}
//Attendance On Calendar form ends
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
						<!--<li><a href="#">View Profile</a></li>-->
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
                                <div class="text-center profile-pic">
                                    <img src="<?php echo $ProfilePicture; ?>" height="240" width="240">
                                </div>
                                <br>

                                <ul class="nav nav-tabs nav-stacked">
                                    <li><a href="edit-profile.php#five"><i class="icon-adjust"></i>Change Profile Picture</a></li>
                                    <li><a href="#"><i class="icon-picture"></i> View Gallery</a></li>
                                    <li><a href="edit-profile.php"><i class="icon-edit" ></i> Edit Profile</a></li>
                                </ul>
                             
                            </div>
                            <div class="span6">
                                <h3><?php echo $FirstName . " ".$LastName; ?> <br/><small>Class - <?php echo $Class; ?></small></h3>
                                
                                <h5>Student Section </h5>
                              <table class="table table-condensed">
							  
							  <tbody>
								<tr>
									<td>First Name:</td>
									<td><?php echo $FirstName; ?></td>
									
										
									                                 
								</tr>
								<tr>
									<td>Last Name:</td>
									<td><?php echo $LastName; ?></td>
									
										                            
								</tr>
								<tr>
									<td>Date of Birth</td>
									<td><?php echo $DateofBirth; ?></td>
								
										                               
								</tr>
								<tr>
									<td>Class:</td>
									<td><?php echo $Class; ?><sup>th</sup></td>
								
									                                  
								</tr>
								<tr>
									<td>Mobile:</td>
									<td><?php echo $ContactNo; ?></td>
									                              
								</tr>                                   
							  </tbody>
						 </table>
                           <h5>Parent Section </h5>
                              <table class="table table-condensed">
							  
							  <tbody>
								<tr>
									<td>Father Name:</td>
									<td><?php echo $FatherName;?></td>
									
										
									                                 
								</tr>
								<tr>
									<td>Father Email ID</td>
									<td><?php echo $FatherEmailID; ?></td>
								
										                               
								</tr>
								<tr>
									<td>Mobile</td>
									<td><?php echo $FatherContactNo; ?></td>
									                              
								</tr>                                   
							  </tbody>
						 </table>
                           
                              
                                <h4>Attandance Record</h4>

                               <div class="box-content">
						 <div id="stackchart" class="center" style="height:300px;"></div>

						<p class="stackControls center">
							<input class="btn" type="button" value="With stacking">
							<input class="btn" type="button" value="Without stacking">
						</p>

						<p class="graphControls center">
							<input class="btn btn-primary" type="button" value="Bars">
							<input class="btn btn-primary" type="button" value="Lines">
							<input class="btn btn-primary" type="button" value="Lines with steps">
						</p>
					</div>
                    <div class="fc" style="width:100%">
                    <!--Attandance calendar begins-->
                        <!--calendar header begins-->
						<form name="AttendanceOnCalendar" class="form-horizontal" action="profile.php" method="post" onSubmit="return validAttendanceOnCalendar();">
							<table class="fc-header" style="width:100%"><tbody><tr>
								<td class="fc-header-left">
                                	<input name="AttendanceOnCalendar" type="hidden" value="AttendanceOnCalendar">
									<select name="DateYear" id="selectError3" class="span11">
										<option value="SelectYear">Select Year</option>
										<?php
										if(mysqli_num_rows($resultAttendance) > 0){
											while($rowAttendance = mysqli_fetch_assoc($resultAttendance)){
												echo "<option value='".$rowAttendance['DateYear']."'>".$rowAttendance['DateYear']."</option>";
											}
										}
										?>                                                              										
									</select>
								</td>
								<td class="fc-header-left">
									<select name="DateMonth" id="selectError3" class="span11">
										<option value="SelectMonth">Select Month</option>
										<option value="01">January</option>
										<option value="02">February</option>
										<option value="03">March</option>
										<option value="04">April</option>
										<option value="05">May</option>
										<option value="06">June</option>
										<option value="07">July</option>
										<option value="08">August</option>
										<option value="09">September</option>
										<option value="10">October</option>
										<option value="11">November</option>
										<option value="12">December</option>										
									</select>						
								</td>
								<td class="fc-header-left">
									<input class="btn btn-primary" type="submit" value="Show">					
								</td>                            
								<td class="fc-header-right"><span class="fc-header-title"><h2><?php echo $MonthOnCal." ".$YearForAtn; ?></h2></span></td></tr></tbody>
							</table>
						</form>
                        <!--calendar header ends-->
                    <div class="fc-content" style="position: relative; min-height: 1px;">
						<div class="fc-view fc-view-month fc-grid" style="position: relative;" unselectable="on">
							<table class="fc-border-separate" style="width:100%" cellspacing="0">
								<thead>
									<tr class="fc-first fc-last">
										<th class="fc-sun fc-widget-header fc-first" style="width: 73px;">...</th>
										<th class="fc-mon fc-widget-header" style="width: 73px;">...</th>
										<th class="fc-tue fc-widget-header" style="width: 73px;">...</th>
										<th class="fc-wed fc-widget-header" style="width: 73px;">...</th>
										<th class="fc-thu fc-widget-header" style="width: 73px;">...</th>
										<th class="fc-fri fc-widget-header" style="width: 73px;">...</th>
										<th class="fc-sat fc-widget-header fc-last">...</th>
									</tr>
								</thead>
								<tbody>
									<tr class="fc-week0 fc-first">
										<?php
										if(!empty($rowIsPresentArray)){										
											if(in_array("01~yes", $rowIsPresentArray) || in_array("01~no", $rowIsPresentArray)){
												if(in_array("01~yes", $rowIsPresentArray)){
													$IsPresentColor01 = "fc-state-highlight-present";
												}
												if(in_array("01~no", $rowIsPresentArray)){
													$IsPresentColor01 = "fc-state-highlight-absent";
												}											
											}else{
												$IsPresentColor01 = "";
											}
										}else{
											$IsPresentColor01 = "";
										}
                                        ?>
										<td class="fc-sun fc-widget-content fc-day0 fc-first <?php echo $IsPresentColor01 ?>">
											<div style="min-height: 61px;">
												<div class="fc-day-number">1</div>
												<div class="fc-day-content">
													<div style="position: relative; height: 0px;">&nbsp;</div>
												</div>
											</div>
										</td>
										<?php
										if(!empty($rowIsPresentArray)){
											if(in_array("02~yes", $rowIsPresentArray) || in_array("02~no", $rowIsPresentArray)){
												if(in_array("02~yes", $rowIsPresentArray)){
													$IsPresentColor02 = "fc-state-highlight-present";
												}
												if(in_array("02~no", $rowIsPresentArray)){
													$IsPresentColor02 = "fc-state-highlight-absent";
												}
											}else{
												$IsPresentColor02 = "";
											}
										}else{
											$IsPresentColor02 = "";
										}
                                        ?>
										<td class="fc-mon fc-widget-content fc-day1 <?php echo $IsPresentColor02 ?>">
											<div>
												<div class="fc-day-number">2</div>
												<div class="fc-day-content">
													<div style="position:relative">&nbsp;</div>
												</div>
											</div>
										</td>
										<?php
										if(!empty($rowIsPresentArray)){
											if(in_array("03~yes", $rowIsPresentArray) || in_array("03~no", $rowIsPresentArray)){
												if(in_array("03~yes", $rowIsPresentArray)){
													$IsPresentColor03 = "fc-state-highlight-present";
												}
												if(in_array("03~no", $rowIsPresentArray)){
													$IsPresentColor03 = "fc-state-highlight-absent";
												}
											}else{
												$IsPresentColor03 = "";	
											}
										}else{
											$IsPresentColor03 = "";	
										}
                                        ?>
										<td class="fc-tue fc-widget-content fc-day2 <?php echo $IsPresentColor03 ?>">
											<div>
												<div class="fc-day-number">3</div>
												<div class="fc-day-content">
													<div style="position:relative">&nbsp;</div>
												</div>
											</div>
										</td>
										<?php
										if(!empty($rowIsPresentArray)){
											if(in_array("04~yes", $rowIsPresentArray) || in_array("04~no", $rowIsPresentArray)){
												if(in_array("04~yes", $rowIsPresentArray)){
													$IsPresentColor04 = "fc-state-highlight-present";
												}
												if(in_array("04~no", $rowIsPresentArray)){
													$IsPresentColor04 = "fc-state-highlight-absent";
												}
											}else{
												$IsPresentColor04 = "";	
											}
										}else{
											$IsPresentColor04 = "";	
										}
                                        ?>                                        
										<td class="fc-wed fc-widget-content fc-day3 <?php echo $IsPresentColor04 ?>">
											<div>
												<div class="fc-day-number">4</div>
												<div class="fc-day-content">
													<div style="position:relative">&nbsp;</div>
												</div>
											</div>
										</td>
										<?php
										if(!empty($rowIsPresentArray)){
											if(in_array("05~yes", $rowIsPresentArray) || in_array("05~no", $rowIsPresentArray)){
												if(in_array("05~yes", $rowIsPresentArray)){
													$IsPresentColor05 = "fc-state-highlight-present";
												}
												if(in_array("05~no", $rowIsPresentArray)){
													$IsPresentColor05 = "fc-state-highlight-absent";
												}
											}else{
												$IsPresentColor05 = "";	
											}
										}else{
											$IsPresentColor05 = "";	
										}
                                        ?>                                        
										<td class="fc-thu fc-widget-content fc-day4 <?php echo $IsPresentColor05 ?>">
											<div>
												<div class="fc-day-number">5</div>
												<div class="fc-day-content">
													<div style="position:relative">&nbsp;</div>
												</div>
											</div>
										</td>
										<?php
										if(!empty($rowIsPresentArray)){
											if(in_array("06~yes", $rowIsPresentArray) || in_array("06~no", $rowIsPresentArray)){
												if(in_array("06~yes", $rowIsPresentArray)){
													$IsPresentColor06 = "fc-state-highlight-present";
												}
												if(in_array("06~no", $rowIsPresentArray)){
													$IsPresentColor06 = "fc-state-highlight-absent";
												}
											}else{
												$IsPresentColor06 = "";	
											}
										}else{
											$IsPresentColor06 = "";	
										}
                                        ?>                                        
										<td class="fc-fri fc-widget-content fc-day5 <?php echo $IsPresentColor06 ?>">
											<div>
												<div class="fc-day-number">6</div>
												<div class="fc-day-content">
													<div style="position:relative">&nbsp;</div>
												</div>
											</div>
										</td>
										<?php
										if(!empty($rowIsPresentArray)){
											if(in_array("07~yes", $rowIsPresentArray) || in_array("07~no", $rowIsPresentArray)){
												if(in_array("07~yes", $rowIsPresentArray)){
													$IsPresentColor07 = "fc-state-highlight-present";
												}
												if(in_array("07~no", $rowIsPresentArray)){
													$IsPresentColor07 = "fc-state-highlight-absent";
												}
											}else{
												$IsPresentColor07 = "";
											}
										}else{
											$IsPresentColor07 = "";
										}
                                        ?>                                        
										<td class="fc-sat fc-widget-content fc-day6 fc-last <?php echo $IsPresentColor07 ?>">
											<div>
												<div class="fc-day-number">7</div>
												<div class="fc-day-content">
													<div style="position:relative">&nbsp;</div>
												</div>
											</div>
										</td>
									</tr>
									<tr class="fc-week1">
										<?php
										if(!empty($rowIsPresentArray)){
											if(in_array("08~yes", $rowIsPresentArray) || in_array("08~no", $rowIsPresentArray)){
												if(in_array("08~yes", $rowIsPresentArray)){
													$IsPresentColor08 = "fc-state-highlight-present";
												}
												if(in_array("08~no", $rowIsPresentArray)){
													$IsPresentColor08 = "fc-state-highlight-absent";
												}
											}else{
												$IsPresentColor08 = "";	
											}
										}else{
											$IsPresentColor08 = "";	
										}
                                        ?>                                    
										<td class="fc-sun fc-widget-content fc-day7 fc-first <?php echo $IsPresentColor08 ?>"><div style="min-height: 60px;"><div class="fc-day-number">8</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td>
										<?php
										if(!empty($rowIsPresentArray)){
											if(in_array("09~yes", $rowIsPresentArray) || in_array("09~no", $rowIsPresentArray)){
												if(in_array("09~yes", $rowIsPresentArray)){
													$IsPresentColor09 = "fc-state-highlight-present";
												}
												if(in_array("09~no", $rowIsPresentArray)){
													$IsPresentColor09 = "fc-state-highlight-absent";
												}
											}else{
												$IsPresentColor09 = "";	
											}
										}else{
											$IsPresentColor09 = "";	
										}
                                        ?>										
										<td class="fc-mon fc-widget-content fc-day8 <?php echo $IsPresentColor09 ?>"><div><div class="fc-day-number">9</div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td>
										<?php
										if(!empty($rowIsPresentArray)){
											if(in_array("10~yes", $rowIsPresentArray) || in_array("10~no", $rowIsPresentArray)){
												if(in_array("10~yes", $rowIsPresentArray)){
													$IsPresentColor10 = "fc-state-highlight-present";
												}
												if(in_array("10~no", $rowIsPresentArray)){
													$IsPresentColor10 = "fc-state-highlight-absent";
												}
											}else{
												$IsPresentColor10 = "";
											}
										}else{
											$IsPresentColor10 = "";
										}
                                        ?>										
										<td class="fc-tue fc-widget-content fc-day9 <?php echo $IsPresentColor10 ?>"><div><div class="fc-day-number">10</div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td>
										<?php
										if(!empty($rowIsPresentArray)){
											if(in_array("11~yes", $rowIsPresentArray) || in_array("11~no", $rowIsPresentArray)){
												if(in_array("11~yes", $rowIsPresentArray)){
													$IsPresentColor11 = "fc-state-highlight-present";
												}
												if(in_array("11~no", $rowIsPresentArray)){
													$IsPresentColor11 = "fc-state-highlight-absent";
												}
											}else{
												$IsPresentColor11 = "";
											}
										}else{
											$IsPresentColor11 = "";
										}
                                        ?>										
										<td class="fc-wed fc-widget-content fc-day10 <?php echo $IsPresentColor11 ?>"><div><div class="fc-day-number">11</div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td>
										<?php
										if(!empty($rowIsPresentArray)){
											if(in_array("12~yes", $rowIsPresentArray) || in_array("12~no", $rowIsPresentArray)){
												if(in_array("12~yes", $rowIsPresentArray)){
													$IsPresentColor12 = "fc-state-highlight-present";
												}
												if(in_array("12~no", $rowIsPresentArray)){
													$IsPresentColor12 = "fc-state-highlight-absent";
												}
											}else{
												$IsPresentColor12 = "";
											}
										}else{
											$IsPresentColor12 = "";
										}
                                        ?>										
										<td class="fc-thu fc-widget-content fc-day11 <?php echo $IsPresentColor12 ?>"><div><div class="fc-day-number">12</div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td>
										<?php
										if(!empty($rowIsPresentArray)){
											if(in_array("13~yes", $rowIsPresentArray) || in_array("13~no", $rowIsPresentArray)){
												if(in_array("13~yes", $rowIsPresentArray)){
													$IsPresentColor13 = "fc-state-highlight-present";
												}
												if(in_array("13~no", $rowIsPresentArray)){
													$IsPresentColor13 = "fc-state-highlight-absent";
												}
											}else{
												$IsPresentColor13 = "";	
											}
										}else{
											$IsPresentColor13 = "";	
										}
                                        ?>										
										<td class="fc-fri fc-widget-content fc-day12 <?php echo $IsPresentColor13 ?>"><div><div class="fc-day-number">13</div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td>
										<?php
										if(!empty($rowIsPresentArray)){
											if(in_array("14~yes", $rowIsPresentArray) || in_array("14~no", $rowIsPresentArray)){
												if(in_array("14~yes", $rowIsPresentArray)){
													$IsPresentColor14 = "fc-state-highlight-present";
												}
												if(in_array("14~no", $rowIsPresentArray)){
													$IsPresentColor14 = "fc-state-highlight-absent";
												}
											}else{
												$IsPresentColor14 = "";	
											}
										}else{
											$IsPresentColor14 = "";	
										}
                                        ?>										
										<td class="fc-sat fc-widget-content fc-day13 fc-last <?php echo $IsPresentColor14 ?>"><div><div class="fc-day-number">14</div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td>
									</tr>
									
									<tr class="fc-week2">
										<?php
										if(!empty($rowIsPresentArray)){
											if(in_array("15~yes", $rowIsPresentArray) || in_array("15~no", $rowIsPresentArray)){
												if(in_array("15~yes", $rowIsPresentArray)){
													$IsPresentColor15 = "fc-state-highlight-present";
												}
												if(in_array("15~no", $rowIsPresentArray)){
													$IsPresentColor15 = "fc-state-highlight-absent";
												}
											}else{
												$IsPresentColor15 = "";
											}
										}else{
											$IsPresentColor15 = "";
										}
                                        ?>                                    
										<td class="fc-sun fc-widget-content fc-day14 fc-first <?php echo $IsPresentColor15 ?>"><div style="min-height: 60px;"><div class="fc-day-number">15</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td>
										<?php
										if(!empty($rowIsPresentArray)){
											if(in_array("16~yes", $rowIsPresentArray) || in_array("16~no", $rowIsPresentArray)){
												if(in_array("16~yes", $rowIsPresentArray)){
													$IsPresentColor16 = "fc-state-highlight-present";
												}
												if(in_array("16~no", $rowIsPresentArray)){
													$IsPresentColor16 = "fc-state-highlight-absent";
												}
											}else{
												$IsPresentColor16 = "";
											}
										}else{
											$IsPresentColor16 = "";
										}
                                        ?>										
										<td class="fc-mon fc-widget-content fc-day15 <?php echo $IsPresentColor16 ?>"><div><div class="fc-day-number">16</div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td>
										<?php
										if(!empty($rowIsPresentArray)){
											if(in_array("17~yes", $rowIsPresentArray) || in_array("17~no", $rowIsPresentArray)){
												if(in_array("17~yes", $rowIsPresentArray)){
													$IsPresentColor17 = "fc-state-highlight-present";
												}
												if(in_array("17~no", $rowIsPresentArray)){
													$IsPresentColor17 = "fc-state-highlight-absent";
												}
											}else{
												$IsPresentColor17 = "";
											}
										}else{
											$IsPresentColor17 = "";
										}
                                        ?>										
										<td class="fc-tue fc-widget-content fc-day16 <?php echo $IsPresentColor17 ?>"><div><div class="fc-day-number">17</div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td>
										<?php
										if(!empty($rowIsPresentArray)){
											if(in_array("18~yes", $rowIsPresentArray) || in_array("18~no", $rowIsPresentArray)){
												if(in_array("18~yes", $rowIsPresentArray)){
													$IsPresentColor18 = "fc-state-highlight-present";
												}
												if(in_array("18~no", $rowIsPresentArray)){
													$IsPresentColor18 = "fc-state-highlight-absent";
												}
											}else{
												$IsPresentColor18 = "";
											}
										}else{
											$IsPresentColor18 = "";
										}
                                        ?>										
										<td class="fc-wed fc-widget-content fc-day17 <?php echo $IsPresentColor18 ?>"><div><div class="fc-day-number">18</div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td>
										<?php
										if(!empty($rowIsPresentArray)){
											if(in_array("19~yes", $rowIsPresentArray) || in_array("19~no", $rowIsPresentArray)){
												if(in_array("19~yes", $rowIsPresentArray)){
													$IsPresentColor19 = "fc-state-highlight-present";
												}
												if(in_array("19~no", $rowIsPresentArray)){
													$IsPresentColor19 = "fc-state-highlight-absent";
												}
											}else{
												$IsPresentColor19 = "";
											}
										}else{
											$IsPresentColor19 = "";
										}
                                        ?>										
										<td class="fc-thu fc-widget-content fc-day18 <?php echo $IsPresentColor19 ?>"><div><div class="fc-day-number">19</div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td>
										<?php
										if(!empty($rowIsPresentArray)){
											if(in_array("20~yes", $rowIsPresentArray) || in_array("20~no", $rowIsPresentArray)){
												if(in_array("20~yes", $rowIsPresentArray)){
													$IsPresentColor20 = "fc-state-highlight-present";
												}
												if(in_array("20~no", $rowIsPresentArray)){
													$IsPresentColor20 = "fc-state-highlight-absent";
												}
											}else{
												$IsPresentColor20 = "";
											}
										}else{
											$IsPresentColor20 = "";
										}
                                        ?>										
										<td class="fc-fri fc-widget-content fc-day19 <?php echo $IsPresentColor20 ?>"><div><div class="fc-day-number">20</div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td>
										<?php
										if(!empty($rowIsPresentArray)){
											if(in_array("21~yes", $rowIsPresentArray) || in_array("21~no", $rowIsPresentArray)){
												if(in_array("21~yes", $rowIsPresentArray)){
													$IsPresentColor21 = "fc-state-highlight-present";
												}
												if(in_array("21~no", $rowIsPresentArray)){
													$IsPresentColor21 = "fc-state-highlight-absent";
												}
											}else{
												$IsPresentColor21 = "";
											}
										}else{
											$IsPresentColor21 = "";
										}
                                        ?>										
										<td class="fc-sat fc-widget-content fc-day20 fc-last <?php echo $IsPresentColor21 ?>"><div><div class="fc-day-number">21</div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td>
									</tr>
									
									<tr class="fc-week3">
										<?php
										if(!empty($rowIsPresentArray)){
											if(in_array("22~yes", $rowIsPresentArray) || in_array("22~no", $rowIsPresentArray)){
												if(in_array("22~yes", $rowIsPresentArray)){
													$IsPresentColor22 = "fc-state-highlight-present";
												}
												if(in_array("22~no", $rowIsPresentArray)){
													$IsPresentColor22 = "fc-state-highlight-absent";
												}
											}else{
												$IsPresentColor22 = "";
											}
										}else{
											$IsPresentColor22 = "";
										}
                                        ?>                                    
										<td class="fc-sun fc-widget-content fc-day21 fc-first <?php echo $IsPresentColor22 ?>"><div style="min-height: 60px;"><div class="fc-day-number">22</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td>
										<?php
										if(!empty($rowIsPresentArray)){
											if(in_array("23~yes", $rowIsPresentArray) || in_array("23~no", $rowIsPresentArray)){
												if(in_array("23~yes", $rowIsPresentArray)){
													$IsPresentColor23 = "fc-state-highlight-present";
												}
												if(in_array("23~no", $rowIsPresentArray)){
													$IsPresentColor23 = "fc-state-highlight-absent";
												}
											}else{
												$IsPresentColor23 = "";
											}
										}else{
											$IsPresentColor23 = "";
										}
                                        ?>										
										<td class="fc-mon fc-widget-content fc-day22 <?php echo $IsPresentColor23 ?>"><div><div class="fc-day-number">23</div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td>
										<?php
										if(!empty($rowIsPresentArray)){
											if(in_array("24~yes", $rowIsPresentArray) || in_array("24~no", $rowIsPresentArray)){
												if(in_array("24~yes", $rowIsPresentArray)){
													$IsPresentColor24 = "fc-state-highlight-present";
												}
												if(in_array("24~no", $rowIsPresentArray)){
													$IsPresentColor24 = "fc-state-highlight-absent";
												}
											}else{
												$IsPresentColor24 = "";
											}
										}else{
											$IsPresentColor24 = "";
										}
                                        ?>										
										<td class="fc-tue fc-widget-content fc-day23 <?php echo $IsPresentColor24 ?>"><div><div class="fc-day-number">24</div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td>
										<?php
										if(!empty($rowIsPresentArray)){
											if(in_array("25~yes", $rowIsPresentArray) || in_array("25~no", $rowIsPresentArray)){
												if(in_array("25~yes", $rowIsPresentArray)){
													$IsPresentColor25 = "fc-state-highlight-present";
												}
												if(in_array("25~no", $rowIsPresentArray)){
													$IsPresentColor25 = "fc-state-highlight-absent";
												}
											}else{
												$IsPresentColor25 = "";
											}
										}else{
											$IsPresentColor25 = "";
										}
                                        ?>										
										<td class="fc-wed fc-widget-content fc-day24 <?php echo $IsPresentColor25 ?>"><div><div class="fc-day-number">25</div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td>
										<?php
										if(!empty($rowIsPresentArray)){
											if(in_array("26~yes", $rowIsPresentArray) || in_array("26~no", $rowIsPresentArray)){
												if(in_array("26~yes", $rowIsPresentArray)){
													$IsPresentColor26 = "fc-state-highlight-present";
												}
												if(in_array("26~no", $rowIsPresentArray)){
													$IsPresentColor26 = "fc-state-highlight-absent";
												}
											}else{
												$IsPresentColor26 = "";
											}
										}else{
											$IsPresentColor26 = "";
										}
                                        ?>										
										<td class="fc-thu fc-widget-content fc-day25 <?php echo $IsPresentColor26 ?>"><div><div class="fc-day-number">26</div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td>
										<?php
										if(!empty($rowIsPresentArray)){
											if(in_array("27~yes", $rowIsPresentArray) || in_array("27~no", $rowIsPresentArray)){
												if(in_array("27~yes", $rowIsPresentArray)){
													$IsPresentColor27 = "fc-state-highlight-present";
												}
												if(in_array("27~no", $rowIsPresentArray)){
													$IsPresentColor27 = "fc-state-highlight-absent";
												}
											}else{
												$IsPresentColor27 = "";
											}
										}else{
											$IsPresentColor27 = "";
										}
                                        ?>										
										<td class="fc-fri fc-widget-content fc-day26 <?php echo $IsPresentColor27 ?>"><div><div class="fc-day-number">27</div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td>
										<?php
										if(!empty($rowIsPresentArray)){
											if(in_array("28~yes", $rowIsPresentArray) || in_array("28~no", $rowIsPresentArray)){
												if(in_array("28~yes", $rowIsPresentArray)){
													$IsPresentColor28 = "fc-state-highlight-present";
												}
												if(in_array("28~no", $rowIsPresentArray)){
													$IsPresentColor28 = "fc-state-highlight-absent";
												}
											}else{
												$IsPresentColor28 = "";
											}
										}else{
											$IsPresentColor28 = "";
										}
                                        ?>										
										<td class="fc-sat fc-widget-content fc-day27 fc-last fc-other-month <?php echo $IsPresentColor28 ?>"><div><div class="fc-day-number">28</div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td>
									</tr>
									
									<tr class="fc-week4">
										<?php
										if(!empty($rowIsPresentArray)){
											if(in_array("29~yes", $rowIsPresentArray) || in_array("29~no", $rowIsPresentArray)){
												if(in_array("29~yes", $rowIsPresentArray)){
													$IsPresentColor29 = "fc-state-highlight-present";
												}
												if(in_array("29~no", $rowIsPresentArray)){
													$IsPresentColor29 = "fc-state-highlight-absent";
												}
											}else{
												$IsPresentColor29 = "";
											}
										}else{
											$IsPresentColor29 = "";
										}
                                        ?>                                    
										<td class="fc-sun fc-widget-content fc-day28 fc-first fc-other-month <?php echo $IsPresentColor29 ?>"><div style="min-height: 60px;"><div class="fc-day-number">29</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td>
										<?php
										if(!empty($rowIsPresentArray)){
											if(in_array("30~yes", $rowIsPresentArray) || in_array("30~no", $rowIsPresentArray)){
												if(in_array("30~yes", $rowIsPresentArray)){
													$IsPresentColor30 = "fc-state-highlight-present";
												}
												if(in_array("30~no", $rowIsPresentArray)){
													$IsPresentColor30 = "fc-state-highlight-absent";
												}
											}else{
												$IsPresentColor30 = "";
											}
										}else{
											$IsPresentColor30 = "";
										}
                                        ?>										
										<td class="fc-mon fc-widget-content fc-day29 fc-other-month <?php echo $IsPresentColor30 ?>"><div><div class="fc-day-number">30</div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td>
										<?php
										if(!empty($rowIsPresentArray)){
											if(in_array("31~yes", $rowIsPresentArray) || in_array("31~no", $rowIsPresentArray)){
												if(in_array("31~yes", $rowIsPresentArray)){
													$IsPresentColor31 = "fc-state-highlight-present";
												}
												if(in_array("31~no", $rowIsPresentArray)){
													$IsPresentColor31 = "fc-state-highlight-absent";
												}
											}else{
												$IsPresentColor31 = "";
											}
										}else{
											$IsPresentColor31 = "";
										}
                                        ?>										
										<td class="fc-tue fc-widget-content fc-day30 fc-other-month <?php echo $IsPresentColor31 ?>"><div><div class="fc-day-number">31</div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td>
										
										<td class="fc-wed fc-widget-content fc-day31 fc-other-month"><div><div class="fc-day-number">...</div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td>
										
										<td class="fc-thu fc-widget-content fc-day32 fc-other-month"><div><div class="fc-day-number">...</div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td>
										
										<td class="fc-fri fc-widget-content fc-day33 fc-other-month"><div><div class="fc-day-number">...</div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td>
										
										<td class="fc-sat fc-widget-content fc-day34 fc-last fc-other-month"><div><div class="fc-day-number">...</div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td>
									</tr>
									
									<tr class="fc-week5 fc-last">
										<td class="fc-sun fc-widget-content fc-day35 fc-first fc-other-month"><div style="min-height: 61px;"><div class="fc-day-number">...</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td>
										
										<td class="fc-mon fc-widget-content fc-day36 fc-other-month"><div><div class="fc-day-number">...</div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td>
										
										<td class="fc-tue fc-widget-content fc-day37 fc-other-month"><div><div class="fc-day-number">...</div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td>
										
										<td class="fc-wed fc-widget-content fc-day38 fc-other-month"><div><div class="fc-day-number">...</div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td>
										
										<td class="fc-thu fc-widget-content fc-day39 fc-other-month"><div><div class="fc-day-number">...</div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td>
										
										<td class="fc-fri fc-widget-content fc-day40 fc-other-month"><div><div class="fc-day-number">...</div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td>
										
										<td class="fc-sat fc-widget-content fc-day41 fc-last fc-other-month"><div><div class="fc-day-number">...</div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td>
									</tr>
								</tbody>
							</table>
						<div style="position:absolute;z-index:8;top:0;left:0"></div>
						</div>
					</div>
                    <!--Attandance calendar ends-->                    
                    </div>
                              
                                
                            </div>
                            <div class="span3">
                                <h4>School Exam Results</h4>
                                <ul class="icons push">
                                    <li><i class="icon-hand-right"></i> <strong>ABC Company</strong><br/><em>Duration: 4 years</em><br/><em>Description of the company..</em><br><a href="javascript:void(0)">abc-company.com</a></li>
                                    <li><i class="icon-hand-right"></i> <strong>DEF Company</strong><br/><em>Duration: 3 years</em><br/><em>Description of the company..</em><br><a href="javascript:void(0)">def-company.com</a></li>
                                    <li><i class="icon-hand-right"></i> <strong>GHI Company</strong><br/><em>Duration: 1.7 years</em><br/><em>Description of the company..</em><br><a href="javascript:void(0)">ghi-company.com</a></li>
                                </ul>
                                <h4>Current Status</h4>
                                <div class="alert alert-success"><i class="icon-ok-sign"></i> Working in ABC Company</div>
                                <h4>Some Projects</h4>
                                <ul class="unstyled">
                                    <li> <strong>Project 1</strong>: <a href="javascript:void(0)">exampleproject1.com</a></li>
                                    <li> <strong>Project 2</strong>: <a href="javascript:void(0)">exampleproject2.com</a></li>
                                    <li> <strong>Project 3</strong>: <a href="javascript:void(0)">exampleproject3.com</a></li>
                                    <li> <strong>Project 4</strong>: <a href="javascript:void(0)">exampleproject4.com</a></li>
                                    <li> <strong>Project 5</strong>: <a href="javascript:void(0)">exampleproject5.com</a></li>
                                    <li> <strong>Project 6</strong>: <a href="javascript:void(0)">exampleproject6.com</a></li>
                                    <li> <strong>Project 7</strong>: <a href="javascript:void(0)">exampleproject7.com</a></li>
                                    <li> <strong>Project 8</strong>: <a href="javascript:void(0)">exampleproject8.com</a></li>
                                    <li> <strong>Project 9</strong>: <a href="javascript:void(0)">exampleproject9.com</a></li>
                                    <li> <strong>Project 10</strong>: <a href="javascript:void(0)">exampleproject10.com</a></li>
                                </ul>
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