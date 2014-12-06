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
<link rel="shortcut icon" href="../img/favicon.ico">
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
      <div class="btn-group pull-right" > <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <i class="icon-user"></i><span class="hidden-phone"> admin</span> <span class="caret"></span> </a>
        <ul class="dropdown-menu">
          <li><a href="../index.php">Logout</a></li>
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
          <li><a class="ajax-link" href="add-school.php"><i class="icon-plus"></i><span class="hidden-tablet"> Add New School</span></a></li>
          <li><a class="ajax-link" href="addschoolrecord.php"><i class="icon-plus"></i><span class="hidden-tablet">Add New User</span></a></li>
		   <li><a class="ajax-link" href="editschool.php"><i class="icon-wrench"></i><span class="hidden-tablet"> View/Manage School</span></a></li>
          <li><a class="ajax-link" href="payment.php"><i class="icon-briefcase"></i><span class="hidden-tablet"> Payment Module</span></a></li>
          <li><a class="ajax-link" href="i4c-exam.php"><i class="icon-bell"></i><span class="hidden-tablet"> Examination Center</span></a></li>
		  <li><a class="ajax-link" href="message.php"><i class="icon-envelope"></i><span class="hidden-tablet"> message Center</span></a></li>
          <li><a class="ajax-link" href="blog-manager.php"><i class="icon-comment"></i><span class="hidden-tablet"> Blog Manager</span></a></li>
        </ul>
        <label id="for-is-ajax" class="hidden-tablet" for="is-ajax">
        <input id="is-ajax" type="checkbox">
        Ajax on menu</label>
      </div>
      <!--/.well -->
    </div><!--/span-->
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
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="add-school.php">Add New School</a><span class="divider">/</span>
					</li>
					<li>
						<a href="addschoolrecord.php">Add School Record</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-plus"></i> Add Management, Principle, Teacher, Student.</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<ul class="nav nav-tabs active" id="myTab">
							<li><a href="#mgmt">Add Management</a></li>
							<li><a href="#pnple">Add Principle</a></li>
							<li><a href="#tec">Add Teacher</a></li>
							<li><a href="#Stu">Add Student</a></li>
						</ul>
						 
						<div id="myTabContent" class="tab-content">
							<div class="tab-pane" id="mgmt">
								<form class="form-horizontal" action="#">
						  <fieldset>
							<legend>Please fill the form for management detail</legend>
							<div class="control-group">
								<label class="control-label" for="focusedInput">Owner Name:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Contact No:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Email Id:</label>
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
							<div class="control-group">
							  <label class="control-label" for="fileInput">Image Upload</label>
							  <div class="controls">
								<div class="uploader" id="uniform-fileInput"><input class="input-file uniform_on" id="fileInput" type="file" size="19" style="opacity: 0;"><span class="filename">No file selected</span><span class="action">Choose File</span></div>
							  </div>
							</div>        
		
						<legend>Choose Username and Password</legend>
						
						<div class="control-group">
								<label class="control-label" for="focusedInput">Choose a Username:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Choose a Password:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="Password" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Confirn Password:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="Password" value="">
								</div>
							  </div>
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
							<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong>Well done!</strong> You successfully added School Management in our database.
						</div>
						  </fieldset>
						</form>
								 
							</div>
							<div class="tab-pane" id="pnple">
						<form class="form-horizontal" action="#">
						  <fieldset>
							<legend>Please fill the form for Principal detail</legend>
                            <div class="control-group">
								<label class="control-label" for="selectError3">School Name:</label>
								<div class="controls">
								  <select id="selectError3">
									<option>School Name</option>
									<option>School Name</option>
									<option>School Name</option>
									<option>School Name</option>
									<option>School Name</option>
									<option>School Name</option>
									<option>School Name</option>
									<option>School Name</option>
								  </select>
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="selectError3">Title:</label>
								<div class="controls">
								  <select id="selectError3">
									<option>Mr.</option>
									<option>Miss.</option>
									<option>Ms.</option>
									
								  </select>
								</div>
							  </div>
							<div class="control-group">
								<label class="control-label" for="focusedInput">Principal First Name:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="focusedInput">Principal Last Name:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
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
                              <div class="control-group">
								<label class="control-label" for="focusedInput">School Title</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
                              <div class="control-group">
							  <label class="control-label" for="fileInput">ID Proof:</label>
							  <div class="controls">
								<div class="uploader" id="uniform-fileInput"><input class="input-file uniform_on" id="fileInput" type="file" size="19" style="opacity: 0;"><span class="filename">No file selected</span><span class="action">Choose File</span></div>
							  </div>
							</div>
                              <div class="control-group">
								<label class="control-label" for="selectError3">Select Country:</label>
								<div class="controls">
								  <select id="selectError3">
									<option>A.</option>
									<option>b.</option>
									<option>c.</option>
									
								  </select>
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="selectError3">Select State:</label>
								<div class="controls">
								  <select id="selectError3">
									<option>A.</option>
									<option>b.</option>
									<option>c.</option>
									
								  </select>
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="selectError2">Select City:</label>
								<div class="controls">
									<select data-placeholder="Select City" id="selectError2" data-rel="chosen">
										<option value=""></option>
										<optgroup label="State">
										  <option>City Name</option>
										  <option>City Name</option>
										  <option>City Name</option>
										  <option>City Name</option>
										</optgroup>
										<optgroup label="State">
										  <option>City Name</option>
										  <option>City Name</option>
										  <option>City Name</option>
										  <option>City Name</option>
										</optgroup>
										<optgroup label="State">
										  <option>City Name</option>
										  <option>City Name</option>
										  <option>City Name</option>
										  <option>City Name</option>
										</optgroup>
										<optgroup label="State">
										  <option>City Name</option>
										  <option>City Name</option>
										  <option>City Name</option>
										  <option>City Name</option>
										</optgroup>
										<optgroup label="State">
										  <option>City Name</option>
										  <option>City Name</option>
										  <option>City Name</option>
										  <option>City Name</option>
										</optgroup>
										<optgroup label="State">
										  <option>City Name</option>
										  <option>City Name</option>
										  <option>City Name</option>
										  <option>City Name</option>
										</optgroup>
										<optgroup label="State">
										  <option>City Name</option>
										  <option>City Name</option>
										  <option>City Name</option>
										  <option>City Name</option>
										</optgroup>
										<optgroup label="State">
										  <option>City Name</option>
										  <option>City Name</option>
										  <option>City Name</option>
										  <option>City Name</option>
										</optgroup>
								  </select>
								</div>
							  </div>
                                <div class="control-group">
								<label class="control-label" for="focusedInput">Pin Code:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="focusedInput">Landmark:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
                              
							  <div class="control-group">
							  <label class="control-label" for="textarea2">Address:</label>
							  <div class="controls">
								<textarea  id="textarea1" rows="3"></textarea>
							  </div>
							</div>
                             <div class="control-group">
								<label class="control-label" for="focusedInput">Phone Code:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div><div class="control-group">
								<label class="control-label" for="focusedInput">Phone no:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div><div class="control-group">
								<label class="control-label" for="focusedInput">Mobile Code:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div><div class="control-group">
								<label class="control-label" for="focusedInput">Mobile No:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="focusedInput">Email:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Educational Qualification:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Add More Qualification:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="focusedInput">Achivements:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
							  
							<div class="control-group">
								<label class="control-label" for="selectError3">Role:</label>
								<div class="controls">
								  <select id="selectError3">
									<option>A.</option>
									<option>b.</option>
									<option>c.</option>
									
								  </select>
								</div>
							  </div>
							  
							
							<div class="control-group">
							  <label class="control-label" for="fileInput">Image Upload</label>
							  <div class="controls">
								<div class="uploader" id="uniform-fileInput"><input class="input-file uniform_on" id="fileInput" type="file" size="19" style="opacity: 0;"><span class="filename">No file selected</span><span class="action">Choose File</span></div>
							  </div>
							</div>  
							<div class="control-group">
								<label class="control-label" for="focusedInput">Salary:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>      
		
						<legend>Choose Username and Password</legend>
						
						<div class="control-group">
								<label class="control-label" for="focusedInput">Choose a Username:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Choose a Password:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="Password" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Confirn Password:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="Password" value="">
								</div>
							  </div>
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
							<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong>Well done!</strong> You successfully added School's Principal in our database.
						</div>
						  </fieldset>
						</form>
								
							</div>
							<div class="tab-pane" id="tec">
							<form class="form-horizontal" action="#">
						  <fieldset>
							<legend>Please fill the form for Teacher detail</legend>
							<div class="control-group">
								<label class="control-label" for="focusedInput">Name:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Contact No:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Email Id:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Subject:</label>
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
							<div class="control-group">
							  <label class="control-label" for="fileInput">Image Upload</label>
							  <div class="controls">
								<div class="uploader" id="uniform-fileInput"><input class="input-file uniform_on" id="fileInput" type="file" size="19" style="opacity: 0;"><span class="filename">No file selected</span><span class="action">Choose File</span></div>
							  </div>
							</div>        
							<div class="control-group">
								<label class="control-label" for="focusedInput">Salary:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
		
						<legend>Choose Username and Password</legend>
						
						<div class="control-group">
								<label class="control-label" for="focusedInput">Choose a Username:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Choose a Password:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="Password" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Confirn Password:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="Password" value="">
								</div>
							  </div>
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
							<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong>Well done!</strong> You successfully added School's Teacher in our database.
						</div>
						  </fieldset>
						</form>	
							</div>
							
							<div class="tab-pane" id="Stu">
								<form name="AddStudent" class="form-horizontal" action="../configs/addschoolrecord-agent.php" method="post" onSubmit="return validAddStudent();">
									<fieldset>
										<legend>Please fill the form for Student detail</legend>
										<div class="control-group">
											<label class="control-label" for="selectError3">School:</label>
											<div class="controls">
                                              <input name="AddStudent" type="hidden" value="AddStudent">
											  <select name="School" id="selectError3">
												<option value="ChooseSchool">Choose School</option>
												<option value="School1">School1</option>
												<option value="School2">School2</option>
												<option value="School3">School3</option>
												<option value="School4">School4</option>
											  </select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="focusedInput">First Name:</label>
											<div class="controls">
											  <input name="FirstName" class="input-xlarge focused" id="focusedInput" type="text">
											</div>
										</div>							   
										<div class="control-group">
											<label class="control-label" for="focusedInput">Last Name:</label>
											<div class="controls">
											  <input name="LastName" class="input-xlarge focused" id="focusedInput" type="text">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="focusedInput">Contact No:</label>
											<div class="controls">
											  <input name="ContactNo" class="input-xlarge focused" id="focusedInput" type="text">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="focusedInput">Email Id:</label>
											<div class="controls">
											  <input name="EmailId" class="input-xlarge focused" id="focusedInput" type="text">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="focusedInput">Class:</label>
											<div class="controls">
											  <input name="Class" class="input-xlarge focused" id="focusedInput" type="text">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="focusedInput">Section:</label>
											<div class="controls">
											  <input name="Section" class="input-xlarge focused" id="focusedInput" type="text">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="focusedInput">Class Teacher Name</label>
											<div class="controls">
											  <input name="ClassTeacherName" class="input-xlarge focused" id="focusedInput" type="text">
											</div>
										</div>							
										<div class="control-group">
										  <label class="control-label" for="date01">Date of Birth:</label>
										  <div class="controls">
											<input name="DateofBirth" type="text" class="input-xlarge datepicker" id="date01" value="">
										  </div>
										</div>
										<div class="control-group">
											<label class="control-label">Sex:</label>
											<div class="controls">
											  <label class="radio">
												<input type="radio" name="Sex" id="optionsRadios1" value="male" checked="">
												Male
											  </label>
											  <div style="clear:both"></div>
											  <label class="radio">
												<input type="radio" name="Sex" id="optionsRadios2" value="female">
												Female
											  </label>
											</div>
										</div>
										<div class="control-group">
										  <label class="control-label" for="fileInput">Image Upload</label>
										  <div class="controls">
											<div class="uploader" id="uniform-fileInput"><input class="input-file uniform_on" id="fileInput" type="file" size="19" style="opacity: 0;"><span class="filename">No file selected</span><span class="action">Choose File</span></div>
										  </div>
										</div>        
										<div class="control-group">
											<label class="control-label" for="selectError3">Blood Group:</label>
											<div class="controls">
											  <select name="BloodGroup" id="selectError3">
											  <option value="BloodGroup">Choose Blood Group</option>
												<option value="A+">A+</option>
												<option value="B+">B+</option>
												<option value="AB+">AB+</option>
												<option value="O+">O+</option>
												<option value="A-">A-</option>
												<option value="B-">B-</option>
												<option value="AB-">AB-</option>
												<option value="O-">O-</option>
											  </select>
											</div>
										</div>
										<legend>Family Details</legend>
										<div class="control-group">
											<label class="control-label" for="focusedInput">Father Name:</label>
											<div class="controls">
											  <input name="FatherName" class="input-xlarge focused" id="focusedInput" type="text">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="focusedInput">Father Email ID:</label>
											<div class="controls">
											  <input name="FaterEmailID" class="input-xlarge focused" id="focusedInput" type="Text">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="focusedInput">Father Contact No:</label>
											<div class="controls">
											  <input name="FatherContactNo" class="input-xlarge focused" id="focusedInput" type="Text">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="focusedInput">Mother Name:</label>
											<div class="controls">
											  <input name="MotherName" class="input-xlarge focused" id="focusedInput" type="text">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="focusedInput">Mother Email ID:</label>
											<div class="controls">
											  <input name="MotherEmailID" class="input-xlarge focused" id="focusedInput" type="Text">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="focusedInput">Mother Contact No:</label>
											<div class="controls">
											  <input name="MotherContactNo" class="input-xlarge focused" id="focusedInput" type="Text">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="appendedInputButton">Sibling</label>
											<div class="controls">
											  <div class="input-append">
												<input name="Sibling" id="appendedInputButton" size="16" type="text"><button class="btn" type="button">Add More!</button>
											  </div>
											  <span class="help-inline">If Studying in same School</span>
											</div>
										</div>
										<legend>Choose Username and Password</legend>
										<div class="control-group">
											<label class="control-label" for="focusedInput">Choose a Username:</label>
											<div class="controls">
											  <input name="ChooseaUsername" class="input-xlarge focused" id="focusedInput" type="text">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="focusedInput">Choose a Password:</label>
											<div class="controls">
											  <input name="ChooseaPassword" class="input-xlarge focused" id="focusedInput" type="Password">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="focusedInput">Confirm Password:</label>
											<div class="controls">
												<input name="ConfirmPassword" class="input-xlarge focused" id="focusedInput" type="Password">
											</div>
										</div>
							
										<div class="form-actions">
										  <button type="submit" class="btn btn-primary">Save</button>
										  <button type="reset" class="btn">Cancel</button>
										</div>
										<div class="alert alert-success">
											<button type="button" class="close" data-dismiss="alert">×</button>
											<strong>Well done!</strong> You successfully added School's Teacher in our database.
										</div>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
					
					
				</div><!--/span-->

			</div><!--/row-->


		
    
					
			</div><!--/#content.span10-->
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
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-primary">Save changes</a>
			</div>
		</div>

		<footer>
    <p class="pull-left">&copy; <a href="#" target="_blank">Info4Child</a> 2014</p>
    <p class="pull-right">Powered by: <a href="#">Info4Child</a></p>
  </footer>
		
	</div><!--/.fluid-container-->

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
