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
	<h1 style="margin-top:5rem;">Publication Details</h1>
<center>
 <table border=2 width=50% align="center">
 <tr>
 <th>Publication ID</th>
 <th>Name</th>  
 <th>Publication</th>
 <th>Description</th>
 <th>Field</th>
 <th>Date</th>
 </tr>
 <?php
     include '../connect.php';
         $sql = "SELECT * from tblpub,tblteach where tblpub.teachid=tblteach.teachid ";
		$result = $conn->query($sql);
		while ($row=$result->fetch_assoc())
		 {
		    echo "<tr><td>".$row['pid']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['publication']."</td>";
            echo "<td>".$row['description']."</td>";
            echo "<td>".$row['field']."</td>";
            echo "<td>".$row['date']."</td></tr>";
		}
	?>
 </table>
</center>