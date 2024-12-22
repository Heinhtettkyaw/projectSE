<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<title>Routes</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="../HomePage/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="javaScript.js"></script>
		  
		  
		<style>
			body{font-family:Times; font-size: 18px;}
			footer{text-align:right;padding:30px;border-color:black;font-size:20; background-color: #333; color: white;}
			table{border:3px solid black;border-collapse:collapse;width:60%;text-align:left;}
			
			
			
			
			.next a{ text-decoration: none; padding: 8px 16px; background-color:#888888; color: white; }
			.next a.hover{ background-color: #ddd; color: black; }
			
			.previous a{ text-decoration: none; padding: 8px 16px; background-color:#888888; color: white; }
			.previous a.hover{ background-color: #ddd; color: black; }
			
			.reg a{ text-decoration: none; padding: 8px 16px; background-color:#333; color: white; }
			.reg a.hover{ background-color: #ddd; color: black; }
			
			/*Side navigation bar menu*/
			.sidenav {
			  height: 100%;
			  width: 0;
			  position: fixed;
			  z-index: 1;
			  top: 0;
			  left: 0;
			  background-color: #111;
			  overflow-x: hidden;
			  transition: 0.5s;
			  padding-top: 60px;
			  
			}
			
			.sidenav a {
			  padding: 8px 8px 8px 32px;
			  text-decoration: none;
			  color: dodgerblue;
			  display: block;
			  transition: 0.3s;
			}
			
			.sidenav a:hover {
			 /* color: #f1f1f1;*/
			  background-color: grey;
			}
			
			.sidenav .closebtn {
			  position: absolute;
			  top: 0;
			  right: 25px;
			  font-size: 36px;
			  margin-left: 50px;
			}
			
			#main {
			 
			  padding: 16px;
			}
			
			@media screen and (max-height: 450px) {
			  .sidenav {padding-top: 15px;}
			  .sidenav a {font-size: 18px;}
			}
			
			span.hover{background-color:grey; box-sizing: border-box;}
			
		</style>
		
		<body>
			<div id="navbar">
	  	<a href="../HomePage/HomePage.php" id="logo">Students' Essentials</a>
	  	<span>
	  	<a href="../HomePage/HomePage.php" class="cool-link">Home</a>
	  	</span>
		<a href="../HomePage/myuit.php" class=" cool-link">MYUIT</a>
		<a href="../Directory/Dindex.php" class="cool-link">Directory</a>
		<a href="../Clubs/clubHome.php" class=" cool-link">Clubs</a>
		<a href="../Shuttle/ShuttleIndex.php" class="active cool-link">Shuttle</a>
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
			
			<div id="mySidenav" class="sidenav">
		
  		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  		
  		<a href="ShuttleIndex.php"> About</a>
  
  		<div>
  
        <div class="dropdown">
  	
   		<ul class="dropdown-menu"></ul>
        
  		</div>
        
		</div>

	 	<a class="active" href="Shuttleroutes.php">Routes</a>
	    <a href="Shuttleregisteration.php">Registeration</a>
	    <a href="contact.php">Contact</a>
	 	
		</div>

		<script>

		function openNav() 
		{
	 	 document.getElementById("mySidenav").style.width = "250px";
	  	document.getElementById("main").style.marginLeft = "250px";
		}
	
		function closeNav() 
		{
	  	document.getElementById("mySidenav").style.width = "0";
	  	document.getElementById("main").style.marginLeft= "0";
		}
	
		</script>

			<div style="margin-top: 80px;" id="main">
  
  			<span style="color:dodgerblue;" onclick="openNav()">&#9776; Menu</span>	
  			
			
			<table>
			
			<p><b>MORNING TIMETABLE</b></p>
			<tr>
				<th>Service</th>
				<th>Bus 1</th>
				<th>Bus 2</th>
				<th>Bus 3</th>
				<th>Bus 4</th>
			</tr>
			
			<tr>
				<td><a href="Shuttleregisteration.php">Insein</a></td>
				<td>07:00AM</td>
				<td>07:15AM</td>
				<td>08:00AM</td>
				<td>08:15AM</td>
			</tr>
			
			<tr>
				<td><a href="Shuttleregisteration.php">Tamwe</a></td>
				<td>06:00AM</td>
				<td>06:20AM</td>
				<td>07:00AM</td>
				<td>07:20AM</td>
			</tr>
			
			<tr>
				<td><a href="Shuttleregisteration.php">Thuwanna</a></td>
				<td>06:05AM</td>
				<td>06:30AM</td>
				<td>07:05AM</td>
				<td>07:30AM</td>
			</tr>
			
			<tr>
				<td><a href="Shuttleregisteration.php">Yankin</a></td>
				<td>06:10AM</td>
				<td>06:35AM</td>
				<td>07:10AM</td>
				<td>07:35AM</td>
			</tr>
			
			<tr>
				<td><a href="Shuttleregisteration.php">Thingangyun</a></td>
				<td>06:15AM</td>
				<td>06:40AM</td>
				<td>07:15AM</td>
				<td>07:40AM</td>
				
			</tr>
			
			<tr>
				<td><a href="Shuttleregisteration.php">Mayangone</a></td>
				<td>06:20AM</td>
				<td>06:45AM</td>
				<td>07:20AM</td>
				<td>07:45AM</td>
			</tr>
			
			</table>
			
			
			
			
			
			<table>
				<p><b>AFTERNOON TIMETABLE</b></p>
				
				<tr>
				<th>Service</th>
				<th>Bus 1</th>
				<th>Bus 2</th>
				<th>Bus 3</th>
				<th>Bus 4</th>
			</tr>
			
			<tr>
				<td><a href="Shuttleregisteration.php">Insein</a></td>
				<td>12:00PM</td>
				<td>12:15PM</td>
				<td>13:00PM</td>
				<td>13:15PM</td>
			</tr>
			
			<tr>
				<td><a href="Shuttleregisteration.php">Tamwe</a></td>
				<td>12:05PM</td>
				<td>12:20PM</td>
				<td>13:05PM</td>
				<td>13:20PM</td>
			</tr>
			
			<tr>
				<td><a href="Shuttleregisteration.php">Thuwanna</a></td>
				<td>12:10PM</td>
				<td>12:30PM</td>
				<td>13:10PM</td>
				<td>13:30PM</td>
			</tr>
			
			<tr>
				<td><a href="Shuttleregisteration.php">Yankin</a></td>
				<td>13:10PM</td>
				<td>13:35PM</td>
				<td>14:10PM</td>
				<td>14:35PM</td>
			</tr>
			
			<tr>
				<td><a href="Shuttleregisteration.php">Thingangyun</a></td>
				<td>13:15PM</td>
				<td>13:40PM</td>
				<td>13:15PM</td>
				<td>13:40PM</td>
				
			</tr>
			
			<tr>
				<td><a href="Shuttleregisteration.php">Mayangone</a></td>
				<td>13:20PM</td>
				<td>13:45PM</td>
				<td>14:20PM</td>
				<td>14:45PM</td>
			</tr>
			
			</table>
			
			
			
			
			<table>
			
			<p><b>EVENING TIMETABLE</b></p>
			<tr>
				<th>Service</th>
				<th>Bus 1</th>
				<th>Bus 2</th>
				<th>Bus 3</th>
				<th>Bus 4</th>
			</tr>
			
			<tr>
				<td><a href="Shuttleregisteration.php">Insein</a></td>
				<td>15:00PM</td>
				<td>15:15PM</td>
				<td>16:00PM</td>
				<td>16:15PM</td>
			</tr>
			
			<tr>
				<td><a href="Shuttleregisteration.php">Tamwe</a></td>
				<td>16:05PM</td>
				<td>16:20PM</td>
				<td>17:05PM</td>
				<td>17:20PM</td>
			</tr>
			
			<tr>
				<td><a href="Shuttleregisteration.php">Thuwanna</a></td>
				<td>16:10PM</td>
				<td>16:30PM</td>
				<td>17:10PM</td>
				<td>17:30PM</td>
			</tr>
			
			<tr>
				<td><a href="Shuttleregisteration.php">Yankin</a></td>
				<td>16:15PM</td>
				<td>16:35PM</td>
				<td>17:15PM</td>
				<td>17:35PM</td>
			</tr>
			
			<tr>
				<td><a href="Shuttleregisteration.php">Thingangyun</a></td>
				<td>16:20PM</td>
				<td>16:40PM</td>
				<td>17:20PM</td>
				<td>17:40PM</td>
				
			</tr>
			
			<tr>
				<td><a href="Shuttleregisteration.php">Mayangone</a></td>
				<td>16:25PM</td>
				<td>16:45PM</td>
				<td>17:25PM</td>
				<td>17:45PM</td>
			</tr>
			
			</table>
			<br><br>
			
		<div class="reg">
			<a href="Shuttleregisteration.php">Register Here</a>
		</div>
			
			<br><hr>
				<div class="next">
			<a href="Shuttleregisteration.php" class="next">Next &raquo;</a>
		</div><br>
			
		<div class="previous">	
			<a href="ShuttleIndex.php" class="previous">&laquo; Previous</a><br>
		</div>
		<br>
		
		
			
			
			<footer>
				
			<p>UNIVERSITY OF INFORMATION TECHNOLOGY</p>
			
			<address>University Of Information Technology, Parami Road, Hlaing Campus, Yangon, Myanmar</address>
			
			<p>Main Switchboard:</p>
			
			<a style="text-decoration: underline; color: white;"href="tel:959519664254">Tel: +95(9)519 664 254</a><br>
			
			<a style="text-decoration: underline; color: white;" href="tel:9519664709">Tel: +95(9)966 4709</a><br>
			
			<a style="text-decoration: underline; color: white;" href="fax:951664250">Fax: 951-664250</a><br>
			
			<a style="text-decoration: underline; color: white;" href="hr.admin@uit.edu.mm">hr.admin@uit.edu.mm</a><br>
			
			
	</footer>
		</body>
	</head>
</html>
