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
    <td>Vendor ID</td>
    <td>Name</td>
    <td>Service</td>
     <td>Cost</td>
  </tr> 

<?php

@$dbConnect = new mysqli('localhost', 'root', '', 'test');
if (mysqli_connect_errno()) {
	echo ("<p>Error: Unable to connect to database.</p>" .
			"<p>Error code $dbConnect->connect_errno: $dbConnect->connect_error. </p>");
	exit;
	}

// get data from the input boxes 
$ID = $_GET['eID'];	

$data = "SELECT * from event INNER JOIN event_vendors on event.Event_id = event_vendors.Event_ID INNER JOIN vendor on vendor.Vendor_id = event_vendors.Vendor_ID WHERE event.Event_id = '$ID'";
$resultN = mysqli_query($dbConnect, $data) or die("Unable to select data");
$i=0;
$info = mysqli_fetch_all($resultN, MYSQLI_ASSOC);
$L = count($info);
$cost = 0;

$i =0;
while($i < $L)
 {  
 echo "<tr>"; 
 echo "<td>".$info[$i]['Vendor_id'] . "</td> "; 
 echo "<td>".$info[$i]['Name'] . " </td>";
 echo "<td>".$info[$i]['Service']. " </td>";
 echo "<td>".$info[$i]['Cost']. " </td>";
	$cost= $cost + $info[$i]['Cost'];
 echo "</tr>";
 $i++;
}
echo "<tr>";
echo "<td>"."Cost of event:"."<td>";
echo $cost;"<td>";
echo "<td>"." "."<td>";
echo "<td>"." "."<td>";
echo "</tr>";

$rev = $cost * $info[0]['Markup'];

echo "<tr>";
echo "<td>"."Total event Revenue:"."<td>";
echo $rev."<td>";
echo "<td>"." "."<td>";
echo "<td>"." "."<td>";
echo "</tr>";

echo "<tr>";
echo "<td>"."Profit:"."<td>";
echo $rev - $cost."<td>";
echo "<td>"." "."<td>";
echo "<td>"." "."<td>";
echo "</tr>";
 ?>
 </html>