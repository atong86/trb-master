
<?php
session_start();
$username1 = $_SESSION["username"];
/*$id = $_SESSION["id"]*/;
$userid = $_GET['userid'];
require ("../database.php");
$sql_insp = 'select * from tricycle_operator where id_no = "'.$userid.'" ';

      $statement = $connection->prepare($sql_insp);
      $statement->execute();
      $or_payments = $statement->fetchAll(PDO::FETCH_OBJ);
foreach($or_payments as $package):
    $fname= $package->first_name;
    $mname= $package->middle_name;
    $lname= $package->last_name;
    $fullname= $lname .', '. $fname .' '.$mname;
    $house_no = $package->house_no;
    $street = $package->street;
    $barangay = $package->barangay;
    $city= $package->city;
    $full_add =  $house_no .' '. $street .' '.$barangay.' '.$city;

endforeach;

   $update2 = mysqli_query($con,"UPDATE new_logs SET payment_received_by = '".$username1."', payment_received = 'Paid', payment_received_date = NOW() 
      WHERE toda = '".$package->toda."' AND toda_no = '".$package->toda_no."'  ;") or die(mysqli_error($con));

$dsn = 'mysql:host=localhost;dbname=trb_db_master';
$username = 'root';
$password = '';
$options = [];
try {
$con = new PDO($dsn, $username, $password, $options);
}
catch(PDOException $e) {
echo "Error";
}

$userid = $_GET['userid'];
$sql = "UPDATE tricycle_operator SET status = 5 WHERE id_no=:userid";
$statement = $con->prepare($sql);

   if ($statement->execute([':userid' => $userid ])) {
         header("Location: index.php");

   }
//echo " WHERE toda = '".$package->toda."' AND toda_no = '".$package->toda_no."' ";
?>
