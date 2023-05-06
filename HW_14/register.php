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
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Read the contents of the passwd.txt file
  $txt_file = file_get_contents('passwd.txt');

  // Split the contents of the file into an array of lines
  $rows = explode("\n", $txt_file);

  // Check if the username already exists in the file
  $exists = false;
  foreach ($rows as $row) {
    $fields = explode(":", $row);
    if ($fields[0] == $username) {
      $exists = true;
      break;
    }
  }

  // If the username already exists, output an error message
if ($exists) {
  $error_message = "Username already exists";
  $url = "index.php?error=" . urlencode($error_message);
  header('Location: ' . $url);
  exit();
} else {
  // If the username does not exist, append the new user to the file
    $file = fopen("passwd.txt", "a");
    fwrite($file, $username . ":" . $password . "\n");
    fclose($file);

  // Redirect to the desired page
  header('Location: index.php');
  exit();
}

}
?>






	<script src="index.js"></script>
  </body>
</html>
