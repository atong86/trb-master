<?php
require ("../database.php");
$con = mysqli_connect($servername, $username, $password, $database);
 $query ="SELECT * FROM tricycle_operator ORDER BY id_no DESC";
 $result = mysqli_query($con, $query);
 ?>
 <!DOCTYPE html>
 <html>
      <head>
           <title>Tricycle Operator</title>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
      </head>
      <body>
           <br /><br />
           <div class="container" style="width: 100%">

                <br />
                <div class="table-responsive" >
                     <table id="operator_data" class="table table-striped table-bordered">
                          <thead>
                               <tr>
                                    <td>Toda</td>
                                    <td>Toda No.</td>
                                    <td>First name</td>
                                    <td>Surname</td>
                                    <td>House No.</td>
                                    <td>Street</td>
                                    <td>Barangay</td>
                                    <td>City</td>
                                    <td>Case No.</td>
                                    <td>Make</td>
                                    <td>Motor No.</td>
                                    <td>Chasis No.</td>
                                    <td>Plate No.</td>
                                    <td>Unit</td>
                                    <td>Date</td>
                               </tr>
                          </thead>
                          <?php
                          while($row = mysqli_fetch_array($result))
                          {
                               echo '
                               <tr>
                                    <td>'.$row["toda"].'</td>
                                    <td>'.$row["toda_no"].'</td>
                                    <td>'.$row["first_name"].'</td>
                                    <td>'.$row["last_name"].'</td>
                                    <td>'.$row["house_no"].'</td>
                                    <td>'.$row["street"].'</td>
                                    <td>'.$row["barangay"].'</td>
                                    <td>'.$row["city"].'</td>
                                    <td>'.$row["case_no"].'</td>
                                    <td>'.$row["make"].'</td>
                                    <td>'.$row["motor_no"].'</td>
                                    <td>'.$row["chasis_no"].'</td>
                                    <td>'.$row["plate_no"].'</td>
                                    <td>'.$row["unit"].'</td>
                                    <td>'.$row["date"].'</td>
                               </tr>
                               ';
                          }
                          ?>
                     </table>
                </div>
           </div>
      </body>
 </html>
 <script>
 $(document).ready(function(){
      $('#operator_data').DataTable();
 });
 </script>
