<!DOCTYPE html>
<html lang="en">
	<head>
		
		<title>Basketball Club</title>
		
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
			
		<a href="../Clubs/clubHome.php">Clubs</a> / Basketball Club </h3>
		
		<h1> Welcome to Basketball Club</h1>
		
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
		
		<img src="project images/basketball photo1.JPG"width="25%"height="350";>
		<img src="project images/bball photo2.JPG"width="25%"height="350";>
		<img src="project images/bball photo3.JPG"width="25%"height="350";>
		<img src="project images/bball photo4.JPG"width="24%"height="350;">
		<br><br><br><br>
		<div style="margin-left: 50px;">
		<p>
		<span style="color: dodgerblue; font-size: 25px; font-weight: bold; font-style:italic;"><i>BASKETBALL OBJECTIVES</i></span><br/>

    The main objective of basketball is to make a goal and score points. A goal is made by shooting the ball through the basket or hoop. The goal post or basket for a team is 
    in the opponent’s court. Each team should not only try to make a goal and prevent the opposite team from taking control of the ball, but should also try to protect the basket
     in their court and prevent the opponent from making a goal.
    </p>
    
    <p>
    	
	<span style="color: dodgerblue; font-size: 25px; font-weight: bold; font-style:italic;"></i>OVERVIEW</i></span><br>
	
 	Basketball was invented by <i><b>Dr. James Naismith</b></i> in 1891 to engage players in an indoor sport during winters that keeps them fit. He designed a sport loosely based on his 
 	childhood game Duck on a Rock where players have to hit a stone, called a duck in the game. The duck was protected by other players and placed high on a rock.

	He also wanted the game to be safer and so the sport was played with soccer balls and peach baskets placed at about 10 feet high, involved less physical contact, drew 
	players attention on the ball and not on other players. He developed a set of thirteen rules and the first match was held on December 21st, 1891 among two teams of nine players 
	each at <i>Springfield College.</i>
       </p>
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
