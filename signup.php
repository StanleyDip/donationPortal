<?php
	include 'header.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Sign Up</h2>
		<form class="signup-form" action="includes/signup.inc.php" method="POST">
			<input type="text" name="Fname" placeholder="firstname">
			<input type="text" name="Lname" placeholder="lastname">
			<input type="text" name="Mail" placeholder="email">
			<input type="text" name="Username" placeholder="username">
			<input type="number" name="Nid" placeholder="Nid">
			<input type="password" name="Password" placeholder="password">
			<input type="number" name="Age" placeholder="Age">
			<input type="text" name="Bankacc" placeholder="Bank Account Number">
            <input type="text" name="Address" placeholder="Address">
             <input type="tel" name="Phone" placeholder="Phone Number">
             <input type="text" name="Sex" placeholder="Male or Female">
			<button type="submit" name="submit">Signup</button>
		</form>
	</div>
</section>

<?php
	include_once 'footer.php';
?>
