<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	if ($username == "potluck" && $password == "feedMeN0w") {
		header("Location: sign.php");
		exit;
	} else {
		echo "Invalid username or password";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<h2>Potluck Login Form</h2>
	<form action="" method="post">
		<label for="username">Username:</label><br>
		<input type="text" id="username" name="username"><br>
		<label for="password">Password:</label><br>
		<input type="password" id="password" name="password"><br><br>
		<input type="submit" value="Submit">
	</form> 
</body>
</html>

