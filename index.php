<?php
include 'db_connection.php';
$conn = OpenCon();
CloseCon($conn);
?>

<!-------------------------------------------------->

<!DOCTYPE html>
<html lang="en">
<head> 
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Main Page</title>
	<link href="css/css_v2.css" rel="stylesheet" type="text/css"/>
</head>

	<header>
	<div class="container">
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
	<h1>Hello world</h1>
</body>
</html>