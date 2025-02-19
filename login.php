<!DOCTYPE html>
<html lang="en">

<head>
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

<body>
  <div class="container-scroller d-flex">
    <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
              
              </div>
              
              <form class="pt-3" method="POST">
                <div class="form-group">
                  <input type="email" name="u_name" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password"  name="pwd" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                 <button name="login" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Login</button>
                <!-- <a   name="login" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="registration.php">SIGN IN</a> -->
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  
                  
                </div>
                
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="registration.php" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
</body>

</html>
<?php
include 'conn.php';
session_start();
if(isset($_POST['login']))
{
    $u_name=$_POST['u_name'];
    $pwd=$_POST['pwd'];
    $data=mysqli_query($con,"SELECT * from login where username='$u_name' and password='$pwd'");
    if(mysqli_num_rows($data)>0)
{
  $ses=mysqli_fetch_assoc($data);
  $_SESSION['username']=$ses['username'];
  $_SESSION['staff_id']=$ses['staff_id'];
    header("location:index.php");
}
else{
    echo "<script>alert('invalid username or password')</script>";
}
}
?>