<?php
// ------------------------------------------------
// sort connection out 
include 'db_connection.php';
$conn = OpenCon();
if ( $conn->connect_error ) {
  die( "Connection failed. Reason: " . $conn->connect_error );
}

session_start(); 

// take the ID from answer to last question, then check if it is correct answer
// if it is the right answer, increment totalCorrect by 1
$answerQuestion2 = $_POST[ "question2_answers" ];
$checkIfRight = "SELECT is_right_choice FROM Question_choices WHERE choice_id = $answerQuestion2";
$checkIfRightResult = $conn->query($checkIfRight);

while ($check = $checkIfRightResult->fetch_assoc()) {
  if ($check['is_right_choice'] == 1) {
    $_SESSION['totalCorrect'] ++;
  }
}

echo $_SESSION['totalCorrect'];

//queries
// ------------------------------------------------

// variables to hold all the choice_IDs
$choice_id1 = "SELECT choice_id FROM Question_choices WHERE choice_id = '7'";
$choice_idResult1 = $conn->query($choice_id1);

$choice_id2 = "SELECT choice_id FROM Question_choices WHERE choice_id = '8'";
$choice_idResult2 = $conn->query($choice_id2);

$choice_id3 = "SELECT choice_id FROM Question_choices WHERE choice_id = '9'";
$choice_idResult3 = $conn->query($choice_id3);

// ------------------------------------------------

// variables to hold the text for the choice

$sql = "SELECT question FROM Question WHERE question_id = '3'";
$result = $conn->query( $sql );

$sql2 = "SELECT choice_text FROM Question_choices WHERE choice_id = '7' AND question_id = '3'";
$result2 = $conn->query( $sql2 );

$sql3 = "SELECT choice_text FROM Question_choices WHERE choice_id = '8' AND question_id = '3'";
$result3 = $conn->query( $sql3 );

$sql4 = "SELECT choice_text FROM Question_choices WHERE choice_id = '9' AND question_id = '3'";
$result4 = $conn->query( $sql4 );

// ------------------------------------------------


CloseCon( $conn );
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Quick Quiz: Question 2</title>
</head>
<body>
<form action="quiz_dest3.php" method="post" id="quiz2"> 
      <!-- display question as heading -->
      <?php
      while ( $row = $result->fetch_assoc() ) {
        echo "<h3>" . $row[ "question" ] . "</h3>";
      }
      ?>
      <!-- display answers as radio -->
      <div>
      <?php
        while ($id = $choice_idResult1->fetch_assoc()) {
          echo '<input type= "radio" name="question3_answers" id="question3_answers_A" value= "' . $id["choice_id"] . '"';
        }
      ?>
        <label for="question2_answers_A">
          <?php while($row = $result2->fetch_assoc()) {echo $row["choice_text"];}
                $answer1 = $row;
          ?>
        </label>
      </div>

      <div>
      <?php
        while ($id = $choice_idResult2->fetch_assoc()) {
            echo '<input type= "radio" name="question3_answers" id="question3_answers_B" value= "' . $id["choice_id"] . '"';
        }
      ?>
        <label for="question3_answers_B">
          <?php while($row = $result3->fetch_assoc()) {echo $row["choice_text"];}
                $answer2 = $row
          ?>
        </label>
      </div>
      
      <div>
      <?php
        while ($id = $choice_idResult3->fetch_assoc()) {
            echo '<input type= "radio" name="question3_answers" id="question3_answers_C" value= "' . $id["choice_id"] . '"';
        }
      ?>
        <label for="question3_answers_C">
          <?php while($row = $result4->fetch_assoc()) {echo $row["choice_text"];}
                $answer3 = $row
          ?>
        </label>
      </div>
  <input type="submit" value="Submit answer"/>
</form>
</body>
</html>