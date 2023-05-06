<?php
session_start();
if (!isset($_SESSION['box1']) and !empty($_POST['box1'])){
      $_SESSION['box1'] = $_POST['box1'];}

if (!isset($_SESSION['box2']) and !empty($_POST['box2'])){
      $_SESSION["box2"] = $_POST["box2"];}

if (!isset($_SESSION['box3']) and !empty($_POST['box3'])){
      $_SESSION["box3"] = $_POST["box3"];}

if (!isset($_SESSION['box4']) and !empty($_POST['box4'])){
      $_SESSION["box4"] = $_POST["box4"];}

if (!isset($_SESSION['box5']) and !empty($_POST['box5'])){
      $_SESSION["box5"] = $_POST["box5"];}

if (!isset($_SESSION['box6']) and !empty($_POST['box6'])){
      $_SESSION["box6"] = $_POST["box6"];}

if (!isset($_SESSION['box7']) and !empty($_POST['box7'])){
      $_SESSION["box7"] = $_POST["box7"];}

if (!isset($_SESSION['box8']) and !empty($_POST['box8'])){
      $_SESSION["box8"] = $_POST["box8"];}

if (!isset($_SESSION['box9']) and !empty($_POST['box9'])){
      $_SESSION["box9"] = $_POST["box9"];}

if (!isset($_SESSION['box10']) and !empty($_POST['box10'])){
      $_SESSION["box10"] = $_POST["box10"];}
?>

<html>
<head>
<title> php for sign up sheet</title>
</head>
<body>
  <?php
  header("Location: index.php");
  ?>
</body>
</html>
