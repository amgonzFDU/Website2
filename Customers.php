<html>
<body background = "Blue.jpg">
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
<form action="Home.php">
<input type = "submit" value = "Employee Page">
</form>
<div align = 'center'>
<h3>Customers<h3>
<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:dt="uuid:C2F41010-65B3-11d1-A29F-00AA00C14882"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">

<title>Page Title</title>
<style>
<!--
 /* Font Definitions */
@font-face
	{font-family:"Courier New";
	panose-1:2 7 3 9 2 2 5 2 4 4;}
 /* Style Definitions */
p.MsoBodyText3, li.MsoBodyText3, div.MsoBodyText3
	{margin-right:0pt;
	text-indent:0pt;
	margin-top:0pt;
	margin-bottom:8.0pt;
	line-height:125%;
	text-align:left;
	font-family:Arial;
	font-size:9.0pt;
	color:black;}
ol
	{margin-top:0in;
	margin-bottom:0in;
	margin-left:-2197in;}
ul
	{margin-top:0in;
	margin-bottom:0in;
	margin-left:-2197in;}
@page
	{size:8.0302in 11.0in;}
-->
</style>
</head>

<body link="#CC3300" vlink="#336633" style='margin:0'>

<div style='position:absolute;width:7.-71in;height:2.-332in'>
<![if !vml]><span style='position:absolute;z-index:93;
left:70px;top:160px;width:192px;height:109px'>

 <tr>
  <td width=192 height=109 style='vertical-align:top'><![endif]>
  <div v:shape="_x0000_s1242" style='padding:2.88pt 2.88pt 2.88pt 2.88pt'
  class=shape>
  <p class=MsoBodyText3 style='text-align:center;text-align:center'><a
  href="CustomersAdd.html"><span lang=en-US
  style='font-size:26.0pt;line-height:125%;font-family:"Courier New";
  color:white;text-decoration:underline;font-weight:bold;language:en-US'>Add Customer</span></a></p>
  </div>
  <![if !vml]></td>

</table>

</span><![endif]><![if !vml]><span style='position:absolute;z-index:94;
left:435px;top:159px;width:248px;height:118px'>


 <tr>
  <td width=248 height=118 style='vertical-align:top'><![endif]>
  <div v:shape="_x0000_s1243" style='padding:2.88pt 2.88pt 2.88pt 2.88pt'
  class=shape>
  <p class=MsoBodyText3 style='text-align:center;text-align:center'><a
  href="Surveyx.php"><span lang=en-US
  style='font-size:26.0pt;line-height:125%;font-family:"Courier New";
  color:white;text-decoration:underline;font-weight:bold;language:en-US'>View Surveys</span></a></p>
  
  </div>
  <![if !vml]></td>
 </tr>
 <table>
      <h2>Customers</h2>
  <tr>
    <td>Email</td>
    <td>Firstname</td>
    <td>Lastname</td>
    <td>Phone</td>
    
  </tr> 
</span><![endif]>
</div>
<?php
@$dbConnect = new mysqli('localhost', 'root', '', 'test');
if (mysqli_connect_errno()) {
  echo ("<p>Error: Unable to connect to database.</p>" .
      "<p>Error code $dbConnect->connect_errno: $dbConnect->connect_error. </p>");
  exit;
  } 
 $data = "SELECT * FROM customer"; 
 $resultN = mysqli_query($dbConnect, $data) or die("Unable to select data"); 

$i=0;
$info = mysqli_fetch_all($resultN, MYSQLI_ASSOC);
$L = count($info);
 while($i < $L)
 { 
 echo "<tr>"; 
 echo "<td>".$info[$i]['Email'] . "</td> "; 
 echo "<td>".$info[$i]['firstname'] . " </td>";
 echo "<td>".$info[$i]['lastname']. " </td>";
 echo "<td>".$info[$i]['Phone']. " </td>";
 echo "</tr>";
 $i++; 
 } 
$dbConnect->close();





?>




</body>

</html>
