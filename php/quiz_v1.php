<?php
// open connection
include 'php/db_connection.php';
$conn = OpenCon();
// check connection
if ( $conn->connect_error ) {
  die( "Connection failed. Reason: " . $conn->connect_error );
}

// start session, create variable to store the score
session_start();
$_SESSION['totalCorrect'] = 0;
echo $_SESSION['totalCorrect'];

//queries
// ------------------------------------------------

// variables to hold all the choice_IDs
$choice_id1 = "SELECT choice_id FROM Question_choices WHERE choice_id = '1'";
$choice_idResult1 = $conn->query($choice_id1);

$choice_id2 = "SELECT choice_id FROM Question_choices WHERE choice_id = '2'";
$choice_idResult2 = $conn->query($choice_id2);

$choice_id3 = "SELECT choice_id FROM Question_choices WHERE choice_id = '3'";
$choice_idResult3 = $conn->query($choice_id3);

// ------------------------------------------------

// variables to hold the text for the choice

$sql = "SELECT question FROM Question WHERE question_id = '1'";
$result = $conn->query( $sql );

$sql2 = "SELECT choice_text FROM Question_choices WHERE choice_id = '1' AND question_id = '1'";
$result2 = $conn->query( $sql2 );

$sql3 = "SELECT choice_text FROM Question_choices WHERE choice_id = '2' AND question_id = '1'";
$result3 = $conn->query( $sql3 );

$sql4 = "SELECT choice_text FROM Question_choices WHERE choice_id = '3' AND question_id = '1'";
$result4 = $conn->query( $sql4 );

// ------------------------------------------------

// close connection
CloseCon( $conn );
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Quick Quiz: Question 1</title>
</head>

<body>

<form action="quiz_dest.php" method="post" id="quiz">
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
          echo '<input type= "radio" name="question1_answers" id="question1_answers_A" value= "' . $id["choice_id"] . '"';
        }
      ?>
        <label for="question1_answers_A">
          <?php while($row = $result2->fetch_assoc()) {echo $row["choice_text"];}
                $answer1 = $row;
          ?>
        </label>
      </div>

      <div>
      <?php
        while ($id = $choice_idResult2->fetch_assoc()) {
          echo '<input type= "radio" name="question1_answers" id="question1_answers_B" value= "' . $id["choice_id"] . '"';
        }
      ?>
        <label for="question1_answers_A">
          <?php while($row = $result3->fetch_assoc()) {echo $row["choice_text"];}
                $answer2 = $row
          ?>
        </label>
      </div>
      
      <div>
      <?php
        while ($id = $choice_idResult3->fetch_assoc()) {
          echo '<input type= "radio" name="question1_answers" id="question1_answers_C" value= "' . $id["choice_id"] . '"';
        }
      ?>
        <label for="question1_answers_A">
          <?php while($row = $result4->fetch_assoc()) {echo $row["choice_text"];}
                $answer3 = $row
          ?>
        </label>
      </div>
  <input type="submit" value="Submit answer"/>
</form>
</body>
</html>
