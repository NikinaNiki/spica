<?php
include 'conn.php';
session_start();
$username=$_SESSION['username'];
$data=mysqli_query($con,"select * from reg where email='$username'");
$row=mysqli_fetch_assoc($data);
$name=$row['username'];
$email=$row['email'];
$gender=$row['gender'];
$file=$row['file'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Spica Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
</head>
<body>
<div class="container-scroller d-flex">
    <!-- partial:./partials/_sidebar.html -->
    <?php
    include 'staffsidebar.php'
    ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:./partials/_navbar.html -->
      <?php
      include 'navbar.php'
      ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
                 

     
    <div class="card-body">
        <div class="container">
            <div >
                <div>
                    <label for="exampleFormControlInput1" class="form-label">Name: </label>
                    <label for="exampleFormControlInput1" class="form-label text_danger"> <?php echo htmlspecialchars($name);?></label><br>
</div>
<div>
<label for="exampleFormControlInput1" class="form-label">Email</label>
<label for="exampleFormControlInput1" class="form-label text_danger"> <?php echo htmlspecialchars($email);?></label><br>
</div>  
<div>
<label for="exampleFormControlInput1" class="form-label">Gender </label>
<label for="exampleFormControlInput1" class="form-label text_danger"> <?php echo htmlspecialchars($gender);?></label>
</div>
<div>
<label for="exampleFormControlInput1" class="form-label">Photo </label>
<label for="exampleFormControlInput1" class="form-label text_danger"> <img src="image/<?php echo htmlspecialchars($file);?>" height="100" width="200"></label>

</div>
    
</div>
</div>
</div>
</div>

</body>
</html>