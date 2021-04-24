<?php
//DB Connect

$hostname= "localhost";
$username= "daus";
$password ="daus";
$database ="membership";

//connecting to databse

$conn =mysqli_connect(
	$hostname,
	$username,
	$password,
	$database
);


//Checkconnection Status
if(!$conn){
	echo "Connection Failed";
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>