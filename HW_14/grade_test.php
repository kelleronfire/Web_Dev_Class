

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


if (isset($_GET['function']) && $_GET['function'] === 'q1') {
  q1();
}elseif (isset($_GET['function']) && $_GET['function'] === 'q2') {
  q2();
}elseif (isset($_GET['function']) && $_GET['function'] === 'q3') {
  q3();
}elseif (isset($_GET['function']) && $_GET['function'] === 'q4') {
  q4();
}elseif (isset($_GET['function']) && $_GET['function'] === 'q5') {
  q5();
}elseif (isset($_GET['function']) && $_GET['function'] === 'q6') {
  q6();}

function q1() {
  $radio1 = $_POST["radio1"];
  if ($radio1 == "FALSE") {
    $username = $_SESSION["username"];
    // Read contents of results.txt into an array
    $score_list = file("results.txt", FILE_IGNORE_NEW_LINES);

    // Check if username exists in the score list
    $user_found = false;
    foreach ($score_list as $key => $value) {
      $data = explode(",", $value);
      if ($data[0] == $username) {
        // Increment score by 10
        $data[1] = intval($data[1]) + 10;
        $score_list[$key] = implode(",", $data);
        $user_found = true;
        break;
      }
    }

    // If username doesn't exist in results.txt, add it to the list with a score of 10
    if (!$user_found) {
      $new_score = "$username,10";
      $score_list[] = $new_score;
    }
    // Write updated score list to results.txt
    file_put_contents("results.txt", implode("\n", $score_list));
    header("Location: q2.html");
    exit;
  } else {
    // Redirect user to the next question when they answer wrong
    header("Location: q2.html");
    exit;
  }
}


function q2(){
    $radio2 = $_POST["radio2"];
    $username = $_SESSION["username"];
    // Read contents of results.txt into an array
    $score_list = file("results.txt", FILE_IGNORE_NEW_LINES);

    if ($radio2 == "TRUE") {
        // Check if username exists in the score list
        $user_found = false;
        foreach ($score_list as $key => $value) {
            $data = explode(",", $value);
            if ($data[0] == $username) {
                // Increment score by 10 to the second element
                $data[1] = intval($data[1]) + 10;
                $score_list[$key] = implode(",", $data);
                $user_found = true;
                break;
            }
        }

        // If username doesn't exist in results.txt, add it to the list with a score of 10
        if (!$user_found) {
            $new_score = "$username,10";
            $score_list[] = $new_score;
        }
    }

    // Write updated score list to results.txt
    file_put_contents("results.txt", implode("\n", $score_list));
    header("Location: q3.html");
    exit;
}



function q3() {
  $checkbox1 = $_POST["checkbox1"];
  if (sizeof($checkbox1) > 1) {
    // this is when the answer is wrong
    header("Location: q4.html");
    exit;
  } elseif ($checkbox1[0] == 2) {
    // this is when the answer is right
    $username = $_SESSION["username"];
    // Read contents of results.txt into an array
    $score_list = file("results.txt", FILE_IGNORE_NEW_LINES);

    // Check if username exists in the score list
    $user_found = false;
    foreach ($score_list as $key => $value) {
      $data = explode(",", $value);
      if ($data[0] == $username) {
        // Increment score by 10
        $data[1] = intval($data[1]) + 10;
        $score_list[$key] = implode(",", $data);
        $user_found = true;
        break;
      }
    }

    // If username doesn't exist in results.txt, add it to the list with a score of 10
    if (!$user_found) {
      $new_score = "$username,10";
      $score_list[] = $new_score;
    }
    // Write updated score list to results.txt
    file_put_contents("results.txt", implode("\n", $score_list));

    // Redirect to the next question
    header("Location: q4.html");
    exit;
  }
}



function q4(){
  $checkbox2 = $_POST["checkbox2"];
  if(sizeof($checkbox2) > 1){
    // this is if they got it wrong
    header("Location: q5.html");
    exit;
  }
  elseif($checkbox2[0] == 3){
    // this is if they got it correct
    $username = $_SESSION["username"];
    // Read contents of results.txt into an array
    $score_list = file("results.txt", FILE_IGNORE_NEW_LINES);

    // Check if username exists in the score list
    $user_found = false;
    foreach ($score_list as $key => $value) {
      $data = explode(",", $value);
      if ($data[0] == $username) {
        // Increment score by 10
        $data[1] = intval($data[1]) + 10;
        $score_list[$key] = implode(",", $data);
        $user_found = true;
        break;
      }
    }

    // If username doesn't exist in results.txt, add it to the list with a score of 10
    if (!$user_found) {
      $new_score = "$username,10";
      $score_list[] = $new_score;
    }

    // Write updated score list to results.txt
    file_put_contents("results.txt", implode("\n", $score_list));

    // Redirect to next question
    header("Location: q5.html");
    exit;
  }
}

function q5(){
  $textbox1 = $_POST["textbox1"];
  $textans1 = "HTTP";

  if (strcasecmp($textbox1, $textans1) == 0) {
    // Correct answer, update score
    $username = $_SESSION["username"];
    $score_list = file("results.txt", FILE_IGNORE_NEW_LINES);
    $user_found = false;
    foreach ($score_list as $key => $value) {
      $data = explode(",", $value);
      if ($data[0] == $username) {
        // Increment score by 10
        $data[1] = intval($data[1]) + 10;
        $score_list[$key] = implode(",", $data);
        $user_found = true;
        break;
      }
    }
    if (!$user_found) {
      $new_score = "$username,10";
      $score_list[] = $new_score;
    }
    file_put_contents("results.txt", implode("\n", $score_list));
    
    // Redirect to next question
    header("Location: q6.html");
    exit;
  } else {
    // Wrong answer, redirect to next question
    header("Location: q6.html");
    exit;
  }
}


function q6(){
  $textbox2=$_POST["textbox2"];
  $textans2="favicon";
  if(strcasecmp($textbox2,$textans2)==0){
    //they are correct
    $username = $_SESSION["username"];
    // Read contents of results.txt into an array
    $score_list = file("results.txt", FILE_IGNORE_NEW_LINES);

    // Check if username exists in the score list
    $user_found = false;
    foreach ($score_list as $key => $value) {
      $data = explode(",", $value);
      if ($data[0] == $username) {
        // Increment score by 10
        $data[1] = intval($data[1]) + 10;
        $score_list[$key] = implode(",", $data);
        $user_found = true;
        break;
      }
    }

    // If username doesn't exist in results.txt, add it to the list with a score of 10
    if (!$user_found) {
      $new_score = "$username,10";
      $score_list[] = $new_score;
    }
    // Write updated score list to results.txt
    file_put_contents("results.txt", implode("\n", $score_list));
    header("Location: end.php");
    exit;
  }
  else{
    // they are incorrect, check if username exists in results.txt
    $username = $_SESSION["username"];
    // Read contents of results.txt into an array
    $score_list = file("results.txt", FILE_IGNORE_NEW_LINES);

    // Check if username exists in the score list
    $user_found = false;
    foreach ($score_list as $key => $value) {
      $data = explode(",", $value);
      if ($data[0] == $username) {
        $user_found = true;
        break;
      }
    }

    // If username doesn't exist in results.txt, add it to the list with a score of 0
    if (!$user_found) {
      $new_score = "$username,0";
      $score_list[] = $new_score;
      file_put_contents("results.txt", implode("\n", $score_list));
    }

    header("Location: end.php");
    exit;
  }
}









  

  ?>







	<script src="index.js"></script>
  </body>
</html>

