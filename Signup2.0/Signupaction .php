<?php
require ('ConnectB.php');
//if(isset($_POST['signup'])){
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$mob = $_POST['mob'];
$gen = $_POST['gen'];

$yy = $_POST['yy'];
$mm = $_POST['mm'];
$dd = $_POST['dd'];
$dob=$yy."-".$mm."-".$dd;
$p=md5($pass);
	$sql_u= "SELECT * FROM user where name= '$name'";
	$sql_e= "SELECT * FROM user where email= '$email'";
	$res_u= mysqli_query($conn,$sql_u);
	$res_e= mysqli_query($conn,$sql_e);
	
	if (mysqli_num_rows($res_u)>0){
		$name_error ="Sorry ..... Username has already taken";
		echo "<script>alert ('Username has already taken');</script>";
		echo"<script> location= '../SignUp/SSignup.php' </script>";
	}else if (mysqli_num_rows($res_e)>0){
		$email_error= "Sorry ....Email has already taken";
			echo "<script>alert ('email has already taken');</script>";
		echo"<script> location= '../SignUp/SSignup.php' </script>";
	}else {


$query= "Insert INTO user
(name,email,pass,mobile,gender,dob) VALUES ('$name','$email','$p','$mob','$gen','$dob')";
mysqli_query($conn,$query);

	echo"<script> alert('Account successfully registered!!.......')</script>";
	echo"<script> location= '../Login2.0/Login2.0.php' </script>";
	}
?>
