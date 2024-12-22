<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<title>Shuttle Bus Service</title>
		
		<link rel="stylesheet" href="https://cdnjs.clouflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<style>
		
			footer{color: black; text-align: center; padding: 20px;background-color: #333; color: white;}
			
			body{font-family: Times;}
		
			header{text-align: right; padding: 30px; font-size: 20;background-color: #333; color: white;}
			
			.topnav{overflow:hidden;background-color: #333;}
			.topnav a{float: left; color:#f2f2f2; text-align: center; padding: 14px 16px; text-decoration: none; font-size: 17px;}
			.topnav a.hover{ background-color: #ddd; color: black;}
			.topnav a.active{background-color: #4CAF50; color:white;}
			
			.next a{ text-decoration: none; padding: 8px 16px; background-color:#888888; color: white; }
			.next a.hover{ background-color: #ddd; color: black; }
			
			.check a{ text-decoration: none; padding: 8px 16px; background-color:#333; color: white; }
			.check a.hover{ background-color: #ddd; color: black; }
			
			#navbar {
  overflow: hidden;
  background-color: skyblue;
  padding: 10px;
  transition: 0.4s;
  position: fixed;
  width: 97.2%;
  top: 0;

}

#navbar a {
  float: left;
  color: #fff;
  text-align: center;
  padding: 10px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

#navbar span a{
	margin-left: 100px;
}
#navbar #logo {
  font-size: 35px;
  font-weight: bold;
  transition: 1s;
}

#navbar #logo:hover{
	color: #0A0909;
}

#navbar a.active {
  background-color: #EEEAE5;
  color: #0A0909;

}

#navbar-right {
  float: right;
}

#navbar-right img{
	width: 30px;
	height: 30px;
	border-radius: 20px;
}



#navbar-right img:hover{
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.5), 0 6px 20px 0 rgba(0,0,0,0.19);
	border-radius: 20px;
	transition: 0.5s;
}

@media screen and (max-width: 580px) {
  #navbar {
    padding: 20px  !important;
  }
  #navbar a {
    float: none;
    display: block;
    text-align: left;
  }
  #navbar-right {
    float: none;
  }
}

.cool-link::after{
	content: '';
	display: block;
	width: 0;
	height: 2px;
	background:#fff;
	transition: width .8s;
}

.cool-link:hover::after{
	width: 100%;
	transition: width .3s;
}
.content{
	margin-top: 20px;
	background-color: #262626;
}

.content p{
	color: #DCF105;
	font-size: 20px;
			}
	
/*	side-nav*/
			.sidenav {
			  height: 100%;
			  width: 0;
			  position: fixed;
			  z-index: 1;
			  top: 0;
			  left: 0;
			  background-color: skyblue;
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
			
	

			
			</style>
	</head>
<body>
		<div id="navbar">
		  	<a href="#default" id="logo">Students' Essentials</a>
		  	<span>
		  	<a href="#" class="active cool-link">Home</a>
		  	</span>
			<a href="#" class="cool-link">MYUIT</a>
			<a href="#" class="cool-link">About</a>
			<a href="#" class="cool-link">Calendar</a>
			<a href="" class="cool-link">Shuttle</a>
			<a href="#" class="cool-link">Timetable</a>
			<div id="navbar-right">
		  	<a href="#"><img src="noti.png"></a>
		  	<a href="To Do List.html"><img src="note.png"></a>
		</div>
 		 </div>
		<hr>
		<br>
		
	
		
		<!-- <div class="topnav">
						
			<a class=a"active" href="about.php">About</a>
			<a href="routes.php">Routes And Maps</a>
			<a href="registeration.php">Registeration</a>
			<a href="contact.php">Contact</a>
		
		</div> -->
		
	<div class="content">
		<div id="mySidenav" class="sidenav">
		
  		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  		
  		<a href="homepage.html"> Home</a>
  
  		<div class="container">
  
                                    
  		<div class="dropdown">
  	
    <button style="font-size: 18px;" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"> Classroom Scheduling
    
    <span class="caret">
    	
    </span>
    
    </button>
    
    <ul class="dropdown-menu">
    	
    <div class="year">
    		
      <li><a href="firstyear.html">First Year</a></li>
      
      <li><a href="secondyear.html">Second Year</a></li>
      
      <li><a href="thirdyear.html">Third Year</a></li>
      
      <li><a href="fourthyear.html">Fourth Year</a></li>
      
     
      </div>
    </ul>
  </div>
</div>

 	<a href="major.html">Major</a>
 	
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
	<h3 style="color:#fff; text-align: center;font-size: 35px;">SHUTTLE BUS INFORMATION</h3>
		<hr>
		<p>There's no need to queue,rush or stand to wait for a bus for long hours. Now that there is a university shuttle bus for all of our lovely students
			for free. It is the easiest to get back home every day. There are many routes that you get to your destination in comfort and on time every time.
			</p>
		
	
		
		<p>A <i>FREE</i> Shuttle Bus Service operates during term time only (Monday-Friday) between the school campus and the university for staff and students whose work and study
			requires them to be at both sites across the course of the day/week and into the early evening.</p>
			
		<p>The shuttle bus service on production of your student or staff ID card. Please note that this is a limited stop service and the bus will only stop at the designated stops
			on the timetable.</p>
			
		<img src="tu-bus-4-m.jpg" alt="Shuttle Bus Image" height="300" width="400">
		
		<img src="umn-autonomousbusdemo-3_90831d0d-575f-4c8b-8bc2-925ff9d2e0a3_f.jpg" alt="Shuttle Bus Image" height="300" width="500"/>
		
		<img src="untitled.png" alt="Shuttle Bus Image" height="300" width="400"/>
		<br><br>
		
		
		<div class="check">
		<a href="routes.php"><b><i>Click Here To Check A Shuttle Bus Timetable!</i></b></a><br>
		</div>
		<br><br>
		
		<div class="next">
		<a href="routes.php" class="next">Next &raquo;</a>
		</div>
		
		<br><br>
		<hr>
		</div>
		<footer>
			<p>UNIVERSITY OF INFORMATION TECHNOLOGY</p>
			
			<address>University Of Information Technology, Parami Road, Hlaing Campus, Yangon, Myanmar</address>
			
			<p>Main Switchboard:</p>
			
		
			<a style="text-decoration: underline; color: white;" href="tel:959519664254">Tel: +95(9)519 664 254</a><br>
			
			<a style="text-decoration: underline; color: white;" href="tel:9519664709">Tel: +95(9)966 4709</a><br>
			
			<a style="text-decoration: underline; color: white;" href="fax:951664250">Fax: 951-664250</a><br>
			
			<a style="text-decoration: underline; color: white;" href="hr.admin@uit.edu.mm">hr.admin@uit.edu.mm</a><br>
			
	
	</footer>
	
	</body>
</html>