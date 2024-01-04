
<?php

session_start();
if (isset($_SESSION['userid'] )) {      //here user id stored in session
	# code...
}
else{
	header("Location:login-page.php");
}

?>