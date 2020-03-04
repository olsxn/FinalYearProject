<?php
include 'db_connection.php';
$conn = OpenCon();

//check connection
if ($conn->connect_error) {die("Connection failed. Reason: " . $conn->connect_error);}
else {
	echo("Connection successful");
}
//query
$sql = "SELECT * FROM test";
$result = $conn->query($sql);
CloseCon($conn);
?>
<!-- <!doctype html>
<html>
<head> 
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="HandheldFriendly" content="true">
<title>Main Page Experiment</title>
	<link href="cssV1.css" type="text/css" rel="stylesheet"/>
</head>
<body>
	<img src="images/hello.png" alt="Hello placeholder" class="headerImage"/>
	<h1>Practicing PHP & MySQL Connection</h1>
	<p>Outputting a table from my database:</p>
	<hr>
	<table border = '2'>
	<tr>
		<th>UserID</th>
		<th>First Name</th>
		<th>Second Name</th>
		</tr>
	<?php
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>" . $row["userID"] . "</td>";
			echo "<td>" . $row["firstName"] . "</td>";
			echo "<td>" . $row["secondName"] . "</td>";
			echo "</tr>";
		}
		?>
	</table>
</body>	
</html> -->


