<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>UiT Events</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="javaScript.js"></script>
		<link rel="stylesheet" href="../UiTEvents/css/bootstrap.css"/>
		<script src="../UiTEvents/js/jquery_library.js"></script>
<script src="../UiTEvents/js/bootstrap.min.js"></script>
	<style>
		* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column-left {
  float: left;
  width: 75%;
  padding: 10px;
  height: auto; /* Should be removed. Only for demonstration */
}
.column-right{
float: right;
width:25%;
padding:10px;
height:2360px;
/*	margin-top: -195%*/

}


/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
	.fltrt {  
	float: right;
	margin-left: 8px;
}
.fltlft { 
	float: left;
	margin-right: 8px;
}
.clearfloat {
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
#borderbox {
	margin-left:5%;
	padding-left:20px;
	background : transparent;
	background-clip:border-box;
	width: 100%;
	height: 250px;
	
}
p {
	width: 90%;
}
		hr { display: block;
			height: 1px;
            border: 0;
			border-top: 1px solid red;
            margin: 1em 0;
			padding: 0; }





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
		<a href="../Shuttle/ShuttleIndex.php" class="cool-link">Shuttle</a>
		<a href="../UiTEvents/event.php" class=" active cool-link">Events</a>
		<div id="navbar-right">
	  	<button id="myBtn"><img src="images/reminder.png" alt="Notification" width="31"></button>
	  	<a href="../HomePage/To Do List.html"><img src="images/note.png"></a>
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
	
	<div style="margin-top: 80px;" class="container-fluid">
	<!-- slider -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="Event_Images/UiTFW.jpg" alt="UiT FresherWelcome" style="width: 100%; height: 600px;">
      <div class="carousel-caption">
        <h3>UIT Fresher Welcome</h3>
      </div>
    </div>
    <div class="item">
      <img src="Event_Images/UiTTG2.jpg" alt="UiT Pre Thingyan" style="width: 100%; height: 600px;">
      <div class="carousel-caption">
       <h3>UiT Pre-Thingyan</h3>
      </div>                                                                                                                        
    </div>
	
	 <div class="item">
      <img src="Event_Images/UITOC.jpg" alt="UiT Open Campus" style="width: 100%; height: 600px;">
      <div class="carousel-caption">
        <h3>UiT Open Campus</h3>
      </div>
    </div>
	   <div class="item">
      <img src="Event_Images/Debate_1.jpg" alt="Debate Competiton" style="width: 100%; height: 600px;">
      <div class="carousel-caption">
        <h3>Debate Competiton</h3>
      </div>
    </div>
   
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span> 
  </a>
</div>
</div>
	<!-- slider end-->
	
	
	
		
	<div class= "row">
  <div class="column-left" style="background-color:#d2cfcf;">
    <h1 style="text-align:center; color: dodgerblue;">Yearly Events</h1>
	
	  <hr>
    <div id="borderbox">
  			<img src="Event_Images/UiTFW.jpg" width="300px" height="200px" style=" float: left; 
  			padding-right: 50px;">
		
	  <h3 style="color: dodgerblue;">UiT Fresher Welcome</h3>
		<p style="font-size: 15px;">UIT freshers welcome is usually held in December or January. <br>
     To express the warmly welcome for the first year students, this ceremony is proudly held by the senior students. <br>
The close friendship can set between the senior and junior students from this ceremony. </p>
	  
  </div>
  <hr>
	 <!-- Remove margin:10px 5 px;-->
	<div id="borderbox">
  			<img src="Event_Images/UiTTG2.jpg" width="300px" height="200px" style="float: left; padding-right: 50px;">
	
		<h3 style="color: dodgerblue;">UiT Pre-Thingyan</h3>
		<p style="font-size: 15px;">UIT water festival is usually held in March before the 1st semester exam. All the students and teachers are particated and enjoyed it. They feed the people with Myanmar tradtional food for Studitha.Students entertain with Myanmar songs and beautiful Thingyan dance.This is the wonderful time for throwing water,singing,dancing.</p>
	  
  </div>
  <hr>
	
	<div id="borderbox">
  			<img src="Event_Images/UITOC.jpg" width="300px" height="200px" style=" float: left; padding-right: 50px;">
		
		<h3 style="color: dodgerblue;"> UiT Open Campus</h3>
		<p style="font-size: 15px;">UIT Open Campus is a ceremony which exhibits the projects of UIT students. From open campus visit, you can see our UIT students' projects and school's teaching methods. The aims of UIT Open Campus is to realize Project Performance of UIT students in public. </p>
	  
  </div>
  <hr>
	<div id="borderbox">
  			<img src="Event_Images/Debate_1.jpg" width="300px" height="200px" style="float: left; padding-right: 50px;">
		
		<h3 style="color: dodgerblue;"> UiT Debate Competition</h3>
		<p style="font-size: 15px;">
		Debate competitions can help students to understand essential critical thinking and perentation skills. This gives students the opportunity to test their thoughts and views against that of their peers. UIT debate competition is held in July every year.</p>
	  
  </div><hr>
	  <div id="borderbox">
  			<img src="Event_Images/UITBlood_Donation.jpg" width="300px" height="200px" style=" float: left; padding-right: 50px;">
		
		<h3 style="color: dodgerblue;"> UiT Blood Donation</h3>
		  <p style="font-size: 15px;">UIT blood donation event is held every year.
             It is palnned by UITSU and national blood bank.
         Blood donation rules:<br>
