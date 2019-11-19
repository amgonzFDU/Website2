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
	<center>
	<h2>Survey page<h2>
</center>
<form action="Home.php">
<input type = "submit" value = "Employee Page">
</form>
</div>
<form action="Customers.php">
<input type = "submit" value = "Costomer Page">
</form>
<form id=subForm action="sAdd.php" method="GET">

        <label for=Aid class=label>Enter a Survey ID to Make a new costomer:</label>
        <input class="textinput" id="Aid" type="text" name="Aid" value="" >
    	<input type = "submit" value = "Add">
	
     </form>
 <form id=subForm action="sDetete.php" method="GET">
	
        <label for=Aid class=label>Enter a Survey ID to Delete a Survey:</label>
        <input class="textinput" id="Did" type="text" name="Did" value="" >
        <input type = "submit" value = "Remove">
 </form>
<table>
       <tr>
    <td>id</td>
    <td>Firstname</td>
    <td>Lastname</td>
    <td>Phone</td>
    <td>Event Type</td>
    <td>Budget</td>
<td>Date</td>
<td>Size</td>
<td>Comments<td>

  </tr> 


<?php

@$dbConnect = new mysqli('localhost', 'root', '', 'test');
if (mysqli_connect_errno()) {
  echo ("<p>Error: Unable to connect to database.</p>" .
      "<p>Error code $dbConnect->connect_errno: $dbConnect->connect_error. </p>");
  exit;
  } 
 $data = "SELECT * FROM Survey_table"; 
 $resultN = mysqli_query($dbConnect, $data) or die("Unable to select data"); 

$i=0;
$info = mysqli_fetch_all($resultN, MYSQLI_ASSOC);
$L = count($info);
 while($i < $L)
 { 
 echo "<tr>"; 
 echo "<td>".$info[$i]['Survey_id'] . "</td> "; 
 echo "<td>".$info[$i]['Email'] . "</td> "; 
 echo "<td>".$info[$i]['firstname'] . " </td>";
 echo "<td>".$info[$i]['lastname']. " </td>";
 echo "<td>".$info[$i]['Phone']. " </td>";
 echo "<td>".$info[$i]['Event_Type']. " </td>";
 echo "<td>".$info[$i]['Budget']. " </td>";
 echo "<td>".$info[$i]['Event_date']. " </td>";
 echo "<td>".$info[$i]['Size']. " </td>";
 echo "<td>".$info[$i]['Comments']. " </td>";

 echo "</tr>";
 $i++; 
 } 
$dbConnect->close();




?>


      
  </form>

  </html>