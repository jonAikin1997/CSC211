<?php // Home page, providing links to the other webpages.

// Include the header:
include('templates/header.html');

// Need the database connection:
include('../mysqli_connect.php');

// Define the query...
//mysqli_close($dbc); // Close the connection.
?>

<h1>Database Options</h1>
<a href="register.php">Sign Up</a><br>
<a href="login.php">Login</a><br><br>
<a href="../add_entry.php">Add Record</a><br>
<a href="../view_entries.php">View Records</a><br>
<a href="../delete_entry.php">Delete Record</a><br>
<a href="../list.php">Display Files</a>

<?php
include('templates/footer.html'); // Include the footer.
?>