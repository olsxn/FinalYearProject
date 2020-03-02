<?php
include 'db_connection.php';
$conn = OpenCon();

//check connection
if ( $conn->connect_error ) {
  die( "Connection failed. Reason: " . $conn->connect_error );
}

$answer1 = $_POST[ "question1_answers" ];
echo "$answer1";
$totalCorrect = 0;

CloseCon( $conn );
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Quiz destination</title>
</head>

<body>

<!-- check answer for question -->
<?php
// if is_right_choice = 1 where choice_ID = what the user chose, answer is correct
// before this, add a row in User_question_answer with the question_ID and choice_ID
checkAnswer( $answer1 );

$sql = "INSERT INTO User_question_answer (question_ID, choice_ID) VALUES ()"
$result = $conn->query( $sql );

function checkAnswer( $answer1 ) {

//}


//if ( $answer1 == 0 /* HERE: SQL query to check if is_right is '1' or '0' */ ) {
//  $totalCorrect++;
//}
?>
</body>
</html>