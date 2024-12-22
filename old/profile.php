<?php
include('auth.php');
$username= $_SESSION['username'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>MyUiT</title>
	</head>
	<body>
		<h1><?= $username?>'s profile</h1>
	</body>
</html>