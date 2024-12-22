<?php
include('ConnectB.php');
session_start();
$email= $_POST['email'];
$pass= $_POST['pass'];
$p=md5($pass);
$query = "SELECT * FROM user where email='$email' AND pass= '$p'";
$result = mysqli_query($conn,$query);
$count= mysqli_num_rows($result);
$arr = mysqli_fetch_array($result);
if ($count==0)
{
	echo "<script> alert('Email or Password Incorrect. Please Try again !!') </script>";
	
	echo"<script> location= 'SLogIn.php'</script>";
}
else{
	$_SESSION['User_id']=$arr[0];
	$_SESSION['user']=$email;	$_SESSION['auth']=1;
	echo "<script> alert('Logged in successfully ') </script>";
	echo"<script> location= '../HomePage/HomePage.php'</script>";
}

?>
