<?php

	include 'header.php';
if(isset($_POST['search']))
{
	$valueToSearch = $_POST['valueToSearch'];
	$query="Select * from  reciever where concat(Rec_ID,User_ID,FullName,Phone,Street,Area,Reciever_type,r_catagory,Received_amount,Rec_Bankacc) like '%".$valueToSearch."%'";
	$search_result =filterTable($query);

}
else{
		$query="Select * from reciever";
		$search_result= filterTable($query);

}
function filterTable($query)
{
	$connect =mysqli_connect("localhost","root","","donation");
	$filter_Result = mysqli_query($connect,$query);
	return $filter_Result;
}
?>



<section class="main-container">
	 <div class="main-wrapper">
		<h2>Transaction </h2>
		<style>
		#div1
		{
			height: 50px;
			width: 1150px;
			 padding:0;
			margin: 0;
			background-color: gray;
			margin: auto;
			


			
		}
		#table1
		{
			text-align: center;
			font-family: Arail;
			font-size: 15pt;
			

            width: 1150px;
            
           
			cellspacing:0px;
			cellpadding:0px;

		}
		#div2
		{
			max-height:300px;
			min-height: auto;
			width: 1150px;
			overflow:auto;
			overflow-x:hidden; 
			
			margin: auto;
			




		}
		#table2
		{
			text-align: center;
			font-family: Arail;
			font-size: 10pt;
			

            width: 1150px;

            
           
			cellspacing:0px;
			cellpadding:0px;
			height: 100%;

            

			
		}
	</style>
     <form class="signup-form" action="includes/completed.inc.php" method="POST">
			<input type="text" name="Dnr_id" value="<?php echo $_SESSION['Username']?>">
			<input type="text" name="Rec_id" placeholder="Reciever ID">
			<input type="number" name="Amount" placeholder="Amount">
			
			
			<button type="submit" name="submit">Confirm Now</button>
		</form>
		



      <h2>Receiver's info </h2>
      <form action="donates_to_login.inc.php" method="post">
      	<input type="text" name="valueToSearch" placeholder="Value To Search"><br>
      	<input type="submit" name="search" value="Filter"><br>
      <div id="div1">
      	
			
	<table id="table1">
	<?php	
				//echo "<caption><B>Reciever List</B></caption>";
		echo"<tr>";
		
		echo"<th width=150px>Reciever ID</th>";
		echo"<th width=80px >User ID</th>";
		echo"<th width=100px>Receiver Name</th>";
		echo"<th width=150px>Phone no</th>";
		
		echo"<th width=100px>Street</th>";
		echo"<th width=130px>Area</th>";
		echo"<th width=110px>Need for</th>";
		echo"<th width=95px>Catagory</th>";
		echo"<th width=90px>Received Ammount</th>";
		echo"<th width=145px>Bank Account</th>";
		echo"</tr>";
		?>
	
</table>
</div>

 <div id ="div2">
 	<table id="table2">
<?php
 while($reciever=mysqli_fetch_assoc($search_result))
 {
 	echo "<tr>";
	echo "<td width=156px>".$reciever['Rec_ID']."</td>";
	echo "<td width=85px>".$reciever['User_ID']."</td>";
	echo "<td width=99px>".$reciever['FullName']."</td>";
	echo "<td width=140px>".$reciever['Phone']."</td>";
	echo "<td width=96px>".$reciever['Street']."</td>";
	echo "<td width=121px>".$reciever['Area']."</td>";
	echo "<td width=98px>".$reciever['Reciever_type']."</td>";
	echo "<td width=103px>".$reciever['r_catagory']."</td>";
	echo "<td width=102px>".$reciever['Received_amount']."</td>";
	echo "<td width=149px>".$reciever['Rec_Bankacc']."</td>";
	
	echo "</tr";
	echo"<br>";
}
?>
</table> 
			
	
</div>
</form>
	</div>
</section>