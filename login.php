

<?php


$user = $_GET['user'];
$pass = $_GET['pass'];


@$dbConnect = new mysqli('localhost','root', '', 'test');
if (mysqli_connect_errno()) {
	echo ("<p>Error: Unable to connect to database.</p>" .
			"<p>Error code $dbConnect->connect_errno: $dbConnect->connect_error. </p>");
	exit;
	}

$UserNa = "SELECT * FROM login Where Username = '$user'";

$resultN = mysqli_query($dbConnect, $UserNa) or die("Unable to select data");

$ar = mysqli_fetch_all($resultN, MYSQLI_ASSOC);

$sUser = $ar[0]['Username'];
$sPass = $ar[0]['Password'];

if($user == '' || $pass == ''){
	header('Location: Fail.php');

	exit;

}
if($user == $sUser&& $pass == $sPass){
	header('Location: Home.php');
	

}
Else{
header('Location: Fail.php');
	
	exit;

}




echo "<br>";


$dbConnect->close();
?>