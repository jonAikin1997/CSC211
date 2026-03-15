<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<style type="text/css" media="screen">
		.error { color: red; }
	</style>
</head>
<body>
<h1>Register</h1>
<?php
require('../mysqli_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$problem = FALSE;

$fn = trim($_POST['first_name']);
$ln = trim($_POST['last_name']);
$address = trim($_POST['address']);
$city = trim($_POST['city']);
$state = trim($_POST['state']);
$phone = trim($_POST['phone']);
$email = trim($_POST['email']);
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

if (empty($fn)) {
    echo '<p class="error">Please enter your first name.</p>';
    $problem = TRUE;
}

if (empty($ln)) {
    echo '<p class="error">Please enter your last name.</p>';
    $problem = TRUE;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo '<p class="error">Invalid email address.</p>';
    $problem = TRUE;
}

if ($password1 != $password2) {
    echo '<p class="error">Passwords do not match.</p>';
    $problem = TRUE;
}

if (empty($address)) {
    echo '<p class="error">Please enter your address.</p>';
    $problem = TRUE;
}

if (empty($city)) {
    echo '<p class="error">Please enter your city.</p>';
    $problem = TRUE;
}

if (empty($state)) {
    echo '<p class="error">Please select a state.</p>';
    $problem = TRUE;
}

if (empty($phone)) {
    echo '<p class="error">Please enter your phone number.</p>';
    $problem = TRUE;
}

if (!$problem) {

$password = sha1($password1);

$query = "INSERT INTO users
(firstname, lastname, address, city, state, phone, email, password, date_registered)
VALUES
('$fn','$ln','$address','$city','$state','$phone','$email','$password', NOW())";

$r = mysqli_query($dbc,$query);

if ($r) {
    echo "<p>You are now registered!</p>";
} else {
    echo mysqli_error($dbc);
}

}

mysqli_close($dbc);

}
?>

<!--Form to display all fields on the webpage.--!>
<form action="register.php" method="post">
	<p>Please Fill in the Required Information</p>
	<p>First Name: <input type="text" name="first_name" size="20" value="<?php if (isset($_POST['first_name'])) { print htmlspecialchars($_POST['first_name']); } ?>"></p></br>
	<p>Last Name: <input type="text" name="last_name" size="20" value="<?php if (isset($_POST['last_name'])) { print htmlspecialchars($_POST['last_name']); } ?>"></p></br>
	<p>Address: <input type="text" name="address" size="20" value="<?php if (isset($_POST['address'])) { print htmlspecialchars($_POST['address']); } ?>"></p></br>
	<p>City: <input type="text" name="city" size="20" value="<?php if (isset($_POST['city'])) { print htmlspecialchars($_POST['city']); } ?>"></p></br>
	<p>State: <select name="state">
	<option value="">-- Select a State --</option> <!--This adds a blank selection placeholder. --> 
	<?php $states = array("AZ","CA","NV","TX","NM"); foreach ($states as $s) { echo "<option value=\"$s\">$s</option>";}?></select></p></br>
	<p>Phone: <input type="text" name="phone" size="13" value="<?php if (isset($_POST['phone'])) { print htmlspecialchars($_POST['phone']); } ?>"></p></br>
	<p>Email Address: <input type="email" name="email" size="50" value="<?php if (isset($_POST['email'])) { print htmlspecialchars($_POST['email']); } ?>"></p></br>
	<!--No repopulating passwords on reload. --!>
	<p>Password: <input type="password" name="password1" size="20"></p></br>
	<p>Confirm Password: <input type="password" name="password2"></p></br>
	<input type="submit" name="submit" value="Register">
</form>

<?php  // End of submission IF. ?>
</body>
</html>