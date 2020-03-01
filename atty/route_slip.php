<?php
// session_start();
// $username1 = $_SESSION["username"];

/*$id = $_SESSION["id"]*/;
require ("../database.php");
require('../personnel/fpdf181/fpdf.php');
$pdf = new FPDF('P','mm','Legal');

$con = mysqli_connect($servername, $username, $password, $database);
$userid = $_GET['userid'];
/* echo $userid;*/
$sql_insp = '';



$stmt = $connection->query('
SELECT
tricycle_operator.id_no AS id_ops,
tricycle_operator.first_name AS fname , 
tricycle_operator.last_name AS lname,
tricycle_operator.middle_name AS mname,
house_no,
street,
barangay,
city,
or_date,
unit,
tricycle_operator.toda AS toda_ops,
tricycle_operator.toda_no toda_no_ops,
others,
make,
motor_no ,
chasis_no ,
plate_no,
user_account.first_name AS fname_insp , 
user_account.last_name AS lname_insp,
opt1,
opt2,
opt3,
opt4,
opt5
FROM tricycle_operator 
INNER JOIN inspected 
ON tricycle_operator.toda_no = inspected.toda_no
INNER JOIN or_payments
ON tricycle_operator.id_no = or_payments.id_no
INNER JOIN user_account
ON user_account.username = inspected.inspector
WHERE or_payments.id_no = '.$userid.' 
GROUP BY id_ops;
');

    while ($package = $stmt->fetch(PDO::FETCH_OBJ))
    {

    $fname= $package->fname;
    $mname= $package->mname;
    $lname= $package->lname;
    $fullname= $fname.' '.$mname .'. '.$lname;
    $house_no = $package->house_no;
    $street = $package->street;
    $barangay = $package->barangay;
    $city= $package->city;
    $full_add =  $house_no .' '. $street .' '.$barangay.' '.$city;
    $or_date= date_create($package->or_date);
    $or_new_date = date_format($or_date,"m-d-yy");
    $unit = $package->unit;
    $toda = $package->toda_ops;
    $others = $package->others;
    $make = $package->make;
    $motor_no = $package->motor_no;
    $chasis_no = $package->chasis_no;
    $plate_no = $package->plate_no;
    $toda_no = $package->toda_no_ops;
    
    $fname_insp= $package->fname_insp;
    $lname_insp= $package->lname_insp;
    $fullname_insp = $fname_insp.' '.$lname_insp; 
    if (strtoupper($toda) == 'AGORA' )
    {
      $colorcode = "RED";
    }
    else if (strtoupper($toda) == 'PASADENA' )
    {
      $colorcode = "GREEN";
    }
    else if (strtoupper($toda) == 'BLUMAN' )
    {
      $colorcode = "SKY BLUE";
    }
    else if (strtoupper($toda) == 'SM' )
    {
      $colorcode = "NAVY BLUE";
    }
    else if (strtoupper($toda) == 'STO. TOROBIO' )
    {
      $colorcode = "WHITE";
    }
    else if (strtoupper($toda) == 'DON MAN' )
    {
      $colorcode = "ORANGE";
    }
    else if (strtoupper($toda) == 'ROSE PHAR' )
    {
      $colorcode = "PINK";
    }
    else if (strtoupper($toda) == 'BAGORA' )
    {
      $colorcode = "MAROON";
    }
    else if (strtoupper($toda) == 'P.GUEVARRA' )
    {
      $colorcode = "SILVER";
    }
    else if (strtoupper($toda) == 'J.BASA' )
    {
      $colorcode = "DARK GREEN";
    }
    else if (strtoupper($toda) == 'F.Roman' )
    {
      $colorcode = "YELLOW";
    }
    else {
      $colorcode = "test";
      }

$pdf->AddPage();
$pdf->SetFont('Times','B',11);
/*$pdf->Cell(40,10,'Hello World!');*/

$pdf->ln(0);
// $pdf->Image('../img/sj_logo.png',25,10,-700);
$pdf->Image('../img/sj_logo.png',95,10,-800);
$pdf->ln(25);
$pdf->Cell(0,10,'REPUBLIC OF THE PHILIPPINES',0,0,'C');
$pdf->ln(5);
$pdf->Cell(0,10,'CITY OF SAN JUAN, METRO MANILA',0,0,'C');
$pdf->ln(5);
$pdf->Cell(0,10,'OFFICE OF THE CITY MAYOR',0,0,'C');
$pdf->ln(5);
$pdf->Cell(0,10,'-oOo-',0,0,'C');
$pdf->ln(5);
$pdf->SetFont('Times','B',12);
$pdf->Cell(0,10,'TRICYCLE REGULATORY BOARD',0,0,'C');
$pdf->ln(1);
$pdf->Cell(0,10,'_________________________________',0,0,'C');
$pdf->ln(10);

$pdf->SetFont('Times','B',12);
$pdf->Cell(0,10,'ROUTE SLIP',0,0,'L');
$pdf->ln(1);
$pdf->Cell(0,10,'____________',0,0,'L');
$pdf->ln(10);

$pdf->SetFont('Times','',11);
$pdf->Cell(25,7,'APPLICANT:',0,0,'L');
$pdf->SetFont('Times','B',11);
$pdf->Cell(100,7,' '.$fullname,0,0,'L');
// $pdf->SetFont('Times','',11);
// $pdf->Cell(40,7,'CASE NO:',0,0,'R');
// $pdf->SetFont('Times','B',11);
// $pdf->Cell(0,7,' '.$package->case_no,0,0,'R');

$pdf->ln(5);
$pdf->SetFont('Times','',11);
$pdf->Cell(25,10,'ADDRESS:',0,0,'L');
$pdf->SetFont('Times','B',11);
$pdf->Cell(70,10,' '.$full_add,0,0,'L');
// $pdf->Cell(100,7,' '.$fullname,'B',0,'L');
$pdf->ln(7);
// $pdf->SetFont('Times','B',11);
// $pdf->Cell(0,10,'                           Applicant is hereby granted AUTHORITY to operate a motorized tricycle for hire on the route',0,0,'L');
// $pdf->ln(6);
// $pdf->Cell(0,10,'                           '.$package->toda.' TODA:  ALL AREAS IN SAN JUAN METRO MANILA ',0,0,'L');
// $pdf->ln(6);
// $pdf->Cell(0,10,'                                                                                EXCEPT IN GREENHILLS AND WEST CRAME',0,0,'L');
$pdf->ln(7);
$pdf->SetFont('Times','',11);
$pdf->Cell(0,10,'NUMBER OF TRICYCLE/S:'.'       '.$unit,0,0,'L');
$pdf->ln(1);
$pdf->Cell(0,10,'                                                    _____',0,0,'L');
$pdf->ln(7);
$pdf->SetFont('Times','',11);
$pdf->Cell(0,10,'AREA/CODE ASSIGNMENT:',0,0,'L');
$pdf->Cell(0,10,'DOCUMENTS SUBMITTED:',0,0,'R');
$pdf->ln(1);
$pdf->Cell(0,10,'                                                    _____',0,0,'L');

// $pdf->SetX($left_margin);
// if($boolean_variable == true)
// $check = "4"; else $check = "";
// $pdf->SetFont('ZapfDingbats','', 10);
// $pdf->Cell($checkbox_size, $checkbox_size, $check, 1, 0);



$pdf->ln(7);
$pdf->SetFont('Times','',11);
$pdf->Cell(0,10,'ROUTE: ALL AREAS IN SAN JUAN METRO MANILA',0,0,'L');
$image1 ="../img/check.png";
$new1 = $pdf->Image($image1, 143, 113, 15.78);
$pdf->Cell(-5,10,$new1.' Certification of Registration',0,0,'R');
$pdf->ln(1);
$pdf->Cell(0,10,'               __________________________________________',0,0,'L');
$pdf->ln(7);
$pdf->SetFont('Times','',11);
$pdf->Cell(0,10,'               EXCEPT IN GREENHILLS AND WEST CRAME',0,0,'L');
$new2 = $pdf->Image($image1, 143, 120, 15.78);
$pdf->Cell(0,10,$new2.' Official Receipt of Registration',0,0,'R');
$pdf->ln(1);
$pdf->Cell(0,10,'               __________________________________________',0,0,'L');
$pdf->ln(7);
$pdf->SetFont('Times','',11);
$pdf->Cell(0,10,'        UNITS: '.'    '.$unit,0,0,'L');
if ($package->opt1 == 1) {
         $deed = $pdf->Image($image1, 143, 128, 15.78);
        }
else{
    $deed = "___";
    }
$pdf->Cell(-29,10,$deed.' Deed of Sale',0,0,'R');
$pdf->ln(1);
$pdf->Cell(0,10,'                      _____',0,0,'L');
$pdf->ln(7);
$pdf->SetFont('Times','',11);
$pdf->Cell(0,10,'CAPACITY: ',0,0,'L');
$new3 = $pdf->Image($image1, 143, 137, 15.78);
$pdf->Cell(-8,10,$new3.' Certification of Residency',0,0,'R');
$pdf->ln(1);
$pdf->Cell(0,10,'                      _____',0,0,'L');
$pdf->ln(7);
$pdf->SetFont('Times','',11);
$pdf->Cell(0,10,'A. TERMINAL: '.'      '.$toda.' TODA',0,0,'L');
$new3 = $pdf->Image($image1, 143, 145, 15.78);
$pdf->Cell(-7,10,$new3.' Filing Fee Official Receipt',0,0,'R');
$pdf->ln(1);
$pdf->Cell(0,10,'                                 _______________________',0,0,'L');
$pdf->ln(7);
$pdf->SetFont('Times','',11);
$pdf->Cell(0,10,'B. COLOR CODE:  '.'      '.$colorcode.'',0,0,'L');
/*if ($package->opt2 == 1) {*/
         $pet = $pdf->Image($image1, 143, 152, 15.78);
/*        }
else{
   $pet = "___";
    }*/
$pdf->Cell(-12,10,$pet.' Petition for Franchising',0,0,'R');
$pdf->ln(1);
$pdf->Cell(0,10,'                                 _______________________',0,0,'L');
$pdf->ln(7);
$pdf->SetFont('Times','',11);
$pdf->Cell(0,10,'-                                    INDICATOR COLOR',0,0,'L');
/*if ($package->opt3 == 1) {*/
         $priv = $pdf->Image($image1, 143, 160, 15.78);
/*        }
else{
   $priv = "___";
    }*/
$pdf->Cell(-38,10,$priv.' Private',0,0,'R');
$pdf->ln(5);
$pdf->Cell(0,10,'                                                    ',0,0,'L');
$pdf->Cell(-10,10,' Subdivision/Homeowner',0,0,'R');
$pdf->ln(5);
$pdf->Cell(0,10,'                                                    ',0,0,'L');
$pdf->Cell(-9,10,' Association s Resolution  ',0,0,'R');
$pdf->ln(5);
$pdf->Cell(0,10,'                                                    ',0,0,'L');
$pdf->Cell(-15,10,' Allowing to Operate  ',0,0,'R');
$pdf->ln(7);
$pdf->Cell(0,10,'                                                    ',0,0,'L');
/*if ($package->opt4 == 1) {*/
         $others = $pdf->Image($image1, 143, 182, 15.78);
/*        }
else{
   $others = "___";
    }*/
$pdf->Cell(-23,10,$others.' Others (Specify)',0,0,'R');
$pdf->ln(7);
if ($package->opt5 != "") {
         $otherstxt = $package->opt5;
        }
else{
   $otherstxt = "___________________________";
    }

    $pdf->SetFont('','U');
$pdf->Cell(130,10,"",0,0,'R');


$pdf->MultiCell( 50, 5,$otherstxt, 0,"R");


 // $stmt1 = $connection->query('SELECT * FROM user_account 
 //                            INNER JOIN inspected 
 //                            ON user_account.username = inspected.inspector
 //                            WHERE toda = '.$toda.' 
 //                            AND toda_no='.$toda_no.' ');
 //    while ($package1 = $stmt->fetch(PDO::FETCH_OBJ))
 //    {
 //    $fname= $package1->first_name;
 //    $mname= $package1->middle_name;
 //    $lname= $package1->last_name;
 //    $fullname_insp= $fname.' '.$mname .'. '.$lname;

 //      }



$pdf->ln(1);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(0,10,'MAKE            :'.'   '.$make,0,0,'L');
$pdf->ln(5);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(0,10,'MOTOR NO.  :'.'   '.$motor_no,0,0,'L');
$pdf->ln(5);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(0,10,'CHASIS NO.  :'.'   '.$chasis_no,0,0,'L');
$pdf->ln(5);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(0,10,'PLATE NO.    :'.'   '.$plate_no,0,0,'L');
$pdf->SetFont('Times','',11);
  $pdf->Cell(0,10,'EVALUATED BY:'.'   '.$fullname_insp ,0,0,'R');
$pdf->ln(5);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(0,10,'BODY NO.     :'.'   '.$toda_no,0,0,'L');






$pdf->ln(5);
$pdf->SetFont('Times','B',11);
$pdf->Cell(0,10,'- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -',0,0,'L');
$pdf->ln(5);
$pdf->SetFont('Times','B',11);
$pdf->Cell(0,10,'ACTION TAKEN:',0,0,'L');
$pdf->ln(8);
$pdf->SetFont('Times','B',11);
$pdf->Cell(0,10,'                                 '.' APPROVED',0,0,'L');
$pdf->ln(1);
$pdf->SetFont('Times','',11);
$pdf->Cell(80,10,'_______________',0,0,'L');

$pdf->ln(8);
$pdf->SetFont('Times','B',11);
$pdf->Cell(0,10,'                                 '.' DISAPPROVED',0,0,'L');
$pdf->ln(1);
$pdf->SetFont('Times','',11);
$pdf->Cell(80,10,'_______________',0,0,'L');







$pdf->SetFont('Times','UB',12);
$datenow =date("M. d, yy");
$pdf->Cell(0,10,''.$datenow,0,0,'C');

$pdf->ln(10);
$pdf->SetFont('Times','',11);
$pdf->Cell(0,10,'REMARKS:',0,0,'L');

$pdf->ln(8);
$pdf->SetFont('Times','B',11);
$pdf->Cell(0,10,$others,0,0,'L');
$pdf->ln(1);
$pdf->SetFont('Times','',11);
$pdf->Cell(80,10,'_______________________________',0,0,'L');



$pdf->ln(25);
$pdf->SetFont('Times','B',11);
$pdf->Cell(0,10,'MARK LESTER E. DELGADO                                            ATTY. ROCHELLE ANDREA B. RIZADA-TEMPLORA  ',0,0,'L');
$pdf->ln(4);
$pdf->SetFont('Times','I',11);
$pdf->Cell(0,10,'                Member, TRB                                                                                              Member, TRB',0,0,'L');
//$pdf->ln(0);
//$pdf->SetFont('Times','B',11);
//$pdf->Cell(186,10,'ATTY. ROCHELLE ANDREA B. RIZADA-TEMPLORA',0,0,'R');
//$pdf->ln(5);
//$pdf->SetFont('Times','BI',11);
//$pdf->Cell(175,10,'Chaiman, Transport Regulatory Board',0,0,'R');





$pdf->ln(25);
$pdf->SetFont('Times','B',11);
$pdf->Cell(0,10,'ATTY. ROSE ANDREA V. MILAOR',0,0,'C');
$pdf->ln(5);
$pdf->SetFont('Times','I',11);
$pdf->Cell(0,10,'Chairman, TRB',0,0,'C');




}

$pdf->Output();



?>
