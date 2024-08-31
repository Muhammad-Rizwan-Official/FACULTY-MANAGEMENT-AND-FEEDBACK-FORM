<?php
session_start();
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
	<table>
<h1 style="margin-top:5rem;">FEEDBACK</h1><hr>
<tr>
            <td>Teacher:</td>
            <td><select class="form-control" name ="tname">
                <option disabled selected>Select teacher</option>
<?php
            $sql = "SELECT * from tblteach";
		$result = $conn->query($sql);
		while ($row=$result->fetch_assoc())
		 {
echo '<option value = '.$row['teachid'].'>'.$row['name'].'</option>';
         }
         ?>
         </select></td></tr>
		 <tr>
            <td><input type="submit" value="submit" name="submit" style="border:2px,solid,#47f5d2;border-radius:20px;width:100px;">
        </tr>
            </table>

   <?php
if (isset($_POST['submit']))
{
        
		$na = $_SESSION['id'];
         $sql = "SELECT count(*) from tblteachf where";
		//  echo $sql;
		$result = $conn->query($sql);
		 $row=$result->fetch_array();
		//  echo $row[0];
		$count=$row[0];
		$sum="SELECT sum(overall) from tblteachf";
		$row=$result->fetch_array();
		$avg=$sum/$row[0];
		echo $avg;
}		
	?>
 </table>
</center>