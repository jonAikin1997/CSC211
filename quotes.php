<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Quotes</title>
</head>
<body>
<?php

// Single or double quotation marks won't matter here:
$first_name = 'Jonathan';
$last_name = "Aikin";

//Literally due to single quote marks.
$name1 = '$first_name $last_name';
//Extrapolated due to double quote marks.
$name2 = "$first_name $last_name";

//Data is used extrapolated.
print "<h1>Double Quotes</h1>
<p>name1 is $name1 <br>
name2 is $name2</p>";

//Data is taken literally.
print '<h1>Single Quotes</h1>
<p>name1 is $name1 <br>
name2 is $name2</p>';

?>
</body>
</html>