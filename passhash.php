<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<?php

$password = "helloclass";

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

echo  $hashed_password;

?>
</body>
</html>