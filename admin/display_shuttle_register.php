<?php
$q=mysqli_query($conn,"select * from registers ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No Shuttle Register exists !!!</h2>";
}
else
{
?>
<h2 style="color:dodgerblue">All Shuttle Register</h2>

<table class="table table-bordered">
	<Tr class="success">
		<th>ID</th>
		<th>User Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Time</th>
	</Tr>

	<?php 
$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['first_name']." ".$row['last_name']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['phone']."</td>";
echo "<td>".$row['time']."</td>";
echo "</Tr>";
$i++;
}
	
		?>
</table>
<?php }?>