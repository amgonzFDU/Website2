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

<div align = "rignt">
<form action="Home.php">
<input type = "submit" value = "Employee Page">
</form>
</div>

<div align = 'center'>


<table>

			<h2>Customer Reviews</h2>
	<tr>
		<td>Review ID</td>
		<td>Event</td>
		<td>Rating</td>
		<td>Comments</td>
		<td>Email</td>
		
		
	</tr>	

<?php 

 @$dbConnect = new mysqli('localhost', 'root', '', 'test');
if (mysqli_connect_errno()) {
	echo ("<p>Error: Unable to connect to database.</p>" .
			"<p>Error code $dbConnect->connect_errno: $dbConnect->connect_error. </p>");
	exit;
	} 
 $data = "SELECT * FROM reviews order by Review_id desc"; 
 $resultN = mysqli_query($dbConnect, $data) or die("Unable to select data"); 
 #$info = mysql_fetch_array($data);

$i=0;
$info = mysqli_fetch_all($resultN, MYSQLI_ASSOC);
$L = count($info);
 while($i < $L)
 { 
 echo "<tr>"; 
 echo "<td>".$info[$i]['Review_id'] . "</td> "; 
 echo "<td>".$info[$i]['Event_Type'] . "</td> "; 
 echo "<td>".$info[$i]['Rating'] . " </td>";
 echo "<td>".$info[$i]['Comments']. " </td>";
  echo "<td>".$info[$i]['Email'] . "</td> "; 
 echo "</tr>";
 $i++; 
 } 
$dbConnect->close();
?> 
<center>
</body>
<html>



















































































































