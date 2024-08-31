<?php
include 'header.php';
include '../connect.php';
?>
<style>
	input{
		width:550px;
	}
	th{
		background-color:#10c7c1;
		color:white;
		text-transform:uppercase;
		font-weight:bold; 
	}
	th,td{
		padding:10px;
	}
	</style>
<center>
<h1 style="margin-top:5rem;">FACULTY DUTIES</h1><hr>
<form method="POST">
<table width="40%">

<tr>
	<td>Select starting date: </td>
	<td><input type="date" placeholder="Starting date" required="" class="form-control" name="sdate"></td>
</tr>
<tr>
	<td>Select ending date: </td>
	<td><input type="date" placeholder="Ending date" required="" class="form-control" name="edate"></td>
</tr>
<tr>
	<td></td>
	<td><input type="submit" class="btn btn-primary"
			style="border:2px,solid,#47f5d2;border-radius:20px;width:100px;" value="submit" name="submit"> </td>
</tr>
</table>
</form>
 <?php
 if(isset($_POST['submit']))
 {
	$sdate=$_REQUEST['sdate'];
    $edate=$_REQUEST['edate'];
	echo '<table border=2 width=50% align="center">
	<tr>
	<th>Feedback ID</th>
	<th>Teacher</th>
	<th>Date</th>
	<th>additional duties</th>
   
	</tr>';
	
			$sql = "SELECT * from tblduties,tblteach where tblduties.teachid=tblteach.teachid and tblduties.date between '$sdate' and '$edate'";
		   $result = $conn->query($sql);
		   while ($row=$result->fetch_assoc())
			{
			   echo "<tr><td>".$row['did']."</td>";
			   echo "<td>".$row['name']."</td>";
			   echo "<td>".$row['date']."</td>";
			   echo "<td>".$row['duties']."</td>";
		   }
	echo '</table>';
 }
 else{
	echo '<table border=2 width=50% align="center">
	<tr>
	<th>Feedback ID</th>
	<th>Teacher</th>
	<th>Date</th>
	<th>additional duties</th>
   
	</tr>';
	
			$sql = "SELECT * from tblduties,tblteach where tblduties.teachid=tblteach.teachid";
		   $result = $conn->query($sql);
		   while ($row=$result->fetch_assoc())
			{
			   echo "<tr><td>".$row['did']."</td>";
			   echo "<td>".$row['name']."</td>";
			   echo "<td>".$row['date']."</td>";
			   echo "<td>".$row['duties']."</td>";
			   
		   }
	
	echo '</table>';
 }
 ?>
</center>