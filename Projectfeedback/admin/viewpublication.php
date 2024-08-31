<?php
$id = $_GET['id'];
include 'header.php';
include '../connect.php';
?>
<style>
    td,th{
        padding: 10px;;
    }
    th{
        background-color:#10c7c1;
		color:white;
		text-transform:uppercase;
		font-weight:bold; 
    }
    </style>
<center>
    <form action="" method="POST">
        <h1 style="margin-top:5rem;">Publication Details</h1>
        <table width="40%">

            <tr>
                <td>Select starting date: </td>
                <td><input type="date" placeholder="Starting date" required="" class="form-control" name="sdate"></td>
            </tr>
            <tr>
                <td>Select ending date: </td>
                <td><input type="date" placeholder="Ending date" required="" class="form-control" name="edate"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="btn btn-primary"
                        style="border:2px,solid,#47f5d2;border-radius:20px;width:100px;" value="submit" name="submit"> </td>
            </tr>
        </table>
    </form>
</center>


<?php
if(isset($_POST['submit']))
{
    $sdate = $_REQUEST['sdate'];
    $edate = $_REQUEST['edate'];
    echo '<table border="2" width="50%" align="center">
    <tr>
        <td>ID</td>
        <td>NAME</td>
        <td>PUBLICATION</td>
        <td>DESCRIPTION</td>
        <td>FIELD</td>
        <td>DATE</td>
    </tr>';
      $sql = "SELECT * from tblpub,tblteach where tblpub.teachid=tblteach.teachid and tblteach.teachid='$id' and tblpub.date between '$sdate' and '$edate'";
      $result = $conn->query($sql);
      while ($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row['pid'] . "</td>";
          echo "<td>" . $row['name'] . "</td>";
          echo "<td>" . $row['publication'] . "</td>";
          echo "<td>" . $row['description'] . "</td>";
          echo "<td>" . $row['field'] . "</td>";
          echo "<td>" . $row['date'] . "</td></tr>";
      }
    echo '</table>';
}
else{
    echo '<table border="2" width="50%" align="center">
    <tr>
        <td>ID</td>
        <td>NAME</td>
        <td>PUBLICATION</td>
        <td>DESCRIPTION</td>
        <td>FIELD</td>
        <td>DATE</td>
    </tr>';
      $sql = "SELECT * from tblpub,tblteach where tblpub.teachid=tblteach.teachid and tblteach.teachid='$id'";
      $result = $conn->query($sql);
      while ($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row['pid'] . "</td>";
          echo "<td>" . $row['name'] . "</td>";
          echo "<td>" . $row['publication'] . "</td>";
          echo "<td>" . $row['description'] . "</td>";
          echo "<td>" . $row['field'] . "</td>";
          echo "<td>" . $row['date'] . "</td></tr>";
      }
    echo '</table>';
}
?>