-You must be in good health and feeling well<br>
-You must be above 18 years old.<br>
-You must weight at least 100lbs.
Health benefits  include 
good health and reduced the risk of cancer.</p>
	  
  </div><hr>
	  <div id="borderbox">
  			<img src="Event_Images/UIT1stHtamane.jpg" alt="UiT Htamane" width="300px" height="200px" style=" float: left;padding-right: 50px;">
		
		<h3 style="color: dodgerblue;"> UiT Htamane Competiton</h3>
		  <p style="font-size: 15px;">
		  Htamane festival is usually held in March. It is a religious festival as well as a social festival. The students from different years are participated in this event. The main purpose for this event is to show the united strength of a team and to have social relation with each other. </p>
	  
  </div>
  <hr>
	<div id="borderbox">
					<img src="Event_Images/2018Sport6.jpg" alt="UiT Sport Events" width="300px" height="200px" style=" float: left; padding-right: 50px;">

					<h3 style="color: dodgerblue;"> Sport Events</h3>
					<p style="font-size: 15px;">
						Sport is an important part of syllabus and integral part of a student's development.
						There are five dimensions to the purpose of sport and play-relationships,education, social change,health and joy. Sport encourages ongoing education in skill and personal development.
						Sport events are mostly held in first semester of the academic year.
						Various kinds of sports are included:
						<br>
						<strong> <em> Football ,Basketball ,Badminton ,Table Tennis etc... </em></strong>
						<br>
						<strong>Awards are presented to the athletes to recognize their achievements</strong>
					</p>
					</div>
				
<hr>
				<div id="borderbox">
					<img src="Event_Images/UiTPTRS.jpg" alt="Planting trees for Rainy Season" width="300px" height="200px" style=" float: left; padding-right: 50px;">

					<h3 style="color: dodgerblue;"> Monsoon Tree Planting Ceremony</h3>
					<p style="font-size: 15px;">
						UIT Monsoon Trees Planting Ceremony is held in July every year.
						This ceremony was attended and participated by teachers and students.
						In this ceremony, many seedlings in different species were planted .
						The main objectives of this planting ceremony are as follows:
						<br>
						*To raise the awareness of the community on the value of trees;
						<br>
						*To raise the awareness of the younger generations on the value of trees;
						<br>
						*To protect the community from suffering natural disasters;

					</p></div>

			
</div>
			

	
 	
  		  
  
  <div class="column-right" style="background-color:#bebaba;">
	  <h2 style="text-align: center; color: dodgerblue;">  Upcoming Events</h2>
	    <hr style="border-color: red;">
	  <ul>
	  <li>
		  <div>
		  <h4>Waso Robes Offering Ceremony</h4>
			  <p>30 July 2019</p>
		  </div>
		  </li>
		  <br>
		 
		  <li>
		  <div>
		  <h4>Open Campus</h4>
			  <p> 12 August 2019</p>
		  </div>
		  </li>
		  <br>
		  
		  <li>
		  <div>
		  <h4>Exam</h4>
			  <p> 9 September 2019</p>
		  </div>
		  </li>
	  
	  </ul>
	  
	  
  </div>
</div>
	<footer align="center">
		<br>
			<p style="font-size: 15px;" align="center">UNIVERSITY OF INFORMATION TECHNOLOGY</p>
			
			<p style="font-size: 15px;" align="center">University Of Information Technology, Parami Road, Hlaing Campus, Yangon, Myanmar</p>
			
			<p style="font-size: 15px;" align="center">Main Switchboard:</p>
		<p style="font-size: 15px;" align="center"><a  style=" text-decoration: underline; color: white; " href="tel:959519664254">Tel: +95(9)519 664 254</a></p>
		<p style="font-size: 15px;" align="center"><a style="text-decoration: underline; color: white; " href="hr.admin@uit.edu.mm">hr.admin@uit.edu.mm</a></p>
			
	
	</footer>

	
</body>
</html>
