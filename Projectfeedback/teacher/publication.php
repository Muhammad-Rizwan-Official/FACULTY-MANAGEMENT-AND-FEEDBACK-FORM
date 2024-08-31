<?php
session_start();
include 'header.php';
include '../connect.php';
?>
<center>
	<form action="" method="POST">
		<h1 style="margin-top:5rem;">Publication Details</h1>

<table  width="70%">
  
        <tr>
            <td>Publication: </td>
            <td><input type ="text"  placeholder="Publication" required="" class="form-control"
            name ="publication"></td>
        </tr><br>
        <tr>
            <td>Description:</td>
            <td><textarea placeholder="Description" name="description" cols="10" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>Field: </td>
            <td><input type ="text"placeholder="Field" required="" class="form-control"
            name ="field"></td>
        </tr>
        <tr>
            <td>Publication Date: </td>
            <td><input type ="date" placeholder="date" required="" class="form-control"
            name ="date"> </td>
        </tr></table>
        <td><input type="submit" class="btn btn-primary" style="border:2px,solid,#47f5d2;border-radius:20px;width:100px;" value="submit" name="submit">    
        </form>
    </center>
 
    <table border="2" width="50%" align="center">
      <?php
         $na = $_SESSION["id"];
         $sql = "SELECT * from tblpub,tblteach where tblpub.teachid=tblteach.teachid and tblteach.teachid='$na'";
		$result = $conn->query($sql);
		while ($row=$result->fetch_assoc())
		 {
		    echo "<tr><td>".$row['pid']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['publication']."</td>";
            echo "<td>".$row['description']."</td>";
            echo "<td>".$row['field']."</td>";
            echo "<td>".$row['date']."</td></tr>";
		}
	?>
</table>
<?php
if ($_POST)
{
    $na = $_SESSION["id"];;
	$pub = $_POST ['publication'];
    $des = $_POST ['description'];
    $fi = $_POST ['field'];
    $date = $_POST ['date'];
    $sql = "INSERT INTO tblpub(teachid,publication,description,field,date) VALUES('$na','$pub','$des','$fi','$date')";
	if ($conn->query($sql) === TRUE)
	{
echo "<br> new records create succesully";
echo "<script>location.href='publication.php'</script>";
}
else
{
	echo "ERROR: " .$sql. "<br>" . $conn->error;
}
$conn->close();
}