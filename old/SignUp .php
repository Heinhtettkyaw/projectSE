<?php
include ('connect.php');
$username= $_POST['userName1'];
$rollNumber= $_POST['rollNumber1'];
$email=$_POST['contactEmail'];
$password1= $_POST['password1'];
$cpassword1= $_POST['cpassword1'];
$location= $_POST['Location'];

if($password1== $cpassword1)
{
$query = "Insert INTO register
(userName, rollNumber,email,password,checkpass,location) VALUES ('$username','$rollNumber','$email','$password1','$cpassword1','$location')";
	mysqli_query($conn,$query);
	echo"<script> alert('Account successfully registered!!.......')</script>";
	echo"<script> location= 'T 2.0.php'</script>";
}
else
{
	echo"<script> alert ('Make sure the passwords are match.')</script>";
	echo"<script> location= 'T 2.0.php'</script>";
}
?>