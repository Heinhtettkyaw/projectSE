<!DOCTYPE html>
<html>
<head>
	
	<title>To Do List</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="javaScript.js"></script>
	<style type="text/css">
		body{
			/*background:linear-gradient(to right, #00ccff 15%, #cc99ff 100%);*/
			
		}
		.list{
			background-color: skyblue;
			opacity: 0.9;
			border-radius: 10px;
			width: 500px;
			height: 500px;
			box-shadow: 0 8px 10px 0 rgba(0,0,0,0.1), 0 6px 20px 0 rgba(0,0,0,0.19);
			margin-left: 380px;
			font-size: 20px;
			filter: alpha(opacity=60);
			margin-top: -600px;
		}
		ul {
  margin: 0;
  padding: 0;
}

/* Style the list items */
ul li {
  cursor: pointer;
  position: relative;
  padding: 12px 8px 12px 40px;
  list-style-type: none;
  background: #eee;
  font-size: 18px;
  transition: 0.2s;
  
  /* make the list items unselectable */
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Set all odd list items to a different color (zebra-stripes) */
ul li:nth-child(odd) {
  background: #f9f9f9;
}

/* Darker background-color on hover */
ul li:hover {
  background: #ddd;
}

/* When clicked on, add a background color and strike out text */
ul li.checked {
  background: #888;
  color: #fff;
  text-decoration: line-through;
}

/* Add a "checked" mark when clicked on */
ul li.checked::before {
  content: '';
  position: absolute;
  border-color: #fff;
  border-style: solid;
  border-width: 0 2px 2px 0;
  top: 10px;
  left: 16px;
  transform: rotate(45deg);
  height: 15px;
  width: 7px;
}

/* Style the close button */
.close {
  position: absolute;
  right: 0;
  top: 0;
  padding: 12px 16px 12px 16px;
}

.close:hover {
  background-color: skyblue;
  color: white;
}

/* Style the header */
.header {

  padding: 30px 40px;
  color: white;
  text-align: center;
}

/* Clear floats after the header */
.header:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the input */
input {
  margin: 0;
  border: none;
  border-radius: 0;
  width: 75%;
  padding: 10px;
  float: left;
  font-size: 16px;
}

/* Style the "Add" button */
.addBtn {
  padding: 14px;
  width: 25%;
  color: #fff;
  float: left;
  text-align: center;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s;
  border-radius: 0;
}

/*.addBtn:hover {
  background-color: #bbb;
}*/


#myInput{
	width: 100%;
	border: solid 1px skyblue;
	margin-top: -25px;
}

.addBtn img{
	position: relative;
	width: 40px;
	height: 40px;
	border-radius: 30px;
	margin-left: 593px;
	margin-top: -35px;
}


footer{
	background-color: #262626;
	width: 100%;
	height: auto;
	margin-top: 50px;
}

footer p{
	font-family: Helvetica, Arial, sans-serif;
	font-size: 20px;
	margin-left: 10px;
	color: #fff;
}


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
		<a href="../UiTEvents/event.php" class=" cool-link">Events</a>
		<div id="navbar-right">
	  	<button id="myBtn"><img src="images/reminder.png" alt="Notification" width="31"></button>
	  	<a href="../HomePage/To Do List.php"><img src="images/note.png"></a>
		<a href="../remind/remind.php">	<img src="images/noti.png"></a>
		

		</div>
		</div>
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
	<div style="margin-top: 0px;" class="content">
		<img src="../HomePage/images/todolist.jpg" style="width:100%; height:600px; postion:relative; margin-top: 70px; ">
		<div class="list">
			<h2 style="font-family:Broadway ;text-align: center; color: #fff;">Today</h2>
			<div id="myDIV" class="header">
  
		 		 <input type="text" id="myInput" placeholder="Title...">
		  
		  
			</div>
		<div>
			<ul id="myUL">
			  <li>02 Homework</li>
			  <li class="checked">04 Project</li>
			  <li>Watch Netflix</li> 
			</ul>
		</div>
		<script>
		// Create a "close" button and append it to each list item
		var myNodelist = document.getElementsByTagName("LI");
		var i;
		for (i = 0; i < myNodelist.length; i++) {
		  var span = document.createElement("SPAN");
		  var txt = document.createTextNode("\u00D7");
		  span.className = "close";
		  span.appendChild(txt);
		  myNodelist[i].appendChild(span);
		}

		// Click on a close button to hide the current list item
		var close = document.getElementsByClassName("close");
		var i;
		for (i = 0; i < close.length; i++) {
		  close[i].onclick = function() {
		    var div = this.parentElement;
		    div.style.display = "none";
		  }
		}

		// Add a "checked" symbol when clicking on a list item
		var list = document.querySelector('ul');
		list.addEventListener('click', function(ev) {
		  if (ev.target.tagName === 'LI') {
		    ev.target.classList.toggle('checked');
		  }
		}, false);

		// Create a new list item when clicking on the "Add" button
		function newElement() {
		  var li = document.createElement("li");
		  var inputValue = document.getElementById("myInput").value;
		  var t = document.createTextNode(inputValue);
		  li.appendChild(t);
		  if (inputValue === '') {
		    alert("You must write something!");
		  } else {
		    document.getElementById("myUL").appendChild(li);
		  }
		  document.getElementById("myInput").value = "";

		  var span = document.createElement("SPAN");
		  var txt = document.createTextNode("\u00D7");
		  span.className = "close";
		  span.appendChild(txt);
		  li.appendChild(span);

		  for (i = 0; i < close.length; i++) {
		    close[i].onclick = function() {
		      var div = this.parentElement;
		      div.style.display = "none";
		    }
		  }
		}
		</script>
	</div>
	</div>
	<div>
	<span onclick="newElement()" class="addBtn"><img src="images/add-btn.png"></span>
	</div>
<!--
	<footer align="center">
		<br>
			<p style="font-size: 15px;" align="center">UNIVERSITY OF INFORMATION TECHNOLOGY</p>
			
			<p style="font-size: 15px;" align="center">University Of Information Technology, Parami Road, Hlaing Campus, Yangon, Myanmar</p>
			
			<p style="font-size: 15px;" align="center">Main Switchboard:</p>
		<p style="font-size: 15px;" align="center"><a  style=" text-decoration: underline; color: white; " href="tel:959519664254">Tel: +95(9)519 664 254</a></p>
		<p style="font-size: 15px;" align="center"><a style="text-decoration: underline; color: white; " href="hr.admin@uit.edu.mm">hr.admin@uit.edu.mm</a></p>
			
	
	</footer>
-->
</body>
</html>