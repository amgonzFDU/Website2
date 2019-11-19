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


<title>Server v. 0.0.1</title>
<h1>Chon's Events</h1>
</center>

<center>

  <td width=850 height=43 style='vertical-align:top'><![endif]>
  <div v:shape="_x0000_s1087" style='padding:2.88pt 2.88pt 2.88pt 2.88pt'
  class=shape> <p class=MsoNormal>   


  <a href="Main.html"> 
    <span lang=en-US style='font-size:16.0pt;
  color:white;text-decoration:underline;language:en-US'>Home</span></a><span
  lang=en-US style='font-size:16.0pt;language:en-US'> </span><span lang=en-US
  style='font-size:16.0pt;language:en-US'>&#9679;</span><span lang=en-US
  style='font-size:16.0pt;language:en-US'> </span>

  <a href="Wedding.php">
  <span lang=en-US style='font-size:16.0pt;
  color:white;text-decoration:underline;language:en-US'>Weddings</span></a><span
  lang=en-US style='font-size:16.0pt;language:en-US'> </span><span lang=en-US
  style='font-size:16.0pt;language:en-US'>&#9679;</span><span lang=en-US
  style='font-size:16.0pt;language:en-US'> </span>

  <a href="Events.php">
  <span lang=en-US style='font-size:16.0pt;
  color:white;text-decoration:underline;language:en-US'>Other Events</span></a><span
  lang=en-US style='font-size:16.0pt;language:en-US'> </span><span lang=en-US
  style='font-size:16.0pt;language:en-US'>&#9679;</span><span lang=en-US
  style='font-size:16.0pt;language:en-US'> </span> 

  <a href="Contact.html">
  <span lang=en-US style='font-size:16.0pt;
  color:white;text-decoration:underline;language:en-US'>Contact Us</span></a><span
  lang=en-US style='font-size:16.0pt;language:en-US'> </span><span lang=en-US
  style='font-size:16.0pt;language:en-US'>&#9679;</span><span lang=en-US
  style='font-size:16.0pt;language:en-US'> </span> 

  <a href="Survay.html">
  <span lang=en-US style='font-size:16.0pt;
  color:white;text-decoration:underline;language:en-US'>Request a Consultation</span></a><span lang=en-US style='font-size:16.0pt;language:en-US'> </span><span lang=en-US
  style='font-size:16.0pt;language:en-US'>&#9679;</span><span lang=en-US
  style='font-size:16.0pt;language:en-US'> </span>


  <a href="Review.html">
  <span lang=en-US style='font-size:16.0pt;
  color:white;text-decoration:underline;language:en-US'>Leave a Review</span></a><span
  lang=en-US style='font-size:16.0pt;language:en-US'> </span><span lang=en-US
  style='font-size:16.0pt;language:en-US'>&#9679;</span><span lang=en-US
  style='font-size:16.0pt;language:en-US'> </span>
 
  </div>
  <![if !vml]></td>



  <td width=272 height=70 style='vertical-align:top'><![endif]>
  <div v:shape="_x0000_s1096" style='padding:2.88pt 2.88pt 2.88pt 2.88pt'
  class=shape>
  <p class=MsoTitle3 style='text-align:center;text-align:center'><span
  lang=en-US style='font-size:30.0pt;font-family:"Courier New";color:white;
  text-decoration:underline;language:en-US'>Weddings</span></p>
  </div>
  <![if !vml]></td>

</center>

<span style='position:absolute;z-index:23;
left:250px;top:213px;width:302px;height:201px'><img width=302 height=201
src=/DataPicture/Tables.jpg v:shapes="_x0000_s1088">
<h2>Hign quality venues</h2>
</span>


<span style='position:absolute;z-index:35;
left:650px;top:210px;width:355px;height:174px'><img width=355 height=174
src=/DataPicture/Wedding.jpg v:shapes="_x0000_s1105">
<h2>Great Photographers</h2>
</span>

<span style='position:absolute;z-index:37;
left:250px;top:500px;width:303px;height:201px'><img width=303 height=201
src=/DataPicture/Catering.jpg v:shapes="_x0000_s1108">
<h2>Award winning caterers </h2>
</span>

<span style='position:absolute;z-index:39;
left:650px;top:500px;width:342px;height:193px'><img width=342 height=193
src=/DataPicture/Roof.jpg v:shapes="_x0000_s1110">
<h2>Memorable Locations</h2>
</span>
<body>
  <center>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <table>

      <h2>Customer Reviews</h2>
  <tr>
    <td>Event</td>
    <td>Rating</td>
    <td>Comments</td>
    
  </tr> 

<?php 

 @$dbConnect = new mysqli('localhost', 'root', '', 'test');
if (mysqli_connect_errno()) {
  echo ("<p>Error: Unable to connect to database.</p>" .
      "<p>Error code $dbConnect->connect_errno: $dbConnect->connect_error. </p>");
  exit;
  } 
 $data = "SELECT * FROM reviews Where Event_Type = 'Wedding' order by Review_id desc"; 
 $resultN = mysqli_query($dbConnect, $data) or die("Unable to select data"); 
 #$info = mysql_fetch_array($data);

$i=0;
$info = mysqli_fetch_all($resultN, MYSQLI_ASSOC);
$L = count($info);
 while($i < $L)
 { 
 echo "<tr>"; 
 echo "<td>".$info[$i]['Event_Type'] . "</td> "; 
 echo "<td>".$info[$i]['Rating'] . " </td>";
 echo "<td>".$info[$i]['Comments']. " </td>";
 echo "</tr>";
 $i++; 
 } 
$dbConnect->close();
?> 
<center>
</body>
<html>