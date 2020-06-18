<?php
include 'db_connection.php';
$conn = OpenCon();

// get question text here
$questionTextSQL_1 = "SELECT question_text FROM marijuana_questions WHERE question_id ='1'";
$questionResult1 = $conn->query($questionTextSQL_1);

$questionTextSQL_2 = "SELECT question_text FROM marijuana_questions WHERE question_id ='2'";
$questionResult2 = $conn->query($questionTextSQL_2);

$questionTextSQL_3 = "SELECT question_text FROM marijuana_questions WHERE question_id ='3'";
$questionResult3 = $conn->query($questionTextSQL_3);

// get answers here
$answerTextSQL_1 = "SELECT answer_text FROM marijuana_answers WHERE answer_id = '1' AND question_id = '1'";
$answerResult1 = $conn->query($answerTextSQL_1);

$answerTextSQL_2 = "SELECT answer_text FROM marijuana_answers WHERE answer_id = '2' AND question_id = '1'";
$answerResult2 = $conn->query($answerTextSQL_2);

$answerTextSQL_3 = "SELECT answer_text FROM marijuana_answers WHERE answer_id = '3' AND question_id = '1'";
$answerResult3 = $conn->query($answerTextSQL_3);

$answerTextSQL_4 = "SELECT answer_text FROM marijuana_answers WHERE answer_id = '4' AND question_id = '2'";
$answerResult4 = $conn->query($answerTextSQL_4);

$answerTextSQL_5 = "SELECT answer_text FROM marijuana_answers WHERE answer_id = '5' AND question_id = '2'";
$answerResult5 = $conn->query($answerTextSQL_5);

$answerTextSQL_6 = "SELECT answer_text FROM marijuana_answers WHERE answer_id = '6' AND question_id = '2'";
$answerResult6 = $conn->query($answerTextSQL_6);

$answerTextSQL_7 = "SELECT answer_text FROM marijuana_answers WHERE answer_id = '7' AND question_id = '3'";
$answerResult7 = $conn->query($answerTextSQL_7);

$answerTextSQL_8 = "SELECT answer_text FROM marijuana_answers WHERE answer_id = '8' AND question_id = '3'";
$answerResult8 = $conn->query($answerTextSQL_8);

$answerTextSQL_9 = "SELECT answer_text FROM marijuana_answers WHERE answer_id = '9' AND question_id = '3'";
$answerResult9 = $conn->query($answerTextSQL_9);

CloseCon($conn);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css" />

    <!-- my css here to override bootstrap -->
    <link rel="stylesheet" href="../css/main.css" type="text/css" />

    <!-- Font -->
    <link
      href="https://fonts.googleapis.com/css?family=Exo&display=swap"
      rel="stylesheet"
    />

    <title>Marijuana Quiz</title>
  </head>

  <header>
    <!-- nav bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <!-- button for when screen is too small -->
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="/hbo13_website/index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/hbo13_website/html/marijuana.html"
              >Marijuana</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/hbo13_website/html/cocaine.html"
              >Cocaine</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/hbo13_website/html/ecstasy.html"
              >Ecstasy</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/hbo13_website/html/sources.html"
              >Sources</a
            >
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <body>

      <h1 style="text-align: center; font-weight: 600; color: white;">Marijuana Quiz</h1>
      <!-- container for body -->
      <div class="container-fluid">
          <div class="container-fluid bg-dark shadow rounded">
              <div class="col-lg-12 text-white">
      <form action="marijuana_dest.php" method="post" id="marijuana_quiz">
    <!-- display question1 -->
    <?php while ($question1 = $questionResult1->fetch_assoc()) {
        echo '<h3>' . $question1["question_text"] . '</h3>'; } ?>
    <!-- display answers -->
    <!-- answer1 -->
    <div>
    <?php while($row = $answerResult1->fetch_assoc()) {?>
    <input type="radio" name="question1_choices" id="question1_choices_A" value="1">
    <label for="question1_choices_A">
        <?php echo $row["answer_text"]; ?>
    </label>
    <?php } ?>
    </div>
    <!-- answer2 -->
    <div>
   <?php while($row = $answerResult2->fetch_assoc()) {?>
    <input type="radio" name="question1_choices" id="question1_choices_B" value="2">
    <label for="question1_choices_B">
        <?php echo $row["answer_text"]; ?>
    </label>
    <?php } ?>
    </div>
    <!-- answer3 -->
    <div>
    <?php while($row = $answerResult3->fetch_assoc()) {?>
    <input type="radio" name="question1_choices" id="question1_choices_C" value="3">
    <label for="question1_choices_C">
        <?php echo $row["answer_text"]; ?>
    </label>
    <?php } ?>
    </div>

    <!-- display question2 -->
    <?php while ($question2 = $questionResult2->fetch_assoc()) {
        echo '<h3>' . $question2["question_text"] . '</h3>'; } ?>
    <!-- display answers -->
    <!-- answer1 -->
    <div>
        <?php while($row = $answerResult4->fetch_assoc()) { ?>
            <input type="radio" name="question2_choices" id="question2_choices_A" value="1">
            <label for="question2_choices_A">
                <?php echo $row["answer_text"]; ?>
            </label>
        <?php } ?>
    </div>
    <!-- answer2 -->
    <div>
        <?php while($row = $answerResult5->fetch_assoc()) { ?>
            <input type="radio" name="question2_choices" id="question2_choices_A" value="2">
            <label for="question2_choices_B">
                <?php echo $row["answer_text"]; ?>
            </label>
        <?php } ?>
    </div>
    <!-- answer3 -->
    <div>
        <?php while($row = $answerResult6->fetch_assoc()) { ?>
            <input type="radio" name="question2_choices" id="question2_choices_A" value="3">
            <label for="question2_choices_C">
                <?php echo $row["answer_text"]; ?>
            </label>
        <?php } ?>
    </div>

     <!-- display question3 -->
     <?php while ($question3 = $questionResult3->fetch_assoc()) {
        echo '<h3>' . $question3["question_text"] . '</h3>'; } ?>
    <!-- display answers -->
    <!-- answer1 -->
    <div>
        <?php while($row = $answerResult7->fetch_assoc()) { ?>
            <input type="radio" name="question3_choices" id="question3_choices_A" value="1">
            <label for="question3_choices_A">
                <?php echo $row["answer_text"]; ?>
            </label>
        <?php } ?>
    </div>
    <!-- answer2 -->
    <div>
        <?php while($row = $answerResult8->fetch_assoc()) { ?>
            <input type="radio" name="question3_choices" id="question3_choices_B" value="2">
            <label for="question3_choices_B">
                <?php echo $row["answer_text"]; ?>
            </label>
        <?php } ?>
    </div>
    <!-- answer3 -->
    <div>
        <?php while($row = $answerResult9->fetch_assoc()) { ?>
            <input type="radio" name="question3_choices" id="question3_choices_C" value="3">
            <label for="question3_choices_C">
                <?php echo $row["answer_text"]; ?>
            </label>
        <?php } ?>
    </div>
    
    <div style="padding-bottom: 25px;">
    <button type="submit" class="btn btn-light">Submit your answers</button>
    </div>
    </form>
              </div>
          </div>
      </div>
            <!-- bootstrap 4 scripts -->
            <script src="jquery-3.4.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- icons -->
      <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
  </body>

</html>