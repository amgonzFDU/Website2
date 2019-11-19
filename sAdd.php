<body background = "Blue.jpg">

<form action="Home.php">
<input type = "submit" value = "Employee Page">
</form>
</div>
<form action="Surveyx.php">
<input type = "submit" value = "Survey Page">
</form>
<?php

@$dbConnect = new mysqli('localhost', 'root', '', 'test');
if (mysqli_connect_errno()) {
  echo ("<p>Error: Unable to connect to database.</p>" .
      "<p>Error code $dbConnect->connect_errno: $dbConnect->connect_error. </p>");
  exit;
  } 

$id = $_GET['Aid'];
if (!$id) {
    echo "<p>You have not entered all the required information. </p>";

    exit;
 }

 $data = "SELECT * FROM Survey_table where Survey_id = '$id'" ; 
 $resultN = mysqli_query($dbConnect, $data) or die("Unable to select data x"); 
$info = mysqli_fetch_all($resultN, MYSQLI_ASSOC);

 $Email = $info[0]['Email']; 
 $First = $info[0]['firstname'];
 $Last = $info[0]['lastname'];
 $Phone = $info[0]['Phone'];

$sqlstring = "INSERT INTO  customer Values ('$Email','$First','$Last','$Phone')";


$result = mysqli_query($dbConnect,$sqlstring);
if (!$result){	
	echo ("<p>Error: Contact information was not added.</p>" .
			"<p>Error code $dbConnect->errno: $dbConnect->error. </p>");
	$dbConnect->close();
	exit;
	}
	$dbConnect->close();

 ?>
 <h3>Costomer Added</h3>