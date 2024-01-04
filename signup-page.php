<!DOCTYPE html>
<html>
<head>
	<title>
			welcome to cafe signup
	</title>
<link rel="shortcut icon" type="image/png" href="favicon.png">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>
<script type="text/javascript">
	function btn() {		
		var letters = /^[a-zA-Z]+$/;
	// ...................................	
		if (nme.value==""||lstnme.value==""||eml.value==""||pas.value==""||confpas.value==""){
			alert('FILL ALL FEILDS FIRST THEN CONTINUE');
		}	
		else if (pas.value!==confpas.value) {
			alert('password does not match~ cannt proceed');	
		}
	// .......for letter only validation........
		if (nme.value.match(letters)) {

		 }
		else{
			alert('Please input letters only in name feild');
      		return false;
		}

		if (lstnme.value.match(letters)) {

		 }
		else{
			alert('Please input letters only in last name feild');
      		return false;
		}
	// .............	

	}
</script>
<body style="background-image: url(images/bckimg3.jpg);background-attachment: fixed;background-size: cover;background-repeat: no-repeat;background-position: center center;">

<!-- ===========php-code=====sign-up-page================ -->
<?php error_reporting(0);
	include("config.php");

if (isset($_POST['send'])) {   //--------create is the id of submit button--------   

	$nme=	 $_POST['nme'];
	$lstnme= $_POST['lstnme'];
	$eml=	 $_POST['eml'];
	$pas=	 $_POST['pas'];
	$confpas=$_POST['confpas'];
	//---- method to concatinate--for check data incoming on black page--------//
	//echo $nme."" .$lstnme."" .$eml."" .$pas."" .$confpas."";

	$insertquery ="insert into kitchnersloguin (name,lastname,email,password,confermpassword) 
	 values('$nme','$lstnme','$eml','$pas','$confpas') ";

	  mysqli_query($conn,$insertquery);

}
?>
<!-- ==================================================== -->
<!----------------------
 		new div
------------------------>
<div class="row">
	<div class="col-md-4">
		<div class="">	
			</div>                                             
	</div>

	<div class="col-md-4">
		<div class="signup_form">
			<h1>SIGN-UP</h1>
			<form method="post" action="">
				<input type="text" placeholder="Your name here*" id="nme" name="nme" required>
				<input type="text" placeholder="Your lastname Here*" id="lstnme" name="lstnme" required="">
				<input type="email" placeholder="Email Here*" id="eml" name="eml" required="">
				<input type="password" placeholder="Password*" id="pas" name="pas" required="">
				<input type="password" placeholder="Conferm Password*" id="confpas" name="confpas" required="">
	<!-- submit button below for send data to database -->
				<div class="submt-button">
				 <input type="submit" value="signup" id="send" name="send" onclick="btn()"><br>
				 <button>
						<a href="login-page.php">Goto Login Page</a>	
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