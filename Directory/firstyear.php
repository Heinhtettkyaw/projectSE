<!DOCTYPE html>
<html lang="en">
	<head>
	<title>First Year Timetable</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="javaScript.js"></script>
	<style>
		body { font-family: Times; font-size: 18px;}
		table,th,td{ border-collapse: collapse; text-align: center; padding: 20px 0px;}
		th
		 {
 			background-color:#708090;
 			 color: Black;
 			 width: 200px;
 			 height: 30px;
		 }
		 
		 footer{color: black; text-align: center; padding: 20px;background-color: #333; color: white;}
		
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
			
			<h2 style="margin-top: 100px;"><a href="../Directory/Dindex.php">Directory</a>/<h4>First Year Timetable</h4></h2>
	<table align="center" style="border: 1">
		<h4 style="font-size: 20px;">Section A</h4>
		<tr>
			<th style="text-align: center;">
				Day
			</th>
			<th>8:30AM-9:30AM</th>
			
			<th>9:40AM-10:40AM</th>
			
			<th>10:50AM-11:50AM</th>
			
			<th>11:50AM-12:40PM</th>
				
			
			<th>12:40PM-13:40PM</th>
			
			<th>13:50PM-14:50PM</th>
			
			<th>15:00PM-16:00PM</th>
		</tr>	
		
		<tr>
			<td>Monday</td>
			
			<td>CST-1201 <br> (ROOM NO:231)</td>
			
			<td>CST-1201 <br> (ROOM NO:231)</td>
			
			<td>SELF-STUDY</td>
			 <td rowspan="5">Lunch Time</td>
			
			<td>P-1200 <br> (ROOM NO:245)</td>
			
			<td>P-1200 <br> (ROOM NO:245)</td>
			
			<td>CST-1203 <br> (ROOM NO:231)</td>
		</tr>	
		
		<tr>
			<td>Tuesday</td>
			
			<td>CST-1203 <br> (ROOM NO:231)</td>
			
			<td>CST-1203 <br> (ROOM NO:231)</td>
			
			<td>SELF-STUDY</td>
			
			<td>CST-1201 <br> (ROOM NO:231)</td>
			
			<td>CST-1202 <br> (ROOM NO:321)</td>
			
			<td>CST-1202 <br> (ROOM NO:321)</td>
		</tr>	
		
		<tr>
			<td>Wednesday</td>
			
			<td>P-1200 <br> (ROOM NO:321)</td>
			
			<td>M-1200 <br> (ROOM NO:321)</td>
			
			<td>E-1200 <br> (ROOM NO:321)</td>
			
			<td>SELF-STUDY</td>
			
			<td>SELF-STUDY</td>
			
			<td>SELF-STUDY</td>
		</tr>	
		
		<tr>
			<td>Thursday</td>
			
			<td>M-1200<br> (ROOM NO:321)</td>
			
			<td>E-1200 <br> (ROOM NO:321)</td>
			
			<td>P-1200 <br> (ROOM NO:321)</td>
			
			<td>E-1200 <br> (ROOM NO:244)</td>
			
			<td>SELF-STUDY</td>
			
			<td>CST-1201 <br> (ROOM NO:231)</td>
		</tr>	
		
		<tr>
			<td>Friday</td>
			
			<td>CST-1202 <br> (ROOM NO:321)</td>
			
			<td>CST-1202 <br> (ROOM NO:321)</td>
			
			<td>M-1200 <br> (ROOM NO:321)</td>
			
			<td>E-1200 <br> (ROOM NO:321)</td>
			
			<td>CST-1203 <br> (ROOM NO:231)</td>
			
			<td>SELF-STUDY</td>
		</tr>	
			
	</table>
	
<br><hr>


	<table align="center" style="border: 1">
		<h4 style="font-size: 20px;">Section B</h4>
		<tr>
			<th style="text-align: center;">
				Day
			</th>
			<th>8:30AM-9:30AM</th>
			
			<th>9:40AM-10:40AM</th>
			
			<th>10:50AM-11:50AM</th>
			
			<th>11:50AM-12:40PM</th>
				
			
			<th>12:40PM-13:40PM</th>
			
			<th>13:50PM-14:50PM</th>
			
			<th>15:00PM-16:00PM</th>
		</tr>	
		
		<tr>
			<td>Monday</td>
			
			<td>P-1200<br> (ROOM NO:245)</td>
			
			<td>P-1200 <br> (ROOM NO:245)</td>
			
			<td>M-1200<br>(ROOM NO:322)</td>
			 <td rowspan="5">Lunch Time</td>
			
			<td>E-1200<br> (ROOM NO:244)</td>
			
			<td>CST-1201 <br> (ROOM NO:231)</td>
			
			<td>SELF-STUDY</td>
		</tr>	
		
		<tr>
			<td>Tuesday</td>
			
			<td>P-1200 <br> (ROOM NO:322)</td>
			
			<td>E-1200<br> (ROOM NO:322)</td>
			
			<td>SELF-STUDY</td>
			
			<td>M-1200 <br> (ROOM NO:322)</td>
			
			<td>CST-1202 <br> (ROOM NO:322)</td>
			
			<td>CST-1203<br> (ROOM NO:231)</td>
		</tr>	
		
		<tr>
			<td>Wednesday</td>
			
			<td>E-1200 <br> (ROOM NO:322)</td>
			
			<td>CST-1201 <br> (ROOM NO:231)</td>
			
			<td>CST-1201 <br> (ROOM NO:231)</td>
			
			<td>SELF-STUDY</td>
			
			<td>SELF-STUDY</td>
			
			<td>SELF-STUDY</td>
		</tr>	
		
		<tr>
			<td>Thursday</td>
			
			<td>CST-1202<br> (ROOM NO:322)</td>
			
			<td>CST-1202 <br> (ROOM NO:322)</td>
			
			<td>CST-1201<br> (ROOM NO:231)</td>
			
			<td>CST-1203 <br> (ROOM NO:231)</td>
			
			<td>SELF-STUDY</td>
			
			<td>M-1200 <br> (ROOM NO:322)</td>
		</tr>	
		
		<tr>
			<td>Friday</td>
			
			<td>CST-1203 <br> (ROOM NO:231)</td>
			
			<td>CST-1203 <br> (ROOM NO:231)</td>
			
			<td>P-1200 <br> (ROOM NO:231)</td>
			
			<td>SELF-STUDY</td>
			
			<td>CST-1202 <br> (ROOM NO:322)</td>
			
			<td>E-1200<br>(ROOM NO:322)</td>
		</tr>	
			
	</table>
	
	<br><hr>


	<table align="center" style="border: 1">
		<h4 style="font-size: 20px;">Section C</h4>
		<tr>
			<th style="text-align: center;">
				Day
			</th>
			<th>8:30AM-9:30AM</th>
			
			<th>9:40AM-10:40AM</th>
			
			<th>10:50AM-11:50AM</th>
			
			<th>11:50AM-12:40PM</th>
				
			
			<th>12:40PM-13:40PM</th>
			
			<th>13:50PM-14:50PM</th>
			
			<th>15:00PM-16:00PM</th>
		</tr>	
		
		<tr>
			<td>Monday</td>
			
			<td>P-1200<br> (ROOM NO:323)</td>
			
			<td>M-1200 <br> (ROOM NO:323)</td>
			
			<td>SELF-STUDY</td>
			 <td rowspan="5">Lunch Time</td>
			
			<td>E-1200<br> (ROOM NO:323)</td>
			
			<td>CST-1202 <br> (ROOM NO:323)</td>
			
			<td>CST-1202<br>(ROOM NO:323)</td>
		</tr>	
		
		<tr>
			<td>Tuesday</td>
			
			<td>CST-1202 <br> (ROOM NO:322)</td>
			
			<td>CST-1202<br> (ROOM NO:322)</td>
			
			<td>E-1200<br>(ROOM NO:323)</td>
			
			<td>SELF-STUDY</td>
			
			<td>CST-1203 <br> (ROOM NO:231)</td>
			
			<td>CST-1201<br> (ROOM NO:232)</td>
		</tr>	
		
		<tr>
			<td>Wednesday</td>
			
			<td>CST-1201 <br> (ROOM NO:232)</td>
			
			<td>CST-1201 <br> (ROOM NO:232)</td>
			
			<td>M-1200 <br> (ROOM NO:323)</td>
			
			<td>SELF-STUDY</td>
			
			<td>SELF-STUDY</td>
			
			<td>SELF-STUDY</td>
		</tr>	
		
		<tr>
			<td>Thursday</td>
			
			<td>CST-1203<br> (ROOM NO:231)</td>
			
			<td>CST-1203 <br> (ROOM NO:231)</td>
			
			<td>P-1200<br> (ROOM NO:323)</td>
			
			<td>CST-1201 <br> (ROOM NO:232)</td>
			
			<td>SELF-STUDY</td>
			
			<td>E-1200 <br> (ROOM NO:244)</td>
		</tr>	
		
		<tr>
			<td>Friday</td>
			
			<td>M-1200 <br> (ROOM NO:323)</td>
			
			<td>E-1200 <br> (ROOM NO:323)</td>
			
			<td>SELF-STUDY</td>
			
			<td>P-1200<br>(ROOM NO:245)</td>
			
			<td>P-1200 <br> (ROOM NO:245)</td>
			
			<td>CST-1203<br>(ROOM NO:231)</td>
		</tr>	
			
	</table>
	
	<br><hr>


	<table align="center" style="border: 1">
		<h4 style="font-size: 20px;">Section D</h4>
		<tr>
			<th style="text-align: center;">
				Day
			</th>
			<th>8:30AM-9:30AM</th>
			
			<th>9:40AM-10:40AM</th>
			
			<th>10:50AM-11:50AM</th>
			
			<th>11:50AM-12:40PM</th>
				
			
			<th>12:40PM-13:40PM</th>
			
			<th>13:50PM-14:50PM</th>
			
			<th>15:00PM-16:00PM</th>
		</tr>	
		
		<tr>
			<td>Monday</td>
			
			<td>CST-1201<br> (ROOM NO:232)</td>
			
			<td>CST-1203 <br> (ROOM NO:232)</td>
			
			<td>CST-1203<br>(ROOM NO:233)</td>
			 <td rowspan="5">Lunch Time</td>
			
			<td>M-1200<br> (ROOM NO:324)</td>
			
			<td>SELF-STUDY</td>
			
			<td>E-1200<br>(ROOM NO:244)</td>
		</tr>	
		
		<tr>
			<td>Tuesday</td>
			
			<td>CST-1203<br> (ROOM NO:233)</td>
			
			<td>CST-1203<br> (ROOM NO:233)</td>
			
			<td>SELF-STUDY</td>
			
			<td>P-1200 <br> (ROOM NO:322)</td>
			
			<td>P-1200 <br> (ROOM NO:245)</td>
			
			<td>E-1200<br> (ROOM NO:324)</td>
		</tr>	
		
		<tr>
			<td>Wednesday</td>
			
			<td>P-1200 <br> (ROOM NO:324)</td>
			
			<td>CST-1202 <br> (ROOM NO:324)</td>
			
			<td>CST-1202 <br> (ROOM NO:324)</td>
			
			<td>SELF-STUDY</td>
			
			<td>SELF-STUDY</td>
			
			<td>SELF-STUDY</td>
		</tr>	
		
		<tr>
			<td>Thursday</td>
			
			<td>M-1200<br> (ROOM NO:324)</td>
			
			<td>SELF-STUDY</td>
			
			<td>E-1200<br> (ROOM NO:324)</td>
			
			<td>CST-1202 <br> (ROOM NO:214)</td>
			
			<td>CST-1203<br>(ROOM NO:232)</td>
			
			<td>CST-1201 <br> (ROOM NO:236)</td>
		</tr>	
		
		<tr>
			<td>Friday</td>
			
			<td>E-1200 <br> (ROOM NO:324)</td>
			
			<td>P-1200 <br> (ROOM NO:324)</td>
			
			<td>M-1200 <br> (ROOM NO:325)</td>
			
			<td>CST-1202<br>(ROOM NO:335)</td>
			
			<td>SELF-STUDY</td>
			
			<td>CST-1201<br>(ROOM NO:232)</td>
		</tr>	
			
	</table>
	
	
	<br><hr>


	<table align="center" style="border: 1">
		<h4 style="font-size: 20px;">Section E</h4>
		<tr>
			<th style="text-align: center;">
				Day
			</th>
			<th>8:30AM-9:30AM</th>
			
			<th>9:40AM-10:40AM</th>
			
			<th>10:50AM-11:50AM</th>
			
			<th>11:50AM-12:40PM</th>
				
			
			<th>12:40PM-13:40PM</th>
			
			<th>13:50PM-14:50PM</th>
			
			<th>15:00PM-16:00PM</th>
		</tr>	
		
		<tr>
			<td>Monday</td>
			
			<td>P-1200<br> (ROOM NO:245)</td>
			
			<td>P-1200 <br> (ROOM NO:245)</td>
			
			<td>M-1200<br>(ROOM NO:322)</td>
			 <td rowspan="5">Lunch Time</td>
			
			<td>E-1200<br> (ROOM NO:244)</td>
			
			<td>CST-1201 <br> (ROOM NO:231)</td>
			
			<td>SELF-STUDY</td>
		</tr>	
		
		<tr>
			<td>Tuesday</td>
			
			<td>P-1200 <br> (ROOM NO:322)</td>
			
			<td>E-1200<br> (ROOM NO:322)</td>
			
			<td>SELF-STUDY</td>
			
			<td>M-1200 <br> (ROOM NO:322)</td>
			
			<td>CST-1202 <br> (ROOM NO:322)</td>
			
			<td>CST-1203<br> (ROOM NO:231)</td>
		</tr>	
		
		<tr>
			<td>Wednesday</td>
			
			<td>E-1200 <br> (ROOM NO:322)</td>
			
			<td>CST-1201 <br> (ROOM NO:231)</td>
			
			<td>CST-1201 <br> (ROOM NO:231)</td>
			
			<td>SELF-STUDY</td>
			
			<td>SELF-STUDY</td>
			
			<td>SELF-STUDY</td>
		</tr>	
		
		<tr>
			<td>Thursday</td>
			
			<td>CST-1202<br> (ROOM NO:322)</td>
			
			<td>CST-1202 <br> (ROOM NO:322)</td>
			
			<td>CST-1201<br> (ROOM NO:231)</td>
			
			<td>CST-1203 <br> (ROOM NO:231)</td>
			
			<td>SELF-STUDY</td>
			
			<td>M-1200 <br> (ROOM NO:322)</td>
		</tr>	
		
		<tr>
			<td>Friday</td>
			
			<td>CST-1203 <br> (ROOM NO:231)</td>
			
			<td>CST-1203 <br> (ROOM NO:231)</td>
			
			<td>P-1200 <br> (ROOM NO:231)</td>
			
			<td>SELF-STUDY</td>
			
			<td>CST-1202 <br> (ROOM NO:322)</td>
			
			<td>E-1200<br>(ROOM NO:322)</td>
		</tr>	
			
	</table>
	
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
