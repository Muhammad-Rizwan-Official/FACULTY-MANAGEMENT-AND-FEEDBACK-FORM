<?php
session_start();
include 'header.php';
include '../connect.php';
?>
<h1 style="margin-top:5rem;">TEACHER FEEDBACK</h1><hr>
<center>
    <body bgcolor="#E0FFFF">
	<form action="" method="POST">
    <table width="60%">
        
        
    <tr>
            <td>Sem: </td>
            <td><input type ="number"  placeholder="Semester" required="" min="1" max="6" class="form-control"
            name ="sem"></td>
        </tr><br>
        <tr>
            <td>Teacher</td>
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
         </select>
        </td></tr>
        </table>
        <table>
        <tr>
	    <td><font size="4px" color="red">Depth of subject knwoledge of the teacher</font></td></tr>
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
		<td><font size="4px" color="red">Communication skill</font></td></tr>
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
        <td><font size="4px" color="red">Ability to use English language</font></td></tr>
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
        <td><font size="4px" color="red">Qualities of the Teacher in respect of dedication,sincerity and honesty</font></td></tr>
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
        <td><font size="4px" color="red">punctuality of the teacher</font></td></tr>
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
        <td><font size="4px" color="red">Do you feel that teacher has got adequate preparation in his/her subject before coming class</font></td></tr>
        <tr>
        <td><input type="radio" name="preparation" value="5" required="">always</td>
        </tr>
        <tr>
        <td><input type="radio" name="preparation" value="4" required="">mostly</td>
        </tr>
        <tr>
        <td><input type="radio" name="preparation" value="3" required="">sometimes</td>
        </tr>
        <tr>
        <td><input type="radio" name="preparation" value="2" required="">rarely</td>
        </tr>
        <tr>
        <td><input type="radio" name="preparation" value="1" required="">never</td>
        </tr>
    
        <tr>
        <td><font size="4px" color="red">Does the teacher evaluate the answer scripts of internal exams and declare the mark in the class timely</font></td></tr>
        <tr>
        <td><input type="radio" name="evaluation" value="5" required="">always</td>
        </tr>
        <tr>
        <td><input type="radio" name="evaluation" value="4" required="">mostly</td>
        </tr>
        <tr>
        <td><input type="radio" name="evaluation" value="3" required="">sometimes</td>
        </tr>
        <tr>
        <td><input type="radio" name="evaluation" value="2" required="">rarely</td>
        </tr>
        <tr>
        <td><input type="radio" name="evaluation" value="1" required="">never</td>
        </tr>
    
        <tr>
        <td><font size="4px" color="red">Does the teacher comes to class on time</font></td></tr>
        <tr>
        <td><input type="radio" name="ontime" value="5" required="">always</td>
        </tr>
        <tr>
        <td><input type="radio" name="ontime" value="4" required="">mostly</td>
        </tr>
        <tr>
        <td><input type="radio" name="ontime" value="3" required="">sometimes</td>
        </tr>
        <tr>
        <td><input type="radio" name="ontime" value="2" required="">rarely</td>
        </tr>
        <tr>
        <td><input type="radio" name="ontime" value="1" required="">never</td>
        </tr>

        <tr>
        <td><font size="4px" color="red">Does the teacher try to windup the class before the time</font></td></tr>
        <tr>
        <td><input type="radio" name="windup" value="5" required="">always</td>
        </tr>
        <tr>
        <td><input type="radio" name="windup" value="4" required="">mostly</td>
        </tr>
        <tr>
        <td><input type="radio" name="windup" value="3" required="">sometimes</td>
        </tr>
        <tr>
        <td><input type="radio" name="windup" value="2" required="">rarely</td>
        </tr>
        <tr>
        <td><input type="radio" name="windup" value="1" required="">never</td>
        </tr>

        <tr>
        <td><font size="4px" color="red">Does the teacher use modern teaching aids like ppt,laptop,project,etc</font></td></tr>
        <tr>
        <td><input type="radio" name="modern" value="5" required="">always</td>
        </tr>
        <tr>
        <td><input type="radio" name="modern" value="4" required="">mostly</td>
        </tr>
        <tr>
        <td><input type="radio" name="modern" value="3" required="">sometimes</td>
        </tr>
        <tr>
        <td><input type="radio" name="modern" value="2" required="">rarely</td>
        </tr>
        <tr>
        <td><input type="radio" name="modern" value="1" required="">never</td>
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
	
    $sem = $_POST ['sem'];
    $tna = $_POST ['tname'];
    $q1 = $_POST ['knowledge'];
    $q2 = $_POST ['communication'];
    $q3 = $_POST ['ability'];
    $q4 = $_POST ['quality'];
    $q5 = $_POST ['punctuality'];
    $q6 = $_POST ['preparation'];
    $q7 = $_POST ['evaluation'];
    $q8 = $_POST ['ontime'];
    $q9 = $_POST ['windup'];
    $q10 = $_POST ['modern'];
    $com = $_POST ['comment'];
    $ov = ($q1+$q2+$q3+$q4+$q5+$q6+$q7+$q8+$q9+$q10)/10; 
    $sql="select count(*) from tblteachf where studid='$na' and teachid='$tna' and sem='$sem'";
    $r=mysqli_query($conn,$sql);
    // echo $sql;
    $row=mysqli_fetch_array($r);
    if($row[0]>0)
    {
        echo "<br> Already submitted";
    }
    else
    {
	$sql = "INSERT INTO tblteachf(studid,date,sem,teachid,comment,overall) VALUES('$na',(select sysdate()),'$sem','$tna','$com','$ov')";
    echo $sql;
	if ($conn->query($sql) === TRUE)
	{
     echo "<br> new records create succesully";
     echo "<script>alert('new records create succesully');location.href='tfeedback.php'</script>";
    }
      else
        {
	        echo "ERROR: " .$sql. "<br>" . $conn->error;
        }
$conn->close();
}
}

?>
