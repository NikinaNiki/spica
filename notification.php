
<?php
include 'conn.php';
$data=mysqli_query($con,"select * from notification"); 

if(isset($_POST['submit']))
{
  
  
  
  $notification=$_POST['notification'];
  $date=$_POST['date'];
  mysqli_query($con,"INSERT INTO notification(notification,date)VALUES('$notification','$date')");
  $data=mysqli_query($con,"select * from notification"); 
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
 





                <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"></h4>
                  <p class="card-description">
                   
                  <div class="table-responsive pt-3">
                   <div>
                    
      <form class="forms-sample" method="post">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Notification</label>
                      <input type="text" name="notification"
                      class="form-control" id="exampleInputUsername1" placeholder="Username" Required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">date</label>
                      <input type="date" name="date"
                      class="form-control" id="exampleInputUsername1" placeholder="Username" Required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                    
                
</div>
<br><br><br>
<div>
<table class="table table-bordered table-primary">
                      <thead>
                        <tr>
                          <th>
                            Notification
                          </th>
                          <th>
                           Date
                          </th>
    </tr>
    
    <?php
    while($row=mysqli_fetch_assoc($data))
    {
    ?>
                        <tr >
                        <td><?php echo $row['notification'];?></td>
                        <td><?php echo $row['date'];?></td>
    </tr>

<?php
    }
    ?>
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