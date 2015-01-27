<?php
session_start();

$uid = $_SESSION['uid'];
$FirstName = $_SESSION['FirstName'];	
$DesignationHardCode = $_SESSION['DesignationHardCode'];	

if(($_SESSION['uid'] == "") || ($DesignationHardCode != "teacher")){
	header('Location: ../login/login.php');
	exit();	
}

if(isset($_GET['success'])){
	$success = $_GET['success'];
}else{
	$success = "NotYesOrNo";	
}

include '../configs/connection.php';

//fetch data from teacher table begins
$sql = "SELECT * FROM teacher WHERE teuid='$uid'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    // login success - output data of each row
    while($row = mysqli_fetch_assoc($result)){
		$TeacherSchoolName = $row["TeacherSchoolName"];
		$YourClass = $row["YourClass"];
		$YourSection = $row["YourSection"];
    }
}else{
    echo "0 results";
}
//fetch data from teacher table ends

//Student Attendance begins

if(isset($_SESSION['ListofStudForAttendance'])){
	$SchoolForAtt = $_SESSION['SchoolForAtt'];
	$ClassForAtt = $_SESSION['ClassForAtt'];
	$SectionForAtt = $_SESSION['SectionForAtt'];
	$AttendanceDate = $_SESSION['AttendanceDate'];
	$AttendanceDateMonth = substr($AttendanceDate, 0, -8);
	$AttendanceDateDay = substr($AttendanceDate, 3, -5);
	$AttendanceDateYear = substr($AttendanceDate, 6);	
}

if(!isset($_SESSION['ListofStudForAttendance'])){
	$SchoolForAtt = $TeacherSchoolName;
	$ClassForAtt = $YourClass;
	$SectionForAtt = $YourSection;
	$AttendanceDate = date("m/d/Y");	
	$AttendanceDateMonth = date("m");
	$AttendanceDateDay = date("d");
	$AttendanceDateYear	 = date("Y");	
}

//fetch data from student table begins
$sql = "SELECT * FROM student WHERE School='$SchoolForAtt' AND Class='$ClassForAtt' AND Section='$SectionForAtt'";
$resultStudent = mysqli_query($conn, $sql);
//fetch data from student table ends

