<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
	<style>
	table {
		border-collapse: collapse;
		width: 50%;
		color: #588c7e;
		font-family: monospace;
		font-size: 20px;
		text-align: left;
	}
	th {
		background-color: #588c7e;
		color: white;
	}
	tr:nth-child(even){
		background-color: #f2f2f2;s
	}
</style>
</head>
<body>
	<table>
		<tr>
			<th>Id</th>
			<th>Description</th>
			<th>Due Date</th>
			<th>Remaining Days</th>
		</tr>
		<?php
		$conn=mysqli_connect("localhost","root","","se");
		if($conn->connect_error)
		{
			die("Connection failed:". $conn-> connect_error);
		}
		$sql = "SELECT id,reminder,description from remind";
		$result=$conn-> query($sql);
		if($result->num_rows >0)
		{
			while($row = $result->fetch_assoc())
			{
				
			echo"<tr><td>". $row["id"]."</td><td>".$row["description"]."</td><td>".$row["reminder"]."</td><td>".time_remaining($row["reminder"])."</td></tr>";
			}
		echo "</table>";
		}
		else{
		echo "0 result";
	}
	$conn->close();
		?>
	</table>

</body>
</html>
<?php  
 date_default_timezone_set('Asia/Yangon');  
 function time_remaining($timestamp)  
 {  
      $time_ago = strtotime($timestamp);  
      $current_time = time();  
      $time_difference = $time_ago-$current_time; 
	  $seconds = $time_difference;  
	  $days          = round($seconds / 86400); 
	  return $days;
 }  
 ?>  