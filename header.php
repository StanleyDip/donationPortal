<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Donation Portal</title>
	<link rel="stylesheet" type="text/css" href="css/newstyles.css">
</head>
<body>


<header>
	<nav>
		<div class="main-wrapper">
			<ul>
				<li><a href="index.php">HOME</a></li>
			</ul>
			<div class="nav-login">
				<?php 
					if (isset($_SESSION['Username'])) {
						echo '
						<form action="includes/logout.inc.php" method="POST">
							<button type="submit" name="submit">Logout</button>
						</form>
						';
					echo '<form action="donates_to_login.inc.php" method="POST">
							
							<button type="submit" name="submit">Want to donate?</button>
						</form>
						';
					}
					else if (isset($_SESSION['Rec_UserName'])) {
						
						echo '
						<form action="includes/logout.inc.php" method="POST">
							<button type="submit" name="submit">Logout</button>
						</form>
						';
					} else{

						echo '
						<form action="includes/login.inc.php" method="POST">
							<input type="text" name="Username" placeholder="username/email">
							<input type="password" name="Password" placeholder="password">
							<button type="submit" name="submit">Donar LOGIN</button>
						</form>
						
						<form action="includes/login2.inc.php" method="POST">
							<input type="text" name="Rec_UserName" placeholder="username/email">
							<input type="password" name="RecPassword" placeholder="password">
							<button type="submit" name="submit">Reciever LOGIN</button>
						</form>

						 <input type="button" style="width:120px;height:50px" value="Donar Sign Up" onclick="window.location=\'donar_signup.php\'" />
						<input type="button" style="width:120px;height:50px" value="Reciever Sign Up" onclick="window.location=\'receiver_signup.php\'" />
						';
					}
				?>
				
				
			</div>
		</div>
	</nav>
</header>