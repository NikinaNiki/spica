<?php
include 'conn.php';
$data=mysqli_query($con,"SELECT * FROM reg inner join complaint on reg.id=complaint.staff_id");
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
                    <table class="table table-bordered table-dark">
                      <thead>
                        <tr>
                          <th>
                            Complaint
                          </th>
                          <th>
                           date
                          </th>
                          <th>
                          staf name
                          </th>
                          <th>
                           Reply
                          </th>
                         
                        </tr>
                      </thead>
                      <tbody>
                      <?php
    while($row=mysqli_fetch_assoc($data))
    {
    ?>
                        <tr >
                        <td><?php echo $row['complaint'];?></td>
                        <td><?php echo $row['date'];?></td>
        <td><?php echo $row['username'];?></td>
        
    
        
        <td><a href="complaintreply.php?id=<?php echo $row['complaint_id']?>">reply</td>
    </tr>
    

<?php
}

?>
                        
                      </tbody>
                    </table>
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