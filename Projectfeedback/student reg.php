<?php
include "header.php";
include "slider.php";
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
<div class="about">
	<h3style="margin-top:5rem;">STUDENTS SIGN UP</h3>
</div>
    <form method ="POST">
<table align="center" >
        <tr>
            <td>Name: </td>
            <td><input type ="text" placeholder="Name" required="" class="form-control"
            name ="name" pattern="[a-zA-Z ]+"></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><select class="form-control" name ="course">
                <option disabled selected>Select course</option>
            <?php
            $sql = "SELECT * from tblcourse";
		$result = $conn->query($sql);
		while ($row=$result->fetch_assoc())
		 {
echo '<option value = '.$row['cid'].'>'.$row['course'].'</option>';
         }
         ?>
         </select>
            </td>
        </tr><br><br>
        <tr>
            <td>Sem: </td>
            <td><input type ="number"  placeholder="Semester" required="" min="1" max="6" class="form-control"
            name ="sem"></td>
        </tr><br>
        <tr>
            <td>Address(permanent):</td>
            <td><textarea placeholder="Address" name="address" id="address" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>Mobile No: </td>
            <td><input type ="text" pattern='[6789][0-9]{9}' placeholder="Mobile no" required="" class="form-control"
            name ="mobileno"></td>
        </tr>
        <tr>
            <td>Email Id: </td>
            <td><input type ="text" placeholder="Email id" required="" class="form-control"
            name ="emailid"> </td>
        </tr>
        <tr>
            <td>Password: </td>
            <td><input type ="password" placeholder="Password" required="" class="form-control"
            name ="password"> </td>
        </tr>
        <tr>
            <td></td>
        <td><input type="submit" class="btn btn-primary" style="border:2px,solid,#47f5d2;border-radius:20px;width:100px;" value="submit" name="submit">
        </tr>
        <table border="2" width="50%" align="center">
                                                                                    

</table>
<?php
if ($_POST)
{

	$na = $_POST ['name'];
    $ci = $_POST ['course'];
    $se = $_POST ['sem'];
    $ph = $_POST ['mobileno'];
    $em = $_POST ['email'];
    $add = $_POST ['address'];
    $pwd = $_POST ['password'];
    $sql="select count(*) from tbllogin where email='$em'";
    $r=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($r);
    if($row[0]>0)
    {
        echo "<br> Email already registered";
    }
    else
    {
	    $sql = "INSERT INTO tblstud(name,cid,sem,phno,email,address,password) VALUES('$na',$ci,'$se','$ph','$em','$add','$pwd')";
	    if ($conn->query($sql) === TRUE)
	    {
            $sql = "INSERT INTO tbllogin(email,password,usertype,status) VALUES('$em','$pwd','student','0')";
	        if ($conn->query($sql) === TRUE)
	        {
                echo "<br> new records create succesully";
                echo "<script>location.href='student reg.php'</script>";
            }
        
            else
            {
	           
                
            }
        }
        else
        {
            echo "ERROR: " .$sql. "<br>" . $conn->error;
        }
    }

}

?>

</table>
</form>
</body>
</html>