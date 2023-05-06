<html>
<head>
<title> php for self grading quiz</title>
</head>
<body>
  <?php

  $radio1 = $_POST["radio1"];
  $radio2 = $_POST["radio2"];
  $checkbox1 = $_POST["checkbox1"];
  $checkbox2 = $_POST["checkbox2"];
  $textbox1 = $_POST["textbox1"];
  $textbox2 = $_POST["textbox2"];
  $textans1 = "HTTP";
  $textans2 = "favicon";
  $correct = 0;

  if($radio1 == "FALSE"){
  $correct = $correct + 1;
  }

  if($radio2 == "TRUE"){
  $correct = $correct + 1;
  }


  function grade_check1(){
    global $checkbox1;
    global $correct;
    if(sizeof($checkbox1) > 1){
      return;}
    elseif($checkbox1[0] == 2){
      $correct = $correct + 1;
      return $correct;}
    }



  function grade_check2(){
    global $checkbox2;
    global $correct;
    if(sizeof($checkbox2) > 1){
      return;}
    elseif($checkbox2[0] == 3){
      $correct = $correct + 1;
      return $correct;}
    }
  
  if(strcasecmp($textbox1,$textans1)==0){
    $correct = $correct + 1;}

  if(strcasecmp($textbox2,$textans2)==0){
    $correct = $correct + 1;}





  grade_check1();
  grade_check2();

  echo("<center><h1>You got " .$correct. " out of 6 right!</h1></center>");

  ?>

</body>

</html>

