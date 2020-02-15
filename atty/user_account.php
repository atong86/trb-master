

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
            <h1 class="h3 mb-0 text-gray-800">Tricycle Regulatory Board System (Users Account)</h1>
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
 <input id="myInput" type="text" placeholder=" Search.." style="display: block; margin-bottom: 1%;">

       <?php
require ("../database.php");
$con = mysqli_connect($servername, $username, $password, $database);

$result = ' SELECT *
            FROM user_account
            WHERE deleted != 5
            ';
  $statement = $connection->prepare($result);
      $statement->execute();
      $payments = $statement->fetchAll(PDO::FETCH_OBJ);



echo "<table border='1'  class='table table-striped table-bordered table-hover' id='dataTables-example' >
<tr>

<th><b>Name</b></td></th>
<th><b>Username</b></td></th>
<th><b>Phone Number</b></td></th>

<th><b>Account Type</b></td></th>

<th><b>Verify</b></td></th>
<th><b>Action</b></td></th>
<th><b>Blocked</b></td></th>

<th><b>Action</b></td></th>
<th><b>Action</b></td></th>

<tbody id='myTable'>";
   foreach($payments as $package):
      $fname= $package->first_name;
      $lname= $package->last_name;
      $fullname= $lname .', '. $fname;
      $acct_type =$package->isAdmin;
        if ($acct_type == 1) {
          # code...
          $acct_type = 'Inspector';
        }
        else if ($acct_type == 2) {
          # code...
          $acct_type = 'Personnel';
        }
        else if ($acct_type == 3) {
          # code...
          $acct_type = 'Dept. Head ';
        }
        else if ($acct_type == 4) {
          # code...
          $acct_type = 'Treasury';
        }
        else if ($acct_type == 5){
         $acct_type = 'Board';
        }
        echo "<tr id=".$package->user_id.">";
        echo "<td >".$fullname."</td>";
        echo "<td >".$package->username."</td>";
        echo "<td >".$package->phone_no."</td>";
        echo "<td >".$acct_type."</td>";
        echo "<td >".$package->verified."</td>";
        echo "<td >
                <a href='verified.php?user_id=".$package->user_id."'>Verify</a></td>";
        echo "<td >".$package->isBlocked."</td>";

        echo "<td >
                <a href='blocked.php?user_id=".$package->user_id."'>Block</a></td>";

        echo "<td >
                <a href='edit.php?user_id=".$package->user_id."'>Edit</a></td>";


 endforeach;
 echo "
 </tbody>
 </table>";
?>
<script type="text/javascript">

  function myFunction() {
    var txt;
  var r = confirm("Press a button!");
    if (r == true) {
     /*document.getElementById("sss").href = "https://www.w3schools.com";*/
  } else {
    document.getElementById("sss").href = "#";


}}
</script>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
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
