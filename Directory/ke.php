<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Knowledge Engineering</title>
		
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
		<h2 style="margin-top: 100px;"><a href="../Directory/Dindex.php">Directory</a>/<a href="../Directory/major.php">Major</a>/Knowledge Engineering</h2>
		
		<p>
			Knowledge engineering is a field of artificial intelligence (AI) that tries to emulate the judgment and behavior of a human expert in 
			a given field.<br><br>


			Knowledge engineering is the technology behind the creation of expert systems to assist with issues related to their programmed field of 
			knowledge. Expert systems involve a large and expandable knowledge base integrated with a rules engine that specifies how to apply information
			in the knowledge base to each particular situation. The systems may also incorporate machine learning so that they can learn from experience
			in the same way that humans do. Expert systems are used in various fields including healthcare, customer service, financial services,
			manufacturing and the law.<br><br>

			Using algorithms to emulate the thought patterns of a subject matter expert, knowledge engineering tries to take on questions and issues 
			as a human expert would. Looking at the structure of a task or decision, knowledge engineering studies how the conclusion is reached. <br><br>
			
			A library of problem-solving methods and a body of collateral knowledge are used to approach the issue or question. The amount of collateral 
			knowledge can be very large. Depending on the task and the knowledge that is drawn on, the virtual expert may assist with troubleshooting, 
			solving issues, assisting a human or acting as a virtual agent.<br><br>

			Scientists originally attempted knowledge engineering by trying to emulate real experts. Using the virtual expert was supposed to 
			get you the same answer as you would get from a human expert. This approach was called the transfer approach. However, the expertise that
		    a specialist required to answer questions or respond to issues posed to it needed too much collateral knowledge: information that is not 
			central to the given issue but still applied to make judgments.<br><br>

			A surprising amount of collateral knowledge is required to enable analogous reasoning and nonlinear thought. Currently, a modeling approach 
			is used where the same knowledge and process need not necessarily be used to reach the same conclusion for a given question or issue. 
			Eventually, it is expected that knowledge engineering will produce a specialist that surpasses the abilities of its human counterparts.
			</p>
			
			<h2>Career</h2>
			<ol type="1" style=" color: lightcoral; ">
				<li>Knowledge Engineer</li>
				<li>Knowledge Manager</li>
				<li>System Developement Engineer</li>
				<li>Business Intelligence Manager</li>
				<li>Software Development Manager</li>
				
				
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
