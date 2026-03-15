<?php

$db_host = "localhost";
$db_user = "webuser";
$db_password = "mypassword";
$db_name = "contacts_db";

$dbc = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$dbc) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>

<?php //SQLI file for pinging to the database.



mysqli_report(MYSQLI_REPORT_OFF);

// Attempt to connect to MySQL and print out messages:
if ($dbc = @mysqli_connect('localhost','webuser', 'mypassword', 'jaikin_assign_final')) {
	
	print '<p>Successfully connected to the database!</p>';
	
	//mysqli_close($dbc); // Close the connection.

} else {

	print '<p style="color: red;">Could not connect to the database:<br>' . mysqli_connect_error() . '.</p>';

}

?>