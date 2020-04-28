<?php
include 'db_connection.php';
$conn = OpenCon();

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

$totalCorrect = 0;
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
	<p>
		Curae; dignissim arcu justo ut torquent vitae pellentesque lobortis habitasse! Nullam ac aptent rutrum ac ut etiam. Fringilla taciti lobortis aptent nostra nisl ornare, facilisis cubilia rhoncus penatibus malesuada suscipit. Litora felis mus ipsum, fringilla nostra dui. Ullamcorper donec accumsan ipsum sapien molestie curabitur! A egestas ac interdum consectetur. Hac lacus venenatis posuere porttitor dis fames vitae class.
	</p>
	
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

	<div id="myModal2" class="modal">
		<!-- Modal content -->
		<div class="modal-content">
			<div class="modal-header">
			<h2>Modal Header</h2>
			<button id="close2" class="close">&times;</button>
			</div>
			<div class="modal-body">
			<p>Some text in the Modal Body</p>
			<p>Some other text...</p>
			</div>
			<div class="modal-footer">
				<button id="myBtn3">Open Modal 3</button>
			</div>
		</div>
	</div>

	<div id="myModal3" class="modal">
		<!-- Modal content -->
		<div class="modal-content">
			<div class="modal-header">
			<h2>Modal Header</h2>
			<button id="close3" class="close">&times;</button>
			</div>
			<div class="modal-body">
			<p>Some text in the Modal Body</p>
			<p>Some other text...</p>
			</div>
			<div class="modal-footer">
				<h1>This is the last modal</h1>
			</div>
		</div>
	</div>


// #region [rgba(0, 205, 30, 0.1) ]
<!-- scripts here -->
<!-- modal1 JS -->
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
	<!-- bootstrap 4 scripts -->
	<script src="jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- icons -->
	<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
	// #endregion
</body>
</html>