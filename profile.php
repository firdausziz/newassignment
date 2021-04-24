<?php //Dashboard page

session_start();
if(!isset($_SESSION["key"])){
	header('location: login.php');
}

include 'conn.php';
$sql = "SELECT * FROM user WHERE id =".$_SESSION["key"];
$query = mysqli_query($conn, $sql);
$user =mysqli_fetch_array($query);

?>

<?php include 'header.php' ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>My Profile</title>
</head>

<body>
	<p> Name: <?php echo $user["name"] ?></p>
	<p> Email: <?php echo $user["email"] ?></p>
	<p> Phone Number: <?php echo $user["phone_no"] ?></p>
	<p> IC Number: <?php echo $user["no_ic"] ?></p>
	<p> Company: <?php echo $user["company"] ?></p>
	<p> Company Adress: <?php echo $user["address"] ?></p>
	<p> Date Registered: <?php echo $user["date_registered"] ?></p>
</body>
</html>
<?php include 'footer.php' ?>