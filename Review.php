<!DOCTYPE html>
<html>
<body background = "Blue.jpg">
<head>
<style tyle="text/css">
h1 {
	text-align: center;
	}
table {
	text-align: center;
	vertical-align: middle;
	border: 2px solid black;
	border-collapse: collapse;
	margin: 20px auto;
	font-family: Verdana, Helvetica, serif;
	}
table tr:nth-child(even) {
	background-color: #ccc;
	}
table tr:first-child {
	border-bottom: 2px solid black;
	font-weight: bold;
	}
td {
	padding: 5px 15px 5px 15px;
	border: 1px solid black;
	}
</style>
</head>	


<?php
@$dbConnect = new mysqli('localhost', 'root', '', 'test');
if (mysqli_connect_errno()) {
	echo ("<p>Error: Unable to connect to database.</p>" .
			"<p>Error code $dbConnect->connect_errno: $dbConnect->connect_error. </p>");
	exit;
	}

// get data from the input boxes 
$Email = $_GET['Email'];
$Rating = $_GET['Rating'];
$type = $_GET['type'];
$Comments = $_GET['Comments'];

if (!$Email || !$Rating|| !$type || !$Comments) {
    echo "<p>You have not entered all the required information. </p>";
    exit;
 }   

$sqlString = "INSERT into reviews values (0, '$type','$Email', '$Rating', '$Comments')";

$result = $dbConnect->query($sqlString);
if (!$result){	
	echo ("<p>Error: Contact information was not added.</p>" .
			"<p>Error code $dbConnect->errno: $dbConnect->error. </p>");
	$dbConnect->close();
	exit;
	}

$dbConnect->close();
//** end of input processing

?>	
<html>
<h1> Thank you for Submiting a Review!</h1>
<div align = "rignt">
<form action="Main.html">
<input type = "submit" value = "Return Home">
</form>
</div>


</html>
