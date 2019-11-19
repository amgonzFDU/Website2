<html>
<body background = "Blue.jpg">
<form action="Home.php">
<input type = "submit" value = "Employee Page">
</form>
</div>
<form action="Customers.php">
<input type = "submit" value = "Costomer Page">
</form>

<?php
@$dbConnect = new mysqli('localhost', 'root', '', 'test');
if (mysqli_connect_errno()) {
	echo ("<p>Error: Unable to connect to database.</p>" .
			"<p>Error code $dbConnect->connect_errno: $dbConnect->connect_error. </p>");
	exit;
	}

// get data from the input boxes 
$Email = $_GET['Email'];
$Phone = $_GET['Phone'];
$Last = $_GET['Lastname'];
$First = $_GET['Firstname'];






if (!$Email || !$Phone|| !$Last || !$First) {
    echo "<p>You have not entered all the required information. </p>";

    exit;
 }

$sqlstring = "INSERT INTO  customer Values ('$Email','$First','$Last','$Phone')";


$result = mysqli_query($dbConnect,$sqlstring);
if (!$result){	
	echo ("<p>Error: Contact information was not added.</p>" .
			"<p>Error code $dbConnect->errno: $dbConnect->error. </p>");
	$dbConnect->close();
	exit;
	}




?>
<h1>CustomerAdded<h1>

</div>
</html>