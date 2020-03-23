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


<!-- scripts here -->
	<!-- close and open box -->
	<script type="text/javascript">
			var c = 0;
			function pop() {
				if(c==0) {
					document.getElementById("box").style.display = "block";
					c = 1;
				}
				else {
					document.getElementById("box").style.display = "none";
					c = 0;
				}
			}
	</script>
	<!-- bootstrap 4 scripts -->
	<script src="jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- icons -->
	<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</body>
</html>