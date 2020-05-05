<?php
include 'db_connection.php';
$conn = OpenCon();

//queries
// ------------------------------------------------

// variables to hold all the choice_IDs for question 1
$choice_id1 = "SELECT choice_id FROM Question_choices WHERE choice_id = '1'";
$choice_idResult1 = $conn->query($choice_id1);

$choice_id2 = "SELECT choice_id FROM Question_choices WHERE choice_id = '2'";
$choice_idResult2 = $conn->query($choice_id2);

$choice_id3 = "SELECT choice_id FROM Question_choices WHERE choice_id = '3'";
$choice_idResult3 = $conn->query($choice_id3);

// ------------------------------------------------

// variables to hold the text for the choice for question 1

$sql = "SELECT question FROM Question WHERE question_id = '1'";
$result = $conn->query( $sql );

$sql2 = "SELECT choice_text FROM Question_choices WHERE choice_id = '1' AND question_id = '1'";
$result2 = $conn->query( $sql2 );

$sql3 = "SELECT choice_text FROM Question_choices WHERE choice_id = '2' AND question_id = '1'";
$result3 = $conn->query( $sql3 );

$sql4 = "SELECT choice_text FROM Question_choices WHERE choice_id = '3' AND question_id = '1'";
$result4 = $conn->query( $sql4 );

// ------------------------------------------------

// variables to hold all the choice_IDs for question 2
$choice_id4 = "SELECT choice_id FROM Question_choices WHERE choice_id = '4'";
$choice_idResult4 = $conn->query($choice_id4);

$choice_id5 = "SELECT choice_id FROM Question_choices WHERE choice_id = '5'";
$choice_idResult5 = $conn->query($choice_id5);

$choice_id6 = "SELECT choice_id FROM Question_choices WHERE choice_id = '6'";
$choice_idResult6 = $conn->query($choice_id6);

// ------------------------------------------------

// variables to hold the text for the choice for question 2

$sql5 = "SELECT question FROM Question WHERE question_id = '2'";
$result5 = $conn->query( $sql5 );

$sql6 = "SELECT choice_text FROM Question_choices WHERE choice_id = '4' AND question_id = '2'";
$result6 = $conn->query( $sql6 );

$sql7 = "SELECT choice_text FROM Question_choices WHERE choice_id = '5' AND question_id = '2'";
$result7 = $conn->query( $sql7 );

$sql8 = "SELECT choice_text FROM Question_choices WHERE choice_id = '6' AND question_id = '2'";
$result8 = $conn->query( $sql8 );

// ------------------------------------------------

// variables to hold all the choice_IDs for question 3
$choice_id7 = "SELECT choice_id FROM Question_choices WHERE choice_id = '7'";
$choice_idResult7 = $conn->query($choice_id7);

$choice_id8 = "SELECT choice_id FROM Question_choices WHERE choice_id = '8'";
$choice_idResult8 = $conn->query($choice_id8);

$choice_id9 = "SELECT choice_id FROM Question_choices WHERE choice_id = '9'";
$choice_idResult9 = $conn->query($choice_id9);

// ------------------------------------------------

// variables to hold the text for the choice for question 3
 
$sql9 = "SELECT question FROM Question WHERE question_id = '3'";
$result9 = $conn->query( $sql9 );

$sql10 = "SELECT choice_text FROM Question_choices WHERE choice_id = '7' AND question_id = '3'";
$result10 = $conn->query( $sql10 );

$sql11 = "SELECT choice_text FROM Question_choices WHERE choice_id = '8' AND question_id = '3'";
$result11 = $conn->query( $sql11 );

$sql12 = "SELECT choice_text FROM Question_choices WHERE choice_id = '9' AND question_id = '3'";
$result12 = $conn->query( $sql12 );

// ------------------------------------------------

$totalCorrect = 0;
$test = 1;

