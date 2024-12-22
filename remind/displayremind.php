<?php
session_start();
$user= $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
<head>
<title>Display events</title>
	
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
		<a href="../HomePage/myuit.php" class=" cool-link">MYUIT</a>
		<a href="../Directory/Dindex.php" class="cool-link">Directory</a>
		<a href="../Clubs/clubHome.php" class=" cool-link">Clubs</a>
		<a href="../Shuttle/ShuttleIndex.php" class="cool-link">Shuttle</a>
		<a href="../UiTEvents/event.php" class=" cool-link">Events</a>
		<div id="navbar-right">
	  	<button id="myBtn"><img src="images/reminder.png" alt="Notification" width="31"></button>
	  	<a href="../HomePage/To Do List.html"><img src="images/note.png"></a>
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
            <li><a href="remind.php">&#9881; Set Reminder</a></li>
            <li class="active"><a href="displayremind.php">&#9781; Show Reminder</a></li>
            
          </ul>
         
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<h3 style="margin-top: -90px;">Coming Events</h3>
			<table class="table table-bordered">
		<tr>
			<th>ID</th>
<!--			<th>Email</th>-->
			<th>Description</th>
			<th>Due Date</th>
			<th>Remaining Days</th>
		</tr>
		<?php
		$conn=mysqli_connect("localhost","root","","se");
		if($conn->connect_error)
		{
			die("Connection failed:". $conn-> connect_error);
		}
		$sql = "SELECT id,email,reminder,description from remind WHERE email='".$_SESSION['user']."'";
		$result=$conn-> query($sql);
		if($result->num_rows >0)
		{
			while($row = $result->fetch_assoc())
			{
				
			echo"<tr><td>". $row["id"]."</td><td>".$row["description"]."</td><td>".$row["reminder"]."</td><td>".time_remaining($row["reminder"])."</td></tr>";
//				echo"<tr><td>".$row["id"]."</td><td>" . $row["email"]."</td><td>".$row["description"]."</td><td>".$row["reminder"]."</td><td>".time_remaining($row["reminder"])."</td></tr>";
			}
		echo "</table>";
		}
		else{
		echo "0 result";
	}
	$conn->close();
		?>
	</table>

<?php  
 date_default_timezone_set('Asia/Yangon');  
 function time_remaining($timestamp)  
 {  
      $time_ago = strtotime($timestamp);  
      $current_time = time();  
      $time_difference = $time_ago-$current_time; 
	  $seconds = $time_difference;  
	  $days          = round($seconds / 86400); 
	  return $days;
 }  
 ?>  
		  </div>
		
		  </body>
		</html>