<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register php page</title>
  </head>
  <body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Open the text file for reading
  $file = fopen("passwd.txt", "r");

  // Loop through the file line by line
  $username_exists = false;
  while (!feof($file)) {
    $line = fgets($file);
    $line_parts = explode(":", $line);
    $stored_username = trim($line_parts[0]);

    // Check if the submitted username already exists in the file
    if ($stored_username == $username) {
      $username_exists = true;
      break;
    }
  }

  // Close the file
  fclose($file);

  if ($username_exists) {
    echo "Username already exists.";
  } else {
    // Open the text file for appending
    $file = fopen("passwd.txt", "a");

    // Append the new username and password to the file
    fwrite($file, $username . ":" . $password . "\n");

    // Close the file
    fclose($file);

    echo "Registration successful!";
    $redirectUrl = isset($_POST['redirectUrl']) ? $_POST['redirectUrl'] : 'index.html';
    
    // Set cookies for username and password
    setcookie('username', $username, time()+120,"/");
    setcookie('password', $password, time()+120,"/");
    
    // Redirect to the desired link
    header("Location: " . $redirectUrl);

    //$file_contents = file_get_contents("passwd.txt");
    //echo nl2br($file_contents);

    exit;
  }
}
?>

</body>
</html>
