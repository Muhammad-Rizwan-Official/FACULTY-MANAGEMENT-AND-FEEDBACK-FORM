 <?php
 session_start();
include 'header.php';
include '../connect.php';
?>
<center>
<table  width="50%" align="center">
    <form action="" method="POST">
	<h1 style="margin-top:5rem;">Lesson Plan</h1>
	
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
		<br><br>
		<tr>
		<td>Date:</td>
            <td><input type="date" placeholder="Date" required=" " class="form-control" name="date"></td>
        </tr>
		<tr>
            <td>Sem: </td>
            <td><input type ="num"  placeholder="Semester" required="" min="1" max="6" class="form-control"
            name ="sem"></td>
        </tr><br>
        <tr>
            <td>Hour1:</td>
            <td><input type ="text" placeholder="Hour1" required=" " class="form-control"
            name ="hr1"> </td>
        </tr><tr>
        <tr>
            <td>Hour2:</td>
            <td><input type ="text" placeholder="Hour2" required=" " class="form-control"
            name ="hr2"> </td>
        </tr>
		<tr>
            <td>Hour3:</td>
            <td><input type ="text" placeholder="Hour3" required=" " class="form-control"
            name ="hr3"> </td>
        </tr><br>
		<tr>
            <td>Hour4:</td>
            <td><input type ="text" placeholder="Hour4" required=" " class="form-control"
            name ="hr4"> </td>
        </tr><br>
		<tr>
            <td>Hour5:</td>
            <td><input type ="text" placeholder="Hour5" required=" " class="form-control"
            name ="hr5"> </td>
        </tr><br>
	</table>
		<td><input type="submit" class="btn btn-primary" style="border:2px,solid,#47f5d2;border-radius:20px;width:100px;" value="submit" name="submit">  
    </form>
	
    </center>
<table border="2" width="50%" align="center">
		<tr>
		    <th>Teacher</th>
			<th>Date</th>
			<th>Course</th>
            <th>Sem</th>
			<th>Hour 1</th>
			<th>Hour 2</th>
			<th>Hour 3</th>
			<th>Hour 4</th>
			<th>Hour 5</th>
	
		</tr>
		/*<?php
		$na = $_SESSION["id"];
		$sql = "SELECT * from tbllesson,tblteach,tblcourse where  tbllesson.teachid=tblteach.teachid and tbllesson.cid=tblcourse.cid and tblteach.teachid='$na'";
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
	?>*/
	<?php
if ($_POST)
{
    $na = $_SESSION["id"];
	$date = $_POST ['date'];
	$ci = $_POST ['course'];
	$se = $_POST ['sem'];
    $h1 = $_POST ['hr1'];
    $h2 = $_POST ['hr2'];
	$h3 = $_POST ['hr3'];
	$h4 = $_POST ['hr4'];
	$h5 = $_POST ['hr5'];
   
    $sql = "INSERT INTO tbllesson(teachid,date,cid,sem,hr1,hr2,hr3,hr4,hr5) VALUES('$na','$date','$ci','$se','$h1','$h2','$h3','$h4','$h5')";
	if ($conn->query($sql) === TRUE)
	{
echo "<br> new records create succesully";
echo "<script>location.href='lesson.php'</script>";
}
else
{
	echo "ERROR: " .$sql. "<br>" . $conn->error;
}
$conn->close();
}
?>
	</table>
	</body>
</html>
 