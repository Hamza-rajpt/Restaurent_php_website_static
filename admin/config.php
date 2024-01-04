<?php

	$databaseHost = 'localhost';
	$databasename = 'userlogin';
	$databaseUsername = 'root';
	$databasepassword = '';
	
	$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasepassword, $databasename);
	
	if($mysqli){	
	}
	else{
		die("can't acces to data base - connection failed: " . $mysqli_connect_error);
	}
?>