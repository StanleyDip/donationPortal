<?php
#first if
if (isset($_POST['submit'])) {

	include 'dbh.inc.php';

	

    //For Reciever table
	$INSusername = mysqli_real_escape_string( $conn , $_POST['INSusername']);
    $Reciever_type= mysqli_real_escape_string( $conn , $_POST['Reciever_type']);
    $r_catagory= mysqli_real_escape_string( $conn , $_POST['r_catagory']);
    $Rec_Password= mysqli_real_escape_string( $conn , $_POST['RecPassword']);
    $Rec_Bankacc= mysqli_real_escape_string( $conn , $_POST['INSBankacc']);
    //For Institute Table
	$INSName= mysqli_real_escape_string( $conn , $_POST['INSName']);
    $INSmail= mysqli_real_escape_string( $conn , $_POST['INSmail']);
    $Type= mysqli_real_escape_string( $conn , $_POST['Type']);
    $INSPhone = mysqli_real_escape_string( $conn , $_POST['INSPhone']);
    $INSAddress= mysqli_real_escape_string( $conn , $_POST['INSAddress']);

     
     $INSStreet= mysqli_real_escape_string( $conn , $_POST['INSStreet']);
     $INSArea= mysqli_real_escape_string( $conn , $_POST['INSArea']);
   

	$ssl2="SELECT max(User_id) as maxxi FROM reciever;";
	$reslt=mysqli_query($conn, $ssl2);
	$fech=mysqli_fetch_assoc($reslt);
	$id=$fech['maxxi'];
	
	$U_id="Rec{$id}";
    
	$ssl3="SELECT max(User_id) as maxxi FROM institute;";
	$reslt=mysqli_query($conn, $ssl3);
	$fech=mysqli_fetch_assoc($reslt);
	$id=$fech['maxxi'];
	
	$I_id="INS{$id}";
	#second if
	


if (!preg_match("/^[a-zA-Z]*$/" , $FullName) ) {
			
			header("Location: ../person_signup.php?signup=invalid");
			exit();
		} 
		

		  else  {
				$sql = "SELECT * FROM institute WHERE username='$username'";
				$result = mysqli_query($conn , $sql);
				$resultCheck = mysqli_num_rows($result);
			if ($resultCheck > 0) {
					header("Location: ../person_signup.php?signup=usertaken");
					exit();
				}

			}

$hashedINSPwd = password_hash($Rec_Password, PASSWORD_DEFAULT);

$sql2= "INSERT INTO reciever (FullName,Street,Area,Rec_Username,Rec_ID,Reciever_type,Phone,r_catagory,Rec_Password,Rec_Bankacc) VALUES ('$INSName','$INSStreet','$INSArea','$INSusername','$U_id','$Type','$INSPhone','$r_catagory','$hashedINSPwd','$Rec_Bankacc');";
					mysqli_query($conn , $sql2);


					
$sql3= "INSERT INTO institute (IR_ID,INS_Name,Mail,Type,INS_ID,Phone,Address) VALUES ('$U_id','$INSName','$INSmail','$Type','$I_id','$INSPhone','$INSAddress');";

					mysqli_query($conn , $sql3);
					
					header("Location: ../institute_signup.php?signup=success");
					exit();
				
			
		
	}
	