<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $url = $_POST['url'];

  $txt_file = file_get_contents('passwd.txt');
  $rows = explode("\n", $txt_file);

  foreach ($rows as $row) {
    $fields = explode(":", $row);
    if ($fields[0] == $username && $fields[1] == $password) {
      // Redirect to the desired link
      header('Location: ' . $url);
      exit();
    }
  }

  // If username and password do not match any lines in the text file
  echo "<center><h1>Invalid username or password</h1></center>";
}
?>







    <script src="script.js"></script>
  </body> </html>

