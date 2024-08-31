<?php
 session_start();
include 'header.php';
include '../connect.php';
$na = $_GET['id'];
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
<table  width="50%" align="center">
    <form action="" method="POST">
	<h1 style="margin-top:5rem;">Lesson Plan</h1>	
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
</table>
</center>
<?php
if(isset($_REQUEST['submit']))
{
    $sdate=$_REQUEST['sdate'];
    $edate=$_REQUEST['edate'];
    echo '<table border="2" width="50%" align="center">
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
    </tr>';
    
    $sql = "SELECT * from tbllesson,tblteach,tblcourse where  tbllesson.teachid=tblteach.teachid and tbllesson.cid=tblcourse.cid and tblteach.teachid='$na' and tbllesson.date between '$sdate' and '$edate'";
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
    echo '</table>';
}
else{
    echo '<table border="2" width="50%" align="center">
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
    </tr>';
    
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

    echo '</table>';

}
?>
</body>
</html>