<!DOCTYPE html>
<html>
	<head>
		<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
		<link rel="stylesheet" type="text/css" href="styles/headernfooter.css">
		<link rel="stylesheet" type="text/css" href="styles/services.css">
		
				
	</head>
  <body>
		
	 <h1>Sparkles</h1>
	<div class="log">
	
	<ul>
	<li><a  href="homepage.php" class="navi">Home</a></li>
	<li><a class="active" href="services.php" class="navi">Services</a></li>
	<li><a href="aboutus.php"class="navi">About Us</a></li>
	<li><a href="gallery.php" class="navi">Gallery</a></li>
	<li><a href="contactus.php" class="navi">Contact Us</a></li>
	<li style="float:right"><a href="login.php">Login</a></li>
	<li style="float:right"><a href="signup.php">Sign Up</a></li>
	</ul>
	</div>
	
	<h5>Services</h5>
		
	<!--The Wallpaper slide show-->
	
	
	<div class="mySlides fade" class="mainimage">
		<img src="images/1.jpg" style="width:100%; height:500px;">
	</div>
	<div class="mySlides fade" class="mainimage">
		<img src="images/y.jpg" style="width:100%; height:500px;">
	</div>
	<div class="mySlides fade" class="mainimage">
		<img src="images/z.jpg" style="width:100%; height:500px;">
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

	</br></br>
	
	<div class="ser">
		<a href="package.php  ?>" style="text-decoration:none;">Packages</a><br>
		<a href="food.php" style="text-decoration:none;">Food and Beverages</a><br>
		<a href="venues.php" style="text-decoration:none;">Venues</a><br>
		<a href="d" style="text-decoration:none;">DJ Entertainment</a><br>
		<a href="e" style="text-decoration:none;">Event Co-ordination</a><br>
		<a href="f" style="text-decoration:none;">Games</a><br>
		<a href="g" style="text-decoration:none;">Cakes with Design</a><br>
		<a href="h" style="text-decoration:none;">Decorations</a><br>
		<a href="i" style="text-decoration:none;">Play Area</a><br>
		<a href="j" style="text-decoration:none;">Face-Painating</a><br>
		<a href="k" style="text-decoration:none;">Mehendi Designs</a><br>
	</div>	
	
	
	<div class="footer"  style="margin-top:500px;">
		<h2>Sparkles</h2>
		<p>@Copyright.All rights reserved
	</div>	
	
	
	</body>
</html>