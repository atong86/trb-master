<?php

$servername = "localhost";
$database = "trb_db_master";
$username = "root";
$password = "";
$connection = new PDO ("mysql:host=localhost;dbname=trb_db_master","root","");
$con = mysqli_connect($servername, $username, $password, $database);

?>
