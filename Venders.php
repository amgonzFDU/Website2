<html>

<body background = "Blue.jpg">
</html>

<?php

@$dbConnect = new mysqli('localhost', 'root', '', 'test');
if (mysqli_connect_errno()) {
	echo ("<p>Error: Unable to connect to database.</p>" .
			"<p>Error code $dbConnect->connect_errno: $dbConnect->connect_error. </p>");
	exit;
	}

// get data from the input boxes 
$Name = $_GET["Name"];	
$Cost = $_GET['Cost'];
$Service = $_GET['Service'];
$City = $_GET['City'];
$State = $_GET["state"];

if($Cost == ''){
	$Ctemp = 999999999;
}
else{
	$Ctemp = $Cost;
}


$UserNa = "SELECT * FROM vendor Where Name LIKE %'$Name'% AND Service LIKE %'$Service'% AND city LIKE %'$City'% AND state LIKE %'$State'% and cost <= '$Ctemp'";

?>