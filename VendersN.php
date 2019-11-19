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
<form action="Venders.HTML">
<input type = "submit" value = "Vender Search">
</form>

<table>
<center>

<h2>Vender Results</h2>
  <tr>
    <td>Vendor_id</td>
    <td>Name</td>
    <td>address</td>
     <td>State</td>
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


$data = "SELECT * FROM vendor Where Name LIKE '%$Name%' AND Service LIKE '%$Service%' AND city LIKE '%$City%' AND state LIKE '%$State%' AND cost <= '$Ctemp'";
$resultN = mysqli_query($dbConnect, $data) or die("Unable to select data");
$i=0;
$info = mysqli_fetch_all($resultN, MYSQLI_ASSOC);
$L = count($info);
 while($i < $L)
 {  
 echo "<tr>"; 
 echo "<td>".$info[$i]['Vendor_id'] . "</td> "; 
 echo "<td>".$info[$i]['Name'] . " </td>";
 echo "<td>".$info[$i]['address']. " </td>";
 echo "<td>".$info[$i]['state']. " </td>";
 echo "<td>".$info[$i]['Service']. " </td>";
 echo "<td>".$info[$i]['Cost']. " </td>";
 echo "</tr>";
 $i++; 
 } 
if($i == 0){
	echo "<tr>";
	echo "<td>"."No resuts found"."</td> ";

}

$dbConnect->close();
?>

</html>