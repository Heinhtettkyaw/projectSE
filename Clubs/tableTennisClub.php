<!DOCTYPE html>
<html lang="en">
	<head>
		
		<title>Table Tennis Club</title>
		
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
			
		<a href="../Clubs/clubHome.php">Clubs</a> / Table Tennis CLub </h3>
		
		<h1> Welcome to Table Tennis Club</h1>
		
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
		
		<img src="project images/table tennis photo1.JPG"width="25%"height="350";>
		<img src="project images/table tennis photo2.JPG"width="25%"height="350";>
		<img src="project images/table tennis photo3.jfif"width="25%"height="350";>
		<img src="project images/table tennis photo4.jpg"width="24%"height="350;">
		
		<br><br><br><br>
		<div style="margin-left: 50px;">
		<p>
			
		<span style="color: dodgerblue; font-size: 25px; font-weight: bold;"><i>OBJECTIVES OF TABLE TENNIS</i></span><br/>
		
		
		The overall objective of the game of ping-pong is to win the match by winning enough points to win more than half of the number of maximum possible games to be 
		played between you and your opponent (in singles), or you, your partner and your two opponents (in doubles).

		A secondary objective (and some would say the main objective) is to have fun and get a bit of exercise at the same time!
		
   		</p>
   		
    <p>
    	
    	 <span style="color: dodgerblue; font-size: 25px; font-weight: bold;"><i>OVERVIEW OF A MATCH</i></span><br>
    	 
		<span style="color: firebrick; font-size: 18px; font-weight:bold; font-style:italic;">A point </span> is won by a player or team when the opponent or opponents 

		cannot hit the ball with a racket over the net and on to the other side of the table.<br>

		<span style="color: firebrick; font-size: 18px; font-weight:bold; font-style:italic;">A game</span> -is won by being the first player or team to win 

		11 points, and be at least 2 points ahead of your opponent or opponents. If both players or teams have won 10 points, then the first player or team to get a 2 point 

		lead wins the game.<br>

		<span style="color: firebrick; font-size: 18px; font-weight:bold; font-style:italic;">A match</span> -can be any odd number of games, but is commonly the best of 5 or 7 games.

 		In a 5 game match the first player or team to win 3 games is the winner, and in a 7 game match the first player or team to win 4 games is the winner.<br>

		<span style="color: firebrick; font-size: 18px; font-weight:bold; font-style:italic;">Conclusion</span>

		-Now that you know what the point(!) of ping-pong is, let's have a look at some of the reasons to play table tennis.
		
    </p><br><br>
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
