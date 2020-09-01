
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>db</title>
 	<link rel="stylesheet" href="">
 </head>
 <body>
 	<div class="row">
 		<?php 

//mysqli_connect("localhost","mojibur","mojibur13","mojibur")

$aName    = $_POST['aName'];
$fName   = $_POST['fName'];
$mName   = $_POST['mName'];

$bDay    = $_POST['bDay'];
$nid    = $_POST['nid'];
$nidN    = $_POST['nidN'];
$Marital    = $_POST['Marital'];
$gender    = $_POST['gender'];
$quota    = $_POST['quota'];
$Care    = $_POST['Care'];
$Village    = $_POST['Village'];
$district    = $_POST['district'];
$Upazilla    = $_POST['Upazilla'];
$postN    = $_POST['postN'];
$postC    = $_POST['postC'];

//$sameAdress    = $_POST['sameAdress'];

$Village2    = $_POST['Village2'];
$district2    = $_POST['district2'];
$Upazilla2    = $_POST['Upazilla2'];
$postN2    = $_POST['postN2'];
$postC2    = $_POST['postC2'];


$exam1    = $_POST['exam1'];
$institute1    = $_POST['institute1'];
$Roll    = $_POST['Roll'];
$result1    = $_POST['result1'];
$subject1    = $_POST['subject1'];
$passYear    = $_POST['passYear'];

$passYear    = $_POST['exam2'];
$institute2    = $_POST['institute2'];
$hscRoll    = $_POST['hscRoll'];
$hscResult    = $_POST['hscResult'];
$hscSubject    = $_POST['hscSubject'];
$hscPassYear    = $_POST['hscPassYear'];



$exam3    = $_POST['exam3'];
$subDegree    = $_POST['subDegree'];
$institute3    = $_POST['institute3'];
$result3    = $_POST['result3'];
$passYear3    = $_POST['passYear3'];
$duration3    = $_POST['duration3'];


$exam4    = $_POST['exam4'];
$subDegree4    = $_POST['subDegree4'];
$institute4    = $_POST['institute4'];
$result4    = $_POST['result4'];
$passYear4    = $_POST['passYear4'];
$duration4    = $_POST['duration4'];



$email    = $_POST['email'];

$pImgNam   =  $_FILES["pImg"]["name"];
                                            $SImgNam   =  $_FILES["SImg"]["name"];
$pImgSiz 	 =  $_FILES["pImg"]["size"];
                                             $SImgSiz 	 =  $_FILES["SImg"]["size"];
$pImgTmp    =  $_FILES["pImg"]["tmp_name"];
                                             $SImgTmp    =  $_FILES["SImg"]["tmp_name"];


$moName    = $_POST['moName'];
$reMoName    = $_POST['reMoName'];



echo $aName.<br>;
echo $fName;



 echo "Applicant's Name:".$aName;

 ?>
 
 </body>
 </html>
 