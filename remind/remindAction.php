			<?php
$conn=mysqli_connect("localhost","root","","se");
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(isset($_POST['save']))
{	$email=$_GET['email'];
	$date=$_POST['date'];
	$description=$_POST['description'];
	$sql="INSERT into remind (email,reminder,description) VALUES ('$email','$date','$description')";
	if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
		echo"<script>location= '../remind/remind.php'</script>";
		
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
	
}

?>
<html>
<head>
	<link href="../remind/remind.php">
	</head>

</html>
