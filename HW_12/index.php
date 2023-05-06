<?php
session_start();
$box1 = $_SESSION["box1"];
$box2 = $_SESSION["box2"];
$box3 = $_SESSION["box3"];
$box4 = $_SESSION["box4"];
$box5 = $_SESSION["box5"];
$box6 = $_SESSION["box6"];
$box7 = $_SESSION["box7"];
$box8 = $_SESSION["box8"];
$box9 = $_SESSION["box9"];
$box10 = $_SESSION["box10"];




?>
<html>
<head> 
<title> Programming Assignment 12 </title>

<head>
      <style>
         td, th {
            text-align: center;
         }
		 table{
		   width:500px;
		   margin-top:10%;}
      </style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
$(document).ready(function() {
  var box1 = '<?php echo $box1; ?>';
  var box2 = '<?php echo $box2; ?>';
  var box3 = '<?php echo $box3; ?>';
  var box4 = '<?php echo $box4; ?>';
  var box5 = '<?php echo $box5; ?>';
  var box6 = '<?php echo $box6; ?>';
  var box7 = '<?php echo $box7; ?>';
  var box8 = '<?php echo $box8; ?>';
  var box9 = '<?php echo $box9; ?>';
  var box10 = '<?php echo $box10; ?>';

  if (box1.length > 0) {
       $( "#box1" ).replaceWith("<span>" + box1 + "</span>");}

  if (box2.length > 0) {
       $( "#box2" ).replaceWith("<span>" + box2 + "</span>");}


  if (box3.length > 0) {
       $( "#box3" ).replaceWith("<span>" + box3 + "</span>");
  }


  if (box4.length > 0) {
       $( "#box4" ).replaceWith("<span>" + box4 + "</span>");
  }


  if (box5.length > 0) {
       $( "#box5" ).replaceWith("<span>" + box5 + "</span>");
  }

  if (box6.length > 0) {
       $( "#box6" ).replaceWith("<span>" + box6 + "</span>");
  }

  if (box7.length > 0) {
       $( "#box7" ).replaceWith("<span>" + box7 + "</span>");
  }


  if (box8.length > 0) {
       $( "#box8" ).replaceWith("<span>" + box8 + "</span>");
  }


  if (box9.length > 0) {
       $( "#box9" ).replaceWith("<span>" + box9 + "</span>");
  }


  if (box10.length > 0) {
       $( "#box10" ).replaceWith("<span>" + box10 + "</span>");
  }
  });



</script>

</head>

<body>



<form method="POST" action="./php.php">
<table align = "center" width = "30%" border = "2">
   <caption style="margin-bottom:0.25cm;"> <b>Sign-Up Sheet</b> </caption>
   <tr><th  style="width:130px"> Time </th><th> Name </th></tr>
   <tr><td> 8:00 am </td><td> <input id="box1" name="box1" type="text"/> </td></tr>
   <tr><td> 9:00 am </td><td> <input id="box2" name="box2" type="text" /> </td></tr>
   <tr><td> 10:00 am </td><td> <input id="box3" name="box3" type="text" /> </td></tr>
   <tr><td> 11:00 am </td><td> <input id="box4" name="box4" type="text" /> </td></tr>
   <tr><td> 12:00 pm </td><td> <input id="box5" name="box5" type="text" /> </td></tr>
   <tr><td> 1:00 pm </td><td> <input id="box6" name="box6" type="text" /> </td></tr>
   <tr><td> 2:00 pm </td><td> <input id="box7" name="box7" type="text" /> </td></tr>
   <tr><td> 3:00 pm </td><td> <input id="box8" name="box8" type="text" /> </td></tr>
   <tr><td> 4:00 pm </td><td> <input id="box9" name="box9" type="text" /> </td></tr>
   <tr><td> 5:00 pm </td><td> <input id="box10" name="box10" type="text" /> </td></tr>
</table>
<br>
<center>
<button type="submit" value="submit">Submit</button>
</center>
</form>

</body>
</html>
