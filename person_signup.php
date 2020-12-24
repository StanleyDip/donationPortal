<?php
	include 'header.php';
?>

<section class="main-container">
	<div class="nav-login">
		<h2 >Person Sign up Form</h2>
		<form class="signup-form" action="includes/signup2.inc.php" method="POST">
			<input type="text" name="PerName" placeholder="FullName">
			<input type="text" name="PerUsername" placeholder="username">
			<input type="password" name="RecPassword" placeholder="password">
			<input type="number" name="PerAge" placeholder="Age">
            <input type="text" name="PerAddress" placeholder="address">
             <input type="tel" name="PerPhone" placeholder="Phone Number">
              <input type="text" name="PerSex" placeholder="Male or Female">
              <input type="text" name="Reciever_type" placeholder="Type">
              <input type="text" name="description" placeholder="Description">
              <input type="text" name="Street" placeholder="Street Name">
              <input type="text" name="Area" placeholder="Area Name">
               <input type="text" name="Bank_acc" placeholder="Bank Account Number">
               <input type="text" name="r_catagory" value="Person">



			<button type="submit" name="submit">Signup</button>
		</form>
	</div>
</section>

<?php
	include_once 'footer.php';
?>
