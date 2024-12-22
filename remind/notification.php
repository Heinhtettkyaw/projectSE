<?php 
require('connection.php');
extract($_POST);
$q=mysqli_query($conn,"select * from world");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any notice for You !!!</h2>";
}
else
{
?>


<table>
	<Tr>
		<th>Id</th>
		<th>Day_left</th>
		
	
		<th>Description</th>
		</Tr>
		<?php


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['day']."</td>";

echo "<td>".$row['description']."</td>";
echo "</Tr>";
$i++;
}
		?>

</table>
<?php }?>
