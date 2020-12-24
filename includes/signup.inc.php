<?php
#first if
if (isset($_POST['submit'])) {

	include 'dbh.inc.php';

	
	
	$Fname = mysqli_real_escape_string( $conn , $_POST['Fname']);
	$Lname= mysqli_real_escape_string( $conn , $_POST['Lname']);
	$Nid = mysqli_real_escape_string( $conn , $_POST['Nid']);
	$Mail = mysqli_real_escape_string( $conn , $_POST['Mail']);
	$Age = mysqli_real_escape_string( $conn , $_POST['Age']);
	$Sex = mysqli_real_escape_string( $conn , $_POST['Sex']);
	$Address = mysqli_real_escape_string( $conn , $_POST['Address']);
	$Phone = mysqli_real_escape_string( $conn , $_POST['Phone']);
	$Bankacc = mysqli_real_escape_string( $conn , $_POST['Bankacc']);
		$Username = mysqli_real_escape_string( $conn , $_POST['Username']);
	$Password = mysqli_real_escape_string( $conn , $_POST['Password']);
	$ssl="SELECT max(D_id) as maxxi FROM donar;";
	$reslt=mysqli_query($conn, $ssl);
	$fech=mysqli_fetch_assoc($reslt);
	$id=$fech['maxxi'];
	
	$Uid="Dnr{$id}";
	#second if
	


if (!preg_match("/^[a-zA-Z]*$/" , $Fname) || !preg_match("/^[a-zA-Z]*$/" , $Lname) ) {
			
			header("Location: ../donar_signup.php?signup=invalid");
			exit();
		} 
		if (!filter_var( $Mail , FILTER_VALIDATE_EMAIL )) {
				
				header("Location: ../donar_signup.php?signup=email");
				exit();
			}

		  else  {
				$sql = "SELECT * FROM donar WHERE Username='$Username'";
				$result = mysqli_query($conn , $sql);
				$resultCheck = mysqli_num_rows($result);
			if ($resultCheck > 0) {
					header("Location: ../donar_signup.php?signup=usertaken");
					exit();
				}

			}


	
					
					$hashedPwd = password_hash($Password, PASSWORD_DEFAULT);


	$sql = "INSERT INTO donar (Nid , Fname , Lname , Mail, Age,Sex,Address,Phone,Bankacc,Username,Password,DNR_id) VALUES ('$Nid ','$Fname','$Lname','$Mail','$Age','$Sex','$Address','$Phone','$Bankacc','$Username','$hashedPwd','$Uid');";
					
					mysqli_query($conn , $sql);
					header("Location: ../donar_signup.php?signup=success");
					exit();
				
			
		
	}
	