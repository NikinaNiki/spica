<?php
include 'conn.php';
$id=$_GET['id'];
mysqli_query($con,"UPDATE reg SET status='Approve' where id='$id'");

echo "<script> alert ('Approve successfully')</script>";
echo "<script>window.location.href='viewreg.php';</script>";
?>