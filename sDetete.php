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

$id = $_GET['Did'];



if (!$id) {
    echo "<p>You have not entered all the required information. </p>";

    exit;
}

    $data = "DELETE FROM `survey_table` WHERE Survey_id = '$id'";
    $result = mysqli_query($dbConnect,$data);
if (!$result){	
	echo ("<p>Error: Contact information was not added.</p>" .
			"<p>Error code $dbConnect->errno: $dbConnect->error. </p>");
	$dbConnect->close();
	exit;
	}

 ?>
 <h3>Survey Removed</h3>
