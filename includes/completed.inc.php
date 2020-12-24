
<?php

	include 'header.php';
	echo "Thank You for Donating";
#first if
if (isset($_POST['submit'])) {
	echo "submit";
    
	include 'dbh.inc.php';

	
	
	$Dnr_id = mysqli_real_escape_string( $conn , $_POST['Dnr_id']);
	$Rec_id= mysqli_real_escape_string( $conn , $_POST['Rec_id']);
	$Amount = mysqli_real_escape_string( $conn , $_POST['Amount']);

	if ($Rec_id=="" || $Amount=="") {
		header("Location: ../donates_to_login.inc.php?login=empty");
		exit();
	}

	
	


			//$sql = "SELECT * FROM donar WHERE Username='$Username'";
				//$result = mysqli_query($conn , $sql);
				//$resultCheck = mysqli_num_rows($result);
			

			


	


	$sql4 = "INSERT INTO donatesto (d_user,re_id,Amount) VALUES ('$Dnr_id','$Rec_id','$Amount');";
	mysqli_query($conn , $sql4);
	$sql22 = "UPDATE reciever R SET R.Received_amount = (SELECT SUM(Amount) FROM donatesto D WHERE R.Rec_ID=D.re_id);";
    mysqli_query($conn , $sql22);
					header("Location: ../donates_to_login.inc.php?signup=success");
					echo "In Completed Page";
					exit();
				
			
		
	}
