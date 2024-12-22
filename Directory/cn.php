<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Communication And Networking</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="javaScript.js"></script>
		<style>
		
			
			footer{color: black; text-align: center; padding: 20px;background-color: #333; color: white;}
			body{ font-family: Times; font-size: 18px;}
			
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
		<h2 style="margin-top: 100px;"><a href="../Directory/Dindex.php">Directory</a>
			/<a href="../Directory/major.php">Major</a>/Communication And Networking</h2>
		
		<p>
			A computer network is a digital telecommunications network which allows nodes to share resources. In computer networks, computing devices exchange data with 
			each other using connections (data links) between nodes. These data links are established over cable media such as wires or optic cables, or wireless media such 
			as Wi-Fi.

			Network computer devices that originate, route and terminate the data are called network nodes.<br><br>
			
			Nodes are generally identified by network addresses, and can include hosts such as personal computers, phones, and servers, as well as networking hardware 
			such as routers and switches. Two such devices can be said to be networked together when one device is able to exchange information with the other device, 
			whether or not they have a direct connection to each other.<br><br>
			
			In most cases, application-specific communications protocols are layered (i.e. carried as payload) over 
			other more general communications protocols. <br><br>
			
			This formidable collection of information technology requires skilled network management to keep it all running reliably.<br><br>

			Computer networks support an enormous number of applications and services such as access to the World Wide Web, digital video, digital audio, shared use of 
			application and storage servers, printers, and fax machines, and use of email and instant messaging applications as well as many others. <br><br>
			
			Computer networks differ in the transmission medium used to carry their signals, communications protocols to organize network traffic, the network's size, 
			topology, traffic control mechanism and organizational intent. The best-known computer network is the Internet.
		</p>
		
		<h2>Career</h2>
			<ol type="1" style=" color: lightcoral; ">
				<li>Communications Intern</li>
				<li>Digital Communications And Media Coordinator</li>
				<li>Content Creator/Writer</li>
				<li>Enterprise Systems Manager</li>
				<li>Regional Communication Specialist</li>
				
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
</html>
