<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
	
 <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="javaScript.js"></script>
	<style>
	
	
	
	</style>

</head>
<body>
	<div id="navbar">
	  	<a href="../HomePage/HomePage.php" id="logo">Students' Essentials</a>
	  	<span>
	  	<a href="../HomePage/HomePage.php" class="cool-link">Home</a>
	  	</span>
		<a href="../HomePage/myuit.php" class="active cool-link">MYUIT</a>
		<a href="../Directory/Dindex.php" class="cool-link">Directory</a>
		<a href="../Clubs/clubHome.php" class=" cool-link">Clubs</a>
		<a href="../Shuttle/ShuttleIndex.php" class="cool-link">Shuttle</a>
		<a href="../UiTEvents/event.php" class=" cool-link">Events</a>
		<div id="navbar-right">
	  	<button id="myBtn"><img src="images/reminder.png" alt="Notification" width="31"></button>
<!--	  	<a href="../HomePage/To Do List.php"><img src="images/note.png"></a>-->
		<a href="../remind/remind.php">	<img src="images/noti.png"></a>
		

		</div>
		</div>
<!--	Notification_modal_box-->
	<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Notifications</h2>
		<?php
$db_host= 'localhost';
$db_user='root';
$db_pass='';
$db_name='se';
$conn= mysqli_connect($db_host,$db_user,$db_pass,$db_name);
if(!$conn){
	die('Fail to connect to MySQL :'. mysqli_connect_error());
}
$sql='SELECT notice_id,subject,Description,Date FROM notice ';
$query= mysqli_query($conn,$sql);
if (!$query)
{	
	die('SQL error:' . mysqli_error($conn));
}
?>
    </div>
    <div class="modal-body">
      <table class="table table-bordered">
<thead>
<tr class="success">
<th>No: </th>
<th>SUBJECT</th>
<th>Description</th>
<th>Date</th>
</tr>
</thead>
</tbody>
<?php
while($row = mysqli_fetch_array($query)){
	
	echo '<tr>
	<td>'.$row['notice_id'].'</td>
	<td>'.$row['subject'].'</td>
	<td>'.$row['Description'].'</td>
	<td>'.$row['Date'].'</td>
	</tr>';
	}
	
echo ' </tbody>
</table>';
mysqli_free_result($query);
mysqli_close($conn);
	?>
    </div>
  </div>

</div>
	<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
	<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="../HomePage/myuit.php">Dashboard <span class="sr-only">(current)</span></a></li>
			
			
			
			<li><a href="update_password.php"><span class="glyphicon glyphicon-user"></span> Update Password</a></li>
            <li><a href="update_profile.php"><span class="glyphicon glyphicon-user"></span> Update Profile</a></li>
			 <li ><a href="noti.php"><span class="glyphicon glyphicon-envelope"></span> Notification</a></li>
			  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out">Logout</span></a></li>
            
          </ul>
         
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <!-- container-->
			<h2 style="color: dodgerblue; margin-top: -180px; margin-left: 20px;">Profile</h2>
			
			<?php 
session_start();
include('connection.php');
$user= $_SESSION['user'];	  
$sql=mysqli_query($conn,"select * from user where email='".$_SESSION['user']."'");
$res=mysqli_fetch_assoc($sql);
			
           
         ?>
			<?php /*?><h1> <?php echo $res['name'];?> 's Profile</h1>
			
			<h3>User Details</h3>
			<table >
			<tr> 
				<td>Email :</td>
				<td><?php echo $res['email'];?></td>
				</tr>
				
				<tr> 
				<td>Mobile :</td>
				<td><?php echo $res['mobile']; ?></td>
				</tr>
				
				<tr>
				<td>Gender :</td>
					<td><?php echo $res['gender'];?></td>
				</tr>
				<tr>
				<td>Date of Birth :</td>
					<td><?php echo $res['dob']; ?></td>
				
				</tr>
			</table><?php */?>
			<div class="row" style="">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="images/icon-person-512.png" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h3><?php echo $res['name'];?></h3>
                        
                           <h4> <i class="glyphicon glyphicon-envelope"></i> <?php echo $res['email'];?></h4>
						<h4>&#9794 <?php echo $res['gender'];?> </h4>
                            
                            <h4>&#128241 <?php echo $res['mobile']; ?>  </h4>
						<h4> <i class="glyphicon glyphicon-gift"></i><?php echo $res['dob']; ?></h4>
					</div>
				</div>
			</div>
			
			
        </div>
		


</body>
		</html>