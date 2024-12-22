<!DOCTYPE html>
<html lang="en">
	<head>
	<title>High Performance Computing</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="javaScript.js"></script>
	<style>
			
			footer{color: black; text-align: center; padding: 20px;background-color: #333; color: white;}
			body 
			{
			 font-family: Times;
			 font-size: 18px;
			}
			
			#main {
			 
			  padding: 16px;
			}
			
			h2{ color: indianred; }
			
			/* Alphabetical Button*/
			 .alpha {
			  border: none;
			  background-color: inherit;
			  padding: 14px;
			  font-size: 16px;
			  cursor: pointer;
			  display: inline-block;
			  position: relative;
			}

			.alpha:hover {background: #eee; font-size: 22px;}


			.btn {color: dodgerblue;}
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
	<h2 style="margin-top: 100px;"><a href="../Directory/Dindex.php">Directory</a>/<a href="../Directory/major.php">Major</a>/High Performance Computing</h2>
		
		<p>
			
		"High-Performance Computing," or HPC, is the application of "supercomputers" to computational problems that are either too large for standard 
		computers or would take too long. A desktop computer generally has a single processing chip, commonly called a CPU. A HPC system, on the other 
		hand, is essentially a network of nodes, each of which contains one or more processing chips, as well as its own memory.<br><br></p>

		<h2>Parallel Computing</h2>
		<p>Programs for HPC systems must be split up into many smaller "programs" called threads, corresponding to each core. To piece the larger program 
		   together, the cores must be able communicate with each other efficiently, and the system as a whole must be organized well.<br><br>

		   Programs on HPC systems create a vast amount of data, which can be very difficult for standard file systems and storage hardware to deal with.
		   Standard file systems, or those defined for personal use, might have an upper limit on file size, number of files, or total storage. HPC file 
		   systems must be able to grow to contain and quickly transfer large amounts of data. In addition to data in use, researchers often keep previous 
		   data for comparison or as a starting point for future projects. Older data is kept in archival storage systems. Kraken, for example, uses a 
		   magnetic tape storage system, which can store several petabytes (millions of gigabytes) of data.<br><br></p>
		   
		<h2>Career</h2>
			<ol type="1" style=" color: lightcoral; ">
				<li>High Performance Computing System Administrator</li>
				<li>HPC Engineer</li>
				<li>Research Engineer</li>
				<li>Security Developer</li>
				<li>Linux Engineer</li>
				
			</ol>
			
			<div id="main">
  
  			
	 		<button class="alpha btn" onclick="window.location.href='Dindex.php'">Home</button>
	 		
			<button class="alpha btn" onclick="window.location.href='major.php'">Major</button>	
			
			
			
			</div>
		
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
