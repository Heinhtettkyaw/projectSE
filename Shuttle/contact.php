<!DOCTYPE html>
<html>
<head>
	<title>Contact Page</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="../HomePage/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="javaScript.js"></script>
	
	<style>
		
		footer{color: black; text-align: center; padding: 20px;background-color: #333; color: white;}
		
		
		body
		{
		  font-family: Times; font-size: 18px;
		}
		
		* {
		  box-sizing: border-box;
		}
		
		/* Style inputs */
		input[type=text], select, textarea {
		  width: 100%;
		  padding: 12px;
		  border: 1px solid #ccc;
		  margin-top: 6px;
		  margin-bottom: 16px;
		  resize: vertical;
		}
		
		input[type=submit] {
		  background-color: #4CAF50;
		  color: white;
		  padding: 12px 20px;
		  border: none;
		  cursor: pointer;
		}
		
		input[type=submit]:hover {
		  background-color: #45a049;
		}
		
		/* Style the container/contact section */
		.con {
		  border-radius: 5px;
		  background-color: #f2f2f2;
		  padding: 10px;
		}
		
		/* Create two columns that float next to eachother */
		.column {
		  float: left;
		  width: 50%;
		  margin-top: 6px;
		  padding: 20px;
		}
		
		/* Clear floats after the columns */
		.row:after {
		  content: "";
		  display: table;
		  clear: both;
		}
		
		/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
		@media screen and (max-width: 600px) {
		  .column, input[type=submit] {
		    width: 100%;
		    margin-top: 0;
		  }
		}
		
		
		.previous a{ text-decoration: none; padding: 8px 16px; background-color:#888888; color: white; }
		.previous a.hover{ background-color: #ddd; color: black; }
		
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

	 	<a href="Shuttleroutes.php">Routes</a>
	    <a href="Shuttleregisteration.php">Registeration</a>
	    <a class="active" href="contact.php">Contact</a>
	 	
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
  			
		
	
		
			
		  <div style="text-align:center; margin-top: -50px;">
		  	
		    <h2>Contact Us</h2>
		    <p>Swing by for a cup of coffee, or leave us a message:</p>
		    
		  </div>
		  
		  <div class="row">
		    <div class="column">
		      <img src="contact-page.jpg" style="width:100%">
		    </div>
		    
		    <div class="column">
		    	
		      <form action="feedback-add.php" method="post">
		      	
		        <label for="fname">First Name</label>
		        
		        <input type="text" id="fname" name="first_name" placeholder="Your name.." required>
		        
		        <label for="lname">Last Name</label>
		        
		        <input type="text" id="lname" name="last_name" placeholder="Your last name.." required>
		        
		        
		        
		        <label for="subject">Feedback</label>
		        
		        <textarea id="subject" name="feedback" placeholder="Write something.." style="height:170px"></textarea>
		        
		        <input type="submit" value="Submit">
		      </form>
		    </div>
		  </div>
		</div>
		
		<div class="previous">
			<a href="Shuttleregisteration.php" class="previous">&laquo; Previous</a>
			</div>
		<br><br>
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
