<?php

include 'db.php';

$sql="SELECT * FROM std_data ORDER BY id ASC";

$result=mysqli_query($conn,$sql);

echo "<table border='1' cellpadding='10'>";

echo "<tr>
<th>ID</th>
<th>Name</th>
<th>Contact</th>
<th>Email</th>
<th>Date of Joining</th>
</tr>";

while($row=mysqli_fetch_assoc($result))
{

echo "<tr>";

echo "<td>".$row['Id']."</td>";

echo "<td>".$row['name']."</td>";

echo "<td>".$row['number']."</td>";

echo "<td>".$row['email']."</td>";

echo "<td>".$row['DOJ']."</td>";

echo "</tr>";

}

echo "</table>";

?>