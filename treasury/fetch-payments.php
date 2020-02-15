<?php
require ("../database.php");
$con = mysqli_connect($servername, $username, $password, $database);

$result = ' SELECT *
            FROM tricycle_operator
            INNER JOIN or_payments ON tricycle_operator.id_no = or_payments.id_no;';
  $statement = $connection->prepare($result);
      $statement->execute();
      $payments = $statement->fetchAll(PDO::FETCH_OBJ);


     /*       WHERE tricycle_operator.status = 2

*/

echo "<table border='1'  class='table table-striped table-bordered table-hover' id='dataTables-example' >
        <tr>
          <th><b>Toda</b></td></th>
          <th><b>Toda No.</b></td></th>
          <th><b>Name</b></td></th>
          <th><b>Address</b></td></th>
          <th><b>Amount</b></td></th>
          <th><b>Status</b></td></th>
          <th><b>OOP</b></td></th>
          <th><b>Actions</b></td></th>
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

            $display1 ="";
            $display2 ="";
            $display3 ="";

            if($stats == 2)
            {
              $new_stat= "UNPAID";
              $display1 = "nline-block;";
              $display2 = "inline-block ;";
              $display3 = "none;";
            }
            else if($stats == 5)
            {
              $new_stat= "PAID";
              $display1 = "inline-block ;";
              $display2 = "none ;";
            }
            /*$amount = number_format($package->total_amount,2);*/
            echo "<tr id=".$package->id_no.">";
            echo "<td >".$package->toda."</td>";
            echo "<td >".$package->toda_no."</td>";
            echo "<td >".$fullname."</td>";
            echo "<td >".$full_add."</td>";
            echo "<td >".$package->total_amount."</td>";
            echo "<td >".$new_stat."</td>";
            echo "<td ><a href='or_payment.php?userid=".$package->id_no."' style= display:".$display1."'> Open </a></td>";
            echo "<td >
                    <a onclick='myFunction()' id='sss' href='approve_entry.php?userid=".$package->id_no."' style= display:".$display2."'>   PAY  </a>
                    <label style= display:".$display3."> --- </label>
                  </td>";
                endforeach;
                echo "</table>";
?>
  <!-- <label style='display:".$display3."'>---</label> -->
<!-- <a href='or_payment.php?userid=".$package->id_no."'></a> -->
<!-- <a onclick='myFunction()' id='sss' href='approve_entry.php?userid=".$package->id_no." '>   PAY </a> --> <!--this is for action collumn-->

<script type="text/javascript">
  function myFunction() {
    var txt;
    var r = confirm("Press OK if you received the payment.");
    if (r == true) {
      //
   }
   else {
    // document.getElementById("sss").href = "#";
    CLOSE();
  }
}
</script>
