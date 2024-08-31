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
	<h3 style="margin-top:5rem;">TEACHERS SIGN UP</h3>
</div>
    <form method="POST">
<table align="center" style= "margin-top: 5%">
        <tr>
            <td>Name: </td>
            <td><input type ="text" placeholder="Name" required="" class="form-control"
            name ="name"></td>
        </tr>
        <tr>
            <td>Designation:</td>
            <td><select  class="form-control" name ="designation">
<?php
            $sql = "SELECT * from tbldesignation";
		$result = $conn->query($sql);
		while ($row=$result->fetch_assoc())
		 {
echo '<option value = '.$row['desid'].'>'.$row['designation'].'</option>';
         }
         ?>
            </select></td>
        </tr>
        <tr>
            <td>Department</td>
            <td><select  class="form-control" name ="department">

            <?php
            $sql = "SELECT * from tbldep";
		$result = $conn->query($sql);
		while ($row=$result->fetch_assoc())
		 {
echo '<option value = '.$row['depid'].'>'.$row['department'].'</option>';
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
            <td><input type ="text" pattern='[6789][0-9]{9}' placeholder="Mobile no" required=" " class="form-control"
            name ="mobileno"></td>
        </tr>
        <tr>
            <td>Email Id: </td>
            <td><input type ="text" placeholder="Email id" required=" " class="form-control"
            name ="emailid"> </td>
        </tr><tr>
            <td>password: </td>
            <td><input type ="password" placeholder="password" required=" " class="form-control"
            name="password"> </td>
        </tr>
        <tr>
            <td>Date of joining:</td>
            <td><input type="date" placeholder="Date" max="<?php echo date('Y-m-d'); ?>" required=" " class="form-control" name="doj"></td>
       </tr><br><br>
        <tr>
            <td>Qualifications:</td>
            <td><input type ="text" placeholder="Qualification" required=" " class="form-control"
            name ="qualification"></td>
        </tr>
        <tr>
            <td><input type="submit" class="btn btn-primary" style="border:2px,solid,#47f5d2;border-radius:20px;width:100px;" value="submit" name="submit">
        </tr>
        <table border="2" width="50%" align="center">
      
<?php
if ($_POST)
{
	$na = $_POST ['name'];
    $di = $_POST ['department'];
    $ds = $_POST ['designation'];
    $ph = $_POST ['mobileno'];
    $em = $_POST ['emailid'];
    $add = $_POST ['address'];
    $dj = $_POST ['doj'];
    $qf = $_POST ['qualification'];
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
	    $sql = "INSERT INTO tblteach(name,depid,desid,phno,email,address,doj,qualification,password) VALUES('$na',$di,$ds,'$ph','$em','$add','$dj','$qf','$pwd')";
	    if ($conn->query($sql) === TRUE)
	    {
            $sql = "INSERT INTO tbllogin(email,password,usertype,status) VALUES('$em','$pwd','teacher','1')";
	        if ($conn->query($sql) === TRUE)
	        {
                echo "<br> new records create succesully";
                echo "<script>location.href='teacher.php'</script>";
            }
            else
            {
	            
            }   
        }
        else
        {
            echo "ERROR: " .$sql. "<br>" . $conn->error;
            // echo "<script>location.href='teacher.php'</script>";
        }
    }
}

?>
</table>
</form>
</html>