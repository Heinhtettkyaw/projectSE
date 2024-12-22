<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../Clubs/style.css">
		<style>
		.head
		{
			color:#fff;text-align:center;font-family:Arial;font-weight: bold;font-size:100px;
		}
		body
		{
			 background: linear-gradient(to right, #00ffff 0%, #3366ff 100%);
		}
		a
		{
			text-decoration: none;
			color: #fff;
		}
		img
		{
			width: 200px;
			height: 200px;
			box-shadow: 20px;
			display: block;  
		}
		table
		{
			margin-left: 320px;
		}
		.MC 
		{
		  position: absolute;
		  top: 252px;
		  /*left: 231px;*/
		  height: 200px;
		  width: 200px;
		  opacity: 0;
		  transition: .5s ease;
		  background-color:grey;
		}
		.LC 
		{
		  position: absolute;
		  top: 252px;
		  /*left: 435px;*/
		  height: 200px;
		  width: 200px;
		  opacity: 0;
		  transition: .5s ease;
		  background-color:grey;
		}
		.BC 
		{
		  position: absolute;
		  top: 252px;
		  /*left: 639px;*/
		  height: 200px;
		  width: 200px;
		  opacity: 0;
		  transition: .5s ease;
		  background-color:grey;
		}
		.SC 
		{
		  position: absolute;
		  top: 252px;
		  /*left: 843px;*/
		  height: 200px;
		  width: 200px;
		  opacity: 0;
		  transition: .5s ease;
		  background-color:grey;
		}
		.HC 
		{
		  position: absolute;
		  top: 455px;
		  /*left: 231px;*/
		  height: 200px;
		  width: 200px;
		  opacity: 0;
		  transition: .5s ease;
		  background-color:grey;
		}
		.AC 
		{
		  position: absolute;
		  top: 455px;
		  /*left: 435px;*/
		  height: 200px;
		  width: 200px;
		  opacity: 0;
		  transition: .5s ease;
		  background-color:grey;
		}
		.TC 
		{
		  position: absolute;
		  top: 455px;
		  /*left: 639px;*/
		  height: 200px;
		  width: 200px;
		  opacity: 0;
		  transition: .5s ease;
		  background-color:grey;
		}
		.PC 
		{
		  position: absolute;
		  top: 455px;
		  /*left: 843px;*/
		  height: 200px;
		  width: 200px;
		  opacity: 0;
		  transition: .5s ease;
		  background-color:grey;
		}
		.text 
		{
		  color: white;
		  font-size: 20px;
		  position: absolute;
		  top: 50%;
		  left: 50%;
		  -webkit-transform: translate(-50%, -50%);
		  -ms-transform: translate(-50%, -50%);
		  transform: translate(-50%, -50%);
		  text-align: center;
		}
		td:hover .MC 
		{
  			opacity: 0.9;
		}
		td:hover .LC 
		{
  			opacity: 0.9;
		}
		td:hover .BC 
		{
  			opacity: 0.9;
		}
		td:hover .SC 
		{
  			opacity: 0.9;
		}
		td:hover .HC 
		{
  			opacity: 0.9;
		}
		td:hover .AC 
		{
  			opacity: 0.9;
		}
		td:hover .TC 
		{
  			opacity: 0.9;
		}
		td:hover .PC 
		{
  			opacity: 0.9;
		}
		</style>
		<h1 class="head" style="margin-top: 135px;" >Clubs in UIT</h1>
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
		
		<table>
			<tr>
				<td>					
					<img src="project images/music and dance.jpg" class="image">
					<div class="MC">
						<div class="text"><a href="musicClub.php">Music Club</a></div>
					</div>
				</td>
				<td>					
					<img src="project images/literature.jpg">					
					<div class="LC">
						<div class="text"><a href="literatureClub.php">Literature Club</a></div>
					</div>
				</td>
				<td>					
					<img src="project images/basketball.jpg">				
					<div class="BC">
						<div class="text"><a href="basketballClub.php">Basketball Club</a></div>
					</div>
				</td>
				<td>				
					<img src="project images/swimming club.jpg">					
					<div class="SC">
						<div class="text"><a href="swimmingClub.php">Swimming Club</a></div>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<img src="project images/hiking club.jpg">		
					<div class="HC">
						<div class="text"><a href="hikingClub.php">Hiking Club</a></div>
					</div>
				</td>
				<td>
					<img src="project images/artist club.jpg">			
					<div class="AC">
						<div class="text"><a href="artistClub.php">Artist Club</a></div>
					</div>
				</td>
				<td>					
					<img src="project images/table tennis.jpg">				
					<div class="TC">
						<div class="text"><a href="tableTennisClub.php">Table Tennis Club</a></div>
					</div>
				</td>
				<td>					
					<img src="project images/photography club.jpg">					
					<div class="PC">
						<div class="text"><a href="photographyClub.php">Photography Club</a></div>
					</div>
				</td>
			</tr>
		</table>
  </body>
</html>   