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
		<h1 style="margin-top:5rem;">Course Details</h1><hr>
		Select Department&nbsp&nbsp
		<select name="department" style="width:400px;height:40px;" required>
		<option disabled selected>Select department</option>
			<?php
			$sql = "SELECT * from tbldep";
		$result = $conn->query($sql);
		while ($row=$result->fetch_assoc())
		 {
			echo '<option value = '.$row['depid'].'>'.$row['department'].'</option>';
		}  
		?>
		</select>
</center>
		<br>
<center>
Enter Course Name&nbsp&nbsp<input type = "text" style="width:400px;" required name = "course"><br>
<input type = "submit" name ="submit" value ="submit"  style="border:2px,solid,#47f5d2;border-radius:20px;width:100px;">
</form><br><br>
<table border="2" width=50%>
			<tr>
			<!-- <th>id</th> -->
			<th>department</th>
			<th>course</th>
	
		</tr>
<?php
	
		$sql = "SELECT * from tblcourse,tbldep where tblcourse.depid=tbldep.depid and tblcourse.status='1' group by tbldep.department,tblcourse.course";
		$result = $conn->query($sql);
		while ($row=$result->fetch_assoc())
		 {
		    echo "<tr>";
		    echo "<td>".$row['department']."</td>";
		    echo "<td>".$row['course']."</td>";
		   		
		   		
		}
	?>
</center>
<?php
if ($_POST)
{    
	$di = $_POST ['department'];
	$cna = $_POST ['course'];
	$sql = "INSERT INTO tblcourse(depid,course,status) values($di,'$cna','1')";

	if ($conn->query($sql) === TRUE)
	{
echo "<br> new records create succesully";
echo "<script>location.href='courseform.php'</script>";
}
else
{
	echo "ERROR: " .$sql. "<br>" . $conn->error;
}
$conn->close();
}
?>