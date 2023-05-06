

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML 5 Boilerplate</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Check if the user is already logged in
  $logged_in_users = file_get_contents('logged_in_users.txt');
  $logged_in_users = explode("\n", $logged_in_users);
  if (in_array($username, $logged_in_users)) {
    $_SESSION['message'] = "You Cannot Take the Test Twice";
    header('Location: index.php');
    exit();
  }

  // Check if the username and password are valid
  $txt_file = file_get_contents('passwd.txt');
  $rows = explode("\n", $txt_file);
  foreach ($rows as $row) {
    $fields = explode(":", $row);
    if ($fields[0] == $username && $fields[1] == $password) {
      // Add the user to the list of logged-in users
      $logged_in_users[] = $username;
      file_put_contents('logged_in_users.txt', implode("\n", $logged_in_users));

      // Set session variables
      $_SESSION['username'] = $username;
      $_SESSION['token'] = uniqid();
      $_SESSION["login_time"] = time(); // Store login time in seconds

	// Check if 15 minutes have passed since login time
	if (time() - $_SESSION["login_time"] > 900) { // 900 seconds = 15 minutes
 	 // If 15 minutes have passed, destroy the session and redirect to login page
 	 session_destroy();
 	 header("Location: index.php");
 	 exit;
	}

      // Redirect to the desired link
      header('Location: quiz.php');
      exit();
    }
  }

  // If username and password do not match any lines in the text file
  $_SESSION['message'] = "Invalid username or password";

  // Redirect to the desired page
  header('Location: index.php');
  exit();
}
?>






	<script src="index.js"></script>
  </body>
</html>
