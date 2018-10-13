<?php     require_once('inc/connection.php') ?>
<?php 

	error_reporting(0);

	$errors = array();

	$date=$_POST['date'];
	$venue=$_POST['venue'];
	$email=$_POST['email'];

	$query = "INSERT INTO packages (";
	$query .= "date , venue , email , packname , is_deleted";
	$query .= ") VALUES (";
	$query .= " '{$date}','{$venue}','{$email}', 1 , 0 " ;
	$query .=")";


	
	$result = mysqli_query($connection , $query);

	if ($result) {
		//echo "ok";

	}else{
		echo "failed";
	}	

		

 ?>
<!DOCTYPE html>
<html>
 <head>
		<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
		<link rel="stylesheet" type="text/css" href="styles/babypack.css">
		<link rel="stylesheet" type="text/css" href="styles/headernfooter.css">
 </head>
 <body>
	 
	<!--Header--> 
    <div class="header">
		<h1>Sparkles</h1></br>
	
		<ul>
		<li><a href="homepage.php" class="navi">Home</a></li>
		<li><a class="active" href="Services.php" class="navi">Services</a></li>
		<li><a href="aboutus.php"class="navi">About Us</a></li>
		<li><a href="gallery.php" class="navi">Gallery</a></li>
		<li><a href="contactus.php" class="navi">Contact Us</a></li>
		<li style="float:right"><a href="login.php">Login</a></li>
		<li style="float:right"><a href="signup.php">Sign Up</a></li>
		</ul>
		<br><br>
		</div>
	
		<!--The Wallpaper slide show-->
	
	<div style="margin-left:300px;">
	<div class="mySlides" >
		<img src="images/baby1.jpg" style="width:80%; height:700px;">
	</div>
	<div class="mySlides">
		<img src="images/baby6.jpg" style="width:80%; height:700px;">
	</div>
	<div class="mySlides">
		<img src="images/baby4.jpg" style="width:80%; height:700px;">
	</div>
	</div>
	
	<span class="dot"></span> 
	<span class="dot"></span> 
	<span class="dot"></span>
	
	<script>
	var slideIndex = 0;
	showSlides();

	function showSlides() {
		var i;
		var slides = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("dot");
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";  
		}
		slideIndex++;
		if (slideIndex > slides.length) {slideIndex = 1}    
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
		slides[slideIndex-1].style.display = "block";  
		dots[slideIndex-1].className += " active";
		setTimeout(showSlides, 2000);
	}
	</script>


	
	<!--Introduction-->
	<div class="intro" style="margin-left:100px;">
		<p> It's your childs speacial day.Do you want to him/her happy?
		<p> We know you do. Check our package which suits your child with lots of games and many more.
	</div>
	
	
	
	<!--Creating Columns-->
	<div class="row">
	<!--Left Column-->
	<div class="leftcolumn">	
		<div class="items"></br>
			<p>Food a beverages for 25+ guest
			<p>2 Kg Cake
			<p>Decorations
			<p>Popular Venue 
			<p>KIds carnivals
			<p>Cartoon characters
			<p>Toys
		</div>
	</div>
	
	
	<div class="rightcolumn">
		<div class="container">
			<form name="availability" method="post">
		
			<label for="date">Date</label>
			<input type="date" id="date" name="date" ></input>
			
			<label for="venue">Venue</label>
			<select id="venue" name="venue">
				<option value="baby arena">Baby Arena</option>
				<option value="home">Home Sweet Home</option>
				<option value="cinnamon">Cinnamon</option>
			</select>
			
			<label for="email">Email</label> 
			<input type="text" id="email" name="email" placeholder="Enter your email"></input>
				
			<input type="Submit" name="Submit" onclick = "details()">
		
			</form>
		</div>	
	</div>
	<script>
	function details() {
		alert("your details have been submitted and the ammount per person is Rs.1000/=");
	}
	</script>
	
	</div><!--To close the row-->
	
	
	
	<!--Footer-->
	<div class="footer" style="margin-top:300px;">
		<h2>Sparkles</h2>
		<p>@Copyright.All rights reserved
	</div>
  
	
 </body>
	
</html>