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
	if (isset($_SESSION['message'])) {
		echo "<center><h1>" . $_SESSION['message'] . "</h1></center>";
		unset($_SESSION['message']);
	}
	?>

<?php
if (isset($_GET['error'])) {
  $error_message = $_GET['error'];
  echo "<center><h1>" . htmlspecialchars($error_message) . "</h1></center>";
}
?>






<center>
    <button type="button" id="register-btn" onclick="register()">Register</button>
    <button type="button" id="login-btn" onclick="login()">Login</button>
</center>

    <!-- The form login -->
    <div class="form-popup" id="login-form">
      <form action="login.php" class="form-container" method="POST">
        <h1>Login</h1>
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>
        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>
        <button type="submit" class="btn">Login</button>
        <button type="button" class="btn cancel" onclick="closeForm('login-form')">Close</button>
      </form>
    </div>

    <!-- The form register -->
    <div class="form-popup" id="register-form">
      <form action="register.php" class="form-container" method="POST">
        <h1>Register</h1>
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>
        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>
        <input type="hidden" name="url" id="register-link" value="">
        <button type="submit" class="btn">Register</button>
        <button type="button" class="btn cancel" onclick="closeForm('register-form')">Close</button>
      </form>
    </div>

    <script>
      function register(url) {
        document.getElementById("register-form").style.display = "block";
      }

      function login() {
        document.getElementById("login-form").style.display = "block";
      }

      function closeForm(formId) {
        document.getElementById(formId).style.display = "none";
      }
    </script>

  </body>
</html>
