<?php
#first if
if (isset($_POST['submit'])) {

	include 'dbh.inc.php';

	
	//For Person table
	$PerName= mysqli_real_escape_string( $conn , $_POST['PerName']);
	$PerUsername = mysqli_real_escape_string( $conn , $_POST['PerUsername']);
    $Rec_Password = mysqli_real_escape_string( $conn , $_POST['RecPassword']);
	$PerAge = mysqli_real_escape_string( $conn , $_POST['PerAge']);
    $PerAddress = mysqli_real_escape_string( $conn , $_POST['PerAddress']);
    $PerPhone = mysqli_real_escape_string( $conn , $_POST['PerPhone']);
	$PerSex = mysqli_real_escape_string( $conn , $_POST['PerSex']);
    $description= mysqli_real_escape_string( $conn , $_POST['description']);
    $Bank_acc= mysqli_real_escape_string( $conn , $_POST['Bank_acc']);

    //For Reciever table
	$FullName= mysqli_real_escape_string( $conn , $_POST['PerName']);
	$RecUserName = mysqli_real_escape_string( $conn , $_POST['PerUsername']);
    $Street= mysqli_real_escape_string( $conn , $_POST['Street']);
    $Area= mysqli_real_escape_string( $conn , $_POST['Area']);
    $RecPhone = mysqli_real_escape_string( $conn , $_POST['PerPhone']);
    $Reciever_type= mysqli_real_escape_string( $conn , $_POST['Reciever_type']);
    $r_catagory= mysqli_real_escape_string( $conn , $_POST['r_catagory']);

    
    

	$ssl="SELECT max(User_id) as maxxi FROM person;";
	$reslt=mysqli_query($conn, $ssl);
	$fech=mysqli_fetch_assoc($reslt);
	$id=$fech['maxxi'];
	
	$Uid="Per{$id}";


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
	


if (!preg_match("/^[a-zA-Z]*$/" , $name) ) {
			
			header("Location: ../person_signup.php?signup=invalid");
			exit();
		} 
		

		  else  {
				$sql = "SELECT * FROM person WHERE username='$username'";
				$result = mysqli_query($conn , $sql);
				$resultCheck = mysqli_num_rows($result);
			if ($resultCheck > 0) {
					header("Location: ../person_signup.php?signup=usertaken");
					exit();
				}

			}

$hashedPwd = password_hash($Rec_Password, PASSWORD_DEFAULT);


$sql2= "INSERT INTO reciever (FullName,Street,Area,Rec_UserName,Rec_ID,Reciever_type,Phone,r_catagory,Rec_Password,Rec_Bankacc) VALUES ('$FullName','$Street','$Area','$RecUserName','$U_id','$Reciever_type','$RecPhone','$r_catagory','$hashedPwd','$Bank_acc');";
					mysqli_query($conn , $sql2);


	
$sql = "INSERT INTO person (R_ID,PersonName,Age,Sex,PerPhone,Person_Userid,Per_ID,Description) VALUES ('$U_id','$PerName','$PerAge','$PerSex','$PerPhone','$PerUsername','$Uid','$description');";
					mysqli_query($conn , $sql);

		
					
					header("Location: ../person_signup.php?signup=success");
					exit();
				
			
		
	}
	