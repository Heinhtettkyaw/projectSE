<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Business Information Systems</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="javaScript.js"></script>
	
	<style>
		
		header{text-align: right; padding: 30px; font-size: 20;background-color: #333; color: white;}
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


			.btn 
			{
				color: dodgerblue;
				
			}
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
		<h2 style="margin-top: 100px;"><a href="../Directory/Dindex.php">Directory</a>/<a href="../Directory/major.php">Major</a>/Business Information Systems</h2>
		
		<p>Information systems (IS) are formal, sociotechnical, organizational systems designed to collect, process, store, and distribute information.<br><br>
			
		   In a sociotechnical perspective, information systems are composed by four components: task, people, structure (or roles), and technology.<br><br>

		   A computer information system is a system composed of people and computers that processes or interprets information.
		   
		   The term is also sometimes used in more restricted senses to refer to only the software used to run a computerized database or to refer to only 
		   a computer system.<br><br>

		   Information Systems is an academic study of systems with a specific reference to information and the complementary networks of hardware and 
		   software that people and organizations use to collect, filter, process, create and also distribute data. An emphasis is placed on an information 
		   system having a definitive boundary, users, processors, storage, inputs, outputs and the aforementioned communication networks.<br><br>

		   Any specific information system aims to support operations, management and decision-making.<br><br>
		   
		   An information system is the information and communication technology (ICT) that an organization uses, and also the way in which people interact 
		   with this technology in support of business processes.<br><br>

		   Some authors make a clear distinction between information systems, computer systems, and business processes. Information systems typically 
		   include an ICT component but are not purely concerned with ICT, focusing instead on the end use of information technology. Information systems 
		   are also different from business processes. Information systems help to control the performance of business processes.<br><br>

		   Alter argues for advantages of viewing an information system as a special type of work system. A work system is a system in which humans or 
		   machines perform processes and activities using resources to produce specific products or services for customers. An information system is a 
		   work system whose activities are devoted to capturing, transmitting, storing, retrieving, manipulating and displaying information.<br><br>

		   As such, information systems inter-relate with data systems on the one hand and activity systems on the other. An information system is a form 
		   of communication system in which data represent and are processed as a form of social memory. An information system can also be considered 
		   a semi-formal language which supports human decision making and action.<br><br>

			Information systems are the primary focus of study for organizational informatics.
</p>

		<h2>Career</h2>
			<ol type="1" style=" color: lightcoral; ">
				<li>Systems Trainer</li>
				<li>Support Specialist</li>
				<li>eCommerce Developer</li>
				<li>Enterprise Systems Manager</li>
				<li>Information Resource Manager</li>
				
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
