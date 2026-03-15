<?php

//Iterates each file in the directory.
$files = scandir("../jaikin-assign-final");

echo "<h2>Files in Directory</h2>";

foreach ($files as $file) {
    echo $file . "<br>";
}

?>