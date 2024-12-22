<!DOCTYPE html>
<html lang="en">
	<head>
		
		<title>Literature Club</title>
		
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="javaScript.js"></script>
	
		<style>
		
		body
		{ 
			
			background-color:#fff;
			font-family: Times;
		}
		
		/*italic bold words*/
		i {font-weight: bold; }
		
		h1 {
			  font-size: 18px;
			  font-family: "Lato-Black";
			  text-transform: uppercase;
			  background: -webkit-linear-gradient(left, #1d3ede, #01e6f8);
			  background: -ms-linear-gradient(left, #1d3ede, #01e6f8);
			  background: -moz-linear-gradient(left, #1d3ede, #01e6f8);
			  background: -o-linear-gradient(left, #1d3ede, #01e6f8);
			  -webkit-background-clip: text;
			  -ms-background-clip: text;
			  -o-background-clip: text;
			  -webkit-text-fill-color: transparent;
			  -ms-text-fill-color: transparent;
			  -o-text-fill-color: transparent;	
			  text-align: center;
 			}
		p
		{
			
			font-size:18px;
			text-align:left;
		}
		
		
	</style>
	
		<h3 style="margin-top: 100px;">
			
		<a href="../Clubs/clubHome.php">Clubs</a> / Literature Club
		
		</h3>
		
		<h1> Welcome to Literature Club</h1>
		
	</head>

	<body> 
		
		<div id="navbar">
	  	<a href="../HomePage/HomePage.php" id="logo">Students' Essentials</a>
	  	<span>
	  	<a href="../HomePage/HomePage.php" class="cool-link">Home</a>
	  	</span>
		<a href="../HomePage/myuit.php" class=" cool-link">MYUIT</a>
		<a href="../Directory/Dindex.php" class="cool-link">Directory</a>
		<a href="../Clubs/clubHome.php" class="active cool-link">Clubs</a>
		<a href="../Shuttle/ShuttleIndex.php" class="cool-link">Shuttle</a>
		<a href="../UiTEvents/event.php" class=" cool-link">Events</a>
		<div id="navbar-right">
	  	<button id="myBtn"><img src="images/reminder.png" alt="Notification" width="31"></button>
<!--	  <a href="../HomePage/To Do List.html"><img src="images/note.png"></a>-->
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
		
		<img src="project images/literature photo1.JPG"width="25%"height="350";>
		<img src="project images/literature photo2.JPG"width="25%"height="350";>
		<img src="project images/LC2.jpg"width="25%"height="350";>
		<img src="project images/LC1.jpg"width="24%"height="350;">
		
		<br><br><br><br>
		<div style="margin-left: 50px;">
		<p>
		<span style="color: dodgerblue; font-size: 25px; font-weight: bold; font-style:italic;"><i>AIM OF LITERATURE CLUB	</i></span><br/>
		</p>
    
		<ol type="list-style-type: disc" style="font-size: 18px;">
			
		<li>The primary objective of the club is to foster literary activities such as poetry, writing and reading among the students of the school.</li>
		
		<li>Literature helps us understand the world better and improve our communication skills.</li>
		
		<li>Literature is refined communication.</li>
		
		<li>This communication is done through characters created by the writers or by the writers themselves. </li>
		
		<li>It provides us a treasure trove of insights into others’ feelings, thinking and emotions.</li>
		
		<li>Every year, the club plans and conducts several events and programmes such as book and poetry reading, arranging interaction with authors, story writing, poetry 
			competitions, etc. </li>
		
		</ol>  
		  
    <p>
       	 <span style="color: dodgerblue; font-size: 25px; font-weight: bold; font-style:italic;"><i>OUR OBJECTIVES</i></span><br>

	</p>
	
	<ol type="list-style-type: disc" style="font-size: 18px;">

    <li>Students will learn to analyze issues and come up with solutions</li>
    
    <li>Students will develop organization skills and persuasive skills.</li>
    
    <li>It builds beneficial skills that are much needed in various workplaces</li>
    
    <li>Being able to express yourself clearly is so important in group work. </li>
    
    <li>If you have ideas you want others to accept, you need to be able to persuade.</li>
    
    <li>Literary club aims to help better expression</li>
    
   	<li>Helps to prepare students to work in a global community by teaching them about social, political and moral issues</li>
    
    <li>Build confidence to be at ease not only professionally but also socially.</li>
    
    <li>To increase daily awareness and helps boost positive habits like reading and independent research</li>
    
     </ol>  
			<br><br>
	</div>
		<footer align="center">
		<br>
			<p style="font-size: 15px; text-align: center;" >UNIVERSITY OF INFORMATION TECHNOLOGY</p>
			
			<p style="font-size: 15px;  text-align: center;" align="center">University Of Information Technology, Parami Road, Hlaing Campus, Yangon, Myanmar</p>
			
			<p style="font-size: 15px;  text-align: center;" align="center">Main Switchboard:</p>
		<p style="font-size: 15px;  text-align: center;" align="center"><a  style=" text-decoration: underline; color: white; " href="tel:959519664254">Tel: +95(9)519 664 254</a></p>
		<p style="font-size: 15px;  text-align: center;" align="center"><a style="text-decoration: underline; color: white; " href="hr.admin@uit.edu.mm">hr.admin@uit.edu.mm</a></p>
			
	
	</footer>
	</body>
</html>
