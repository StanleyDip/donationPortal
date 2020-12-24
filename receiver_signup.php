<?php
	include 'header.php';
?>

<section class="mein-container">
	<div class="nav-login">
	<div class="mein-wrapper">
		<h2>Sign Up For Reciever</h2>
		<h2> Please Select Your Desired Catagory</h2>
		</div>
				<?php 
					
				
						echo '
						
						 <input type="button" style="width:500px;height:100px" value="Person" onclick="window.location=\'person_signup.php\'" />
						<input type="button" style="width:500px;height:100px" value="Institute" onclick="window.location=\'institute_signup.php\'" />
						';
					
				?>
				
				
			</div>

</section>

<?php
	include_once 'footer.php';
?>