<?php
$q=mysqli_query($conn,"select * from feedbacks ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No Shuttle Feedbacks exists !!!</h2>";
}
else
{
?>
<h2 style="color:dodgerblue">All Shuttle Feedbacks</h2>

<table class="table table-bordered">
	<Tr class="success">
		<th>ID</th>
		<th>User Name</th>
		<th>Feedback</th>
		<th>Created Date</th>
	</Tr>

	<?php 
$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['first_name']." ".$row['last_name']."</td>";
echo "<td>".$row['feedback']."</td>";
echo "<td>".$row['created_date']."</td>";
echo "</Tr>";
$i++;
}
	
		?>
</table>
<?php }?>