<?php

$name = $_POST['name'];
$item = $_POST['item'];

// Connect to the MySQL database
$servername = "spring-2023.cs.utexas.edu";
$username = "cs329e_bulko_kelleron";
$password = 'inset$truce$Turk';
$dbname = "cs329e_bulko_kelleron";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO dinner (name, item) VALUES ('$name', '$item')";

if ($conn->query($sql) === TRUE) {
  // Query the "dinner" table to get the updated data
  $result = $conn->query("SELECT name, item FROM dinner ORDER BY id ASC;");

  // Display the table in HTML format
  $table = "<table>";
  $table .= "<tr><th>Name</th><th>Item</th></tr>";
  while($row = $result->fetch_assoc()) {
    $table .= "<tr><td>" . $row["name"] . "</td><td>" . $row["item"] . "</td></tr>";
  }
  $table .= "</table>";
  echo $table;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>




