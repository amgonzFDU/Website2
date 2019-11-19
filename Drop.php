<html>
<body background = "Blue.jpg">
<?php
@$dbConnect = new mysqli('localhost', 'root', '', 'test');
if (mysqli_connect_errno()) {
	echo ("<p>Error: Unable to connect to database.</p>" .
			"<p>Error code $dbConnect->connect_errno: $dbConnect->connect_error. </p>");
	exit;
	}
$id = $_GET['ID'];

if (!$id) {
    echo "<p>You have not entered all the required information. </p>";

    exit;
 }

$sqlstring = "DELETE FROM vendor_tags WHERE Vendor_ID = '$id'";

$sqlstring2 = "DELETE FROM vendor WHERE Vendor_ID = '$id'";

$result = mysqli_query($dbConnect,$sqlstring);
if (!$result){	
	echo ("<p>Error: Contact information was not added.</p>" .
			"<p>Error code $dbConnect->errno: $dbConnect->error. </p>");
	$dbConnect->close();
	exit;
	}

$result2 = mysqli_query($dbConnect,$sqlstring2);
if (!$result){	
	echo ("<p>Error: Contact information was not added.</p>" .
			"<p>Error code $dbConnect->errno: $dbConnect->error. </p>");
	$dbConnect->close();
	exit;
	}



?>
<h2>Vendor Removed</h2>
<div align = "rignt">






<form action="Home.php">
<input type = "submit" value = "Employee Page">
</form>
</div>
<form action="Venders.html">
<input type = "submit" value = "Vender Page">
</form>
</div>
</html>
