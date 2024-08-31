<?php
            $sql = "SELECT * from tbldesignation";
		$result = $conn->query($sql);
		while ($row=$result->fetch_assoc())
		 {
echo '<option value = '.$row['depid'].'>'.$row['departments'].'</option>';
         }
         ?>
            </select></td>
        </tr>
        <tr>
            <td>Address(permanent):</td>
            <td><textarea placeholder="Address" name="address" id="address" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>Mobile No: </td>
            <td><input type ="text" pattern='[6,7,8,9][0-9]{9}' placeholder="Mobile no" required=" " class="form-control"
            name ="mobile no"></td>
        </tr>
        <tr>
            <td>Email Id: </td>
            <td><input type ="text" placeholder="Email id" required=" " class="form-control"
            name ="email id"> </td>
        </tr><tr>
            <td>password: </td>
            <td><input type ="text" placeholder="password" required=" " class="form-control"
            name="password"> </td>
        </tr>
        <tr>
            <td>Date of joining:</td>
            <td><input type="date" placeholder="Date" required=" " class="form-control" name="date of joining"></td>
       </tr><br><br>
        <tr>
            <td>Qualifications:</td>
            <td><input type ="text" placeholder="Qualification" required=" " class="form-control"
            name ="qualification"></td>
        </tr>
        <tr>
            <td><input type="submit" class="btn btn-danger" name="submit">
        </tr>
        <?php
        $sql = "SELECT * from tblteach";
		$result = $conn->query($sql);
		while ($row=$result->fetch_assoc())
		 {
		    echo "<tr><td>".$row['teachid']."</td>";
		    echo "<td>".$row['name']."</td>";
            echo "<td>".$row['depid']."</td>";
            echo "<td>".$row['desid']."</td>";
            echo "<td>".$row['phno']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['address']."</td>";
            echo "<td>".$row['doj']."</td>";
            echo "<td>".$row['qualification']."</td></tr>";
		}
	?>
<?php
if ($_POST)
{
	$ti = $_POST ['teachid'];
	$na = $_POST ['name'];
    $di = $_POST ['depid'];
    $ds = $_POST ['desid'];
    $ph = $_POST ['phno'];
    $em = $_POST ['email'];
    $add = $_POST ['address'];
    $dj = $_POST ['doj'];
    $qf = $_POST ['qualification'];
    $pwd = $_POST ['password'];
    

	$sql = "INSERT INTO tblteach(teachid,name,depid,desid,phno,email,address,doj,qualification) VALUES($ti,'$na',$di,$ds,$ph,'$em','$add','$dj','$qf')";
	if ($conn->query($sql) === TRUE)
	{
echo "<br> new records create succesully";
echo "<script>location.href='teacher.php'</script>";
}
else
{
    $sql = "INSERT INTO tbllogin(email,password,usertype,status) VALUES('$em','$pwd','teacher','1')";
	if ($conn->query($sql) === TRUE)
	{
echo "<br> new records create succesully";
echo "<script>location.href='teacher.php'</script>";
}
else
{
	echo "ERROR: " .$sql. "<br>" . $conn->error;
}
}
$conn->close();
}
?>
</table>
</form>
</html>$