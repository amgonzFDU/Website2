

<html>
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

  
</style>

<body background = "Blue.jpg">


<?php
@$dbConnect = new mysqli('localhost', 'root', '', 'test');
if (mysqli_connect_errno()) {
	echo ("<p>Error: Unable to connect to database.</p>" .
			"<p>Error code $dbConnect->connect_errno: $dbConnect->connect_error. </p>");
	exit;
	}

// get data from the input boxes 
$Type = $_GET['type'];
$Email = $_GET['Email'];
$Mark = $_GET['Mark'];
$Date = $_GET['Date'];

if (!$Type || !$Email|| !$Mark || !$Date) {
    echo "<p>You have not entered all the required information. </p>";

    exit;
 }

$sqlstring = "INSERT INTO event(Event_id, Event_Type, Markup, Email, Event_date) VALUES (0,'$Type','$Mark','$Email','$Date')";


$result = mysqli_query($dbConnect,$sqlstring);
if (!$result){	
	echo ("<p>Error: Contact information was not added.</p>" .
			"<p>Error code $dbConnect->errno: $dbConnect->error. </p>");
	$dbConnect->close();
	exit;
	}

?>
<h2>New event created</h2>
<form action="Home.php">
<input type = "submit" value = "Employee Page">
</form>
</div>
<form action="EventE.php">
<input type = "submit" value = "Event Page">
</form>
</div>
</html>
