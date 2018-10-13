<?php 
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'sparkles01';

	$connection = mysqli_connect('localhost' , 'root' ,'' , 'sparkles01' );


	//connection cheak

	if (mysqli_connect_errno()) {
		die('Database connection failed'  . mysqli_connect_error()); 
	}

 ?>