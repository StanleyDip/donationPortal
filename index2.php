<?php
$dbserverName = "localhost";
$dbuserName = "root";
$dbpassword = "";
$dbname = "donation";

$conn = mysqli_connect( $dbserverName , $dbuserName , $dbpassword , $dbname );

	include 'header.php';


$sql="Select * FROM reciever";
$records=mysqli_query($conn ,$sql);
?>

<section class="main-container">
	<div class="main-wrapper">
		
		<h2>Receiver's User Info</h2>

		<?php
			if (isset($_SESSION['Rec_UserName'])) {
				echo "you are logged in as Receiver!";
				echo "<table>";
				//echo "<caption><B>Reciever List</B></caption>";
	echo"<tr>";
		
		echo"<th>Receiver ID</th>";
		echo"<th>User ID</th>";
		echo"<th>Receiver Name</th>";
		echo"<th>Receiver User Name</th>";
		echo"<th>Receiver Phone</th>";
		echo"<th>Receiver street</th>";
		echo"<th>Receiver Area</th>";
		echo"<th>Need For</th>";
		echo"<th>Receiver Catagory</th>";
		echo"<th>Received Amount</th>";
		echo"<th>Bank Account</th>";

		echo"</tr>";
 

   while($reciever=mysqli_fetch_assoc($records))
   {
   	if(($reciever['Rec_UserName'])== ($_SESSION['Rec_UserName']))
   	{
 
 	echo "<tr>";
 	echo "<td>".$reciever['Rec_ID']."</td>";
 	echo "<td>".$reciever['User_ID']."</td>";
 	echo "<td>".$reciever['FullName']."</td>";
	echo "<td>".$reciever['Rec_UserName']."</td>";
	
	echo "<td>".$reciever['Phone']."</td>";
	echo "<td>".$reciever['Street']."</td>";
	
	echo "<td>".$reciever['Area']."</td>";
	echo "<td>".$reciever['Reciever_type']."</td>";
	echo "<td>".$reciever['r_catagory']."</td>";
	echo "<td>".$reciever['Received_amount']."</td>";
	echo "<td>".$reciever['Rec_Bankacc']."</td>";

	
	echo "</tr";
	echo"<br>";
	$rcid = $reciever['Rec_ID'];
	
}


}
echo "</table>";

			}
		?>
		<h2>Received History</h2>
		<?php 
			
			$sql="Select * FROM donatesto where re_id='$rcid'";
			$records=mysqli_query($conn ,$sql);
			echo "</table>";
			echo "<br>";
			echo "<br>";
			echo "<table>";
			
				echo"<tr>";
				
				echo"<th>serial</th>";
				echo"<th>d_user</th>";
				echo"<th>re_id</th>";
				echo"<th>Amount</th>";
				
				echo"</tr>";
				while($donatesto=mysqli_fetch_assoc($records))
				{
					echo "<tr>";
					echo "<td>".$donatesto['serial']."</td>";

					echo "<td>".$donatesto['d_user']."</td>";


					echo "<td>".$donatesto['re_id']."</td>";
					echo "<td>".$donatesto['Amount']."</td>";

					echo "</tr";
					echo"<br>";
				}

			echo "</table>";
				
		 ?>
		
	

	</div>

<body>

	

</body>

</section>


<?php
	include 'footer.php';
?>
