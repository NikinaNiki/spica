
<?php
include 'conn.php';

$id=$_GET['id'];

if(isset($_POST['submit']))
{
    
  
  
  $reply=$_POST['reply'];
 
  mysqli_query($con,"UPDATE complaint SET reply='$reply' where complaint_id='$id' ");

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
  <style>
        table,tr,th,td{
            border:2px solid black;
            border-collapse:collapse;
        }
        </style>

</head>
<body>
  <div class="container-scroller d-flex">
    <!-- partial:./partials/_sidebar.html -->
    <?php
    include 'sidebar.php'
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
 





                <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"></h4>
                  <p class="card-description">
                   
                  <div class="table-responsive pt-3">
                   <div>
                    
      <form class="forms-sample" method="post">
      <label for="exampleInputUsername1"></label>
  
                      
                      
      
                    <div class="form-group">
                      <label for="exampleInputUsername1">Reply</label>
                      <input type="text" name="reply"
                      class="form-control" id="exampleInputUsername1" >
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                    
                
</div>
                  </div>
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

