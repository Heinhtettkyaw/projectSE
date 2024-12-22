<?php 
include("registeration.php");
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "";
		$dbname = "shuttle";
		$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
		mysqli_select_db($conn, $dbname);
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$time = $_POST['time'];
		if($first_name && $last_name && $email && $phone && $time)
		{
			$sql = "INSERT INTO registers (first_name, last_name, email, phone, time, created_date, modified_date)
			VALUES ('$first_name', '$last_name', '$email', '$phone', '$time', now(), now())";
			mysqli_query($conn, $sql);

			?>
			<script type = "text/javascript">
		alert("Thank You! We'll contact you back.");
			</script>
	<?php
		}
		else
		{
			header("location: registeration.php");
		}
		
	?>

	