<?php 
include("config.php");

		
			if(isset($_POST['login'])){
				
				$user = stripslashes($_REQUEST ['user']);
				$user = mysqli_real_escape_string($mysqli,$user);
				$pass = stripslashes($_REQUEST['pass']);
				$pass = mysqli_real_escape_string($mysqli,$pass);
				//$pass = md5($pass);

	$query = "SELECT * FROM admin_login WHERE name = '$user' && Password = '$pass'";
				
				$result = mysqli_query($mysqli,$query);
				 
				$rows = mysqli_fetch_array($result);

			if(isset($rows) && count($rows) > 0){	
				$record = mysqli_fetch_array($result);
				session_start();
				$_SESSION['auth'] = TRUE;
				$_SESSION['user_data'] = $record['id'];
				header('Location:index.php');	
					}
					else{

					$error = "<div class='num'><h3>Username/password is incorrect.</h3><br/></div>";
					}
			}
 ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/css.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">

<!-- js file included -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
<header>	
<div class="row ml-0 mr-0">
	<div class="col-md-3 pl-0 pr-0">
		<div class="site_logo">
			<a href="#!">Admin Panel</a>
		</div>
	</div>
	<div class="col-md-9 pl-0 pr-0">
		<div class="site_header" style="height: 50px;">
			<i class="fa fa-bars" aria-hidden="true"></i>	
						
		</div>
	
</div>
	</div>
</div>
</header>
<body class="login_back">
<div class="container">
   <div class="row ">
		<div class="col-md-4">
		  </div>
		
		<div class="col-md-4">
			<?php
			 if(isset($_POST['login'])){ echo $error; } 
			 ?>
			<form action="" method="POST" enctype="multipart/form-data">
				<div class="login_box">
				<h1>Login</h1>
				<div class="text_box">
					<input type="text" placeholder="Username" name="user">
				</div>
				<div class="text_box">
					<input type="password" placeholder="Password" name="pass">
				</div>
				<button type="submit" name="login">Sign In</button>
			</div>
			</form>
		</div>
	
		<div class="col-md-4">
			   </div>
	</div>	
<!-- container div ends	 -->
</div>
<!-- js file included -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>