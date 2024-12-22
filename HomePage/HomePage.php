<?php
include('auth.php');
$user= $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
<head>
	<title> Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="javaScript.js"></script>
<!--
	<link rel="stylesheet" type="text/css" media="all" href="css/eventcss.css">
  <script type="text/javascript" src="../HomePage/js/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="../HomePage/js/responsiveCarousel.min.js"></script>
-->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="../HomePage/js/jquery.immersive-slider.js"></script>
  <link href="css/immersive-slider.css" rel="stylesheet" type="text/css">

	<style>
body {font-family: Arial, Helvetica, sans-serif;}
		button{
			margin-top: 6px;
			background-color: deepskyblue;
			border: solid deepskyblue;
		}
		

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 70%;
	height: auto;
	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: #262626;
  float: right;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #DF0B0E;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 15px;
  background-color: skyblue;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}
		.badge {
			position: absolute;
			top: 7px;
			right: 8px;
			padding: 5px 7px;
			border-radius: 100px;
			background-color: white;
			color: red;
		}
/*		1st slideshow*/
		
		.wrapper {
    	height: auto !important;
    	height: 100%;
    	margin: 0 auto; 
    	overflow: hidden;
    }
    
    a {
      text-decoration: none;
    }
    
    
    h1, h2 {
      width: 100%;
      float: left;
    }
    h1 {
      margin-top: 25px;
      color: #000;
      margin-bottom: 5px;
      font-size: 50px;
      letter-spacing: -4px;
    }
    h2 {
      color: #444;
      font-weight: 100;
      margin-top: 0;
      margin-bottom: 10px;
    }
    
    .pointer {
      color: #9b59b6;
      font-family: 'Pacifico', cursive;
      font-size: 30px;
      margin-top: 15px;
    }
    pre {
      margin: 80px auto;
    }
    pre code {
      padding: 35px;
      border-radius: 5px;
      font-size: 15px;
      background: rgba(0,0,0,0.1);
      border: rgba(0,0,0,0.05) 5px solid;
      max-width: 500px;
    }


    .main {
      float: left;
      width: 100%;
      margin-top: 75px;
      background: #161923;
    }
    
    .main h1 {
      padding:20px 50px;
      float: left;
      width: 100%;
      font-size: 90px;
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      font-weight: 100;
      color: black;
      margin: 0;
      margin-top: 70px;
      font-family: 'Playfair Display';
      letter-spacing: -1px;
    }
   
    .main h1.demo1 {
      background: #1ABC9C;
    }
    
    .reload.bell {
      font-size: 12px;
      padding: 20px;
      width: 45px;
      text-align: center;
      height: 47px;
      border-radius: 50px;
      -webkit-border-radius: 50px;
      -moz-border-radius: 50px;
    }
    
    .reload.bell #notification {
      font-size: 25px;
      line-height: 140%;
    }
    
    .reload, .btn{
      display: inline-block;
      border: 4px solid #A2261E;
      border-radius: 5px;
      -moz-border-radius: 5px;
      -webkit-border-radius: 5px;
      background: #CC3126;
      display: inline-block;
      line-height: 100%;
      padding: 0.7em;
      text-decoration: none;
      color: #fff;
      width: 100px;
      line-height: 140%;
      font-size: 17px;
      font-family: open sans;
      font-weight: bold;
    }
    .reload:hover{
      background: #A2261E;
    }
    .btn {
      width: 200px;
      color: #fff;
      border: none;
      margin-left: 10px;
      background: black;
    }
    .clear {
      width: auto;
    }
    .btn:hover, .btn:hover {
      background: rgba(0,0,0,0.8);
    }
    .btns {
      width: 410px;
      margin: 50px auto;
    }
    .credit {
      text-align: center;
      color: #444;
      padding: 10px;
      margin: 0 0 0 0;
      background: #161923;
      color: #FFF;
      float: left;
      width: 100%;
    }
    .credit a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
    }
    
    .back {
      position: absolute;
      top: 0;
      left: 0;
      text-align: center;
      display: block;
      padding: 7px;
      width: 100%;
      box-sizing: border-box;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      background: rgba(255, 255, 255, 0.25);
      font-weight: bold;
      font-size: 13px;
      color: #000;
      -webkit-transition: all 200ms ease-out;
      -moz-transition: all 200ms ease-out;
      -o-transition: all 200ms ease-out;
      transition: all 200ms ease-out;
    }
    .back:hover {
      color: black;
      background: rgba(255, 255, 255, 0.5);
    }
    
    
    .page_container {
      max-width: 960px;
      margin: 50px auto;
    }

    .header {
      background: white;
      padding-top: 10px;
      margin-bottom: 0;
    }
    .header h1{
      margin-bottom: 0;
      font-size: 45px;
    }

    .header .menu {
      padding-bottom: 10px;
    }

    .benefits {
      color: black;
      height: 100px;
      background: #FFF;
      position: relative;
      width: 100%;
      padding: 25px;
      font-size: 40px;
      font-weight: 100;
      float: left;
      box-sizing: border-box;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
    }

    .benefits .page_container{
      margin-bottom: 50px;
      margin-top: 0;
    }
  
    .immersive_slider .is-slide .content h2{
      line-height: 140%;
      font-weight: 100;
      color: white;
      font-weight: 100;
    }
    .immersive_slider .is-slide .content a {
      color: white;
    }
  
  .immersive_slider .is-slide .content p{
    float: left;
    font-weight: 100;
    width: 100%;
    font-size: 17px;
    margin-top: 5px;
  }

