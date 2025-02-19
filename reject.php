<?php
include 'conn.php';
$id=$_GET['id'];
mysqli_query($con,"UPDATE reg SET status='reject' where id='$id'");

echo "<script> alert ('reject successfully')</script>";
echo "<script>window.location.href='viewreg.php';</script>";
?>