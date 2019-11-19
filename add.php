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
$Name = $_GET['Name'];
$Address = $_GET['Address'];
$City = $_GET['City'];
$Cost = $_GET['Cost'];
$Service = $_GET['Service'];
$State = $_GET['state'];


$Tag1 = $_GET['Tag1'];
$Tag2 = $_GET['Tag2'];
$Tag3 = $_GET['Tag3'];
$Tag4 = $_GET['Tag4'];




if (!$Name || !$Address|| !$City || !$Cost|| !$Service|| !$State) {
    echo "<p>You have not entered all the required information. </p>";

    exit;
 }

$sqlstring = "INSERT INTO  vendor(Vendor_id, Name, address, city, state, Service, Cost) values (0,'$Name','$Address','$City','$State','$Service','$Cost')";


$result = mysqli_query($dbConnect,$sqlstring);
if (!$result){	
	echo ("<p>Error: Contact information was not added.</p>" .
			"<p>Error code $dbConnect->errno: $dbConnect->error. </p>");
	$dbConnect->close();
	exit;
	}


$sqlstring2 = "SELECT * FROM vendor WHERE Name = '$Name' AND address = '$Address' AND Cost = '$Cost' AND city = '$City'";
$resultN = mysqli_query($dbConnect, $sqlstring2);
$info = mysqli_fetch_all($resultN, MYSQLI_ASSOC);

$id = $info[0]['Vendor_id'];





if($Tag1!=''){
	
$sqlstring3 = "INSERT INTO  vendor_tags VALUES ('$id','$Tag1')";
$result = mysqli_query($dbConnect,$sqlstring3);
if (!$result){	
	echo ("<p>Error: Contact information was not added.</p>" .
			"<p>Error code $dbConnect->errno: $dbConnect->error. </p>");
	$dbConnect->close();
	exit;
	}
}

if($Tag1!=''){
	
$sqlstring4 = "INSERT INTO  vendor_tags VALUES ('$id','$Tag2')";
$result = mysqli_query($dbConnect,$sqlstring4);
if (!$result){	
	echo ("<p>Error: Contact information was not added.</p>" .
			"<p>Error code $dbConnect->errno: $dbConnect->error. </p>");
	$dbConnect->close();
	exit;
	}
}

if($Tag1!=''){
	
$sqlstring5 = "INSERT INTO  vendor_tags VALUES ('$id','$Tag3')";
$result = mysqli_query($dbConnect,$sqlstring5);
if (!$result){	
	echo ("<p>Error: Contact information was not added.</p>" .
			"<p>Error code $dbConnect->errno: $dbConnect->error. </p>");
	$dbConnect->close();
	exit;
	}
}

if($Tag1!=''){
	
$sqlstring6 = "INSERT INTO  vendor_tags VALUES ('$id','$Tag4')";
$result = mysqli_query($dbConnect,$sqlstring6);
if (!$result){	
	echo ("<p>Error: Contact information was not added.</p>" .
			"<p>Error code $dbConnect->errno: $dbConnect->error. </p>");
	$dbConnect->close();
	exit;
	}
}
?>
<h1>Vendor Added<h1>
<form action="Home.php">
<input type = "submit" value = "Employee Page">
</form>
</div>
<form action="Venders.html">
<input type = "submit" value = "Vender Page">
</form>
</div>
</html>