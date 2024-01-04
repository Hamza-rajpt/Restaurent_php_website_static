<!DOCTYPE html>
<html>
<head>
	<title>
			welcome to cafe login
	</title>
<link rel="shortcut icon" type="image/png" href="favicon.png">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>
<script type="text/javascript">
	function btn() {	
	// ..............	
		if (email.value==""||pass.value=="") {
			alert('FILL ALL FEILDS FIRST THEN CONTINUE');

		}	
	else{
		
		}
	// .............
	}
</script>

<body style="background-image: url(images/bckimg3.jpg);background-attachment: fixed;background-size: cover;background-repeat: no-repeat;background-position: center center;">
<!-- ======================php-code========================== -->
<?php

include("config.php");

		if(isset($_POST['submit'])){
			$useremail=	 $_POST['email'];
			$password= 	 $_POST['pass'];

			$select="SELECT *  from kitchnersloguin where email = '$useremail' && password ='$password' ";
			$qry=mysqli_query($conn,$select);

			$row = mysqli_fetch_array($qry);

		if(isset($row) && count($row) > 0){
			session_start();
			$_SESSION['userid'] = $row['id'];
			header("Location:resturent.php"); //Redirecting To Home Page if email password query matched..
		}
		else{
		echo " ! invaild email or password ";
		}
}
// -----------------------------------------
?>
<!-- ======================================================== -->
<!----------------------
 		new div
------------------------>
<div class="row">
	<div class="col-md-4">
		<div class="">	
			</div>                                             
	</div>

	<div class="col-md-4">
		<div class="login_form">
			<h1>Login</h1>
			<form action="" method="post">
				<!-- <input type="text" placeholder="Your Name"> -->
				<input type="email" placeholder="Email Here*" id="email" name="email" required>
				<input type="password" placeholder="Password*" id="pass" name="pass" required>
				<div class="submt-button">
					<input type="submit" value="Login" name="submit" id="loggin" onclick="btn()"><br> <!-- here btn() is a function of java script calling in button -->
					<button>
						<a href="signup-page.php">Goto Signup Page</a>	
					</button>
				</div>
			</form>
		</div>
	</div>

	<div class="col-md-4">
		<div class="">	
			</div>
	</div>
</div>

<!----------------------
 		end
------------------------>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>