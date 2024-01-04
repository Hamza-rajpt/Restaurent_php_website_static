<?php include('session-check.php'); ?>
<!-- ===========php-code=====ContactUs-page================ -->
<?php
	include("config.php");

if (isset($_POST['send'])) {   //--------create is the id of submit button--------   

	$nme=	 $_POST['nme'];
	$eml=	 $_POST['eml'];
	$sbj= $_POST['sbj'];
	$revDT=	 $_POST['txtarea'];

	$insertquery =" insert into user_contact_us (name,email,subject,review_detail) 
	 values('$nme','$eml','sbj','$revDT')";

	  $insert=mysqli_query($conn,$insertquery);

	  if ($insert) {
	  	echo"<script> alert('Review Submited Successfully');</script>";
	  }
	  else{
	  	echo"<script> alert('OhNo, Cann't Proceed Your Request');</script>";

	  }
}
?>

<!-- ==================================================== -->
<title>
			Menu's-cafe Contact Us
</title>
<?php include('header.php'); ?>

<!------------------------------------------
 contact us main_header section starts 
------------------------------------------->
<div class="row">
	<div class="col-md-12">
		<div class="contact_us_header" style="position: relative;">
			<h1>!FEEDBACK/CONTACT</h1>
			<h2>Contact Us Whenever You Need</h2>
		</div>
	</div>
</div>
<!--------------- 
	  end
---------------->
<!------------------------------------------
		input feild  section starts 
------------------------------------------->
<div class="row">
	<div class="container">
	<div class="col-md-12">
		<div class="inputfeild_heading_text">
			<h1>SEND MESSAGE</h1>
		</div>
	</div>
  </div>	
</div>

<div class="row">
  <div class="container">
	<div class="all_inputs">
	 <form method="post" action="">
		<div class="col-md-4">		
			<div class="input_feilds">
				<input type="text" placeholder="Name*" id="nme" name="nme">
			</div>
		</div>

		<div class="col-md-4">
			<div class="input_feilds">
			<input type="email" placeholder="E-Mail*" id="eml" name="eml">
			</div>
		</div>

		<div class="col-md-4">
			<div class="input_feilds">
				<input type="text" placeholder="Subject*" id="sbj" name="sbj">
			</div>
		</div>
	 
		<div class="row">
			<div class="col-md-12">
				<div message_input_area>
					<textarea rows="12" id="ctxtarea" name="txtarea" ></textarea>
				</div>
			</div>
		</div>
	 	<div class="submit_button">
	 		<input type="submit" value="Submit" name="send" id="send">
	 	</div>			
	 </form>
	</div>
  </div>
</div>
<!--------------- 
	  end
---------------->
<!---------------------------- 
	address $ mail area
------------------------------>
<div class="row">
	<div class="col-md-12">
		<div class="main_div_adrress_mail">
			<div class="row">
			   <div class="coverage_mail_area">			
					
					<div class="col-md-6">
						<div class="adrress_mail_area">
							<h2>COVERAGE AREA</h2>
							<h4>Lahore - PNJ, PAKISTAN</h4>
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="adrress_mail_area">
							<h2>EMAIL</h2>
							<h4>contact@menufoods.com.br</h4>
							<h4>support@menufoods.com.br</h4>
						</div>
					</div>
				
				</div>
			</div>
		</div>
	</div>
</div>
<!--------------- 
	  end
---------------->
<!----------------------------------- 
		google map direction area
------------------------------------->
<div class="row">
	<div class="col-md-12">
		<div class="google_map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d435521.40796714014!2d74.05419587855617!3d31.482635221475014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190483e58107d9%3A0xc23abe6ccc7e2462!2sLahore%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1616089743374!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

		</div>
	</div>
</div>

<!--------------- 
	  end
---------------->

<?php include('footer.php'); ?>