<?php
include 'db_connection.php';
$conn = OpenCon();
if ( $conn->connect_error ) {
    die( "Connection failed. Reason: " . $conn->connect_error );
  }
CloseCon($conn);

$totalCorrect = 0;

// get answers from marijuana_quiz.php
// this will return a number from 1-3
$answer1 = $_POST['question1_choices'];
$answer2 = $_POST['question2_choices'];
$answer3 = $_POST['question3_choices'];

// compare answers to the correct answer
if ($answer1 == 2) {
    $totalCorrect++;
}
if ($answer2 == 3) {
    $totalCorrect++;
}
if ($answer3 == 3) {
    $totalCorrect++;
}
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
  <h1 style="text-align: center; font-weight: 600; color: white;">Results</h1>
      <!-- container for body -->
      <div class="container-fluid">
          <div class="container bg-dark shadow rounded text-center">
              <div class="col-lg-12 text-white">
      <!-- if user got 0 correct -->
      <?php if ($totalCorrect == 0) { ?>
        <h1>You got 0 correct.</h1>
        <p>Try reading through the page again and then taking the quiz, good luck!</p>
      <?php } ?>
      
      <!-- if user got 1 correct -->
      <?php if ($totalCorrect == 1) { ?>
        <h1>You only got 1 correct.</h1>
        <p>Maybe you could try again?</p>
      <?php } ?>

        <!-- if user got 2 correct -->
      <?php if ($totalCorrect == 2) { ?>
        <h1>You got 2 correct!</h1>
        <p>Not bad! Well done.</p>
      <?php } ?>

      <!-- if user got 3 correct -->
      <?php if ($totalCorrect == 3) { ?>
        <h1>You got 3 correct!</h1>
        <p>Perfect! Well done!</p>
      <?php } ?>
              </div>
              <div style="padding-bottom:25px;">
              <a
            class="btn btn-light"
            href="../html/marijuana.html"
            role="button"
            style="font-size: x-large;"
          >
            Return to marijuana page
          </a>
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