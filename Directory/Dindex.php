<!DOCTYPE html>
<html>
<head>
	<title>Directory</title>
	
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="javaScript.js"></script>
  

<style>
			
			footer{color: black; text-align: center; padding: 20px;background-color: #333; color: white;}
			body {
			  font-family: Times;
			  font-size: 18px;
			}
			
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
			
			
			.year a{ padding: 8px 8px 8px 32px;
			 		 text-decoration: none;
			 		 color: dodgerblue;
			 		 display: block;
			 		 transition: 0.3s;
			 		 background-color: #111;
			 		 font-size: 18px;
			 	}
			 
			 .year a:hover{  color: #f1f1f1;
			 				 background-color: grey;}	
			 
			 /*Parallax scrolling image*/			 
			 .parallax 
			 {
			  
			  background-image: url("featured-1.jpg");
			
			  /* Set a specific height */
			  min-height: 500px; 
			
			  /* Create the parallax scrolling effect */
			  background-attachment: fixed;
			  background-position: center;
			  background-repeat: no-repeat;
			  background-size: cover;
			  
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

			.alpha:hover {background: #eee;}


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
		<div id="mySidenav" class="sidenav">
		
  		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  		
  		<a href="Dindex.php"> Home</a>
  
  		<div>
  
                                    
  		<div class="dropdown">
  	
    <button style="font-size: 18px;" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"> Classroom Scheduling
    
    <span class="caret">
    	
    </span>
    
    </button>
    
    <ul class="dropdown-menu">
    	
    <div class="year">
    		
      <li><a href="firstyear.php">First Year</a></li>
      
      <li><a href="secondyear.php">Second Year</a></li>
      
      <li><a href="thirdyear.php">Third Year</a></li>
      
      <li><a href="fourthyear.php">Fourth Year</a></li>
      
     
      </div>
		
    </ul>
  </div>
			
</div>

 	<a href="major.php">Major</a>
 	
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

			<div style="margin-top: 50px;" id="main">
  
  			<span style="color:dodgerblue;" onclick="openNav()">&#9776; Menu</span>	
	 		
	 		<button class="alpha btn" onclick="window.location.href='a.php'">A</button>
	 		
			<button class="alpha btn" onclick="alert('No Results')">B</button>	
			
			<button class="alpha btn" onclick="alert('No Results')">C</button>
			
			<button class="alpha btn" onclick="alert('No Results')">D</button>
			
			<button class="alpha btn" onclick="window.location.href='e.php'">E</button>
			
			<button class="alpha btn" onclick="alert('No Results')">F</button>
			
			<button class="alpha btn" onclick="window.location.href='g.php'">G</button>

			<button class="alpha btn" onclick="window.location.href='h.php'">H</button>
			
			<button class="alpha btn" onclick="alert('No Results')">I</button>
			
			<button class="alpha btn" onclick="alert('No Results')">J</button>
			
			<button class="alpha btn" onclick="window.location.href='k.php'">K</button>
			
			<button class="alpha btn" onclick="alert('No Results')">L</button>

			<button class="alpha btn" onclick="window.location.href='m.php'">M</button>
			
			<button class="alpha btn" onclick="alert('No Results')">N</button>
			
			<button class="alpha btn" onclick="alert('No Results')">O</button>
			
			<button class="alpha btn" onclick="window.location.href='p.php'">P</button>
			
			<button class="alpha btn" onclick="alert('No Results')">Q</button>
			
			<button class="alpha btn" onclick="alert('No Results')">R</button>
		
			<button class="alpha btn" onclick="window.location.href='s.php'">S</button>
		
			<button class="alpha btn" onclick="window.location.href='t.php'">T</button>
			
			<button class="alpha btn" onclick="alert('No Results')">U</button>
			
			<button class="alpha btn" onclick="alert('No Results')">V</button>
			
			<button class="alpha btn" onclick="window.location.href='w.php'">W</button>
			
			<button class="alpha btn" onclick="alert('No Results')">X</button>
			
			<button class="alpha btn" onclick="window.location.href='y.php'">Y</button>
			
			<button class="alpha btn" onclick="window.location.href='z.php'">Z</button>
			
			</div>

	
	
	
	<div class="parallax">
   	
   </div>
   
   <div>
   <h2>Directory</h2><hr>
   
          	<p>Directory information is information contained in a student's education record that would not generally be considered
			harmful or an invasion of privacy if disclosed. You can easily know about someone from this university just by searching here.
			It is also user-friendly too so you don't need to worry about those kinds of stuffs.We created this page for all of the students
			to easily know about someone from this university.</p>
			
			<p>The following constitutes directory information: name, address, telephone number, e-mail address, name(s) and address(es) of parent(s),
				major field of study, enrollment status (full-time, part-time), participation in recognized activities and sports, weight and height of 
				 members of athletic teams, photographs, dates of attendance, degrees, honors and awards received, class-year in school, and previous 
				 educational institutions attended. If a student does not wish any of this information to be released, he or she must notify the registrar
				  in writing by the end of the first week of classes. Directory information is published in various forms during the year and the University
				   can withhold information only when written requests are received in accordance with this procedure.</p>
	 </div>
	 		
	 		
	 
	 <div>
	 	
	 <footer>
			<p>UNIVERSITY OF INFORMATION TECHNOLOGY</p>
			
			<address>University Of Information Technology, Parami Road, Hlaing Campus, Yangon, Myanmar</address>
			
			<p>Main Switchboard:</p>
			
		
			<a style="text-decoration: underline; color: white;" href="tel:959519664254">Tel: +95(9)519 664 254</a><br>
			
			<a style="text-decoration: underline; color: white;" href="tel:9519664709">Tel: +95(9)966 4709</a><br>
			
			<a style="text-decoration: underline; color: white;" href="fax:951664250">Fax: 951-664250</a><br>
			
			<a style="text-decoration: underline; color: white;" href="hr.admin@uit.edu.mm">hr.admin@uit.edu.mm</a><br>
	</div>	
	
	</footer>
</body>
</html> 
