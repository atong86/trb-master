<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Board</title>

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
              <a href="new.php">
              <div class="card border-left-info shadow h-100 py-2" style="background-color:lightblue">
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



        <div class="">
          <a href="index_table.php" class="btn btn-info" style="margin-bottom: 1%;">FILTERED</a>


          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script><!-- 
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
          <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script><!-- 
          <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script> -->
          <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
          <?php
require ("../database.php");
$con = mysqli_connect($servername, $username, $password, $database);

$result = ' SELECT *
            FROM tricycle_operator
            INNER JOIN or_payments ON tricycle_operator.id_no = or_payments.id_no';
    $statement = $connection->prepare($result);
      $statement->execute();
      $payments = $statement->fetchAll(PDO::FETCH_OBJ);



echo "<table border='1'  class='table table-striped table-bordered table-hover' id='dataTables-example' style='width: 100%' >
 <thead>
<tr>

<th><b>Toda</b></td></th>
<th><b>Toda No.</b></td></th>
<th><b>Name</b></td></th>
<th><b>Address</b></td></th>
<th><b>Amount</b></td></th>
<th><b>Status</b></td></th>
<th><b>OOP</b></td></th>
<th><b>Franchise</b></td></th>
<th><b>Route Slip</b></td></th>

</tr>
</thead>
";
   foreach($payments as $package):
      $fname= $package->first_name;
      $mname= $package->middle_name;
      $lname= $package->last_name;
      $fullname= $lname .', '. $fname .' '.$mname;
      $house_no = $package->house_no;
      $street = $package->street;
      $barangay = $package->barangay;
      $city= $package->city;
      $full_add =  $house_no .' '. $street .' '.$barangay.' '.$city;
      $stats= $package->status;

      $display1 = '';
      $display2 ='';

      if($stats == 2)
      {
        $new_stat= "UNPAID";
        $display1 = "none ;";
        $display2 = "inline-block ;";
      }
      else if($stats == 5)
      {
        $new_stat= "PAID";
        $display1 = "inline-block ;";
        $display2 = "none ;";
      }
/*      $amount = number_format($package->total_amount,2);*/
    echo "<tr id=".$package->id_no.">";
    echo "<td >".$package->toda."</td>";
    echo "<td >".$package->toda_no."</td>";
    echo "<td >".$fullname."</td>";
    echo "<td >".$full_add."</td>";
    echo "<td >".$package->total_amount."</td>";
    echo "<td >".$new_stat."</td>";
    echo "<td ><a href='../treasury/or_payment.php?userid=".$package->id_no."' style= display:".$display1."'> Open </a>
    <label style='display:".$display2."'>---</label></td>";

    echo "<td >
            <a href='generate.php?userid=".$package->id_no."'style= display:".$display1."'>Franchise</a>
            <label style='display:".$display2."'>---</label>
          </td>";
    echo "<td >
            <a href='route_slip.php?userid=".$package->id_no."'style= display:".$display1."'>Route Slip</a>
            <label style='display:".$display2."'>---</label>
          </td>";
 endforeach;
 echo "</table>";
?>
<!--<a href='generate.php?userid=".$package->id_no."'>Generate</a> --> <!--this is for the action-->



<script type="text/javascript">

  function myFunction() {
    var txt;
  var r = confirm("Press a button!");
    if (r == true) {
     /*document.getElementById("sss").href = "https://www.w3schools.com";*/
  } else {
    document.getElementById("sss").href = "#";


}}

 $(document).ready(function(){
      $('#dataTables-example').DataTable();
 });
 </script>


          
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
<script type="text/javascript">
   $(document).ready(function(){
      $('#dataTables-example').DataTable();
 });
</script>