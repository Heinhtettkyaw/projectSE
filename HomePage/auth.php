<?php
session_start();
$auth= isset($_SESSION['auth']);
if(!$auth)
{
	echo "<script> alert('Please login to continue') </script>";
	echo "<script>location= '../MainPage/T 2.0.php'</script>";
}
else
{
	
}
?>