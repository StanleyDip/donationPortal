<?php

session_start();

#first if
if (isset($_POST['submit'])) {
	
	include 'dbh.inc.php';

	$Rec_UserName = mysqli_real_escape_string( $conn , $_POST['Rec_UserName'] );
	$RecPassword = mysqli_real_escape_string( $conn , $_POST['RecPassword'] );

	//Error handerlers
	//Check if this input are empty
	#second if
	if ($Rec_UserName=="" || $RecPassword=="") {
		header("Location: ../index2.php?login=empty");
		exit();
	}else{
	
		$sql = "SELECT * FROM reciever WHERE Rec_UserName='$Rec_UserName'";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		#third if
		
			#forth if
			if ($row = mysqli_fetch_assoc($result)) {
				//de-hashing the password
				$hashedPassCheck =password_verify($RecPassword,$row['Rec_Password']);
				#fifth if
				if ($hashedPassCheck == false) {
					header("Location: ../index2.php?login=erroor");
					exit();
				} /*fifth else*/ elseif ($hashedPassCheck == true) {
					//Log in the user here
					$_SESSION['Rec_UserName'] = $row['Rec_UserName'];
					//$_SESSION['Fname'] = $row['Fname'];
					//$_SESSION['Lname'] = $row['Lname'];
					//$_SESSION['Mail'] = $row['Mail'];
					
					header("Location: ../index2.php?login=success");
					exit();
				}
			}
		}
}/*first else*/ else {
	header("Location: ../index.php?login=errooor");
	exit();
}
