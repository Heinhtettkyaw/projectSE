<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Major</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="javaScript.js"></script>
		<style>
		
			
			footer{color: black; text-align: center; padding: 20px;background-color: #333; color: white;}
			
			body{ font-family: Times; font-size: 18px;}
			
			#main {
			 
			  padding: 16px;
			}
			



			.btn {color: dodgerblue;}
			a
			{ 
				text-decoration: none;
				color: cadetblue;
				
			}
			
			a:hover
			{
				font-size: 22px;
				
				
			}
			
			i { color: indianred; }
			
			h1,h2,h3{ color: darkslategrey; }
			
		</style>
	</head>
	
	<body>
		
		<div id="navbar">
	  	<a href="../HomePage/HomePage.php" id="logo">Students' Essentials</a>
	  	<span>
	  	<a href="../HomePage/HomePage.php" class="cool-link">Home</a>
	  	</span>
		<a href="../HomePage/myuit.php" class=" cool-link">MYUIT</a>
		<a href="../Directory/Dindex.php" class="active cool-link">Directory</a>
		<a href="../Clubs/clubHome.php" class=" cool-link">Clubs</a>
		<a href="../Shuttle/ShuttleIndex.php" class="cool-link">Shuttle</a>
		<a href="../UiTEvents/event.php" class=" cool-link">Events</a>
		<div id="navbar-right">
	  	<button id="myBtn"><img src="images/reminder.png" alt="Notification" width="31"></button>
<!--	  	<a href="../HomePage/To Do List.html"><img src="images/note.png"></a>-->
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
		<h2 style="margin-top: 100px;"><a href="../Directory/Dindex.php">Directory</a>/Degree Programs</h2>
		
	
		
		
		
		
		<p><b>The University Of Information Technology</b> offers undergraduate and postgraduate courses for bachelor's,
			  diploma, master's, and doctoral level students in a wide range of subject areas; <i><b>software engineering, 
			  high performance computing, business information system, communication and networking, embedded systems
			  and computer systems technology.</i></b></p>
			  
		<h3>Undergraduate Program</h3>
		<h3>Computer Science</h3>
		
			<ul type="list-style-type: disc">
				
				<li><a href="se.php">Software Engineering (SE)</a></li>
				<li><a href="bis.php">Business Information Systems (BIS)</a></li>
				<li><a href="ke.php">Knowledge Engineering (KE)</a></li>
				<li><a href="hpc.php">High Performance Computing (HPC)</a></li>
			</ul>
			
		<h3>Computer Technology</h3>
		
			<ul type="list-style-type: disc">
				
				<li><a href="es.php">Embedded Systems (ES)</a></li>
				<li><a href="cn.php">Communication And Networking (CN)</a></li>
				<li><a href="cs.php">Computer Systems (CS)</a></li>
			</ul>
			
		<h2>Graduate Program</h2>
		
			<ul type="list-style-type: disc">
				
				<li>Doctor Degree Program</li>
				<li>Master Degree Program</li>
			</ul>
			
		<h2 >Post Graduate Program</h2>
		
			<ul type="list-style-type: disc">
				
				<li>Post Graduate Diploma in Web Engineering</li>
				<li>Post Graduate Diploma in Network Engineering</li>
			</ul>
		<br>
		
		
		<div id="main">
  
  			
	 		<button class="alpha btn" onclick="window.location.href='Dindex.php'">Home</button>
		</div>
			
		<hr>
		 <footer>
			<p>UNIVERSITY OF INFORMATION TECHNOLOGY</p>
			
			<address>University Of Information Technology, Parami Road, Hlaing Campus, Yangon, Myanmar</address>
			
			<p>Main Switchboard:</p>
			
		
			<a style="text-decoration: underline; color: white;" href="tel:959519664254">Tel: +95(9)519 664 254</a><br>
			
			<a style="text-decoration: underline; color: white;" href="tel:9519664709">Tel: +95(9)966 4709</a><br>
			
			<a style="text-decoration: underline; color: white;" href="fax:951664250">Fax: 951-664250</a><br>
			
			<a style="text-decoration: underline; color: white;" href="hr.admin@uit.edu.mm">hr.admin@uit.edu.mm</a><br>
			
	
	</footer>
	</body>