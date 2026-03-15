<?php

require('mysqli_connect.php');

//This issues a command to the database via SQL to delete the selected entry.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$id = intval($_POST['id']);

$query = "DELETE FROM entries WHERE id=$id";

mysqli_query($dbc,$query);

}

header("Location: view_entries.php");

?>