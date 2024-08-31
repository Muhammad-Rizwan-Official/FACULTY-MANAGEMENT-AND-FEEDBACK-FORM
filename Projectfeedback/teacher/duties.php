<?php
session_start();
include 'header.php';
include '../connect.php';
?>
<center>
	<form action="" method="POST">
		<h1 style="margin-top:5rem;"> Additional Duties</h1>
        <br><br>
<table  width="70%">
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
            <td>Date:</td>
            <td><input type ="date" placeholder="date" required="" class="form-control"
            name ="date"> </td>
        </tr>
        <tr>
            <td>Duties:</td>
            <td><textarea placeholder="Additional Duties" name="duties" cols="10" rows="10"></textarea></td>
        </tr>
        </table>
        <td><input type="submit" class="btn btn-primary" style="border:2px,solid,#47f5d2;border-radius:20px;width:100px;" value="submit" name="submit">    
        </form>
    </center>
 
    <table border="2" width="50%" align="center">
      <?php
         $na = $_SESSION["id"];
         $sql = "SELECT * from tblduties,tblteach where tblduties.teachid=tblteach.teachid and tblteach.teachid='$na'";
		$result = $conn->query($sql);
		while ($row=$result->fetch_assoc())
		 {
		    echo "<tr><td>".$row['did']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['date']."</td>";
            echo "<td>".$row['duties']."</td>";
            
		}
	?>
</table>
<?php
if ($_POST)
{
    $na = $_SESSION["id"];;
    $date = $_POST ['date'];
    $ds = $_POST ['duties'];
    
    $sql = "INSERT INTO tblduties(teachid,date,duties) VALUES('$na','$date','$ds')";
	if ($conn->query($sql) === TRUE)
	{
echo "<br> new records create succesully";
echo "<script>location.href='duties.php'</script>";
}
else
{
	echo "ERROR: " .$sql. "<br>" . $conn->error;
}
$conn->close();
}
?>