<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Embedded Systems</title>
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
			
			h2{ color: indianred; }
			
			#main {
			 
			  padding: 16px;
			}
			
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
			<h2 style="margin-top: 100px;"><a href="../Directory/Dindex.php">Directory</a>/
				<a href="../Directory/major.php">Major</a>/Embedded Systems</h2>
	
		
		<p>
			An embedded system is a controller with a dedicated function within a larger mechanical or electrical system, often with real-time computing 
			constraints.<br><br>
			
		    It is embedded as part of a complete device often including hardware and mechanical parts. Embedded systems control many devices in common use 
		    today.<br><br>
		   
		    Ninety-eight percent of all microprocessors manufactured are used in embedded systems.<br><br>

			Modern embedded systems are often based on microcontrollers (i.e. CPUs with integrated memory or peripheral interfaces), but ordinary 
			microprocessors (using external chips for memory and peripheral interface circuits) are also common, especially in more complex systems. <br><br>
			
			
			In either case, the processor(s) used may be types ranging from general purpose to those specialized in certain class of computations, or even
			custom designed for the application at hand. A common standard class of dedicated processors is the digital signal processor (DSP).<br><br>

			Since the embedded system is dedicated to specific tasks, design engineers can optimize it to reduce the size and cost of the product and 
			increase the reliability and performance. Some embedded systems are mass-produced, benefiting from economies of scale.<br><br>

			Embedded systems range from portable devices such as digital watches and MP3 players, to large stationary installations like traffic lights, 
			programmable logic controllers, and largely complex systems like hybrid vehicles, MRI, and avionics. Complexity varies from low, with a 
			single microcontroller chip, to very high with multiple units, peripherals and networks mounted inside a large chassis or enclosure.
		</p>
		
		<h2>Career</h2>
		
		<ol type="type=1" style=" color: lightcoral; ">
			<li>Board Support Package Engineer</li>
			<li>Device Driver developer</li>
			<li>ASIC designer</li>
			<li>PCB designer</li>
			<li>Hardware designer</li>
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
	