</style>
</head>
<body>
	<div id="navbar">
	  	<a href="../HomePage/HomePage.php" id="logo">Students' Essentials</a>
	  	<span>
	  	<a href="../HomePage/HomePage.php" class=" active cool-link">Home</a>
	  	</span>
		<a href="../HomePage/myuit.php" class=" cool-link">MYUIT</a>
		<a href="../Directory/Dindex.php" class="cool-link">Directory</a>
		<a href="../Clubs/clubHome.php" class=" cool-link">Clubs</a>
		<a href="../Shuttle/ShuttleIndex.php" class="cool-link">Shuttle</a>
		<a href="../UiTEvents/event.php" class=" cool-link">Events</a>
		<div id="navbar-right">
	  	<button id="myBtn" ><img src="images/reminder.png" alt="Notification" width="31">
			<span class="badge" id="success"><?php
			$conn=mysqli_connect('localhost','root','','se');
			$query="select MAX(notice_id) as maxid from notice";
			$res=mysqli_query($conn,$query);
			$data=mysqli_fetch_array($res);
			echo $data['maxid'];
			?>
				</span></button>
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
var dd=document.getElementById("success");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
	dd.classList.remove("badge");
  dd.style.display= "none";
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
<!--body starts-->
	  	
<!--
	<div class="content">
		
		<img src="images/UiT&BlueSky.png" alt="Campus" class="UIT" style="width:100%">
		<div class="middle">
			<div class="text">UIT</div>
		</div>
	</div>
-->
	 <div class="wrapper">
    <header>
<!--
      <h1>jQuery Immersive Slider</h1>
      <h2>Create an immersive slider experience with jQuery Immersive Slider</h2>
      <p class="credit">Created by <a href="http://www.thepetedesign.com">Pete R.</a>, Founder of <a href="http://www.bucketlistly.com" target="_blank">BucketListly</a></p>

      
      
<!--      <a href="https://github.com/peachananr/immersive-slider"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png" alt="Fork me on GitHub"></a>-->
    </header>

    <div class="main">
      <div class="page_container">
        <div id="immersive_slider">
          <div class="slide" data-blurred="images/UiT&BlueSky.png">
            <div class="content">
              <h2>Best Place</h2>
              <p>A university is a place where you can show your skill and make your dreams do come true. 
