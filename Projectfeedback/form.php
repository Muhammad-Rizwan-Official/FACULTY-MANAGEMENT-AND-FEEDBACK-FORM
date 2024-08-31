<?php
session_start();
include "header.php";
include "slider.php";
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Document</title>
</head>
<style>
    td,th{
        padding:10px;
    }
    </style>
<body>
<div class="about">
	<h3>LOG IN</h3><hr>
</div>
    <form action="" method="POST">
    <table align="center">
            <tr>
            <td>Email Id: </td>
            <td><input type ="email" placeholder="Email id" required="" class="form-control"
            name ="emailid"> </td></tr><br>
            <tr>
            <td>Password: </td> 
                <td><input type="password" placeholder="password" required="" class="form-control"
                name="password"> </td></tr><br>
                <tr>
                    <td></td>
             <td><input type="submit" class="btn btn-primary" style="background-color: black;" value="LOGIN" name="submit"></td></tr>
         </table>
         
</center>
<?php
if ($_POST)
{

    $email = $_POST ['emailid'];
    $pwd = $_POST ['password'];
    $sql="select count(*) from tbllogin where email='$email'";
    $r=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($r);
    if($row[0]==0)
    {
        echo "<br> Not registered";
    }
    else
    {
        $sql="select * from tbllogin where email='$email'";
        $r=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($r);
        if($row['password']==$pwd)
        {
            if($row['status']=='1')
            {
                if($row['usertype']=='admin')
                {

                        echo '<script>location.href="admin/adminhome.php"</script>';
                }
                else if($row['usertype']=='teacher')
                {
                        $sql1="select * from tblteach where email='$email'";
                        $r1=mysqli_query($conn,$sql1);
                        $row1=mysqli_fetch_array($r1);
                        $_SESSION["id"]=$row1[0];
                        echo '<script>location.href="teacher/teacherhome.php"</script>';
                }
                else if($row['usertype']=='student')
                {
                        $sql1="select studid from tblstud where email='$email'";
                        $r1=mysqli_query($conn,$sql1);
                        $row1=mysqli_fetch_array($r1);
                        $_SESSION["id"]=$row1[0];
                        echo '<script>location.href="student/studenthome.php"</script>';
                }
            }
            else{
                echo "<br> Account not active";
            }
        }
        else{
            echo "<br>Incorrect password";
        }
    }
}
?>

</form>  
</body>            
</html>