//Student Attendance ends

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
            <li><a class="ajax-link" href="assignment"><i class="icon-picture"></i><span	class="hidden-tablet"> Generate Assignment</span></a></li>
		 
          
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
          <li> <a href="attandence.php">Manage Attandance</a> </li>
        </ul>
      </div>
        <!--submit alert begins --->
        <?php
        if($success == "yes"){
            echo "<div class=\"alert alert-success\">";
                echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>";
                echo "<strong>Well done!</strong> You got students list successfully";
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
						<h2><i class="icon-calendar"></i> Attendance Manager</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
                <div class="box-content">
					<form class="form-horizontal" name="AttendanceOnCalendar" action="../configs/teacher-list-of-student-agent.php" method="post" onSubmit="return validListofStudForAttendance();">
						<div class="control-group">
							<label class="control-label" for="selectError3">Choose Your Class and Section:</label>
							<div class="controls">
                              <input name="ListofStudForAttendance" type="hidden" value="ListofStudForAttendance">
                              <input name="TeacherSchoolName" type="hidden" value="<?php echo $TeacherSchoolName; ?>">
							  <select name="ClassFromTe" id="selectError3">
                                <option value="5"<?php if($ClassForAtt == "5"){echo " selected";} ?>>STD. 5</option>
                                <option value="6"<?php if($ClassForAtt == "6"){echo " selected";} ?>>STD. 6</option>
                                <option value="7"<?php if($ClassForAtt == "7"){echo " selected";} ?>>STD. 7</option>
                                <option value="8"<?php if($ClassForAtt == "8"){echo " selected";} ?>>STD. 8</option>
                                <option value="9"<?php if($ClassForAtt == "9"){echo " selected";} ?>>STD. 9</option>
                                <option value="10"<?php if($ClassForAtt == "10"){echo " selected";} ?>>STD. 10</option>
                                <option value="11"<?php if($ClassForAtt == "11"){echo " selected";} ?>>STD. 11</option>
                                <option value="12"<?php if($ClassForAtt == "12"){echo " selected";} ?>>STD. 12</option>
							  </select>
							  <select name="SectionFromTe" id="selectError3">
                                <option value="A"<?php if($SectionForAtt == "A"){echo " selected";} ?>>Section A</option>
                                <option value="B"<?php if($SectionForAtt == "B"){echo " selected";} ?>>Section B</option>
                                <option value="C"<?php if($SectionForAtt == "C"){echo " selected";} ?>>Section C</option>
                                <option value="D"<?php if($SectionForAtt == "D"){echo " selected";} ?>>Section D</option>
							  </select>
                              <input name="AttendanceDate" type="text" class="input-xlarge datepicker" id="date01" value="<?php echo $AttendanceDate; ?>">	
							  <button class="btn btn-primary" type="submit">View Student</button>							  
							</div>							
						</div>
					</form>
					<div class="clearfix"></div>
				</div>	
                <div class="box-content">
					<table class="table table-striped table-bordered bootstrap-datatable">
						<thead>
							<tr>
								<th>Registeration No.</th>
								<th>Roll No.</th>
								<th>Student Name</th>
								<th class="present">Present</th>
								<th class="absent">Absent</th>
							</tr>
						</thead>   
						<tbody>
                        
                        	<?php
							if(mysqli_num_rows($resultStudent) > 0){
								// login success - output data of each row
								while($rowStudent = mysqli_fetch_assoc($resultStudent)){
									echo "<tr>";
										echo "<td class=\"center\">".$rowStudent["RegisterationNo"]."</td>";
										echo "<td class=\"center\">".$rowStudent["RollNo"]."</td>";
										echo "<td class=\"center\">".$rowStudent["FirstName"]." ".$rowStudent["LastName"]."</td>";
										echo "<td class=\"center\" style=\"background-color:rgb(77,167,77); color:#FFF\">";
											//Present data begins
											echo "<form class=\"form-horizontal\" name=\"xx\" action=\"../configs/student-attandence-agent.php\" method=\"post\" onSubmit=\"return validxx();\">";
												echo "<input name=\"MakeStudentAttendance\" type=\"hidden\" value=\"MakeStudentAttendance\">";											
												echo "<input name=\"uidSubmitForAtt\" type=\"hidden\" value=\"".$rowStudent["stuid"]."\">";
												echo "<input name=\"DateMonthSubmitForAtt\" type=\"hidden\" value=\"".$AttendanceDateMonth."\">";
												echo "<input name=\"DateDaySubmitForAtt\" type=\"hidden\" value=\"".$AttendanceDateDay."\">";
												echo "<input name=\"DateYearSubmitForAtt\" type=\"hidden\" value=\"".$AttendanceDateYear."\">";
												echo "<input name=\"AttendanceDate\" type=\"hidden\" value=\"".$AttendanceDate."\">";
												echo "<input name=\"MadeBy\" type=\"hidden\" value=\"".$FirstName."\">";
												echo "<input name=\"IsPresent\" type=\"hidden\" value=\"".$AttendanceDateDay."~yes"."\">";																					
												echo "<button class=\"btn btn-default\" type=\"submit\">Present</button>";
											echo "</form>";
											//Present data ends
										echo "</td>";
										echo "<td class=\"center\" style=\"background-color:rgb(203,75,75); color:#FFF\">";
											//Absent data begins
											echo "<form class=\"form-horizontal\" name=\"xx\" action=\"../configs/student-attandence-agent.php\" method=\"post\" onSubmit=\"return validxx();\">";
												echo "<input name=\"MakeStudentAttendance\" type=\"hidden\" value=\"MakeStudentAttendance\">";
												echo "<input name=\"uidSubmitForAtt\" type=\"hidden\" value=\"".$rowStudent["stuid"]."\">";
												echo "<input name=\"DateMonthSubmitForAtt\" type=\"hidden\" value=\"".$AttendanceDateMonth."\">";
												echo "<input name=\"DateDaySubmitForAtt\" type=\"hidden\" value=\"".$AttendanceDateDay."\">";
												echo "<input name=\"DateYearSubmitForAtt\" type=\"hidden\" value=\"".$AttendanceDateYear."\">";
												echo "<input name=\"AttendanceDate\" type=\"hidden\" value=\"".$AttendanceDate."\">";
												echo "<input name=\"MadeBy\" type=\"hidden\" value=\"".$FirstName."\">";
												echo "<input name=\"IsPresent\" type=\"hidden\" value=\"".$AttendanceDateDay."~no"."\">";											
											
																					
												echo "<button class=\"btn btn-default\" type=\"submit\">Absent</button>";
											echo "</form>";
											//Absent data ends
										echo "</td>";
									echo "</tr>";									
								}
							}else{
								echo "<tr>";
									echo "<td class=\"center\">---</td>";
									echo "<td class=\"center\">---</td>";
									echo "<td class=\"center\">---</td>";
									echo "<td class=\"center\" style=\"background-color:rgb(77,167,77); color:#FFF\">---</td>";
									echo "<td class=\"center\" style=\"background-color:rgb(203,75,75); color:#FFF\">---</td>";
								echo "</tr>";								
							}							
                            ?>
						</tbody>
					</table>            	      
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