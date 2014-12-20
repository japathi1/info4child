<?php
session_start();

$uid = $_SESSION['uid'];
$FirstName = $_SESSION['FirstName'];
$DesignationHardCode = $_SESSION['DesignationHardCode'];

if($_SESSION['uid' ]== "" || ($DesignationHardCode != "admin")){
	header('Location: ../login/login.php');
	exit();	
}

include '../configs/connection.php';

//fetch data from school table begins
$schoolsql="SELECT SchoolName FROM school ORDER BY SchoolName";

if ($schoolresult=mysqli_query($conn,$schoolsql)){
	// Return the number of rows
	$schoolrowcount=mysqli_num_rows($schoolresult);
	}else{
		echo "error while fetching school";
	}
//fetch data from school table ends

//fetch data from student table begins
$studentsql="SELECT FirstName FROM student ORDER BY FirstName";

if ($studentresult=mysqli_query($conn,$studentsql)){
	// Return the number of rows
	$studentrowcount=mysqli_num_rows($studentresult);
	}else{
		echo "error while fetching school";
	}
//fetch data from student table ends


	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>:: Info4Child ::</title>
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
      <div class="btn-group pull-right" > <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <i class="icon-user"></i><span class="hidden-phone">Welcome <?php echo $FirstName; ?>!</span> <span class="caret"></span> </a>
        <ul class="dropdown-menu">
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
          <li> <a href="#">Home</a> <span class="divider">/</span> </li>
          <li> <a href="Index.php">Dashboard</a> </li>
        </ul>
      </div>
      <div class="sortable row-fluid"> <a data-rel="tooltip" title="6 School added this month." class="well span3 top-block" href="#"> <span class="icon32 icon-red icon-star-on"></span>
        <div>Total School</div>
        <div><?php echo $schoolrowcount; ?></div>
        <span class="notification">6</span> </a> <a data-rel="tooltip" title="4 student added this month." class="well span3 top-block" href="#"> <span class="icon32 icon-color icon-user"></span>
        <div>Total Students</div>
        <div><?php echo $studentrowcount; ?></div>
        <span class="notification green">4</span> </a> <a data-rel="tooltip" title="Rs 34 new payment generated." class="well span3 top-block" href="#"> <span class="icon32 icon-color icon-cart"></span>
        <div> Payment Generated</div>
        <div>RS 13320</div>
        <span class="notification yellow">RS 34</span> </a> <a data-rel="tooltip" title="12 Unread messages." class="well span3 top-block" href="#"> <span class="icon32 icon-color icon-envelope-closed"></span>
        <div>Messages</div>
        <div>25</div>
        <span class="notification red">12</span> </a> </div>
      <div class="row-fluid">
        <div class="box span12">
          <div class="box-header well">
            <h2><i class="icon-info-sign"></i> Welcome in Expert Communicate Admin Panel</h2>
            <div class="box-icon"> <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a> <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> </div>
          </div>
          <div class="box-content">
            <h1>Expert Communicate <small> medium to connectivity for school and parents.</small></h1>
            <p><b>You can add new school by here</b></p>
            <p class="center"> <a href="add-school.php" class="btn btn-large btn-primary" data-rel="popover" data-content="Just One Click and fill the form" title="Add New School"><i class="icon-plus icon-white"></i> Add New School</a> </p>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <div class="row-fluid sortable">
        <div class="box span4">
          <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> Recently added School</h2>
            <div class="box-icon"> <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a> <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> </div>
          </div>
          <div class="box-content">
            <div class="box-content">
              <ul class="dashboard-list">
                <li> <a href="#"> <img class="dashboard-avatar" alt="Img not avaliable" src=""></a> <strong>Name:</strong> <a href="#">Sanskar Valley </a><br>
                  <strong>Since:</strong> 17/05/2014<br>
                  <strong>Status:</strong> <span class="label label-success">Active</span> </li>
                <li> <a href="#"> <img class="dashboard-avatar" alt="Img not avaliable" src=""></a> <strong>Name:</strong> <a href="#">D.P.S. Public School </a><br>
                  <strong>Since:</strong> 17/05/2014<br>
                  <strong>Status:</strong> <span class="label label-warning">Pending</span> </li>
                <li> <a href="#"> <img class="dashboard-avatar" alt="Img not avaliable" src=""></a> <strong>Name:</strong> <a href="#">Vidya Niketan </a><br>
                  <strong>Since:</strong> 25/05/2014<br>
                  <strong>Status:</strong> <span class="label label-important">Suspended</span> </li>
                <li> <a href="#"> <img class="dashboard-avatar" alt="Img not avaliable" src=""></a> <strong>Name:</strong> <a href="#">D.A.V. Public School </a><br>
                  <strong>Since:</strong> 17/05/2014<br>
                  <strong>Status:</strong> <span class="label label-info">Processing</span> </li>
              </ul>
            </div>
            <p class="center">
              <button class="btn btn-small btn-warning">View All</button>
            </p>
          </div>
        </div>
        <!--/span-->
        <div class="box span4">
          <div class="box-header well" data-original-title>
            <h2><i class="icon-list"></i> Weekly Stat</h2>
            <div class="box-icon"> <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a> <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> </div>
          </div>
          <div class="box-content">
            <ul class="dashboard-list">
              <li> <a href="#"> <i class="icon-arrow-up"></i> <span class="green">92</span> New Comments </a> </li>
              <li> <a href="#"> <i class="icon-arrow-down"></i> <span class="red">15</span> New Registrations </a> </li>
              <li> <a href="#"> <i class="icon-minus"></i> <span class="blue">36</span> New Articles </a> </li>
              <li> <a href="#"> <i class="icon-comment"></i> <span class="yellow">45</span> User reviews </a> </li>
              <li> <a href="#"> <i class="icon-arrow-up"></i> <span class="green">112</span> New Comments </a> </li>
              <li> <a href="#"> <i class="icon-arrow-down"></i> <span class="red">31</span> New Registrations </a> </li>
              <li> <a href="#"> <i class="icon-minus"></i> <span class="blue">93</span> New Articles </a> </li>
              <li> <a href="#"> <i class="icon-comment"></i> <span class="yellow">254</span> User reviews </a> </li>
            </ul>
          </div>
        </div>
        <!--/span-->
        <div class="box span4">
          <div class="box-header well" data-original-title>
            <h2><i class="icon-list-alt"></i> Realtime Traffic</h2>
            <div class="box-icon"> <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a> <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> </div>
          </div>
          <div class="box-content">
            <div id="realtimechart" style="height:190px;"></div>
            <p class="clearfix">You can update a chart periodically to get a real-time effect by using a timer to insert the new data in the plot and redraw it.</p>
            <p>Time between updates:
              <input id="updateInterval" type="text" value="" style="text-align: right; width:5em">
              milliseconds</p>
          </div>
        </div>
        <!--/span-->
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
    <p class="pull-left">&copy; <a href="#" target="_blank">Info4Child</a> 2014</p>
    <p class="pull-right">Powered by: <a href="#">Info4Child</a></p>
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