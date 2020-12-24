<?php

session_start();

#first if
if (isset($_POST['submit'])) {
	
	include 'dbh.inc.php';

	$Username = mysqli_real_escape_string( $conn , $_POST['Username'] );
	$Password = mysqli_real_escape_string( $conn , $_POST['Password'] );
	$du_name="SELECT Username FROM donar ";
	$fehh=mysqli_query($conn,$du_name);
	$rC = mysqli_num_rows($fehh);
	$rw = mysqli_fetch_assoc($fehh);

	
	

	//Error handerlers
	//Check if this input are empty
	#second if
	if ($Username=="" || $Password=="") {
		header("Location: ../index.php?login=empty");
		exit();
	}
	
		else if($rw['du_name']=='Username'){
			echo "In esle if con";
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
					
					header("Location: ../index.php?login=success");
					exit();
				}
			}
		}
		//extra 
		else{
	echo "In else con";
		$sql = "SELECT * FROM person WHERE PersonName='$Username'";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		#third if
		
			#forth if
			if ($row = mysqli_fetch_assoc($result)) {
				//de-hashing the password
				$hashedPassCheck =password_verify($Password,$row['Person_Password']);
				#fifth if
				if ($hashedPassCheck == false) {
					header("Location: ../index.php?login=erroor");
					exit();
				} /*fifth else*/ elseif ($hashedPassCheck == true) {
					//Log in the user here
					$_SESSION['Per_Userid'] = $row['Per_Userid'];
				
					
					header("Location: ../index.php?login=success");
					exit();
				}
			}
		}
		//end extra
	
}/*first else*/ else {
	header("Location: ../index.php?login=errooor");
	exit();
}