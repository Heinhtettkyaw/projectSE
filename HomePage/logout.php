<?php 
session_start();
session_destroy();
echo"<script>alert('logout success!!!')</script>";
echo"<script>location='../MainPage/T 2.0.php'</script>";
?>