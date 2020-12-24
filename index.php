<?php
	include 'header.php';
?>


<section class="main-container">
	<div class="main-wrapper">
		<h2>Welcome</h2>
		<h3>Help and Get Help</h3>
		<?php
			if (isset($_SESSION['Username'])) {
				echo "you are logged in!";
			}
		?>	
	</div>
</section>


<?php
	include 'footer.php';
?>
