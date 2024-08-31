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
	<h1 style="margin-top:5rem;">LESSON PLAN</h1><hr>
<center>
<table  width="50%" align="center">
    <form action="" method="POST">
	
		<tr>
    <td>Select Course:&nbsp&nbsp</td>
		<td><select name="course" class="form-control">
        <option disabled selected>Select course</option>
			<?php
			$sql = "SELECT * from tblcourse";
		
		$result = $conn->query($sql);
		while ($row=$result->fetch_assoc())
		 {
		    echo "<option value='".$row['cid']."'>".$row['course']."</option>";
		    	
		}
			?>
		</select></td>
	</tr>
	
		<tr>
            <td>Sem: </td>
            <td><input type ="number"  placeholder="Semester" required="" min="1" max="6" class="form-control"
            name ="sem"></td>
        </tr>
	</table>
		<td><input type="submit" class="btn btn-primary" style="background-color:black;" value="submit" name="submit">  
    </form>


	<?php 
if(isset($_POST['submit'])){
	$course=$_POST['course'];
	$sem=$_POST['sem'];
 echo '<table border=2 width=50% align="center">
 <tr>
 <th>Name</th>
 <th>Date</th>  
 <th>Course</th>
 <th>Sem</th>
 <th>Hour1</th>
 <th>Hour2</th>
 <th>Hour3</th>
 <th>Hour4</th>
 <th>Hour5</th>
 </tr>';
 
     include '../connect.php';
		$sql = "SELECT * from tbllesson,tblteach,tblcourse where  tbllesson.teachid=tblteach.teachid and tbllesson.cid=tblcourse.cid and tbllesson.cid='$course' and tbllesson.sem='$sem'";
		$result = $conn->query($sql);
		while ($row=$result->fetch_assoc())
		 {
			echo "<tr><td>".$row['name']."</td>";
			 echo "<td>".$row['date']."</td>";
            echo "<td>".$row['course']."</td>";
			echo "<td>".$row['sem']."</td>";
		    echo "<td>".$row['hr1']."</td>";
		    echo "<td>".$row['hr2']."</td>";
			echo "<td>".$row['hr3']."</td>";
		    echo "<td>".$row['hr4']."</td>";
			echo "<td>".$row['hr5']."</td></tr>";
		   		
		}
	
 echo'</table>';
}
?>
	</center>