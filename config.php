<?php

	$databaseHost = 'localhost';
	$databasename = 'userlogin';
	$databaseUsername = 'root';
	$databasepassword = '';
	
	$conn = mysqli_connect($databaseHost, $databaseUsername, $databasepassword, $databasename);
	
	if($conn){
		
	}
	else{
		die("connection failed: " . $mysqli_connect_error());
	}

	
	
?>  