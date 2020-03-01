<?php
session_start();
$username1 = $_SESSION["username"];
/*$id = $_SESSION["id"]*/;
require ("../database.php");
$con = mysqli_connect($servername, $username, $password, $database);
if(isset($_POST['btn_submit_sum']))
{

if (!isset($_POST['opt1'])) {
         $opt1 = '0';
    } 
else {
         $opt1 = $_POST['opt1'];
    }


if (!isset($_POST['opt2'])) {
         $opt2 = '0';
    } 
else {
         $opt2 = $_POST['opt2'];
    }



if (!isset($_POST['opt3'])) {
         $opt3 = '0';
    } 
else {
         $opt3 = $_POST['opt3'];
    }



if (!isset($_POST['opt4'])) {
         $opt4 = '0';
    } 
else {
         $opt4 = $_POST['opt4'];
    }



if (!isset($_POST['opt5'])) {
         $opt5 = '0';
    } 
else {
         $opt5 = $_POST['opt5'];
    }




  $toda_no = $_POST['toda_no'];
  $toda = $_POST['toda'];
  $insert = mysqli_query($con,"INSERT INTO inspected VALUES  (NULL, '".$toda_no."','".$toda."', '".$username1 ."', NOW() , 1, '".$opt1."', '".$opt2 ."', '".$opt3 ."', '".$opt4 ."', '".$opt5 ."', 1) ;") or die(mysqli_error($con));

  //For logs
  $insert2 = mysqli_query($con,"INSERT INTO new_logs VALUES  (NULL, '".$toda."','".$toda_no."','inspected', '".$username1 ."', NOW() , ' ', ' ',' ', ' ', ' ',' ', ' ', ' ',' ') ;") or die(mysqli_error($con));
  echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
/*  echo "INSERT INTO inspected VALUES  (NULL, '".$toda_no."','".$toda."', '".$username1 ."', NOW() , 1, '".$opt1."', '".$opt2 ."', '".$opt3 ."', '".$opt4 ."', '".$opt5 ."', 1";*/
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
  <title>Inspector</title>
  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <?php require('navigation.php');  ?>
    <!-- Sidebar -->

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
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
              <a href="" data-toggle="modal" data-target="#myModal">
              <div class="card border-left-info shadow h-100 py-2" style="background-color:lightblue">
                <div class="card-body" >
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

            <!-- <button style="float: right; margin: 1% 0;" class="btn btn-success" data-toggle="modal" data-target="#myModal">New</button> -->

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

        <!-- </div> -->

  <!-- </div> -->
</div>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js'></script>
<script src='https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js'></script>
<link rel='stylesheet' href='https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css' />
          <!--
          <div style="float:right;">
          <button style=" margin: 1% 0;" class="btn btn-success" data-toggle="modal" data-target="#myModal">Add new</button>
          <input id="myInput" type="text" placeholder="Search.." style="display: block;">
          </div>
          -->
          <!-- Content Row -->
         <div class="modal fade" id="myModal" role="dialog">
           <div class="modal-dialog  modal-lg" role="document">
             <div class="modal-content">

               <div class="modal-header">
                 <h4 class="modal-title">New Franchise</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>

               <div class="modal-body">
                <div id="requirements">

                  <div class="form-check">
<!--                     <input class="form-check-input" type="checkbox" value="" id=" ">
                    <label class="form-check-label" for="defaultCheck1"> -->
                     Requirements for New Applicant
                    </label>
                    <ul>
                      <li>
                        <input class="form-check-input" type="checkbox" value="" id=" ">
                        <label class="form-check-label" for="defaultCheck1">
                        Terminal Clearance 
                          <span style="color:red">*</span>
                      </li>
                      <li>
                        <input class="form-check-input" type="checkbox" value="" id=" ">
                        <label class="form-check-label" for="defaultCheck1">
                      Barangay Clearance 
                          <span style="color:red">*</span>
                      </li>
                      <li>
                        <input class="form-check-input" type="checkbox" value="" id=" ">
                        <label class="form-check-label" for="defaultCheck1">
                      OR-CR
                          <span style="color:red">*</span>
                      </li>
                      <li>
                        <input class="form-check-input" type="checkbox" value="" id=" ">
                        <label class="form-check-label" for="defaultCheck1">
                      Voters Certificate
                          <span style="color:red">*</span>
                      </li>
                      <li>
                        <input class="form-check-input" type="checkbox" value="" id=" ">
                        <label class="form-check-label" for="defaultCheck1">
                      Cedula
                          <span style="color:red">*</span>
                      </li>
                      <li>
                        <input class="form-check-input" type="checkbox" value="" id=" ">
                        <label class="form-check-label" for="defaultCheck1">
                      Drug Test (Operator)
                          <span style="color:red">*</span>
                      </li>
                    </ul>
                  </div>

                  <div class="form-check">
                     Checklist Complete
                   </label><br>
                    <ul style="width: 50%; float:left;">
                      <li>
                        <input class="form-check-input" type="checkbox" value="" id=" " >
                        <label class="form-check-label" for="defaultCheck1">
                      Head Light
                        <span style="color:red">*</span>
                    </li>
                      <li>
                        <input class="form-check-input" type="checkbox" value="" id=" " >
                        <label class="form-check-label" for="defaultCheck1">
                      Signal Light
                        <span style="color:red">*</span>
                    </li>
                      <li>
                        <input class="form-check-input" type="checkbox" value="" id=" " >
                        <label class="form-check-label" for="defaultCheck1">
                      Brake Light
                        <span style="color:red">*</span>
                    </li>
                      <li>
                        <input class="form-check-input" type="checkbox" value="" id=" " >
                        <label class="form-check-label" for="defaultCheck1">
                      Horn
                        <span style="color:red">*</span>
                    </li>
                      <li>
                        <input class="form-check-input" type="checkbox" value="" id=" " >
                        <label class="form-check-label" for="defaultCheck1">
                      Chain Cover
                        <span style="color:red">*</span>
                    </li>
                      <li>
                        <input class="form-check-input" type="checkbox" value="" id=" " >
                        <label class="form-check-label" for="defaultCheck1">
                      Wind Shield
                        <span style="color:red">*</span>
                    </li>
                      <li>
                        <input class="form-check-input" type="checkbox" value="" id=" " >
                        <label class="form-check-label" for="defaultCheck1">
                      Side Car Side Mirror
                        <span style="color:red">*</span>
                    </li>
                      <li>
                        <input class="form-check-input" type="checkbox" value="" id=" " >
                        <label class="form-check-label" for="defaultCheck1">
                      Side Mirror MC
                        <span style="color:red">*</span>
                    </li>
                      <li>
                        <input class="form-check-input" type="checkbox" value="" id=" " >
                       <label class="form-check-label" for="defaultCheck1">
                      Wind Shield
                        <span style="color:red">*</span>
                    </li>
                    </ul>
                    <ul style="width: 50%; float:left;">
                      <li>
                        <input class="form-check-input" type="checkbox" value="" id=" " >
                        <label class="form-check-label" for="defaultCheck1">
                      Sidecar Body
                        <span style="color:red">*</span>
                    </li>
                      <li>
                        <input class="form-check-input" type="checkbox" value="" id=" " >
                        <label class="form-check-label" for="defaultCheck1">
                      Trash Can
                        <span style="color:red">*</span>
                    </li>
                      <li>
                        <input class="form-check-input" type="checkbox" value="" id=" " >
                        <label class="form-check-label" for="defaultCheck1">
                      Side Car Light
                        <span style="color:red">*</span>
                    </li>
                      <li>
                        <input class="form-check-input" type="checkbox" value="" id=" " >
                        <label class="form-check-label" for="defaultCheck1">
                      Muffler Original
                        <span style="color:red">*</span>
                    </li>
                      <li>
                        <input class="form-check-input" type="checkbox" value="" id=" " >
                        <label class="form-check-label" for="defaultCheck1">
                      Fare Rate Sticker
                        <span style="color:red">*</span>
                    </li>
                      <li>
                        <input class="form-check-input" type="checkbox" value="" id=" " >
                        <label class="form-check-label" for="defaultCheck1">
                      Plate Sticker
                        <span style="color:red">*</span>
                    </li>
                      <li>
                        <input class="form-check-input" type="checkbox" value="" id=" " >
                       <label class="form-check-label" for="defaultCheck1">
                      City MCH Sticker
                        <span style="color:red">*</span>
                    </li>
                    </ul>
                  </div>
                    <div class="form-check">
                   </label><br>
                    <ul style="width: 50%; float:;">
                      <li>
                        <input class="form-check-input" type="checkbox" value="" id=" " >
                        <label class="form-check-label" for="defaultCheck1">
                        Certification of Registration
                        <span style="color:red">*</span>
                    </li>                     
                      <li>
                        <input class="form-check-input" type="checkbox" value="" id=" " >
                        <label class="form-check-label" for="defaultCheck1">
                        Official Receipt of Registration
                        <span style="color:red">*</span>
                    </li>
                    </li>                     
                      <li>
                        <input class="form-check-input" type="checkbox" value="" id=" " >
                        <label class="form-check-label" for="defaultCheck1">
                        Certification of Residency
                        <span style="color:red">*</span>
                    </li>
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id=" " >
                        <label class="form-check-label" for="defaultCheck1">
                        Filing Fee Official Receipt
                        <span style="color:red">*</span>
                    </li>   
                    </ul>                
                  </div>
                  </div>  

           
              </div> <!--end modal body -->

              <div class="modal-footer">
                <form method="POST" id="application_form">
                  <div class="form-group row" style="float: left">
                          <div class="form-check">
                  <ul style="width: 70%; float:;">
                    <li>
                        <input class="form-check-input" type="checkbox" value="1" name="opt1" >
                        <label class="form-check-label" for="defaultCheck1">
                        Deed of Sale
                        <span style="color:gray">(opt)</span>
                        </label>
                    </li>
                      <li>
                        <input class="form-check-input" type="checkbox" value="1" name="opt2"  >
                        <label class="form-check-label" for="defaultCheck1">
                        Petition for Francasing
                        <span style="color:gray">(opt)</span>
                        </label>
                    </li>
                      <li>
                        <input class="form-check-input" type="checkbox" value="" name="opt3"  >
                        <label class="form-check-label" for="defaultCheck1">
                        Private (opt)
                      </label>
                    </li>
                      <li>
                        <input class="form-check-input" type="checkbox" value="" name="opt4"  >
                        <label class="form-check-label" for="defaultCheck1">
                        Others (Specify)
                      </label>
                      <input type="text" name="opt5">
                    </li>
                  </ul>
                </div> 
                    <div class="col-sm-12" style="margin-bottom: 2%;">
                      <select type="text" class="form-control" name="toda" placeholder="Toda" required >
                        <option>PASADENA</option>
                        <option>BLUMAN</option>
                        <option>SM</option>
                        <option>STO. TOROBIO</option>
                        <option>DON MAN</option>
                        <option>ROSE PHAR</option>
                        <option>BAGORA </option>
                        <option>AGORA</option>
                        <option>P.GUEVARRA</option>
                        <option>J.BASA</option>
                        <option>F.ROMAN</option>
                      </select>
                    </div>
                    <div class="col-sm-12" style="margin-bottom: 2%;">
                      <input type="number" class="form-control" name="toda_no" placeholder="Toda No" required>
                    </div>

                    <div class="col-sm-12" style="margin-bottom: 2%;">
                      <input type="text" class="form-control" name="inspector" value="<?php echo $username1; ?>" disabled>
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <input type="submit" name="btn_submit_sum" id="btn_submit" value="Submit" class="btn btn-success" style="float: right; width: 50%;">
                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                  </div>
                </form>
              </div>

            </div>  <!--end modal content -->
          </div>  <!-- end modal dialog -->
        </div>  <!--end content-flow -->
        <!-- </div> -->

      <script type="text/javascript">
        $( document ).ready(function() {
          console.log( "ready!" );
          var countChecked = function () {
            var n = $("#requirements input:not(:checked)").length;
            /*alert(n);*/
            if (n == 0) {
              $("button#requirements_next, #application_form, .modal-footer").css({
                "visibility": "visible",
                "height":"auto"
              });
            } else {
              $("button#requirements_next, #application_form, .modal-footer").css({
                "visibility": "hidden",
                "height":"50px"
              });
            }
          };
          countChecked();
          $("#requirements input[type=checkbox]").on("click", countChecked);
        });
      </script>

      <!-- <button style="float: right; margin: 1% 0;" class="btn btn-success" data-toggle="modal" data-target="#myModal">New</button> -->


      <?php
      $sql = 'select * from inspected where status = 1';
      $statement = $connection->prepare($sql);
      $statement->execute();
      $packages = $statement->fetchAll(PDO::FETCH_OBJ);
      ?>
      <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="margin-top:1%;">
        <thead>
          <tr>
            <th>Toda & Toda No.</th>
            <th>Inspected by</th>
            <th>Date and Time</th>
          </tr>
        </thead>
    
          <?php foreach($packages as $package): ?>
            <tr id="<?= $package->user_id; ?>">
              <td data-target="fullname"><?= $package->toda;?>  <?= $package->toda_no;?> </td>
              <td data-target="fullname"> <?= $package->inspector;?> </td>
              <td data-target="fullname"> <?= $package->ins_date;?> </td>
            </tr>
          <?php endforeach; ?>
     
      </table>

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