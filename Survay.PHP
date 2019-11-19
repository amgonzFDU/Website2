
<html>
<body background = "Blue.jpg">



<?php
@$dbConnect = new mysqli('localhost', 'root', '', 'test');
if (mysqli_connect_errno()) {
	echo ("<p>Error: Unable to connect to database.</p>" .
			"<p>Error code $dbConnect->connect_errno: $dbConnect->connect_error. </p>");
	exit;
	}

// get data from the input boxes 
$Email = $_GET['Email'];
$firstName = $_GET['firstname'];
$lastname = $_GET['lastname'];
$Phones = $_GET['Phone'];
$Event = $_GET['Event'];
$Budget = $_GET['Budget'];
$Event_date = $_GET['Event_Date'];
$Size = $_GET['Size'];
$Comments = $_GET['Comments'];

if (!$Email || !$firstName|| !$lastname || !$Phones|| !$Event|| !$Budget|| !$Event_date|| !$Size|| !$Comments) {
    echo "<p>You have not entered all the required information. </p>";

    exit;
 }

$sqlString = "INSERT into survey_table(Survey_id, Email, firstname, lastname, Phone, Event_Type, Budget, Event_date, Size, Comments) values (0, '$Email', '$firstName', '$lastname', '$Phones', '$Event', '$Budget', '$Event_date', '$Size', '$Comments')";

$result = $dbConnect->query($sqlString);
if (!$result){	
	echo ("<p>Error: Contact information was not added.</p>" .
			"<p>Error code $dbConnect->errno: $dbConnect->error. </p>");
	$dbConnect->close();
	exit;
	}

$dbConnect->close();
//** end of input proces




?>
<html>
<<h1> We'll contact you by email to set up a consultation!</h1>
<div align = "rignt">
<form action="Main.html">
<input type = "submit" value = "Return Home">
</form>
</div>


</html