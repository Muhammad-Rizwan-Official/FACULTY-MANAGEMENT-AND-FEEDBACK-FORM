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
<h1 style="margin-top:5rem;">FACULTY</h1>
		<hr><br>
 <table border=2 width="1180px" align="center">
 <tr>
 <th>Teacher ID</th>  
 <th>Name</th>
 <th>Designation</th>
 <th>Department</th>
 <th>Address</th>
 <th>Mobileno</th>
 <th>Email</th>

 <th>Date of joining</th>
 <th colspan="4">Qualification</th>
 </tr>
 <?php
   include '../connect.php';
         $sql = "SELECT * from tblteach,tbldep,tbldesignation where tblteach.depid=tbldep.depid and tblteach.desid=tbldesignation.desid group by tbldep.department,tblteach.name,tbldesignation.designation order by tblteach.teachid";
		$result = $conn->query($sql);
		while ($row=$result->fetch_assoc())
		 {
		    echo "<tr><td>".$row['teachid']."</td>";
		    echo "<td>".$row['name']."</td>";
            echo "<td>".$row['designation']."</td>";
            echo "<td>".$row['department']."</td>";
            echo "<td>".$row['address']."</td>";
            echo "<td>".$row['phno']."</td>";
            echo "<td>".$row['email']."</td>";
         
            
            echo "<td>".$row['doj']."</td>";
            echo "<td>".$row['qualification']."</td>";
            echo "<td><a href='viewpublication.php?id=".$row['teachid']."'>View publications</a></td>";
            echo "<td><a href='viewlessonplan.php?id=".$row['teachid']."'>View lessonplan</a></td>";
            echo "<td><a href='teachfeeddisp.php?id=".$row['teachid']."'>View feedback</a></td></tr>";
		}
	?>
</center>