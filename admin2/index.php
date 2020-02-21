<?php
session_start();
$username1 = $_SESSION["username"];
/*$id = $_SESSION["id"]*/;
require ("../database.php");
$con = mysqli_connect($servername, $username, $password, $database);
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dept. Head</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <?php require('nav.php');  ?>

        <div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tricycle Regulatory Board System (Franchise - New)</h1>
          </div>

          <!-- Content Row -->
          <div class="row">
            <!-- registration Card -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="registration.php">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Franchise</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Registration</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-address-card fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
             </a>
            </div>

            <!-- renewal card -->
            <div class="col-xl-2 col-md-6 mb-4">
              <a href="renewal.php">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">FRANCHISE</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Renewal</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-sync fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div>

            <!-- new card -->
            <div class="col-xl-2 col-md-6 mb-4">
              <a href="index.php">
              <div class="card border-left-info shadow h-100 py-2" style="background-color: lightblue;">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Franchise</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">New</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-edit fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div>

            <!-- Change Unit -->
            <div class="col-xl-2 col-md-6 mb-4">
              <a href="change_unit.php">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Change </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Unit</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-copy fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div>


          <!-- Change Ownership -->
          <div class="col-xl-3 col-md-6 mb-4">
            <a href="change_ownership.php">
            <div class="card border-left-warning shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Change</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"> Ownership</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
            </a>
          </div>

        </div>


          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

          <script>
            $(document).ready(function(){
              $("#filter").on("click", function() {
                $("#myInput").toggle();
              });
              $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable").filter(function() {
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
              });
            });
          </script>
             <!-- <button type="button" class="btn btn-default" data-dismiss="modal" style="margin-bottom:1%;"><a href="http://localhost:8080/trb-master/admin2/"> CLEAR FILTER</a></button> -->
             <div class="">
               <a href="index.php" class="btn btn-info" style="margin-bottom: 1%;">UNFILTERED</a>
               <input id="myInput" type="text" placeholder=" Search.." style="display: block; float: right; width: 12%;  ">
               <!-- <i class="fa fa-search" aria-hidden="true"></i> -->
             </div>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js'></script>
<script src='https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js'></script>
<link rel='stylesheet' href='https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css' />

          <?php
            require ("../database.php");
            $con = mysqli_connect($servername, $username, $password, $database);

            $result = 'select * from tricycle_operator';
            $statement = $connection->prepare($result);
            $statement->execute();
            $payments = $statement->fetchAll(PDO::FETCH_OBJ);

            echo "<table border='1'  class='table table-striped table-bordered table-hover' id='dataTables-example' >
                            <thead>
                    <tr>
                      <th><b>Toda</b></td></th>
                      <th><b  >Toda No.</b></td></th>
                      <th><b>Full Name</b></td></th>
                      <th><b>Address</b></td></th>
                      <th><b>Status</b></td></th>
                      <th><b>Action</b></td></th>
                      </thead>
                      <tbody id = 'myTable'>
                      ";
                      foreach($payments as $package):
                        $fname= $package->first_name;
                        $mname= $package->middle_name;
                        $lname= $package->last_name;
                        $fullname= $lname  .', '. $fname .' '.$mname;
                        $house_no = $package->house_no;
                        $street = $package->street;
                        $barangay = $package->barangay;
                        $city= $package->city;
                        $full_add =  $house_no .' '. $street .' '.$barangay.' '.$city;
                        $stats= $package->status;

                        $new_stat = '';
                        $display = '';
                        $display1 ='';

                       if($stats == 1) {
                         $new_stat= "NO ORDER OF PAYMENT";
                         $display = "none ;";
                         $display1 = "inline-block ;";
                         $display2 = "none ;";
                       }
                       else if($stats == 2) {
                         $new_stat= "SENT TO TREASURY";
                         $display = "inline-block ;";
                         $display1 = "none ;";
                         $display2 = "none ;";
                       }
                       else {
                         $new_stat = "PAID";
                         $display = "inline-block;";
                         $display1 = "none ;";
                         $display2 = "inline-block ;";
                       }

                        echo "<tr id=".$package->id_no.">";
                        echo "<td >".$package->toda."</td>";
                        echo "<td >".$package->toda_no."</td>";
                        echo "<td >".$fullname."</td>";
                        echo "<td >".$full_add."</td>";
                        echo "<td >".$new_stat."</td>";
                        echo "<td >
                        <a href='or_payment.php?userid=".$package->id_no."' style= display:".$display1."'>CREATE  OOP</a>
                        <a href='../treasury/or_payment.php?userid=".$package->id_no."' style= display:".$display2."'>PDF </a></td>";
                        echo "</tr>";
                      endforeach;

                      echo "
                      </tbody>
                      </table>";
            ?>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>© TRB System 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

</body>

</html>
 <script>
 $(document).ready(function(){
      $('#dataTables-example').DataTable();
 });
 </script>
