<?php
session_start();
$username1 = $_SESSION["username"];
/*$id = $_SESSION["id"]*/;
require ("../database.php");
  $con = mysqli_connect($servername, $username, $password, $database);
  $result = 'SELECT COUNT(id_no) AS count FROM tricycle_operator';
    $statement = $connection->prepare($result);
        $statement->execute();
        $count = $statement->fetchAll(PDO::FETCH_OBJ);

     foreach($count as $package):

      $num_padded = sprintf("%04d", $package->count+1);
      $AI = "" . date("Y-md") . "-".$num_padded."";
      endforeach;


      $userid = $_GET['userid'];
    /*    echo $userid;
    echo "'select * from inspected where status = 1 and userid = '".$userid."' '";*/
    $sql_insp = 'select * from inspected where status = 1 and userid = "'.$userid.'" ';

    $statement = $connection->prepare($sql_insp);
    $statement->execute();
    $inspected = $statement->fetchAll(PDO::FETCH_OBJ);
    foreach($inspected as $package):
if(isset($_POST['btn_submit_sum']))
{
          $first_name = $_POST['first_name'];
          $middle_name = $_POST['middle_name'];
          $last_name = $_POST['last_name'];
          $house_no = $_POST['house_no'];
          $street = $_POST['street'];
          $barangay = $_POST['barangay'];
          $city = $_POST['city'];
          $case_no = $_POST['case_no'];
          $toda = $_POST['toda'];
          $toda_no = $_POST['toda_no'];
          $make = $_POST['make'];
          $motor_no = $_POST['motor_no'];
          $chasis_no = $_POST['chasis_no'];
          $plate_no = $_POST['plate_no'];

          $unit = $_POST['unit'];


           $update2 = mysqli_query($con,"UPDATE new_logs SET created_new_by = '".$username1."', created_new = 'Created OOP', created_new_date = NOW() 
      WHERE toda = '".$package->toda."' AND toda_no = '".$package->toda_no."'  ;") or die(mysqli_error($con));
          $insert = mysqli_query($con,"INSERT INTO trb_db_master.tricycle_operator VALUES  (NULL, '".$first_name."', '".$middle_name ."', '".$last_name."', '".$house_no."', '".$street."', '".$barangay."', '".$city."', '".$case_no."', '".$toda."', '".$toda_no."', '".$make."', '".$motor_no."', '".$chasis_no."', '".$plate_no."', NOW() , '".$unit."',1,1);") or die(mysqli_error($con));

           $delete = mysqli_query($con,"UPDATE  trb_db_master.inspected set status= 0, seen_status= 0 WHERE inspected.toda_no = '".$toda_no."' ;") or die(mysqli_error($con));
      echo "<script type='text/javascript'>window.location.href = 'new.php';</script>";

}
          ?>




<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>New</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

   <?php require('navigation.php');  ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tricycle Regulatory Board System (Franchise - New)</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
          </div>

          <!-- Content Row -->
          <div class="row">


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

            <div class="col-xl-2 col-md-6 mb-4">
              <a href="new.php">
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
   <!--        <?php
               $sql = 'select * from inspected where status = 1';

                $statement = $connection->prepare($sql);
                $statement->execute();
                $packages = $statement->fetchAll(PDO::FETCH_OBJ);

          ?> -->
          <!--
          <style media="screen">
          table {
          width: 50%;
          max-height: 20px;
          padding: 15px;
          text-align: left;
          border-collapse: collapse;
          }
          </style>
          -->

 <table class="table table-striped table-bordered table-hover fetch-ins" id="dataTables-example fetch-ins" style="margin-top:1%;">
  <!--                 <thead>
                    <tr>
                      <th>Toda </th>
                      <th>Toda #</th>


                    </tr>
                 </thead>
                    <tbody>
                      <?php foreach($packages as $package): ?>

                  <tr id="<?= $package->user_id; ?>">



                      <td data-target="fullname"><?php echo $fullname; ?> </td>
                      <td data-target="fullname"><?php echo $full_add; ?> </td>


                  </tr>
                <?php endforeach; ?>
              </tbody> -->

            </table>
            <div class="fetch_ins" >
            </div>







          <div class="container">
            <div class="row">
              <div class="row" style="margin-top:1%;width: 100%; display: block !important;">
            <form method="POST" id="application_form">

              <div class="form-group row">

                <div class="col-sm-4">
                  <input type="text" class="form-control" name="toda" placeholder="Toda"  required value="<?= $package->toda;?>">
                </div>

                <div class="col-sm-4">
                  <input type="text" class="form-control" name="toda_no" placeholder="Toda No"  required  value="<?= $package->toda_no;?>">
                <?php   endforeach; ?>
                  <!-- <select class="form-control" name ="toda_no">
                    <option>Select toda no</option>

                    <?php foreach($inspected as $ins): ?>
                    <option value="<?= $ins->toda_no;?>"> <?= $ins->toda_no;?> </option>

                    <?php endforeach; ?>
                        </select>
                  <a href="application_form.php">Fetch Data</a>    -->
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="case_no" placeholder="Case No" required readonly value=<?php echo $AI ?> >
                </div>

              </div>



            <div class="form-group row">

              <div class="col-sm-4">
                <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
              </div>

              <div class="col-sm-4">
                <input type="text" class="form-control" name="middle_name" placeholder="Middle Name" required>
              </div>

              <div class="col-sm-4">
                <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
              </div>

            </div>

            <div class="form-group row">

              <div class="col-sm-3">
                <input type="text" class="form-control" name="house_no" placeholder="House no" required>
              </div>

              <div class="col-sm-3">
                <input type="text" class="form-control" name="street" placeholder="Street" required>
              </div>

              <div class="col-sm-3">
                  <!-- <input type="text" class="form-control" name="barangay" placeholder="Barangay"  required> -->
                  <select  type="text" class="form-control" name="barangay" Required>
                    <option value="Barangay">Barangay</option>
                     <optgroup label="District I">
                       <option value="Balong-Bato">Balong-Bato</option>
                       <option value="Batis">Batis</option>
                       <option value="Corazon de Jesus">Corazon de Jesus</option>
                       <option value="Ermitano">Ermitaño</option>
                       <option value="Pasadena">Pasadeña</option>
                       <option value="Pedro Cruz">Pedro Cruz</option>
                       <option value="Progreso">Progreso</option>
                       <option value="Rivera">Rivera</option>
                       <option value="Salapan">Salapan</option>
                       <option value="San Perfecto">San Perfecto</option>
                     <optgroup label="District II">
                       <option value="Addition hills">Addition hills</option>
                       <option value="Green hills">Green hills</option>
                       <option value="Isabelita">Isabelita</option>
                       <option value="Kabayanan">Kabayanan</option>
                       <option value="Little Baguio">Little Baguio</option>
                       <option value="Maytunas">Maytunas</option>
                       <option value="Onse">Onse</option>
                       <option value="Saint Joseph">Saint Joseph</option>
                       <option value="Santa Lucia">Santa Lucia</option>
                       <option value="Tibagan">Tibagan</option>
                       <option value="West Crame">West Crame</option>
                  </select>
                </div>

              <div class="col-sm-3">
                <input type="text" class="form-control" name="city" placeholder="City" value="San Juan City M.M." required>
              </div>

            </div>

            <div class="form-group row">

              <div class="col-sm-4">
                <input type="text" class="form-control" name="make" placeholder="Make" required>
              </div>

              <div class="col-sm-4">
                <input type="text" class="form-control" name="motor_no" placeholder="Motor No" required>
              </div>

              <div class="col-sm-4">
                <input type="text" class="form-control" name="chasis_no" placeholder="Chasis No" required>
              </div>

            </div>

           <div class="form-group row">

              <div class="col-sm-4">
                <input type="text" class="form-control" name="plate_no" placeholder="Plate No" required>
              </div>


               <div class="col-sm-4">
                <select class="form-control" name="unit" >
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </div>


            </div>

            <div class="">
              <!-- <input type="reset" value="Reset" style="float: right; width: 150px; height: 40px; border: 0px;"> -->
              <!-- <a href="new.php" class="" style="float: right; width: 70px; height: 40px; border: 0px;">Reset</a> -->
            <input type="submit" name="btn_submit_sum" id="btn_submit" value="Submit" class="btn btn-success" style="float: right; width: 150px; margin-right: 0px;">

            </div>
         </form>
         <form style="display: inline;" action="new.php" method="get" >
           <button style="float: right; width: 150px; height: 38px; border: 0px; margin-right: 10px;">Reset</button>
         </form>

  <!-- Trigger the modal with a button -->





<!--                 <button style="float: right; margin: 1% 0;" class="btn btn-success" data-toggle="modal" data-target="#myModal">Add new</button>
                <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="margin-top:1%;">
                  <thead>
                    <tr>
                      <th>Name </th>
                      <th>Address</th>
                      <th>Case #</th>
                      <th>Toda</th>
                      <th>Toda #</th>
                      <th>make</th>
                      <th>Motor #</th>
                      <th>Chasis #</th>
                      <th>Plate #</th>
                      <th>Date</th>
                      <th>Unit</th>
                    </tr>
                 </thead>
                    <tbody>
                      <?php foreach($packages as $package): ?>
                      <?php
                          $fname= $package->first_name;
                          $mname= $package->middle_name;
                          $lname= $package->last_name;

                          $fullname= $lname .', '. $fname .' '.$mname;
                          // echo $fullname;

                          $house_no = $package->house_no;
                          $street = $package->street;
                          $barangay = $package->barangay;
                          $city= $package->city;
                          $full_add =  $house_no .' '. $street .' '.$barangay.' '.$city;
                          //echo $full_add;
                      ?>

                  <tr id="<?= $package->user_id; ?>">



                      <td data-target="fullname"><?php echo $fullname; ?> </td>
                      <td data-target="fullname"><?php echo $full_add; ?> </td>
                      <td data-target="fullname"> <?= $package->case_no;?> </td>
                      <td data-target="fullname"> <?= $package->toda;?> </td>
                      <td data-target="fullname"> <?= $package->toda_no;?> </td>
                      <td data-target="fullname"> <?= $package->make;?> </td>
                      <td data-target="fullname"> <?= $package->motor_no;?> </td>
                      <td data-target="fullname"> <?= $package->chasis_no;?> </td>
                      <td data-target="fullname"> <?= $package->plate_no;?> </td>
                      <td data-target="fullname"> <?= $package->date;?> </td>
                      <td data-target="fullname"> <?= $package->unit;?> </td>


                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table> -->
        <!-- </div>
    </div>-->
</div>
        </div>
  </div>
</div>




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

  <!-- Bootstrap core JavaScript--
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript--
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages--
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins --
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts --
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
-->
</body>

</html>
