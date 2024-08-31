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
	
		<h1 style="margin-top:5rem;">STUDENT</h1>
		<hr>

 <table border=2 width=50% align="center">
 <tr>
 <th>Student ID</th>  
 <th>Name</th>
 <th>Course</th>
 <th>Sem</th>
 <th>Address</th>
 <th>Mobileno</th>
 <th>Email</th>

 </tr>
 <?php
    include '../connect.php';
         $sql = "SELECT * from tblstud,tblcourse where tblstud.cid=tblcourse.cid group by tblcourse.course,tblstud.name";
		$result = $conn->query($sql);
		while ($row=$result->fetch_assoc())
		 {
		    echo "<tr><td>".$row['studid']."</td>";
		    echo "<td>".$row['name']."</td>";
            echo "<td>".$row['course']."</td>";
            echo "<td>".$row['sem']."</td>";
            echo "<td>".$row['address']."</td>";
            echo "<td>".$row['phno']."</td>";
            echo "<td>".$row['email']."</td></tr>";
         
            
		}
?>
 </table>
   </center>
 </html>