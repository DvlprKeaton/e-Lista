<?php
//header("Content-Type: application/vnd.ms-word");
//header("Expires: 0");
//header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
//header("content-disposition: attachment;filename=4ps-Application-Form.doc");

require_once __DIR__ . '/vendor/autoload.php';


include("condb.php");
session_start();

$entry1 =  $_POST['entry1'];
$entry2 =  $_POST['entry2'];
$entry3 =  $_POST['entry3'];
$entry4 =  $_POST['entry4'];
$entry5 =  $_POST['entry5'];
$entry6 =  $_POST['entry6'];
$entry7 =  $_POST['entry7'];

$mpdf = new \Mpdf\Mpdf();
//$mpdf->showImageErrors = true;

ob_start();


$query = "SELECT * FROM `officialstbl` WHERE Position = 'Secretary'";
$filter_Result = mysqli_query($cn, $query);
$row = mysqli_fetch_array($filter_Result);

$query2 = "SELECT * FROM `officialstbl` WHERE Position = 'Captain'";
$filter_Result2 = mysqli_query($cn, $query2);
$row2 = mysqli_fetch_array($filter_Result2);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/overlayscrollbars/css/OverlayScrollbars.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
	<title></title>
<style>
    th{
      padding: 15px;
    }
    td{
      padding: 15px;
    }
  </style>
</head>
<body>
  <img src="img/fLogo1.jpg" style="object-position: left;position: absolute;width: 150px; height: 150px;margin-right: 350px;">
    <img src="img/fLogo2.jpg" style="object-fit: none;object-position: 200px 100px;width: 150px; height: 150px">
    <p style="text-align:center;position: absolute;right: 320px;font-weight: bold;">Republic of the Philippines</strong><br>Municipality of Sinait, Duyay-yat<br>Ilocos Sur, 2733</p>

<h1 class="m-0" style="text-align: center; color: black;">Functionality of BADAC</h1>
            <p style="text-align: center; color: black;">Barangay: DUYAY-YAT<br>Municipality: SINAIT<br>Province: Ilocos Sur</p>
	

<table class="table table">
  <col>
  <colgroup span="3"></colgroup>
  <thead>
    <tr>
      <th scope="col">REORGANIZATION REACTIVATION OF BADAC (BADAC EO)</th>
      <th scope="col">RESOLUTION #</th>
      <th scope="col">DATE ENACTED</th>
      <th scope="col">MEMBERSHIP INCLUDES CSO/NGO/NGA</th>
      <th scope="col">WITH RECORDS OF MINUTES OF MEETING</th>
      <th scope="col">FREQUENCY OF MEETING (MONTHLY, QUARTERLY, ANNUAL, SEMI-ANNUAL)</th>
      <th scope="col">ACCOMPLISHED PROGRAMS AND ACTIVITIES FOR THIS QUARTER</th>
    </tr>
    <tr>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo  $entry1;?></td>
      <td><?php echo  $entry2;?></td>
      <td><?php echo  $entry3;?></td>
      <td><?php echo  $entry4;?></td>
      <td><?php echo  $entry5;?></td>
      <td><?php echo  $entry6;?></td>
      <td><?php echo  $entry7;?></td>
  </tbody>
</table>

<p style="text-align:left;margin-top: 50px;text-transform: capitalize;">Prepared By: <?php echo $row['Lastname']. ', '. $row['Firstname'];?></p>
<p style="text-align:Right;margin-top: 50px;text-transform: capitalize;">Submitted To: <?php echo $row2['Lastname']. ', '. $row2['Firstname'];?></p>

<?php

$html = ob_get_contents();
ob_end_clean();

$mpdf->WriteHTML($html);
$mpdf->Output('FunctionalityOfBADAC.pdf','D');

?>


</body>
</html>