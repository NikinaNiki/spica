<?php
include 'conn.php';
$id=$_GET['id'];
$data=mysqli_query($con,"select * from reg where id='$id'");
$row=mysqli_fetch_assoc($data);
$data1=mysqli_query($con,"select * from login where id='$id'");
$row1=mysqli_fetch_assoc($data1);
if(isset($_POST['submit']))
{
    $u_name=$_POST['username'];
    
    $gender=$_POST['gender'];
    $email=$_POST['email'];
   $password=$_POST['password'];
   
 
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

mysqli_query($con,"UPDATE reg SET username='$u_name' ,gender='$gender',email='$email',password='$password' ,file='$filename' WHERE id='$id'");
mysqli_query($con,"update login set username='$u_name',password='$password' where id='$id'");
echo "<script>alert('update successfully')</script>";
echo "<script>window.location.href='viewregistration.php';</script>";

}
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
    <?php
    include 'adminsidebar.php'
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
                      

                      <input type="text" value="<?php echo $row['username'];?>" name="username"
                      class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Gender</label>
                        <select name="gender" class="form-control" id="exampleSelectGender">
                        <option value="Male"<?php if($row['gender']=='Male') echo 'selected="selected"'; ?>>Male</option>
                        <option value="Female"<?php if($row['gender']=='Female') echo 'selected="selected"'; ?>>Female</option>
                        </select>
                      </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="text" value="<?php echo $row['email'];?>" name="email"class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="text" value="<?php echo $row['password'];?>" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div>
                    <img src="image/<?php echo $row['file'] ;?>" height="100" width="200" id="new">
                       </div>
                    
                    <div class="input-group col-xs-12">
                        
                        <input type="file"  name="f1" placeholder="image" id="imageInput" accept="image/*" onchange="previewImage(event)">

                          <!-- <input type="file" id="imageInput" name="f1" placeholder="image" accept="image/*" onchange="previewImage(event)" > -->
                       <!-- <button name="upload">upload</button> -->
                       <!-- <img id="preview" src="" alt="Image Preview" style="max-width:300px;display:none;"> -->
                       <img id="preview" src="" alt="Image Preview" style="max-width: 300px; display: none;">

                      </div>
                    <button type="submit" name="submit" class="btn btn-primary mr-2">Update</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                  <!-- <script>
                    function previewImage(event)
                    {
                      var reader=new FileReader();
                      reader.onload=function()
                      {
                        var output=document.getElementById('preview');
                        output.src=reader.result;
                        output.style.display='block';
                      }
                      reader.readAsDataURL(event.target.file[0]);
                    }

                    </script> -->
                    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('preview');
                output.src = reader.result;
                output.style.display = 'block';
            }
            document.getElementById("new").style.display="none";
            reader.readAsDataURL(event.target.files[0]);
        }
        </script>

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
