	<form class="signup-form" action="includes/signup.inc.php" method="POST">
		<input type="text" name="first" placeholder="firstname">
			<input type="text" name="last" placeholder="lastname">
			<input type="text" name="email" placeholder="email">
			<input type="text" name="uid" placeholder="username">
			<input type="password" name="pwd" placeholder="password">
			<button type="submit" name="submit">Signup</button>
		</form>




		<?php
	include 'header.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Sign Up For Recievers</h2>
		<h2> Please Select Your Desired Catagory</h2>
		<form class="signup-form" action="includes/signup.inc.php" method="POST">
					
						 <input type="button" style="width:400px;height:100px" value="Person" onclick="window.location=\'includes/signup.inc.php\'" />
						<input type="button" style="width:400px;height:100px" value="Institute" onclick="window.location=\'institute_signup.php\'" />
		</form>

	</div>
</section>

<?php
	include_once 'footer.php';
?>

<input type="radio" name="gender" value="male" checked> Male
            <input type="radio" name="gender" value="female"> Female
            $D_id = mysqli_real_escape_string( $conn , $_POST['D_id']);



            signup.inc code--->
            //Error handelers
	//Check for empty field
	<php
	#second if
	if (empty($Fname ) || empty($Lname)||empty($Nid)  || empty($Mail)|| empty($Age)||  empty($Sex)||empty($Address)|| empty($phone)|| empty($Bankacc)|| empty($Username)|| empty($Password)) {
		header("Location: ../donar_signup.php?signup=empty");
		exit();
	} /*second else*/ else{
		//Check if input character are valid
		# third if
		if (!preg_match("/^[a-zA-Z]*$/" , $first) || !preg_match("/^[a-zA-Z]*$/" , $last) ) {
			
			header("Location: ../donar_signup.php?signup=invalid");
			exit();
		} /*third else*/ else{
			// Check if email is valid
			#forth if
			if (!filter_var( $email , FILTER_VALIDATE_EMAIL )) {
				
				header("Location: ../donar_signup.php?signup=email");
				exit();
			} /*forth else*/ else {
				$sql = "SELECT * FROM donar WHERE Username='$Username'";
				$result = mysqli_query($conn , $sql);
				$resultCheck = mysqli_num_rows($result);

				#fifth if
				if ($resultCheck > 0) {
					header("Location: ../donar_signup.php?signup=usertaken");
					exit();
				} /*forth else*/ else {
					//Hashing the password
					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
					//Inser the user into the database
					
					$sql = "INSERT INTO donar (Nid , Fname , Lname , Mail, Age,Sex,Address,Phone,Password,Bankacc,Username ) VALUES ('$Nid ','$Fname','$Lname','$Mail','$Age','$Sex', '$Address','$Phone','$Bankacc','$Username','$hashedPwd');";
					mysqli_query($conn , $sql);
					header("Location: ../donar_signup.php?signup=success");
					exit();
				}
			}
		}
	}

} /*first else*/ else {
	header("Location: ../donar_signup.inc.php");
	exit();
}


login.inc---->
//Error handerlers
	//Check if this input are empty
	#second if
	if (empty($Username) || empty($Password)) {
		header("Location: ../index.php?login=empty");
		exit();
	}/*second else*/ else {
		$sql = "SELECT * FROM users WHERE Username='$Username' OR Mail='$Username'";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		#third if
		if ($resultCheck < 1) {
			header("Location: ../index.php?login=error");
			exit();
		}/*third else*/ else {
			#forth if
			if ($row = mysqli_fetch_assoc($result)) {
				//de-hashing the password
				$hashedPwdCheck = password_verify($pwd , $row['Password']);
				#fifth if
				if ($hashedPwdCheck == false) {
					header("Location: ../index.php?login=error");
					exit();
				} /*fifth else*/ elseif ($hashedPwdCheck == true) {
					//Log in the user here
					$_SESSION['Username'] = $row['Username'];
					$_SESSION['Fname'] = $row['Fname'];
					$_SESSION['Lname'] = $row['Lname'];
					$_SESSION['Mail'] = $row['Mail'];
					$_SESSION['u_uid'] = $row['user_uid'];
					header("Location: ../index.php?login=success");
					exit();
				}
			}
		}
	}
}/*first else*/ else {
	header("Location: ../index.php?login=error");
	exit();
}



donar_signup form

if ($Fname=="" || $Lname==""||$Nid=="" || $Mail==""|| $Age==""|| $Sex==""||       $Address==""|| $phone=="" || $Bankacc==""|| $Username==""|| $Password=="") {
		header("Location: ../donar_signup.php?signup=empty");
		exit();
	}

	$uid="DNR{$DNR_id}";
					$ssl="INSERT INTO donar (DNR_id)VALUES('$uid');";



					$sql2= "INSERT INTO reciever (FullName  ,  age,Sex,address,phone,street,area,username,password,Rec_ID) VALUES ('$name ','$age','$Sex','$address','$phone','$street','$area','$username','$hashedPwd','$U_id');";
					mysqli_query($conn , $sql2);

					INSERT INTO person (`PersonName`,`Age`,`Sex`,`PerPhone`,`Person_Userid`,`Per_ID`,`Description`) VALUES ('Stanley',19,'Male',01917268067,'Stan','PER0','Educational')

					$sql = "INSERT INTO person (PersonName  ,Age,Sex,PerPhone,,Person_Userid,Person_Password,Per_ID,Description) VALUES ('$PerName ','$age','$PerSex','$PerAddress','$PerPhone','$PerUsername','$hashedPwd','$Uid',$description);