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

</body>
</html>