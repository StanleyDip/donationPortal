<?php

session_start();

#first if
if (isset($_POST['submit'])) {
	
	include 'dbh.inc.php';
	

	$Username = mysqli_real_escape_string( $conn , $_POST['Username'] );
	$Password = mysqli_real_escape_string( $conn , $_POST['Password'] );

	//Error handerlers
	//Check if this input are empty
	#second if
	if ($Username=="" || $Password=="") {
		header("Location: ../index.php?login=empty");
		exit();
	}else{
	
		$sql = "SELECT * FROM donar WHERE Username='$Username' OR Mail='$Username'";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		#third if
		
			#forth if
			if ($row = mysqli_fetch_assoc($result)) {
				//de-hashing the password
				$hashedPassCheck =password_verify($Password,$row['Password']);
				#fifth if
				if ($hashedPassCheck == false) {
					header("Location: ../index.php?login=erroor");
					exit();
				} /*fifth else*/ elseif ($hashedPassCheck == true) {
					//Log in the user here
					$_SESSION['Username'] = $row['Username'];
					$_SESSION['Fname'] = $row['Fname'];
					$_SESSION['Lname'] = $row['Lname'];
					$_SESSION['Mail'] = $row['Mail'];
					$_SESSION['Age'] = $row['Age'];
					$_SESSION['Sex'] = $row['Sex'];
					$_SESSION['Address'] = $row['Address'];
					$_SESSION['Phone'] = $row['Phone'];
					$_SESSION['Bankacc'] = $row['Bankacc'];
					
					
					header("Location: ../index1.php?login=success");
					exit();
				}
			}
		}
	
}/*first else*/ else {
	header("Location: ../index.php?login=errooor");
	exit();
}
