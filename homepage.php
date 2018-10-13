<!DOCTYPE html>
<html>
  <head>
		<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="styles/home.css">
		<link rel="stylesheet" type="text/css" href="styles/headernfooter.css">
  </head>
  <body>
    
	<!-- Header -->
	<div class="header">
		<h1>Sparkles</h1></br>
	
		<ul>
		<li><a class="active" href="homepage.php" class="navi">Home</a></li>
		<li><a href="services.php" class="navi">Services</a></li>
		<li><a href="aboutus.php"class="navi">About Us</a></li>
		<li><a href="gallery.php" class="navi">Gallery</a></li>
		<li><a href="contactus.php" class="navi">Contact Us</a></li>
		<li style="float:right"><a href="login.php">Login</a></li>
		<li style="float:right"><a href="signup.php">Sign Up</a></li>
		</ul>
		<br><br>
	</div>

	<!--The Wallpaper-->
	<div class="mainimage">
		<img src="images/2.jpg" width="1200px">
	</div>

	
	<!-- The packages-->
	<div class="packages">
		<h3>Our Packages</h3>
	
		<!-- Displaying the packages in images-->
		<div class="gallery">
				<img src="images/a.jpg">
			<div class="overlay">
				<a target="_blank" href="babypack.php">Baby Pack</a>
			</div>
		</div>

		<div class="gallery">
				<img src="images/b.jpg">
			<div class="overlay" >
					<a target="_blank" href="sweet16.php">Sweet Sixteen</a>
			</div>
		</div>

		<div class="gallery">
				<img src="images/c.jpg">
			<div class="overlay">
				<a target="_blank" href="21speacil.php">21 Special</a>
			</div>
		</div>

		<div class="gallery">
				<img src="images/d.jpg">
			<div class="overlay">
				<a target="_blank" href="dirtythirty.php">Dirty Thirty</a>
			</div>
		</div>

		<div class="gallery">
				<img src="images/e.jpg">
			<div class="overlay">
				<a target="_blank" href="norty40.php">Naughty forty</a>
			</div>
		</div>

		<div class="gallery">
				<img src="images/f.jpg">
			<div class="overlay">
				<a target="_blank" href="createown.php">Create Your Own</a>
			</div>
		</div>
		
	</div>

	<!--Advertisment-->
	<img src="images/k.jpg">
	
	<!--Creating Columns-->
	<div class="row">
	<!--Left Column-->
	<div class="leftcolumn">		
		<!-- Star Rating -->
		<div class="rating" >
		<h2>Star Rating</h2>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>	
			<span class="fa fa-star un"></span>
			<span class="fa fa-star un"></span>
		</div>
	
		<!-- Feedback -->
		<div class="container">
			<form name="feedback" action=#>
		
			<label for="feedback">Feedback</label>
			<textarea type="text" required id="feedback" name="feedback" style="height:150px"></textarea>
		
			<input type="submit" value="submit">
		
			</form>
		</div>
		
	</div>
	
	<!--Right Column -->
	<div class="rightcolumn"></br></br>
		<!--Calender-->
		<div class="calender">
			<div class="month"> 
				August<br><span style="font-size:18px">2018</span>
			</div>

			<ul class="weekdays">
				<li>Mo</li>
				<li>Tu</li>
				<li>We</li>
				<li>Th</li>
				<li>Fr</li>
				<li>Sa</li>
				<li>Su</li>
			</ul>	

			<ul class="days">
				<li> </li>
				<li> </li>
				<li>1</li>
				<li>2</li>
				<li>3</li>
				<li>4</li>
				<li>5</li>
				<li>6</li>
				<li>7</li>
				<li>8</li>
				<li>9</li>
				<li><span class="active">10</span></li>
				<li>11</li>
				<li>12</li>
				<li>13</li>
				<li>14</li>
				<li>15</li>
				<li>16</li>
				<li>17</li>
				<li>18</li>
				<li>19</li>
				<li>20</li>
				<li>21</li>
				<li>22</li>
				<li>23</li>
				<li>24</li>
				<li>25</li>
				<li>26</li>
				<li>27</li>
				<li>28</li>
				<li>29</li>
				<li>30</li>
				<li>31</li>
			</ul>	
		</div></br></br>
	</div>
	</div>

	<!--Footer-->
	<div class="footer">
		<h2>Sparkles</h2>
		<p>@Copyright.All rights reserved
	</div>	
	
  </body>
</html>
