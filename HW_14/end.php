


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
<h1>The End of the Quiz</h1>

<?php
session_start();

// Get the current username from the session
$username = $_SESSION["username"];

// Read the contents of results.txt into an array
$score_list = file("results.txt", FILE_IGNORE_NEW_LINES);

// Find the user's score in the score list
$user_score = 0;
foreach ($score_list as $value) {
  $data = explode(",", $value);
  if ($data[0] == $username) {
    $user_score = intval($data[1]);
    break;
  }
}

// Display the user's score
echo "Your final score is: " . $user_score . "/60";
?>






	<script src="index.js"></script>
  </body>
</html>
