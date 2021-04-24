<?php
session_start();
unset($_SESSION["key"]);
session_destroy();
header('location: login.php');

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