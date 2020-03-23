<?php
// ------------------------------------------------
// sort connection out 
include 'db_connection.php';
$conn = OpenCon();
if ( $conn->connect_error ) {
  die( "Connection failed. Reason: " . $conn->connect_error );
}

session_start(); 

// ------------------------------------------------

// take the ID from answer to last question, then check if it is correct answer
// if it is the right answer, increment totalCorrect by 1
$answerQuestion3 = $_POST[ "question3_answers" ];
$checkIfRight = "SELECT is_right_choice FROM Question_choices WHERE choice_id = $answerQuestion3";
$checkIfRightResult = $conn->query($checkIfRight);

while ($check = $checkIfRightResult->fetch_assoc()) {
  if ($check['is_right_choice'] == 1) {
    $_SESSION['totalCorrect'] ++;
  }
}

echo $_SESSION['totalCorrect'];

CloseCon($conn);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>