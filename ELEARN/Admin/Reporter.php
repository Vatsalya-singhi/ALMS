<?php
session_start();

require_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-LEARN | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="../dist/js/jquery-1.3.2.min.js" type="text/javascript"></script>


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
  <script>
	
	
			
	
	function student(){
    	document.getElementbyId("facultified").innerHTML='<div class="col-sm-1"><select class="form-control" id="select" name="selectfaculty"><option>Kirthiga Devi</option></select></div>';
    }
	
	</script>

</head>
<body class="hold-transition skin-blue sidebar-mini" style="background-color:white;">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="../dist/img/srm_logo.png" style="width:90%" class="img-circle" alt="SRM Logo"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>E</b>LEARN</span>
			
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">

	<!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">

	   <ul class="nav navbar-nav">

          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  
               
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              
             <span class="hidden-xs">Welcome <?php echo $_SESSION['username']; ?></span>
			  </a>
              </li>
              <!-- Menu Footer-->
			              <ul class="dropdown-menu">
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
           <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
  
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span> Dashboard</span>
            </a>
        </li>
        <li class="treeview">
          <a href="AddUser.php">
            <i class="fa fa-user-plus"></i>
            <span> User Creation</span>
            
            
          </a>
        
        </li>
        <li>
          <a href="AddCourse.php">
            <i class="fa fa-upload"></i> <span> Course Creation</span>
         
          </a>
		   
        </li>
           <li class="treeview">
          <a href="#">  
            <i class="fa fa-tasks"></i>
          <span> My Courses</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="Courses.php"><i class="fa fa-tasks"></i> Courses</a></li>
            <li><a href="courseupload.php"><i class="fa fa-upload"></i> Content Upload</a></li>
       
           </ul>
        </li>
        <li class="active treeview">
          <a href="Report.php">
            <i class="fa fa-laptop"></i>
            <span> Report</span>
            
          </a>
         </li>
        <li class="treeview">
          <a href="Notification.php">
            <i class="fa fa-exclamation-circle"></i> 
			<span> Notification</span>
          </a> 
        </li>
       <li class="treeview">
          <a href="ChangePwd.php">
            <i class="fa fa-edit"></i>
            <span> Change Password</span>          
          </a>
         </li>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color:white;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
	<h1 class="jumbotron" style="    background-color: #ffffff;">Advanced Search</h1>
      <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Report</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	<div class="well well-lg">
	<form class="form-inline">
	<div class="form-group">
		<div class="col-sm-2">
			<select class="form-control" id="select" name="selectdept">
				<option>Select Department</option>
				<option>IT</option>
				<option>CSE</option>
				<option>SWE</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-2">
			<select class="form-control" id="select" name="course">
				<option>Select Course</option>
				<option>C</option>
				<option>CPP</option>
				<option>DSA</option>
			</select>
		</div>
	</div>
	
		<div class="form-group">
		<div class="col-sm-2">
			
			 <button class="btn btn-default dropdown-toggle" id="activity" name="role" type="button" data-toggle="dropdown">Select Role
			<span class="caret"></span></button>
			<ul class="dropdown-menu">
				
				<li><a tabindex="-1">Department Admin</a><li>
				<li><a tabindex="-1">Course Coordinator</a><li>
				<li><a tabindex="-1">Course Sub-coordinator</a><li>
				<li><a tabindex="-1">Faculty</a><li>
				<li><a tabindex="-1" id="selects" onclick="myfaculty()" >Students</a><li>
				
			</ul>
		</div>
	</div>
	<div id="facultified" class="form-group">
		
	</div>
	<div class="form-group">
		<div class="col-sm-2">
			
			 <button class="btn btn-default dropdown-toggle" id="activity" name="option" type="button" data-toggle="dropdown">Option
			<span class="caret"></span></button>
			<ul class="dropdown-menu">
				<li><a tabindex="-1">All</a><li>
				<li><a tabindex="-1" id="select" onclick="mysearch()" >Contain</a></li>
			</ul>
		</div>
	</div>
	<script text="javscript">
			function mysearch() {
				document.getElementById("search").innerHTML = '<input type="search" name="search" class="form-control col-sm-1" placeholder="Search" />';
			}
			function myfaculty() {
				document.getElementById("facultified").innerHTML = '<select class="form-control col-sm-1" name="faculty" ><option>Choose Faculty</option></select>';
			}
			</script>
				
	<div id="search" class="form-group">
		
	</div>
	
	
	<div class="form-group">
		<div class="col-sm-1">
			<input type="submit" class="btn btn-info" name="submit"/> 
		</div>
	</div>
	
	</form>
	</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

  <!--ADD THAT CONTROL SIDEBAR STUFF OVER HERE-->
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>


<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>

</body>
</html>
