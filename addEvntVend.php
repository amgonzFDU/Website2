

<html>
<body background = "Blue.jpg">
<form action="Home.php">
<input type = "submit" value = "Employee Page">
</form>
<br>
<form action="Venders.html">
<input type = "submit" value = "Vendor page">
</form>

<?php
@$dbConnect = new mysqli('localhost', 'root', '', 'test');
if (mysqli_connect_errno()) {
	echo ("<p>Error: Unable to connect to database.</p>" .
			"<p>Error code $dbConnect->connect_errno: $dbConnect->connect_error. </p>");
	exit;
	}

// get data from the input boxes 
$vID = $_GET['Vend'];	
$eID = $_GET['Evnt'];

if (!$vID) {
    echo "<p>You have not entered all the required information. </p>";

    exit;
}
$sqlString = "INSERT into event_vendors values ('$eID', '$vID')";

$result = $dbConnect->query($sqlString);
if (!$result){	
	echo ("<p>Error: Contact information was not added.</p>" .
			"<p>Error code $dbConnect->errno: $dbConnect->error. </p>");
	$dbConnect->close();
	exit;
	}

$dbConnect->close();
?>
<h2>Vendor added to Event</h2>
