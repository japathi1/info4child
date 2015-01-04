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
						<i class="icon-user"></i><span class="hidden-phone">Welcome! Rakesh Goyal </span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">View Profile</a></li>
						<li class="divider"></li>
						<li><a href="login.php">Logout</a></li>
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
                                    <li><a href="#one"><i class="icon-adjust"></i>Edit Teacher Info</a></li>
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

                                <h3>Edit Teacher Information</h3>
                                
                               <hr>
                              <div class="form-horizontal" action="#">
						  
							   <div class="control-group">
								<label class="control-label" for="selectError3">Title:</label>
								<div class="controls">
								  <select id="selectError3" class="span2">
									<option>Mr.</option>
									<option>Miss.</option>
									<option>Ms.</option>
									
								  </select>
								</div>
                                </div>
							<div class="control-group">
								<label class="control-label" for="focusedInput">First Name:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput2" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Last Name:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
                               <div class="control-group">
							  <label class="control-label" for="date01">Date of Birth:</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01" value="">
							  </div>
							</div>
							  <div class="control-group">
								<label class="control-label" for="appendedInput">Email Id:</label>
								<div class="controls">
                                 <div class="input-append">
								  <span class="input-xlarge uneditable-input">rakesh@gmail.com</span><button class="btn  btn-setting" type="button">Send Request For Change</button>
                                   </div>
								</div>
							  </div>
                               <div class="control-group">
								<label class="control-label" for="appendedInput">Mobile:</label>
								<div class="controls">
                                 <div class="input-append">
								  <span class="input-xlarge uneditable-input">123456789</span><button class="btn btn-setting" type="button">Send Request For Change</button>
                                
                                   </div>
								</div>
							  </div>
                          
							  
							
							 
							<div class="control-group">
								<label class="control-label">Sex:</label>
								<div class="controls">
								  <label class="radio">
									<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
									Male
								  </label>
								  <div style="clear:both"></div>
								  <label class="radio">
									<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
									Female
								  </label>
								</div>
							  </div>
							        
		
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save</button>
							  <button type="reset" class="btn">Cancel</button>
                              <div style="width:50%; float:right" align="right">
                              <div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong>Well done!</strong> You successfully Changed Your Information.
						</div>
                              </div>
							</div>
							
						
						</div>
                         <a name="two"></a>

                                <h3>Edit Educational Background</h3>
                                
                               <hr>
                              <div class="form-horizontal" action="#">
							<div class="control-group">
								<label class="control-label" for="focusedInput">10th Board:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput2" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">School Name:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
                                <div class="control-group">
							  <label class="control-label" for="date01">Date Of Completed:</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01" value="">
							  </div>
							</div>
                            <div class="control-group">
								<label class="control-label" for="focusedInput">Marks Obtained(In Percentage):</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput2" type="text" value="">
								</div>
							  </div>
                              	<div class="control-group">
								<label class="control-label" for="focusedInput">12th Board:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput2" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">School/College/University:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
                                <div class="control-group">
							  <label class="control-label" for="date01">Date Of Completed:</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01" value="">
							  </div>
							</div>
                            <div class="control-group">
								<label class="control-label" for="focusedInput">Marks Obtained(In Percentage):</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput2" type="text" value="">
								</div>
							  </div>
                              	<div class="control-group">
								<label class="control-label" for="focusedInput">Graduation:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput2" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">College/University:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="focusedInput">Honours Subject:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
                                <div class="control-group">
							  <label class="control-label" for="date01">Date Of Completed:</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01" value="">
							  </div>
							</div>
                            <div class="control-group">
								<label class="control-label" for="focusedInput">Marks Obtained(In Percentage):</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput2" type="text" value="">
								</div>
							  </div>
                               	<div class="control-group">
								<label class="control-label" for="focusedInput">Master Degree:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput2" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">College/University:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="focusedInput">Honours Subject:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
                                <div class="control-group">
							  <label class="control-label" for="date01">Date Of Completed:</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01" value="">
							  </div>
							</div>
                            <div class="control-group">
								<label class="control-label" for="focusedInput">Marks Obtained(In Percentage):</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput2" type="text" value="">
								</div>
							  </div>
							  	<div class="control-group">
								<label class="control-label" for="focusedInput">Other:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput2" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">College/University:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="focusedInput">Honours Subject:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
                                <div class="control-group">
							  <label class="control-label" for="date01">Date Of Completed:</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01" value="">
							  </div>
							</div>
                            <div class="control-group">
								<label class="control-label" for="focusedInput">Marks Obtained(In Percentage):</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput2" type="text" value="">
								</div>
							  </div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save</button>
							  <button type="reset" class="btn">Cancel</button>
                              <div style="width:50%; float:right" align="right">
                              <div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong>Well done!</strong> You successfully Changed Your parent's Information.
						</div>
                              </div>
							</div>
						
						
						</div>
                          <a name="seven"></a>

                                <h3>Edit Work Experience</h3>
                                
                               <hr>
                                <h4> Write your last job only. </h4>
                              <div class="form-horizontal" action="#">
                             
						  <div class="control-group">
								<label class="control-label" for="focusedInput">Organisation Name:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="focusedInput">Designation:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="focusedInput">Time Period:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
                                <div class="control-group">
							  <label class="control-label" for="textarea2">Remarks:</label>

							  <div class="controls">
								<textarea  id="permanent_address" rows="8" cols="20" class="span6"></textarea>
							  </div>
							</div>
                            <div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save</button>
							  <button type="reset" class="btn">Cancel</button>
                              <div style="width:50%; float:right" align="right">
                              <div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong>Well done!</strong> You successfully Changed Your Information.
						</div>
                              </div>
							</div>
		
						</div>
                        
                        
                        <a name="three"></a>

                                <h3>Edit Address Information</h3>
                                
                               <hr>
                              <div class="form-horizontal" action="#">
						  <h4>Present Address </h4>
							  <div class="control-group">
							  <label class="control-label" for="textarea2">Address:</label>
							  <div class="controls">
								<textarea  id="present_address" rows="3"></textarea>
							  </div>
							</div>
							<div class="control-group">
								<label class="control-label" for="focusedInput">Landmark:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput2" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="selectError2">Select Country:</label>
								<div class="controls">
									<select data-placeholder="Select Country" id="selectError2" data-rel="chosen">
										<option value=""></option>
										
										  <option>Country Name</option>
										  <option>Country Name</option>
										  <option>Country Name</option>
										  <option>Country Name</option>
									
										
										  <option>Country Name</option>
										  <option>Country Name</option>
										  <option>Country Name</option>
										  <option>Country Name</option>
										
									
								  </select>
								</div>
							  </div>
                             
							  <div class="control-group">
								<label class="control-label" for="selectError2">Select State:</label>
								<div class="controls">
									<select data-placeholder="Select State" id="selectError3" data-rel="chosen">
										<option value=""></option>
										
										  <option>state Name</option>
										  <option>state Name</option>
										  <option>state Name</option>
										  <option>state Name</option>
									
										
										  <option>state Name</option>
										  <option>state Name</option>
										  <option>state Name</option>
										  <option>state Name</option>
										
									
								  </select>
								</div>
							  </div>
                               <div class="control-group">
								<label class="control-label" for="selectError2">Select City:</label>
								<div class="controls">
									<select data-placeholder="Select City" id="selectError4" data-rel="chosen">
										<option value=""></option>
										
										  <option>City Name</option>
										  <option>City Name</option>
										  <option>City Name</option>
										   <option>City Name</option>
									
										
										  <option>City Name</option>
										  <option>City Name</option>
										   <option>City Name</option>
										  <option>City Name</option>
										
									
								  </select>
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="focusedInput">Pin Code:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="myinput" id="myinput" onKeyPress="return isNumber(event);"    type="text" value="">
								</div>
							  </div>
							
							 
							  <h4>Permanent Address </h4>
                              <label class="checkbox-inline">
                    <input type="checkbox" onClick="javascript:return function("click")" id="make_same" value="option1"> If both are same address ! Click Here
                </label>
                          
							  <div class="control-group">
							  <label class="control-label" for="textarea2">Address:</label>

							  <div class="controls">
								<textarea  id="permanent_address" rows="3"></textarea>
							  </div>
							</div>
							<div class="control-group">
								<label class="control-label" for="focusedInput">Landmark:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput2" type="text" value="">
								</div>
							  </div>
							  
                               <div class="control-group">
								<label class="control-label" for="selectError2">Select Country:</label>
								<div class="controls">
									<select data-placeholder="Select Country" id="selectError5" data-rel="chosen">
										<option value=""></option>
										
										  <option>Country Name</option>
										  <option>Country Name</option>
										  <option>Country Name</option>
										  <option>Country Name</option>
									
										
										  <option>Country Name</option>
										  <option>Country Name</option>
										  <option>Country Name</option>
										  <option>Country Name</option>
										
									
								  </select>
								</div>
							  </div>
                             
							  <div class="control-group">
								<label class="control-label" for="selectError2">Select State:</label>
								<div class="controls">
									<select data-placeholder="Select State" id="selectError6" data-rel="chosen">
										<option value=""></option>
										
										  <option>state Name</option>
										  <option>state Name</option>
										  <option>state Name</option>
										  <option>state Name</option>
									
										
										  <option>state Name</option>
										  <option>state Name</option>
										  <option>state Name</option>
										  <option>state Name</option>
										
									
								  </select>
								</div>
							  </div>
                               <div class="control-group">
								<label class="control-label" for="selectError2">Select City:</label>
								<div class="controls">
									<select data-placeholder="Select City" id="selectError7" data-rel="chosen">
										<option value=""></option>
										
										  <option>City Name</option>
										  <option>City Name</option>
										  <option>City Name</option>
										   <option>City Name</option>
									
										
										  <option>City Name</option>
										  <option>City Name</option>
										   <option>City Name</option>
										  <option>City Name</option>
										
									
								  </select>
								</div>
							  </div>
							  
                               
							   <div class="control-group">
								<label class="control-label" for="focusedInput">Pin Code:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="myinput" id="myinput" onKeyPress="return isNumber(event);"  type="text" value="">
								</div>
							  </div>
							        
		
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save</button>
							  <button type="reset" class="btn">Cancel</button>
                              <div style="width:50%; float:right" align="right">
                              <div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong>Well done!</strong> You successfully Changed Your Information.
						</div>
                              </div>
							</div>
							
						
						</div>
                        
                        
                         <a name="four"></a>

                                <h3>Edit Academic Information</h3>
                                
                               <hr>
                              <div class="form-horizontal" action="#">
						  
							
						  <div class="control-group">
								<label class="control-label" for="selectError3">Choose Your Class:</label>
								<div class="controls">
								  <select id="selectError3" class="span6" >
									<option>Class 1</option>
									<option>Class 2</option>
									<option>Class 3</option>
                                  
								  </select>
								</div>
                                </div>
							   <div class="control-group">
								<label class="control-label" for="selectError3">Choose Your Section:</label>
								<div class="controls">
								  <select id="selectError3" class="span6">
									<option>A</option>
									<option>B</option>
									<option>C</option>
                                   
									
								  </select>
								</div>
                                </div>
							  
							
							   <div class="control-group">
								<label class="control-label" for="selectError3" >Choose Your Subject:</label>
								<div class="controls">
								  <select id="selectError3" class="span6">
									<option>Hindi</option>
									<option>English</option>
									<option>Mathematics</option>
                                    <option>Science</option>
                                    <option>Social Study</option>
                                    <option>Physical Science</option>
                                    
                                      
									
								  </select>
								</div>
                                </div>
                                <div class="control-group">
							  <label class="control-label" for="textarea2">Remarks:</label>

							  <div class="controls">
								<textarea  id="permanent_address" rows="8" cols="20" class="span6"></textarea>
							  </div>
							</div>
                            <div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save</button>
							  <button type="reset" class="btn">Cancel</button>
                              <div style="width:50%; float:right" align="right">
                              <div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong>Well done!</strong> You successfully Changed Your Information.
						</div>
                              </div>
							</div>
		
						</div>
                        
                         <a name="five"></a>

                                <h3>Change Profile Picture</h3>
                                
                               <hr>
                                 <div class="widget-body form">
                          <form action="assets/dropzone/upload.php" class="dropzone" id="my-awesome-dropzone">
                          </form>
                      </div>

                        
                         <a name="six"></a>

                                <h3>Change Your Password</h3>
                                
                               <hr>
                              <div class="form-horizontal" action="#">
						  
							
							<div class="control-group">
								<label class="control-label" for="focusedInput">Old Password:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput2" type="Password" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">New Password:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" data-rel="popover" data-content="Password Should be Alphanumeric Contents Only" title="Password Hint's" type="Password" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Confirm New Password:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="password" value="">
								</div>
							  </div>
							
                            
                            <hr>
                            <div class="control-group">
								<label class="control-label" for="selectError5">Set Your Security Question:</label>
								<div class="controls">
								  <select id="selectError5" class="span6">
									<option>What is your Mother Maiden's Name?</option>
									<option>Who is your best Childhood Friend?</option>
									<option>Who is your Favorite Class Teacher?</option>
									<option>What is your favorite game</option>
									
								  </select>
								</div>
							  </div>  
							
							  
							 <div class="control-group">
								<label class="control-label" for="focusedInput">Your Answer:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
							
							
						<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save</button>
							  <button type="reset" class="btn">Cancel</button>
                              <div style="width:50%; float:right" align="right">
                              <div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong>Well done!</strong> You successfully Changed Your Information.
						</div>
                              </div>
							</div>
                            <!-- see later -->
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
						<!-- See late -->
						</div>
                              
                                
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
