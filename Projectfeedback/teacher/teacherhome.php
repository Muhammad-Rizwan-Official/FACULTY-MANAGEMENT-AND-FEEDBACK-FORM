<?php
session_start();
include 'header.php';
include '../connect.php';
$id = $_SESSION['id'];
?>
<center>
    <h1>Welcome </h1><hr><br>
    <?php
    $sql = "select avg(overall) from tblteachf where teachid='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    echo '<h3>Current rating: ' . round($row[0],1).'</h3>';
    ?>
</center>