<?php
require('mysqli_connect.php');

$query = "SELECT title, entry, date_registered FROM users ORDER BY date_registered DESC";
$result = mysqli_query($dbc, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($dbc));
}

while ($row = mysqli_fetch_assoc($result)) {
    echo "<h3>" . $row['title'] . "</h3>";
    echo "<p>" . $row['entry'] . "</p>";
    echo "<p><em>" . $row['date_registered'] . "</em></p>";
    echo "<hr>";
}

mysqli_close($dbc);
?>

<h2>Add Record</h2>

<form method="post">
<p>
Entry Name:<br>
<input type="text" name="title" size="40">
</p>

<p>
Description:<br>
<textarea name="entry" rows="5" cols="40"></textarea>
</p>

<input type="submit" value="Add Record">

</form>