That's what university life is all about. Challenging, questioning, enjoying good people and good friends, and pushing yourself to the limit.</p>
            </div>
            <div class="image">
                <img src="images/UiT&BlueSky.png" alt="Slider 1">
            </div>
          </div>
          <div class="slide" data-blurred="images/UIT_1.jpg">
            <div class="content">
              <h2>New Campus</h2>
              <p>UIT new campus was opened on 1st Janurary 2018. It is situated on Parami Road near MICT Park.And it is a place of light, of liberty and of learning.</p>
            </div>
            <div class="image">
              <img src="../HomePage/images/UIT_1.jpg" alt="Slider 1"></a>
            </div>
          </div>
          <div class="slide" data-blurred="../HomePage/images/UiT&Clouds.jpg">
            <div class="content">
              <h2>Second Home</h2>
              <p>It is just like our another home. We spend most of our time at the university daily.
Studying together with our friends, finishing our dream together can make us warm and proud. </p>
            </div>
            <div class="image">
              <img src="../HomePage/images/UiT&Clouds.jpg" alt="Slider 1"></a>
            </div>
          </div>
			
          
          <a href="#" class="is-prev">&laquo;</a>
          <a href="#" class="is-next">&raquo;</a>
        </div>
      </div>
  	</div>
  	<div class="benefits">
      <div class="page_container">

  	  </div>
  	</div>
  	<script type="text/javascript">
  	  $(document).ready( function() {
  	    $("#immersive_slider").immersive_slider({
  	      container: ".main"
  	    });
  	  });

    </script>
  </div>	
 
	<div class="container">
			<table>
				<tr>
					<td>
					<div class="content-1">
						<img src="../HomePage/images/StudentsinTheatre.jpeg" class="image-1">
						<h3>Do you want to know about the students more?</h3>
						<p>Don't worry if you are a junior. You can talk to each other and be friend with anyone else</p>
						<button class="button btn-1"><a href="../Directory/Dindex.php">Visit</a></button>
					</div>
					</td>
					<td>
					<div class="content-2">
						<img src="../HomePage/images/Farewell.jpg">
						<h3>Stay free and enjoy your memorable student life!</h3>
						<p>Hating school when you are in it is normal but once you leave you will surely miss it then.</p>
						<button class="button btn-2"><a href="../UiTEvents/event.php">Visit</a></button>
					</div>
					</td>
					<td>
					<div class="content-3">
						<img src="../HomePage/images/StudentsOnGraass.jpg">
						<h3>Making a plan is the key to success!</h3>
						<p>As a student,the way to succcess is reminding himself.</p>
						<button class="button btn-3"><a href="../remind/displayremind.php">Visit</a></button>
					</div>
					</td>
				</tr>
			</table>
	</div>
	
	<div class="Events">
		<h1>Events</h1>
		<table>
			<tr>
				<td>
				<div class="event-1">
					<img src="../UiTEvents/Event_Images/UITBlood_Donation.jpg">
					<h2 class="date">
						Jul 15
					</h2>
					<p>
						Blood Donation <br>
						Place : Library <br>
						<span>Time : 9:00 AM</span>
					</p>
				</div>
				</td>
				<td>
				<div class="event-2">
					<img src="../HomePage/images/LRM_EXPORT_51717054933183_20190725_182755782.jpeg">
					<h2 class="date">
						Jul 24
					</h2>
					<p>
						Mask Singing Contest <br>
						Place : Room 215	<br>
						<span>Time : 1:00 PM</span>
					</p>
				</div>
				</td>
				<td>
				<div class="event-3">	
					<img src="../HomePage/images/2018_open10.jpg">
					<h2 class="date">
						Aug 12
					</h2>
					<p>
						Open Campus <br>
						Place : UIT <br>
						<span>Time : 10:00 AM</span>
					</p>
				</div>
				</td>
			</tr>
		</table>
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
			