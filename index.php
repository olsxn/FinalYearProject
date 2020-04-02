<?php
include 'db_connection.php';
$conn = OpenCon();
CloseCon($conn);
?>

<!-------------------------------------------------->

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
	<button type="button" onclick="window.location.href = 'quiz_v1.php';">Click here to take the quiz</button>

	<h1>Pop up box test</h1>
	
    <a onclick="pop()" class="btn">Show box</a>
    <div id="box">
        <a onclick="pop()" class="close">Close</a>
    </div>


	<!-- Trigger/Open The Modals -->
	<button id="myBtn">Open Modal 1</button>

	<!-- The Modals -->
	<div id="myModal" class="modal">
		<!-- Modal content -->
		<div class="modal-content">
			<div class="modal-header">
			<h2>Modal Header</h2>
			<button id="close1" class="close">&times;</button>
			</div>
			<div class="modal-body">
			<p>Some text in the Modal Body</p>
			<p>Some other text...</p>
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

		// When the user clicks on <span> (x), close the modal
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
		else if (event.target == modal) {
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