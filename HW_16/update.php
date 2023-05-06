<?php

// Connect to the database
$servername = "spring-2023.cs.utexas.edu";
$username = "cs329e_bulko_kelleron";
$password = 'inset$truce$Turk';
$dbname = "cs329e_bulko_kelleron";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT password FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($row["password"] == $password) {
            // Username and password match, return success message
            echo "The username and password are confirmed.";
        } else {
            // Password doesn't match, update password and return success message
            $sql = "UPDATE users SET password='$password' WHERE username='$username'";
            if (mysqli_query($conn, $sql)) {
                echo "The password has been updated.";
            } else {
                echo "Error updating password: " . mysqli_error($conn);
            }
        }
    } else {
        // Username not in database, add user and return success message
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        if (mysqli_query($conn, $sql)) {
            echo "You have successfully registered.";
        } else {
            echo "Error inserting data: " . mysqli_error($conn);
        }
    }
}

// Close the database connection
mysqli_close($conn);

?>


