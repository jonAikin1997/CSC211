<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<?php
// This tells you the difference in characters between two strings.
echo strcmp("Jon", "Jon");
echo "<br>";
// string 1 is 1 more than string 2. Result is a 1:0 ratio.
echo strcmp("Jon Aikin", "John Aiken");

echo "<br> <br>";

// This is a binary-safe, case-sensitive function. 
// It finds the difference between the alphanumeric value of each string's letters.
echo strcasecmp("Jon Aikin","Jon Aikin");
echo "<br>";
// E is 4 less than I. Ratio is 0:4.
echo strcasecmp("Jon Aikin","JOn AiKeN");

echo "<br> <br>";
?>

<?php

// This function finds a string inside other strings. Exlcudes if found.
echo strstr("Jon Aikin","Aikin",true);
// The second string occurs in the second. Only yields 'Jon'.
?>
</body>
</html>