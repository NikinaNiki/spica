<?php
include 'conn.php';
$id=$_GET['id'];
mysqli_query($con,"DELETE FROM `reg` WHERE id='$id'");
mysqli_query($con,"DELETE FROM `login` WHERE id='$id'");
echo "<script> alert ('delete successfully')</script>";
echo "<script>window.location.href='viewregistration.php';</script>";
?>