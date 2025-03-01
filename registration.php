<?php
include 'conn.php';
if(isset($_POST['submit']))
{
    
  
  $uname=$_POST['username'];
  //var_dump($uname);
  //exit();
  $gender=$_POST['gender'];
  

    $email=$_POST['email'];
    $pwd=$_POST['pwd'];
    $cpwd=$_POST['cpwd'];
    

    $pic=$_FILES['f1']['name'];
  
    if($pic!="")
    {
        $filearray=pathinfo($_FILES['f1']['name']);
        $file1=rand();
        $file_ext=$filearray["extension"];
        $filenew=$file1 .".".$file_ext;
       // move_uploaded_file($_FILES['f1']['tmp_name'],"~/images/".$filenew);
       $uploadDir = "image/"; // Make sure this directory exists
$uploadFile = $uploadDir . basename($_FILES["f1"]["name"]);
$filename= basename($_FILES["f1"]["name"]);
//var_dump($filename);


//exit();
if (move_uploaded_file($_FILES["f1"]["tmp_name"], $uploadFile)) {
    echo "File successfully uploaded.";
} else {
    echo "File upload failed.";
}


    }
    else
    {
        echo "<script>alert('please try again')</script>";
    }


  


    
   
 
    mysqli_query($con,"INSERT INTO reg(username,gender,email,password,cpassword,file,status)VALUES('$uname','$gender','$email','$pwd','$cpwd','$filename','pending')");

$id=mysqli_insert_id($con);
mysqli_query($con,"INSERT INTO `login`(`username`, `password`, `type`, `id`) VALUES ('$email','$pwd','admin','$id')");
header("location:login.php");
}
?>
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
    <!-- partial:./partials/_sidebar.html -->
    
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:./partials/_navbar.html -->
      
      <!-- partial -->
     
      <div class="main-panel">
        <div class="content-wrapper">
        <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card" style="margin-left:250px">
                
                <div class="card-body">
                  <h4 class="card-title">Registration</h4>
                  <p class="card-description">
                 
                  </p>
                  <form class="forms-sample" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Username</label>
                      <input type="text" name="username"
                      class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Gender</label>
                        <select name="gender" class="form-control" id="exampleSelectGender">
                          <option value="Male"  >Male</option>
                          <option value="Female" >Female</option>
                        </select>
                      </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Confirm Password</label>
                      <input type="password" name="cpwd" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Remember me
                      </label>
                    </div>
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        
                          <input type="file" id="image_id" name="f1" placeholder="image" >
                       
                      </div>
                    <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
                  </div>
                </div>

            <!-- row end -->
          
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>