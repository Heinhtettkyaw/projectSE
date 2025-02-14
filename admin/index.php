<?php 
session_start();
include('connection.php');
$admin= $_SESSION['admin'];
if($admin=="")
{
header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Admin | SE</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/dashboard.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Welcome Admin !</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           
            <li><a href="logout.php">Logout</a></li>
          </ul>
          <!--<form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>-->
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="index.php">Dashboard <span class="sr-only">(current)</span></a>
			
			
			
			<li><a href="index.php?page=update_password"><span class="glyphicon glyphicon-user"></span> Update Password</a></li>
            <li><a href="index.php?page=manage_users"><span class="glyphicon glyphicon-user"></span> Manage Users</a></li>
			 <li><a href="index.php?page=notification"><span class="glyphicon glyphicon-envelope"></span> Mange  Notification</a></li>
            <li> <a href="index.php?page=display_shuttle_register">&#9781; Display Shuttle Register</a></li>
			  <li><a href="index.php?page=display_feedback">&#10002; Shuttle feedbacks</a></li>
          </ul>
         
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <!-- container-->
		  <?php 
		@$page=  $_GET['page'];
		  if($page!="")
		  {
		  	if($page=="manage_users")
			{
				include('manage_users.php');
			
			}
			
			if($page=="update_password")
			{
				include('update_password.php');
			
			}
			
			if($page=="notification")
			{
				include('display_notification.php');
			
			}
			
			if($page=="update_notice")
			{
				include('update_notice.php');
			
			}
			
			
			
			if($page=="add_notice")
			{
				include('add_notice.php');
			
			}
			   if($page== "display_feedback"){
				   include ('display_feedback.php');
			   }
			  
			  if($page=="display_shuttle_register")
			  {
				  include('display_shuttle_register.php');
				  
			  }
			
		  }
		  
		  else
		  {
		  ?>
		  <!-- container end-->
		  
		  
		
		  
		  <h1 class="page-header"> Welcome to SE Admins</h1>
		  
		
          <div class="row placeholders">
              <div class="col-xs-6 col-sm-3 placeholder">
				  <img src="../admin/images/th_4.jpg" width="150" height="150"  alt="Generic placeholder thumbnail">
				<h4>  <a href="index.php?page=manage_users">  Manage Users</a></h4>
				  <span class="text-muted">Admin</span>
			  </div>
			  
			  <div class="col-xs-6 col-sm-3 placeholder">
				  <img src="images/envelope.png" width="150" height="150"  alt="Generic placeholder thumbnail">
				<h4>  <a href="index.php?page=notification">  Manage Notification</a></h4>
				  <span class="text-muted">Admin</span>
			  </div>
			  
			  
				   <div class="col-xs-6 col-sm-3 placeholder">
              <img src="images/img_532951.png" width="150" height="150"  alt="Generic placeholder thumbnail">
					   <h4><a href="index.php?page=display_shuttle_register">Shuttle Register</a></h4>
              <span class="text-muted">Admin</span>
            </div>
			  
			  <div class="col-xs-6 col-sm-3 placeholder">
              <img src="../admin/images/th_5.jpg" width="150" height="150"  alt="Generic placeholder thumbnail">
					   <h4><a href="index.php?page=display_feedback">Shuttle Feedback</a></h4>
              <span class="text-muted">Admin</span>
            </div>
			  
          </div>
		  
		  <?php } ?>
		  

         
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
