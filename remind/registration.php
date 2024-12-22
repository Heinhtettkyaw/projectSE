<?php
$conn=mysqli_connect("localhost","root","","se");
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(isset($_POST['save']))
{
	$date=$_POST['date'];
	$description=$_POST['description'];
	$sql="INSERT into remind (reminder,description) VALUES ('$date','$description')";
	if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
	
}

?>
<html>
	<head>
		<style>
	body {
		background-color: blue;
	}
</style>
	</head>
	<body>
<h2><b>REGISTRATION FORM</b></h2>
		<form method="POST" enctype="multipart/form-data">
	
				<tr>
					<td>Description</td>
					<Td><input  type="text" name="description" required/></td>
				</tr><br>
				
	
				<tr>
					<td>Date</td>
					<Td>
					<input type="date" name="date" required"/>
					</td>
				</tr><br>

				<tr>


<Td>
<input type="submit" value="Save" name="save"/><br></td>
<td>
<a href="data.php">Remind</a>
					</td>
				</tr>
		</form>
	</body>
</html>
