<?php require_once('inc/connection.php') ?>

<?php 

		//cheak form submision
		if (isset($_POST['login'])) {
			
			$errors = array();

		//cheak for user name and password is entered
				if (isset($_POST['username'])  || strlen(trim($_POST['username'])) < 1 ) {
					$errors = 'user name missing';
				}

				if (isset($_POST['password'])  || strlen(trim($_POST['username'])) < 1 ) {
					$errors = 'password missing';
				}
		//chaek for errors in the form

				if (empty($errors)) {
					
				
						//svae user name and pasword in to variables

						$email = mysqli_real_escape_string($connection , $_POST['username'] );
						$password = mysqli_real_escape_string($connection , $_POST['password'] );
						//$hashed_password = sha1($password);

						//prepare database query

						$query = "SELECT * FROM user 
								WHERE email = '{$email}'
								AND password = '{$password}'
								 LIMIT 1";


						

						$result_set = mysql_query($connection , $query);

						if ($result_set) {

							//query successful
							
							if (mysqli_num_rows($result_set) == 1) {
								//if valid user found


								//rederect  user to home.php
								//header('Location : homepage.php');
								
							}else{
								// error user name or password
								$errors[] = 'Invalid user name / password';
							}
						}else{
							$errors[] = 'database query failed';
						}

				}
		}

 ?>

<!DOCTYPE html>
<html>
<head>
    <title> Login Page </title>
	<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="styles/headernfooter.css">
    <link rel="stylesheet" type="text/css" href="styles/login.css">   
</head>
    <body>
	 <h1>SPARKLES</h1>
	
	
	<ul>
	<li><a href="homepage.php" class="navi">Home</a></li>
	<li><a href="services.php" class="navi">Services</a></li>
	<li><a href="aboutus.php"class="navi">About Us</a></li>
	<li><a href="gallery.php" class="navi">Gallery</a></li>
	<li><a href="contactus.php" class="navi">Contact Us</a></li>
	<li style="float:right"><a class="active" href="login.php" >Login</a></li>
	<li style="float:right"><a href="signup.php">Sign Up</a></li>
	</ul>
	
    <div class="login-box">
        <h2>Login</h2>
            <form name="signin" action="home.php" method="post">

            <?php 
            	if (isset($errors) && !empty($errors)) {
            		echo "Invalid username or password";
            	}

             ?>
			
            <label>Username</label>
            <input type="text" name="username" placeholder="Enter Username" required>
			
            <label>Password</label>
            <input type="password" name="password"  placeholder="Enter Password" required>
			
            <input type="submit" name="login" value="Login">
			
            <a href="#">Forget Password</a>    
            </form>
    </div>
	</br></br></br>
		
    <!--Footer-->
	<div class="footer">
		<h2>Sparkles</h2>
		<p>@Copyright.All rights reserved
	</div>
   
  </body>
   
</html>