<?php
$dbserverName = "localhost";
$dbuserName = "root";
$dbpassword = "";
$dbname = "donation";

$conn = mysqli_connect( $dbserverName , $dbuserName , $dbpassword , $dbname );

include 'header.php';



echo "<B>"."You are logged in as a DONOR"."</B>";
?>

<section class="main-container">
<div class="main-wrapper">
	<h2>    Your Info</h2>
<?php
		if (isset($_SESSION['Username'])) {
			//echo "you are logged in!";
			echo "<table>";
			//echo "<caption><B>Reciever List</B></caption>";
echo"<tr>";
	
	echo"<th>Donor UserName</th>";
	echo"<th>Donor First Name</th>";
	echo"<th>Donor Last Name</th>";
	echo"<th>Donor Mail</th>";
	echo"<th>Donor Age</th>";
	echo"<th>Donor Sex</th>";
	echo"<th>Donor Address</th>";
	echo"<th>Donor Phone Number</th>";
	echo"<th>Donor Bank Account</th>";
	
	echo"</tr>";



	echo "<tr>";
echo "<td>".$_SESSION['Username']."</td>";
echo "<td>".$_SESSION['Fname']."</td>";
echo "<td>".$_SESSION['Lname']."</td>";
echo "<td>".$_SESSION['Mail']."</td>";
echo "<td>".$_SESSION['Age']."</td>";
echo "<td>".$_SESSION['Sex']."</td>";
echo "<td>".$_SESSION['Address']."</td>";
echo "<td>".$_SESSION['Phone']."</td>";
echo "<td>".$_SESSION['Bankacc']."</td>";

echo "</tr";
echo"<br>";

$usname = $_SESSION['Username'];

$sql="Select * FROM donatesto where d_user='$usname'";
$records=mysqli_query($conn ,$sql);
echo "</table>";
	echo "<br>";
	echo "<br>"	;
		}
			
	?>

	<h2>Donation History</h2>
	
	<?php
		if (isset($_SESSION['Username'])) {
			//echo "you are logged in!";
			echo "<table>";
			//echo "<caption><B>Reciever List</B></caption>";
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
		}
	echo "<br>";
	echo "<br>"	;	
	?>






</div>

<body>



</body>

</section>


<?php
include 'footer.php';
?>
