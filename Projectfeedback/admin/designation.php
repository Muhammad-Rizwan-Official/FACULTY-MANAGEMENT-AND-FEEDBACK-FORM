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
	<form action="" method="POST">
		<h1 style="margin-top:5rem;">Designation Details</h1><hr>
Enter Designation name&nbsp&nbsp<input type = "text" style="width:400px;" name = "designation"><br><br>
<input type = "submit" name ="submit" value ="submit"  style="border:2px,solid,#47f5d2;border-radius:20px;width:100px;">
</form>
<table border="2" width="50%">
		<tr>
			<th>id</th>
		
			<th>designation</th>
	
		</tr>
		<?php
	
		$sql = "SELECT * from tbldesignation";
		$result = $conn->query($sql);
		while ($row=$result->fetch_assoc())
		 {
		    echo "<tr><td>".$row['desid']."</td>";
		    
		    echo "<td>".$row['designation']."</td>";
		   		
		   		
		}
	?>
</center>
<?php
if ($_POST)
{
	$ds = $_POST ['designation'];
	$s = $_POST ['status'];

	$sql = "INSERT INTO tbldesignation(designation,status) VALUES('$ds','$s')";
	if ($conn->query($sql) === TRUE)
	{
echo "<br> new records create succesully";
echo "<script>location.href='designation.php'</script>";
}
else
{
	echo "ERROR: " .$sql. "<br>" . $conn->error;
}
$conn->close();
}
?>
