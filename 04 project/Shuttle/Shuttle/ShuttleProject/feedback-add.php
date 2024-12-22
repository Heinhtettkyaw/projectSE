<?php 
include("contact.php");
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "";
		$dbname = "shuttle";
		$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
		mysqli_select_db($conn, $dbname);
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$feedback = $_POST['feedback'];
		if($first_name && $last_name && $feedback)
		{
			$sql = "INSERT INTO feedbacks (first_name, last_name, feedback, created_date, modified_date)
			VALUES ('$first_name', '$last_name', '$feedback', now(), now())";
			mysqli_query($conn, $sql);

			?>
			<script type = "text/javascript">
		alert("Thank you for your feedback!");
			</script>
	<?php
		}
		else
		{
			header("location: contact.php");
		}
		
	?>

	