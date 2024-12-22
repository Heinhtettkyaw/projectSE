<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="javaScript.js"></script>
		
		<title>
			Section B Students
		</title>
		
		<style>
		
				body
				{ 
					font-family: Times; 
					font-size: 18px; 
				}
				
				footer{ color: black; text-align: center; padding: 20px;background-color: #333; color: white; }
				
				html {
				  box-sizing: border-box;
				}
				
				*, *:before, *:after {
				  box-sizing: inherit;
				}
				
				.column {
				  float: left;
				  width: 30%;
				  margin-bottom: 25px;
					margin-left: 33px;
				  padding: 0 8px;
				}

				
				@media screen and (max-width: 650px) {
				  .column {
				    width: 100%;
				    display: block;
				  }
				}
				
				.card {
				  box-shadow: 0 10px 10px 0 rgba(0, 0, 0, 0.5);
				}
				
				.container {
				  padding: 0 16px;
				}
				
				.container::after, .row::after {
				  content: "";
				  clear: both;
				  display: table;
				}
				
				.title {
				  color: whitesmoke;
				}
				
				.button {
				  border: none;
				  outline: 0;
				  display: inline-block;
				  padding: 8px;
				  color: white;
				  background-color: #000;
				  text-align: center;
				  cursor: pointer;
				  width: 100%;
				}
				
				.button:hover {
				  background-color: #555;
				}
				
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
			  
			}

			.alpha:hover {background: #eee;}


			.btn {color: dodgerblue;}
			  
			/*Directory Slash*/
			
			.directory a
			{
				color: dodgerblue;
				padding: 8px 8px 8px 32px;
			    text-decoration: none;
			    
			    display: block;
			    transition: 0.3s;
			    border: none;
			    background-color: inherit;
			    padding: 14px;
			    font-size: 16px;
			    cursor: pointer;
			    display: inline-block;
			    position: relative;
				
			}	
			
			.directory:hover {background: #eee; width: 5%;}
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
		
		<div style="margin-top: 50px;" id="main">
  <a href="Dindex.php" class="alpha btn" style="font-size: 20px;">Home </a>
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
			
<!--
			<div class="directory">
			
			<a href="Dindex.php">Home </a>
			
			
		</div>
-->
		
		<h1 style="font-size: 20px; margin-left: 30px;  ">Name starts With 'H'</h1>
		
		<div class="row">
  <div class="column">
    <div class="card">
      <img src="ProfilePicture/HeinHtetKyaw.png" alt="Hein Htet Kyaw" style="width:100%">
      <div class="container">
        <h2>Hein Htet Kyaw</h2>
        <p class="title">UIT 2nd year Section(B) student</p>
        
        <p>heinhtetkyaw@uit.edu.mm</p>
        <p>09-999999999</p>
         <p>No.(1), May Road, Hlaing Township, Yangon</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="ProfilePicture/Hein Htet Zin.jpg" alt="Hein Htet Zin" style="width:100%">
      <div class="container">
        <h2>Hein Htet Zin</h2>
        <p class="title">UIT 2nd year Section(B) student</p>
  
        <p>heinhtetzin@uit.edu.mm</p>
         <p>09-999999999</p>
         <p>No.(1), May Road, Hlaing Township, Yangon</p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="ProfilePicture/Hein Myo Set.jpg" alt="Hein Myo Set" style="width:100%">
      <div class="container">
        <h2>Hein Myo Set</h2>
        <p class="title">UIT 2nd year Section(B) student</p>
     
        <p>heinmyoset@uit.edu.mm</p>
         <p>09-999999999</p>
         <p>No.(1), May Road, Hlaing Township, Yangon</p>
      </div>
    </div>
  </div>
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
	
	
	</footer>
	</div>	

			</body>
</html>
