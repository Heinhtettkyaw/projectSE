<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		
		
		<title>Registeration</title>
		<style>
			body{font-family: Times;}
			header{text-align: right; black:white; padding: 30px; font-size: 20;background-color: #333; color: white;}
			footer{color: black; text-align: center; padding: 20px;background-color: #333; color: white;}
			
			
				* {
		  box-sizing: border-box;
		}
		
		/* Style inputs */
		input[type=text], select, input[type=time],input[type=email], input[type=tel]
		{
		  width: 100%;
		  padding: 12px;
		  border: 1px solid #ccc;
		  margin-top: 6px;
		  margin-bottom: 16px;
		  resize: vertical;
		}
		
		input[type=submit], input[type=reset]
		{
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
		.container {
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
		
			.topnav{overflow:hidden;background-color: #333;}
			.topnav a{float: left; color:#f2f2f2; text-align: center; padding: 14px 16px; text-decoration: none; font-size: 17px;}
			.topnav a.hover{ background-color: #ddd; color: black;}
			.topnav a.active{background-color: #4CAF50; color:white;}
			
			.next a{ text-decoration: none; padding: 8px 16px; background-color:#888888; color: white; }
			.next a.hover{ background-color: #ddd; color: black; }
			
			.previous a{ text-decoration: none; padding: 8px 16px; background-color:#888888; color: white; }
			.previous a.hover{ background-color: #ddd; color: black; }
		</style>
	</head>
	
	<body>
		<header>UNIVERSITY OF INFORMATION TECHNOLOGY</header><br>
		<hr>
		
		<div class="topnav">
						
			<a class=a"active" href="about.php">About</a>
			<a href="routes.php">Routes And Maps</a>
			<a href="registeration.php">Registeration</a>
			<a href="contact.php">Contact</a>
		
	</div>
		<br>
		
		<div class="container">
			
		  <div style="text-align:center">
		  	
		    <h2>Registeration Form</h2>
		   
		    
		  </div>
		  
		  <div class="row">
		    <div class="column">
		      <img src="e-register.jpg" style="width:100%">
		    </div>
		    
		    <div class="column">
		    	
		      <form action="regist-add.php" method = "post">
		      	
		        <label for="fname">First Name</label>
		        
		        <input type="text" id="fname" name="first_name" placeholder="Your First Name.." required>
		        
		        <label for="lname">Last Name</label>
		        
		        <input type="text" id="lname" name="last_name" placeholder="Your Last Name" required>
		        
		        <label for="email">Email</label><br>
		        
		        <input type="email" id="email" name="email" placeholder="john@edu.mm" required><br>
		        
		         <label for="phoneno">Phone Number</label><br>
		        
		        <input type="tel" id="phoneno" name="phone" placeholder="Your Phone Number" required><br>
		        
		         <label for="time">Time</label><br>
		        
		        <input type="time" id="time" name="time" placeholder="08:00AM" required><br>
		        
		        <input type="submit" value="Book">
		        
		        <input type="reset" value="Reset"/>
		      </form>
		    </div>
		  </div>
		</div>
		
			
			<br>
			
			<div class="next">
			<br>
			<a href="contact.php" class="next">Next &raquo;</a>
			</div>
			<br>
			<div class="previous">
			<a href="routes.php" class="previous">&laquo; Previous</a>
			</div>
			
			
			
			
			
		<br><hr>
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
