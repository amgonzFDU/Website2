<Center>
<h3>Search Results</h3>
</center>
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
<form action="Home.php">
<input type = "submit" value = "Employee Page">
</form>
<br>
<form action="EventE.php">
<input type = "submit" value = "Event page">
</form>

<table>
<center>
  <tr>
    <td>ID</td>
    <td>Email</td>
    <td>Date</td>
     <td>Markup</td>
    <td>Event_Type</td>
  </tr> 
<?php

@$dbConnect = new mysqli('localhost', 'root', '', 'test');
if (mysqli_connect_errno()) {
	echo ("<p>Error: Unable to connect to database.</p>" .
			"<p>Error code $dbConnect->connect_errno: $dbConnect->connect_error. </p>");
	exit;
	}

// get data from the input boxes 
$Email = $_GET['Email'];	
$type = $_GET['type'];
$ID = $_GET['ID'];
$Date = $_GET['Date'];


$data = "SELECT * FROM event Where Email = '$Email' or Event_Type = '$type' or Event_id = '$ID' or Event_date = '$Date'";
$resultN = mysqli_query($dbConnect, $data) or die("Unable to select data");
$i=0;
$info = mysqli_fetch_all($resultN, MYSQLI_ASSOC);
$L = count($info);
 while($i < $L)
 {  
 echo "<tr>"; 
 echo "<td>".$info[$i]['Event_id'] . "</td> "; 
 echo "<td>".$info[$i]['Email'] . " </td>";
 echo "<td>".$info[$i]['Event_date']. " </td>";
 echo "<td>".$info[$i]['Markup']. " </td>";
 echo "<td>".$info[$i]['Event_Type']. " </td>";
 echo "</tr>";
 $i++; 
 } 
if($i == 0){
	echo "<tr>";
	echo "<td>"."No resuts found"."</td> ";

}

$dbConnect->close();
?>
<form id=subForm action="EventD.php" method="GET">
<p>
        <label for=getVend class=label>Input Event ID to get Event Details:</label>
        <input class="textinput" id="eID" type="text" name="eID" value="" >
<input type="submit" value="submit" id=button>

      </p>

</form>
</html>