CloseCon($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head> 
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

	<!-- my css here to override bootstrap -->
	<link rel="stylesheet" href="css/css_v2.css" type="text/css">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">

	<title>Education on Substance Abuse</title>
</head>

	<header>
	<div class="container">
	<p class="navP">Substance abuse, discussed properly</p>
	<nav>
	<ul>
		<li><a href="#">Home</a></li>
		<li><a href="#">About me</a></li>
		<li><a href="#">Quiz</a></li>
		<li><a href="#">Contact</a></li>
		<li><a href="#">Portfolio</a></li>
	</ul>
	</nav>
	</div>
	</header>
	
<body>
	
	<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
		<h1>hello</h1>
	</div>

	<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
		<div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
		  <div class="my-3 py-3">
			<h2 class="display-5">Another headline</h2>
			<p class="lead">And an even wittier subheading.</p>
		  </div>
		</div>
	</div>

	    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
          <h2 class="display-5">Another headline</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <div class="bg-dark box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
      </div>
      <div class="bg-primary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
          <h2 class="display-5">Another headline</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <div class="bg-light box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
	  </div>
	  </div>


	<!-- Trigger/Open The Modals -->
	<button id="myBtn">Open Modal 1</button>


	// #region [rgba(197, 94, 94, 0.3) ]
	<!-- The Modals -->
	<div id="myModal" class="modal">
		<!-- Modal content -->
		<div class="modal-content">
			<div class="modal-header">
			<!-- display question as heading -->
			<?php
					while ( $row = $result->fetch_assoc() ) {
						echo "<h3>" . $row[ "question" ] . "</h3>";
					}
				?>
			<button id="close1" class="close">&times;</button>
			</div>
			<div class="modal-body">
			<form action="#" method="post" id="quiz">
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
			
            </div>
			<div class="modal-footer">
				<button id="myBtn2">Open Modal 2</button>
			</div>
		</div>
	</div>

	// end region

	// #region [rgba(197, 149, 94, 0.3) ]				
	<div id="myModal2" class="modal">
		<!-- Modal content -->
		<div class="modal-content">
			<div class="modal-header">
			<!-- display question as heading -->
			<?php
      while ( $row = $result5->fetch_assoc() ) {
        echo "<h3>" . $row[ "question" ] . "</h3>";
	  }
	  ?>
	  
	  <h3 id="tally"></h3>
			<button id="close2" class="close">&times;</button>
			</div>

			<div class="modal-body">
			 <!-- display answers as radio -->
			 <div>
      <?php
        while ($id = $choice_idResult4->fetch_assoc()) {
          echo '<input type= "radio" name="question2_answers" id="question2_answers_A" value= "' . $id["choice_id"] . '"';
        }
      ?>
        <label for="question2_answers_A">
          <?php while($row = $result6->fetch_assoc()) {echo $row["choice_text"];}
                $answer1 = $row;
          ?>
        </label>
      </div>

      <div>
      <?php
        while ($id = $choice_idResult5->fetch_assoc()) {
          echo '<input type= "radio" name="question2_answers" id="question2_answers_B" value= "' . $id["choice_id"] . '"';
        }
      ?>
        <label for="question2_answers_B">
          <?php while($row = $result7->fetch_assoc()) {echo $row["choice_text"];}
                $answer2 = $row
          ?>
        </label>
      </div>
      
      <div>
      <?php
        while ($id = $choice_idResult6->fetch_assoc()) {
          echo '<input type= "radio" name="question2_answers" id="question2_answers_C" value= "' . $id["choice_id"] . '"';
        }
      ?>
        <label for="question2_answers_C">
          <?php while($row = $result8->fetch_assoc()) {echo $row["choice_text"];}
                $answer3 = $row
          ?>
        </label>
      </div>
			</div>
			<div class="modal-footer">
				<button id="myBtn3">Open Modal 3</button>
			</div>
		</div>
	</div>
	// end region

// #region [rgba(94, 137, 197, 0.4) ]
	<div id="myModal3" class="modal">
		<!-- Modal content -->
		<div class="modal-content">
			<div class="modal-header">
	<!-- display question as heading -->
	<?php
      while ( $row = $result9->fetch_assoc() ) {
        echo "<h3>" . $row[ "question" ] . "</h3>";
      }
      ?>
			<button id="close3" class="close">&times;</button>
			</div>
			<div class="modal-body">
			<!-- display answers as radio -->
			<div>
      <?php
        while ($id = $choice_idResult7->fetch_assoc()) {
          echo '<input type= "radio" name="question3_answers" id="question3_answers_A" value= "' . $id["choice_id"] . '"';
        }
      ?>
        <label for="question2_answers_A">
          <?php while($row = $result10->fetch_assoc()) {echo $row["choice_text"];}
                $answer1 = $row;
          ?>
        </label>
      </div>

      <div>
      <?php
        while ($id = $choice_idResult8->fetch_assoc()) {
            echo '<input type= "radio" name="question3_answers" id="question3_answers_B" value= "' . $id["choice_id"] . '"';
        }
      ?>
        <label for="question3_answers_B">
          <?php while($row = $result11->fetch_assoc()) {echo $row["choice_text"];}
                $answer2 = $row
          ?>
        </label>
      </div>
      
      <div>
      <?php
        while ($id = $choice_idResult9->fetch_assoc()) {
            echo '<input type= "radio" name="question3_answers" id="question3_answers_C" value= "' . $id["choice_id"] . '"';
        }
      ?>
        <label for="question3_answers_C">
          <?php while($row = $result12->fetch_assoc()) {echo $row["choice_text"];}
                $answer3 = $row
          ?>
        </label>
      </div>
	  </div>
			<div class="modal-footer">
				<h1>This is the last modal</h1>
			</div>
		</div>
	</div>
// end region

// #region [rgba(0, 205, 30, 0.1) ]
<!-- scripts here -->
<!-- modal JS -->
<script>
	// Get the modal
	var modal = document.getElementById("myModal");
	var modal2 = document.getElementById("myModal2");
	var modal3 = document.getElementById("myModal3");

	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");
	var btn2 = document.getElementById("myBtn2");
	var btn3 = document.getElementById("myBtn3");

	// Get the <span> element that closes the modal
	var close1 = document.getElementById("close1")
	var close2 = document.getElementById("close2")
	var close3 = document.getElementById("close3")

	// When the user clicks on the button, open the modal
	btn.onclick = function() {
	modal.style.display = "block";
	}
	btn2.onclick = function() {
		checkRadio('question1_answers_B');
		modal.style.display = "none";
		modal2.style.display = "block";
	}
	btn3.onclick = function() {
		modal2.style.display = "none";
		modal3.style.display = "block";
	}

	// When the user clicks on (x), close the modal
	close1.onclick = function() {
	modal.style.display = "none";
	}
	close2.onclick = function() {
	modal2.style.display = "none";
	}
	close3.onclick = function() {
	modal3.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
	else if (event.target == modal2) {
		modal2.style.display = "none";
	}
	else if (event.target == modal3) {
		modal3.style.display = "none";
	}
	}
</script>

<!-- scripts to check if the correct radio button has been checked and store tally -->
<script>
	var tally = 0;

function checkRadio(id) {
	if (document.getElementById(id).checked) {
		addTally();
	}
}

function addTally() {
	tally++;
}

function showTally() {
	document.getElementById("tally").innerHTML = tally;
}
</script>

	<!-- bootstrap 4 scripts -->
	<script src="jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- icons -->
	<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
	// #endregion
</body>
</html>