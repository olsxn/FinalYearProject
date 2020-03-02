<?php
include 'db_connection.php';
$conn = OpenCon();

//check connection
if ( $conn->connect_error ) {
  die( "Connection failed. Reason: " . $conn->connect_error );
}

//queries
$sql = "SELECT question FROM Question WHERE question_id = '1'";
$result = $conn->query( $sql );

$sql2 = "SELECT choice_text FROM Question_choices WHERE choice_id = '1' AND question_id = '1'";
$result2 = $conn->query( $sql2 );

$sql3 = "SELECT choice_text FROM Question_choices WHERE choice_id = '2' AND question_id = '1'";
$result3 = $conn->query( $sql3 );

$sql4 = "SELECT choice_text FROM Question_choices WHERE choice_id = '3' AND question_id = '1'";
$result4 = $conn->query( $sql4 );

CloseCon( $conn );
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Quick Quiz</title>
</head>

<body>
<form action="quiz_dest.php" method="post" id="quiz">
  <ol>
    <li> 
      <!-- display question as heading -->
      <?php
      while ( $row = $result->fetch_assoc() ) {
        echo "<h3>" . $row[ "question" ] . "</h3>";
      }
      ?>
      <!-- display answers as radio -->
      <div>
        <input type= "radio" name="question1_answers" id="question1_answers_A" value="A"/>
        <label for="question1_answers_A">
          <?php while($row = $result2->fetch_assoc()) {echo $row["choice_text"];}?>
        </label>
      </div>
      <div>
        <input type= "radio" name="question1_answers" id="question1_answers_B" value="B"/>
        <label for="question1_answers_A">
          <?php while($row = $result3->fetch_assoc()) {echo $row["choice_text"];}?>
        </label>
      </div>
      <div>
        <input type= "radio" name="question1_answers" id="question1_answers_C" value="C"/>
        <label for="question1_answers_A">
          <?php while($row = $result4->fetch_assoc()) {echo $row["choice_text"];}?>
        </label>
      </div>
    </li>
  </ol>
  <input type="submit" value="Submit answer"/>
  
  <!-- HERE: some php to add the choice_ID and question_ID to table User_question_answer once submitted	-->
</form>
</body>
</html>
