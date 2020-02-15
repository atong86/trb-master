<?php
session_start();
$username1 = $_SESSION["username"];
require ("../database.php");
$userid = $_GET['user_id'];


?>

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
  <?php require('nav0.php');  ?>

        <div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tricycle Regulatory Board System (User Account)</h1>
          </div>



              <div class="container">
            <div class="row">
              <div class="row" style="margin-top:1%;width: 100%; display: block !important;">
            <form method="POST" id="application_form">

          <?php


$result = ' SELECT *
          FROM user_account
          WHERE active = 1
          AND user_id = '.$userid.';';
$statement = $connection->prepare($result);
$statement->execute();
$edit = $statement->fetchAll(PDO::FETCH_OBJ);
foreach($edit as $package):
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
          $acct_type = 'Dept. Head';
        }
        else if ($acct_type == 4) {
          # code...
          $acct_type = 'Treasury';
        }
        else if ($acct_type == 5){
         $acct_type = 'Board';
        }
if(isset($_POST['btn_submit_sum']))
{

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone_no = $_POST['phone_no'];
$username = $_POST['username'];
$password = $_POST['password'];
$isAdmin = $_POST['isAdmin'];
$isBocked = $_POST['blocked'];
$result = mysqli_query($con, "UPDATE user_account SET first_name='$first_name', last_name='$last_name', phone_no='$phone_no' , username='$username' , password='$password' , isAdmin='$isAdmin', isBlocked='$isBocked' WHERE user_id='$userid'  ");
if($result)
{
  echo "<script type='text/javascript'>alert('data updated');</script>";
  echo "<script type='text/javascript'>window.location.href = 'user_account.php';</script>";
}

}

                      ?>
            <div class="form-group row">

              <div class="col-sm-6">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" name="first_name" placeholder="First Name" value="<?= $package->first_name;?>" >
              </div>


              <div class="col-sm-6">
                <label for="last_name">Surname</label>
                <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="<?= $package->last_name;?>"  >
              </div>

            </div>

            <div class="form-group row">

              <div class="col-sm-6">
                <label for="phone_no">Phone No.</label>
                <input type="text" class="form-control" name="phone_no" placeholder="House no" value="<?= $package->phone_no;?>" >
              </div>

              <div class="col-sm-6">
                <label for="Email">Email</label>
                <input type="email" class="form-control" name="username" placeholder="Street" value="<?= $package->username;?>">
              </div>

            </div>
             <div class="form-group row">

              <div class="col-sm-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Barangay" value="<?= $package->password;?>">
              </div>

              <div class="col-sm-6">
                <label for="isAdmin">Account Type</label>
                <select class="form-control" name="isAdmin" >
                  <option value="<?= $package->isAdmin;?>"><?php echo $acct_type; ?> (Current)</option>
                  <option value="1" >Inspector</option>
                  <option value="2" >Personnel</option>
                  <option value="3" >Dept. Head</option>
                  <option value="4" >Treasury</option>
                  <option value="5" >Board</option>
                </select>
              </div>




            </div>
               <div class="form-group row">
            <div class="col-sm-6">
              <label for="isBlocked">Blocked (1 is yes / 0 is no)</label>
              <input type="text" class="form-control" name="isBlocked" value="<?= $package->isBlocked;?>">
            </div>

          </div>

              <?php   endforeach; ?>

            </div>


            <input type="submit" name="btn_submit_sum" id="btn_submit" value="Submit" class="btn btn-success" style="float: unset; width: 150px; margin-right: 30px;">
              <!-- <input type="reset" value="Reset" style="float: unset; width: 150px; height: 40px; border: 0px;"> -->

         </form>
         <form style="display: inline;" action="user_account.php" method="get" >
           <button style="float: right; width: 150px; height: 38px; border: 0px; margin-right: 10px;">Cancel</button>
         </form>

  </div>
  </section>
</div>



    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>

    </body>
  </html>
