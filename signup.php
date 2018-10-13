<?php     require_once('inc/connection.php') ?>
<?php 

	error_reporting(0);

	$errors = array();

	$fname =$_POST['fname'];
	$lname =$_POST['lname'];
	$email =$_POST['email'];
	$contactnumber =$_POST['contactnumber'];
	$address = $_POST['address'];
	$gender = $_POST['gender'];
	$paymentmethod = $_POST['paymentmethod'];
	$password = $_POST['password'];




	$query = "INSERT INTO user (";
	$query .= "fname , lname , email , contactnumber , address , gender , paymentmethod , password";
	$query .= ") VALUES (";
	$query .= " '{$fname}','{$lname}','{$email}', '{$contactnumber}' , '{$address}' , '{$gender}' , '{$paymentmethod}' , '{$password}' " ;
	$query .=")";


	
	$result = mysqli_query($connection , $query);

	if ($result) {
		echo "ok";

	}else{
		echo "failed";
	}	

		

 ?>


<!DOCTYPE html>
<html>
	<head>
		<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
		<link rel="stylesheet" type="text/css" href="styles/headernfooter.css">
		<link rel="stylesheet" type="text/css" href="styles/signup.css">
		
				
	</head>
  <body>
		
	 <h1>SPARKLES</h1>
	
	
	<ul>
	<li><a href="homepage.php" class="navi">Home</a></li>
	<li><a href="services.php" class="navi">Services</a></li>
	<li><a href="aboutus.php"class="navi">About Us</a></li>
	<li><a href="gallery.php" class="navi">Gallery</a></li>
	<li><a href="contactus.php" class="navi">Contact Us</a></li>
	<li style="float:right"><a href="login.php">Login</a></li>
	<li style="float:right"><a class="active"  href="signup.php">Sign Up</a></li>
	</ul>
	
	<div class="Register-box">
		<h3>Create your account</h3>
		<form name="signup" method="post" onsubmit = "return validatesignup()">
	
		<label>Full name:</label>
		<input type="text" name="fname" placeholder="First name" id="fname">
		<input type="text" name="lname" placeholder="Last name" id="lname"><br><br>
	
		<label>E-mail:</label>
		<input type="text" name="email" placeholder="Eg:***@gmail.com  " id="email"><br><br>
	
		<label>Contact number:</label>
		<input type ="text" name="contactnumber" placeholder="Eg:07*-*******" id="contactnumber"><br><br>
	
		<label>Home address:</label>
		<textarea type="text" id="address" name="address" style="height:150px"></textarea><br><br>
	
		<label>Gender:</label>
		<select id="gender" name="gender">
				<option value="male">Male</option>
				<option value="female">Female</option>
		</select>
	
		<label>Payment method:</label><br>
		<input type="radio" name="pay" id="paymentmethod">Paypal<br>
		<input type="radio" name="pay" id="paymentmethod">Visa<br>
		<input type="radio" name="pay" id="paymentmethod">Master<br><br>
	
		<label>Password:</label>
		<input type ="password" name="password" id="password" value=""><br><br>
	
		<label>Confirm password:</label>
		<input type="password" name="confermpassword" ><br><br>
	
		<input type ="submit" name="Register" value="Register">
		</form>
	</div>
	
	
	
	<!--Footer-->
	<div class="footer">
		<h2>Sparkles</h2>
		<p>@Copyright.All rights reserved
	</div>
	</body>
</html>