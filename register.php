<?php //Register Page

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
<title>Registration Page</title>
</head>

<body>

	<div class="container-form" id="container-form">
    	
			
<form  method="POST">
    <table style="border-collapse: collapse; width: 100%;">
        <tbody>
        <tr>
        <td style="width: 100%; border-style: solid; border-color: #000000; text-align: center;"><h2>Online Registration Form</h3></td>
        </tr>
        
        <tr>
        <td style="width: 100%; border-style: solid; border-color: #000000;"><h4>Application For:</h4>
			<div class="controls">
  			<label class="radio">
				<input type="radio" name="category" id="" value="Ordinary">Ordinary
					</label>
				
				<label class="radio">
            	<input type="radio" name="category" id="" value="Associate">Associate
					</label>
				<label class="radio">
            	<input type="radio" name="category" id="" value="Retired Member">Retired
					</label>
				<label class="radio">
            	<input type="radio" name="category" id="" value="Corporate Member">Corporate Member
					</label>
				
			
            </div>
			</td>
			
        </tr>
        <tr>
            <td style="width: 100%; border-style: solid; border-color: #000000; text-align: left;"><h4>Profile Details:</h4>
                Name: <br>
                <textarea cols="70" rows="1" name="name" placeholder="Please enter your full name" ></textarea> <br>
                
                    Identification Number: <br>
                <input  type="number" name="no_ic" id="" placeholder="Please insert the new identification number without '-'"> <br>
        
                Email Address: : <br>
                <input type="email" name="email" id=""> <br>
				
				Password: <br>
                <input  type="password" name="password" id="" > <br>
                Phone Number: <br>
                <input type="number" name="phone_no" id=""> <br>
				Company: <br>
                <textarea name="company" id="" cols="70" rows="5" placeholder="Please insert your company name"></textarea><br>
                Address: <br>
                <textarea name="address" id="" cols="70" rows="5" placeholder="Please insert your company address"></textarea>
            </td>
            </tr>
            
            <tr>
                <td style="width: 100%; border-style: solid; border-color: #000000; text-align: center;">
					<button class="button-form" name="registration_form">Register</button>
					</td>
            </tr>
        </tbody>
        </table>

</form>
			
			
		</div>
	<?php 
	
	if(isset($_POST['registration_form'])){
	$no_ic =$_POST["no_ic"];
	$name =$_POST["name"];
	$category =$_POST["category"];
	$phone_no =$_POST["phone_no"];
	$email =$_POST["email"];
	$password =md5($_POST["password"]);
	$company =$_POST["company"];
	$address =$_POST["address"];
	
	$SQL = "INSERT INTO user (no_ic, name, category, phone_no,  email,  password, membership_no, company, address, date_registered) 
	VALUES ( '".$no_ic."', '".$name."', '".$category."', '".$phone_no."', '".$email."', '".$password."', NULL, '".$company."', '".$address."', NULL);";
		
		$query = mysqli_query($conn, $SQL);
	
	if($query){
		echo "Successfully Registered";
		
	}else {
		//echo $SQL;
		echo "Failed";
	} 
	
	
	
	
}
	
?>


</body>
</html>

<?php include 'footer.php' ?>