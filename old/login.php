<?php
include('connect.php');
session_start();
$username= $_POST['userName'];
$rollnumber=$_POST['rollNumber'];
$password= $_POST['password'];
$query= "SELECT * FROM register
WHERE userName = '$username'
AND rollNumber = '$rollnumber' AND
password = '$password'";
$result = mysqli_query($conn,$query);
$count= mysqli_num_rows($result);
$arr = mysqli_fetch_array($result);
if ($count==0)
{
	echo "<script> alert('Email or rollnumber or Password Incorrect. Please Try again !!') </script>";
	
	echo"<script> location= 'T 2.0.php'</script>";
}
else{
	$_SESSION['rollnumber']=$arr[0];
	$_SESSION['username']=$arr[1];
	$_SESSION['auth']=1;
	echo "<script> alert('Logged in successfilly ') </script>";
	echo"<script> location= 'profile.php'</script>";
}



	?>