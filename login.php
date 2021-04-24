<?php //Login Page


session_start();
if(isset($_SESSION["key"])){
	
	header('location: profile.php');
}

include 'conn.php';
	
	
?>

<?php include 'header.php' ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	
	

	
	
<title>Login Page</title>
</head>

<body>
	
	<div class="container-form" id="container-form">
    	<div class="form-container log-in-container">
   			<form method="POST" action="#">
				<h1>Login</h1>
    
					<span>Login with your account</span>
						<input type="email" name="email" placeholder="Email" />
						<input type="password" name="password" placeholder="Password" />
				
							<?php if(isset($_POST['try_login'])){
		$email = $_POST['email'];
		$password =md5($_POST['password']);
		
		//if email registered
		$sql = "SELECT * FROM user WHERE email = '".$email."'";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query)> 0){
			
			//if email and password is correct
			$sql = "SELECT * FROM user WHERE
				email = '".$email."' AND
				password = '".$password."'";
			$query= mysqli_query($conn, $sql);
			
			if(mysqli_num_rows($query) >0){
				//if success
				$row = mysqli_fetch_array($query);
				$_SESSION["key"] = $row["id"];
				header('location: profile.php');
				
			}else{
				//if failed
				echo "Login Failed";
			}
		}else {
			echo "The email does not exist.";
		}
	} ?>

						<button class="button-form" name="try_login">Log In</button>
			</form>
		</div>
		
    	<div class="overlay-container">
    			<div class="overlay">
    				<div class="overlay-panel overlay-right">
					<h1>Welcome to login page</h1>
					<p>Please login with your registered email and password.</p>
					</div>
    			</div>
		</div>
	</div>
	
	

	

	

</body>
</html>

<?php include 'footer.php' ?>