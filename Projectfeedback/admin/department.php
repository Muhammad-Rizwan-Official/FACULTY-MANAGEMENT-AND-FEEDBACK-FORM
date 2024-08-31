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
		<h1 style="margin-top:5rem;">Department Details</h1>
		<hr>
Enter Department name&nbsp&nbsp<input type = "text" style="width:400px;" name = "department"><br><br>
<input type = "submit"  name ="submit"  value ="submit" style="border:2px,solid,#47f5d2;border-radius:20px;width:100px;" >
</form>
<br>
<table border="2" width="50%">
		<tr>
			<th>id</th>
		
			<th>department</th>
	
		</tr>
		<?php
	
		$sql = "SELECT * from tbldep";
		$result = $conn->query($sql);
		while ($row=$result->fetch_assoc())
		 {
		    echo "<tr><td>".$row['depid']."</td>";
		    
		    echo "<td>".$row['department']."</td>";
		   		
		}
	?>
	<table>
	<br><br>
</center>
<?php
if ($_POST)
{
	$dna = $_POST ['department'];
	$s = $_POST ['status'];

	$sql = "INSERT INTO tbldep(department,status) VALUES('$dna','1')";
	if ($conn->query($sql) === TRUE)
	{
echo "<br> new records create succesully";
echo "<script>location.href='department.php'</script>";
}
else
{
	echo "ERROR: " .$sql. "<br>" . $conn->error;
}
$conn->close();
}
?>
