<?php
require('mysqli_connect.php');

//Sets up SQL framework to mirror data to this page.
$query = "SELECT * FROM entries ORDER BY date_entered DESC";
$r = mysqli_query($dbc,$query);

echo "<h2>Database Records</h2>";
echo "<table border=1>";

echo "<tr>

<th>Entry Name</th>
<th>Description</th>
<th>ID</th>
<th>Delete</th>
</tr>";

//Requests required data.
while ($row = mysqli_fetch_assoc($r)) {

echo "<tr>";

echo "<td>".$row['title']."</td>";

echo "<td>".$row['entry']."</td>";

echo "<td>".$row['id']."</td>";

echo "<td>
<form action='delete_entry.php' method='post'>
<input type='hidden' name='id' value='".$row['id']."'>
<input type='submit' value='Delete'>
</form>
</td>";

echo "</tr>";
}

echo "</table>";

mysqli_close($dbc);
?>