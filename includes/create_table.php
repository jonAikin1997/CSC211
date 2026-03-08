<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Create a Table</title>
</head>
<body>
<?php // Script 12.3 - create_table.php
/* This script connects to the MySQL server, selects the database, and creates a table. */

//Create Connection
$conn = new mysqli('localhost', 'root', 'i2e4', 'myblog');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to create table
$sql = "CREATE TABLE entries (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(100) NOT NULL,
	entry TEXT NOT NULL,
	date_entered DATETIME NOT NULL
	) CHARACTER SET utf8";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "<p>The table has been created!</p>";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();
?>
</body>
</html>