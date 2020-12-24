<?php
	include 'header.php';
?>

<section class="main-container">
	<div class="nav-login">
		<h2 style="color:grey;">Institute Sign up Form</h2>
		<form class="signup-form" action="includes/signup3.inc.php" method="POST">
			<input type="text" name="INSName" placeholder="Name of the Institute">
			<input type="text" name="INSmail" placeholder="email">
			<input type="text" name="INSusername" placeholder="Username">
			<input type="password" name="RecPassword" placeholder="Password">
			<input type="text" name="Type" placeholder="Type of the Institute">
            <input type="text" name="INSAddress" placeholder="Address">
             <input type="tel" name="INSPhone" placeholder="Phone Number">
             <input type="text" name="INSStreet" placeholder="Street">
             <input type="text" name="INSArea" placeholder="Area">
             <input type="text" name="INSBankacc" placeholder="Bank Number">
             <input type="text" name="r_catagory" value="Institute">
             
			<button type="submit" name="submit">Signup</button>
		</form>
	</div>
</section>

<?php
	include_once 'footer.php';
?>
