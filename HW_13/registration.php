<!DOCTYPE html>
<html>
  <head>
   <?php
   $redirectUrl = isset($_GET['redirectUrl']) ? $_GET['redirectUrl'] : '';
   ?>
    <meta charset="utf-8">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <center><h1>Registration Page</h1></center>
      <center>
      <form action="register.php" method="POST">
      <label for="username">Username:</label>
      <input type="text" name="username" id="username" required><br><br>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" required><br><br>
      <input type="hidden" name="redirectUrl" value="<?php echo htmlspecialchars($redirectUrl); ?>">
      <input type="submit" value="Register">
      </form>
      </center>
    <script src="script.js"></script>
  </body>
</html>
