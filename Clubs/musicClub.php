<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Music Club</title>
		
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
		
		* {box-sizing: border-box;}

			.mySlides {display: none;}
			img {vertical-align: middle;}
			
			/* Slideshow */
			.slideshow-container {
			  max-width: 1000px;
			  position: relative;
			  margin: auto;
			}
			
			
			.text {
			  color: #f2f2f2;
			  font-size: 15px;
			  padding: 8px 12px;
			  position: absolute;
			  bottom: 8px;
			  width: 100%;
			  text-align: center;
			}
			
			/* Number text (1/3 etc) */
			.numbertext {
			  color: #f2f2f2;
			  font-size: 12px;
			  padding: 8px 12px;
			  position: absolute;
			  top: 0;
			}
			
			/* The dots/bullets/indicators */
			.dot {
			  height: 15px;
			  width: 15px;
			  margin: 0 2px;
			  background-color: #bbb;
			  border-radius: 50%;
			  display: inline-block;
			  transition: background-color 0.6s ease;
			}
			
			.active {
			  background-color: #717171;
			}
			
			/* Fading animation */
			.anim {
			  -webkit-animation-name: fade;
			  -webkit-animation-duration: 1.5s;
			  animation-name: fade;
			  animation-duration: 1.5s;
			}
			
			@-webkit-keyframes anim {
			  from {opacity: .4} 
			  to {opacity: 1}
			}
			
			@keyframes anim {
			  from {opacity: .4} 
			  to {opacity: 1}
			}
			
			/* On smaller screens, decrease text size */
			@media only screen and (max-width: 300px) {
			  .text {font-size: 18px}
			}

		
	</style>
	
		<h3 style="margin-top: 100px;">
			
		<a href="../Clubs/clubHome.php">Clubs</a> / Music Club</h3>
		
		<h1> Welcome to Music and Dance Club</h1>
		
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
	
echo ' </tbody> </table>';
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

		
<!--
			<div class="slideshow-container">
			
			<div class="mySlides anim">
			
			  <div class="numbertext">1 / 3</div>
			  
			  <img src="music and dance.jpg"style="width:100%">
			  
			  <div class="text">Music Club</div>
			  
			</div>
			
			<div class="mySlides anim">
			
			  <div class="numbertext">2 / 3</div>
			  
			  <img src="music photo1.JPG" style="width:100%">
			 
			  <div class="text">Music Club</div>
			  
			</div>
			
			<div class="mySlides anim">
			
			  <div class="numbertext">3 / 3</div>
			  
			  <img src="music photo3.jpg" style="width:100%">
			  
			  <div class="text">Music Club</div>
			  
			</div>
			
			</div>
			
			<br>
			
			<div style="text-align: center">
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			</div>
			
			<script>
			var slideIndex = 0;
			showSlides();
			
			function showSlides() {
			  var i;
			  var slides = document.getElementsByClassName("mySlides");
			  var dots = document.getElementsByClassName("dot");
			  for (i = 0; i < slides.length; i++) {
			    slides[i].style.display = "none";  
			  }
			  slideIndex++;
			  if (slideIndex > slides.length) {slideIndex = 1}    
			  for (i = 0; i < dots.length; i++) {
			    dots[i].className = dots[i].className.replace(" active", "");
			  }
			  slides[slideIndex-1].style.display = "block";  
			  dots[slideIndex-1].className += " active";
			  setTimeout(showSlides, 3000); // Change image every 3 seconds
			}
			</script>
-->
					<img src="project images/Music Club 1.jpeg"width="25%"height="350";>
		<img src="project images/music photo1.JPG"width="25%"height="350";>
		<img src="project images/Music Club 3.jpeg" width="25%"height="350";>
		<img src="project images/Music Club 4.jpeg"width="24%"height="350;">
		<br><br>
		
		
		<br><br>
		<div style="margin-left: 50px;">
		 <p>
       	 <span style="color:dodgerblue; font-size:25px;font-weight:bold;font-style:italic;">MUSIC CLUB<br>
       	 	
       	 </span><br>

		
			Solo singing <i>(Classical, Bollywood, Western, Folk)</i>, SpicMacay <i>(Society of music which promotes classical music all over the India and even in foreign countries) </i>, 
			group singing, fusion band/orchestra(Blending different musical genres together), rock and metal bands, RAP singing, instrument playing(table, harmonium, Casio, 
			guitar, drums, dholak, flute)
			<br><br>

		<span style="color: dodgerblue; font-size: 25px; font-style:italic; font-weight: bold">CLASSICAL DANCE</span><br><br>
		
 		Classical dance forms use basically the 'mudras' or signs of hand as a common language of expression and were originally performed in the temples to entertain various
		Gods and Goddesses. They were also effective in carrying forward the various mythological stories from generation to generation while entertaining the audiences. It 
		eventually became a part of 'NatyaShashtra', with time, the classical dances evolved to include the expressions and themes from social life and experience.

		<i>FOLK DANCES </i> are dances developed by groups of people that reflect the traditional life of the people of a certain country or region. Folk dance forms are practiced 
		in groups in rural areas as an expression of their daily work and rituals. They are performed on religious, seasonal festivals or entertainment.

		<i>WESTERN DANCE</i> ,along with music, has always dynamically expressed the spirit and personality of every culture. Modern western dance is part of this global language and its roots run wide and deep. They can be traced to the taverns of Ireland and to the ballrooms of Europe, to the Czarist palaces of Russia and further back still to the fluid tribal rituals of Africa. Representatives from all of these cultures brought their native dances when they landed in America. Widely differing peoples who had little or no exposure to one another gathered and danced on common ground.
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
