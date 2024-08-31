<?php
session_start();
include 'header.php';
include '../connect.php';
$id = $_SESSION['id'];
$sql = "select count(*) from tblclg where studid='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
if($row[0]>0)
{
    echo '<script>alert("Already added");location.href="studenthome.php"</script>';
}
?>
<h1 style="margin-top:5rem;">COLLEGE FEEDBACK</h1><hr>
<center>
    <body bgcolor="#E0FFFF">
	<form action="" method="POST"> 
        <table>
        <tr>
	    <td><font size="4px" color="red">Library facility</font></td></tr>
        <tr>
        <td><input type="radio" name="knowledge" value="5" required="">Excellent</td>
        </tr>
        <tr>
        <td><input type="radio" name="knowledge" value="4" required="">very good</td>
        </tr>
        <tr>
        <td><input type="radio" name="knowledge" value="3" required="">good</td>
        </tr>
        <tr>
        <td><input type="radio" name="knowledge" value="2" required="">satisfactory</td>
        </tr>
        <tr>
        <td><input type="radio" name="knowledge" value="1" required="">unsatisfactory</td>
        </tr><br><br>
        <tr>
		<td><font size="4px" color="red">Internet facility</font></td></tr>
        <tr>
        <tr>
        <td><input type="radio" name="communication" value="5" required="">Excellent</td>
        </tr>
        <tr>
        <td><input type="radio" name="communication" value="4" required="">very good</td>
        </tr>
        <tr>
        <td><input type="radio" name="communication" value="3" required="">good</td>
        </tr>
        <tr>
        <td><input type="radio" name="communication" value="2" required="">satisfactory</td>
        </tr>
        <tr>
        <td><input type="radio" name="communication" value="1" required="">unsatisfactory</td>
        </tr>
        <tr>
        <td><font size="4px" color="red">Co-Curricular activity</font></td></tr>
        <tr>
        <td><input type="radio" name="ability" value="5">Excellent</td>
        </tr>
        <tr>
        <td><input type="radio" name="ability" value="4">very good</td>
        </tr>
        <tr>
        <td><input type="radio" name="ability" value="3">good</td>
        </tr>
        <tr>
        <td><input type="radio" name="ability" value="2">satisfactory</td>
        </tr>
        <tr>
        <td><input type="radio" name="ability" value="1">unsatisfactory</td>
        </tr>
        <td><font size="4px" color="red">Discipline Enforcement</font></td></tr>
        <tr>
        <td><input type="radio" name="quality" value="5">Excellent</td>
        </tr>
        <tr>
        <td><input type="radio" name="quality" value="4">very good</td>
        </tr>
        <tr>
        <td><input type="radio" name="quality" value="3">good</td>
        </tr>
        <tr>
        <td><input type="radio" name="quality" value="2">satisfactory</td>
        </tr>
        <tr>
        <td><input type="radio" name="quality" value="1">unsatisfactory</td>
        </tr>
        <tr>
        <td><font size="4px" color="red">Placement cell activities </font></td></tr>
        <tr>
        <td><input type="radio" name="punctuality" value="5" required="">Excellent</td>
        </tr>
        <tr>
        <td><input type="radio" name="punctuality" value="4" required="">very good</td>
        </tr>
        <tr>
        <td><input type="radio" name="punctuality" value="3" required="">good</td>
        </tr>
        <tr>
        <td><input type="radio" name="punctuality" value="2" required="">satisfactory</td>
        </tr>
        <tr>
        <td><input type="radio" name="punctuality" value="1" required="">unsatisfactory</td>
        </tr>
       <br>
       <tr>
        <td><font size="4px" color="red">Auditorium facilities</font></td></tr>
        <tr>
        <td><input type="radio" name="facility" value="5" required="">Excellent</td>
        </tr>
        <tr>
        <td><input type="radio" name="facility" value="4" required="">very good</td>
        </tr>
        <tr>
        <td><input type="radio" name="facility" value="3" required="">good</td>
        </tr>
        <tr>
        <td><input type="radio" name="facility" value="2" required="">satisfactory</td>
        </tr>
        <tr>
        <td><input type="radio" name="facility" value="1" required="">unsatisfactory</td>
        </tr>
        <tr>
            <td><font size="4px" color="red">comments (if any):</font></td></tr>
            <tr><td><textarea name="comment" cols="60" style="width:500px;" rows="10"></textarea></td>
        </tr><br><br>
        <tr>
            <td><input type="submit" value="submit" name="submit" style="border:2px,solid,#47f5d2;border-radius:20px;width:100px;">
        </tr>
            </table>

   <?php
if (isset($_POST['submit']))
{
    // echo 'hi';
	$na = $_SESSION['id'];
	
   
    $q1 = $_POST ['knowledge'];
    $q2 = $_POST ['communication'];
    $q3 = $_POST ['ability'];
    $q4 = $_POST ['quality'];
    $q5 = $_POST ['punctuality'];
    $q6 = $_POST ['facility'];
    $com = $_POST ['comment'];
    $ov = ($q1+$q2+$q3+$q4+$q5+$q6)/6; 
    
	$sql = "INSERT INTO tblclg(studid,date,comment,rating) VALUES('$na',(select sysdate()),'$com','$ov')";
    echo $sql;
	if ($conn->query($sql) === TRUE)
	{
     echo "<br> new records create succesully";
     echo "<script>alert('Feedback added');location.href='studenthome.php'</script>";
    }
      else
        {
	        echo "ERROR: " .$sql;
        }
$conn->close();
}


?>
