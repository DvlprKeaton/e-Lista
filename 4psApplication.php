<?php
//header("Content-Type: application/vnd.ms-word");
//header("Expires: 0");
//header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
//header("content-disposition: attachment;filename=4ps-Application-Form.doc");

require_once __DIR__ . '/vendor/autoload.php';


include("condb.php");
session_start();

$id =$_GET['id'];
$fname =  $_POST['fname'];
$address =  $_POST['address'];
$age =  $_POST['Age'];
$preg =  $_POST['preg'];
$occupation =  $_POST['occupation'];
$income =  $_POST['income'];
$abroad =  $_POST['abroad'];
$numbchild =  $_POST['numchild'];


$mpdf = new \Mpdf\Mpdf();



ob_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<form method="POST" action="4psFinalization.php?id=<?php echo $id;?>&fname=<?php echo $fname?>&address=<?php echo $address ?>&Age=<?php echo $age?>&preg=<?php echo  $preg;?>&occupation=<?php echo  $occupation;?>&income=<?php echo  $income;?>&abroad=<?php echo  $abroad;?>&numchild=<?php echo $numbchild;?>">

		<img src="img/fLogo1.png" style="object-position: left;position: absolute;width: 150px; height: 150px;margin-right: 350px;">
		<img src="img/fLogo2.png" style="object-fit: none;object-position: 200px 100px;width: 150px; height: 150px">
		<p style="text-align:center;position: absolute;">Republic of the Philippines<br>Province of Ilocos Sur <br>Municipality of Sinait<br>Barangay DUYAY-YAT</p>
		

 <h1 style="text-align:center;">4p's Application Form</h1>
 <h3 style="text-align:center;">Applicant Information</h3>
 <hr>

 <p style='text-transform: capitalize;'>Name:<?php echo  $fname;?></p>
 <p style='text-transform: capitalize;'>Address: <?php echo $address;?></p>
 <p>Age: <?php echo $age;?></p>
 <p>Pregnant: <?php echo $preg;?></p>
 <p style='text-transform: capitalize;'>Occupation: <?php echo $occupation;?></p>
 <p>Monthly Income:<?php echo $income;?></p>
 <p>Do you have family abroad: <?php echo $abroad;?></p>
 <p>How many children do you have: <?php echo $numbchild;?></p>
 <hr>
 <h3 style="text-align:center;">Children Information</h3>
 <h4 style="text-align:center; color: red;" >Please write atleast 1 to 3 children</h4>
 <hr>
 <?php if($numbchild == 1)
 {
 	?>
 <p style='text-transform: capitalize;'>Name of child:<?php echo $chname = $_POST['chname'];?></p>
 <p>Birthday: <?php echo $chbday = $_POST['chbday'];?></p>
 <p>Age:<?php echo $age = date_diff(date_create($chbday), date_create('today'))->y;?></p>
 <p style='text-transform: capitalize;'>Name of School: <?php echo $chshool = $_POST['chschool'];?></p>

 <?php
}else if ($numbchild == 2) {
	

 ?>
 <p style='text-transform: capitalize;'>Name of child:<?php echo $chname = $_POST['chname'];?></p>
 <p>Birthday: <?php echo $chbday = $_POST['chbday'];?></p>
 <p>Age:<?php echo $age = date_diff(date_create($chbday), date_create('today'))->y;?></p>
 <p style='text-transform: capitalize;'>Name of School: <?php echo $chshool = $_POST['chschool'];?></p>

 <hr>
 <hr>
 <p style='text-transform: capitalize;'>Name of child:<?php echo $chname2 = $_POST['chname2'];?></p>
 <p>Birthday: <?php echo $chbday2 = $_POST['chbday2'];?></p>
 <p>Age:<?php echo $age2 = date_diff(date_create($chbday2), date_create('today'))->y;?></p>
 <p style='text-transform: capitalize;'>Name of School: <?php echo $chshool2 = $_POST['chschool2'];?></p>
 

<?php }else{

?>
 <p style='text-transform: capitalize;'>Name of child:<?php echo $chname = $_POST['chname'];?></p>
 <p>Birthday: <?php echo $chbday = $_POST['chbday'];?></p>
 <p>Age:<?php echo $age = date_diff(date_create($chbday), date_create('today'))->y;?></p>
 <p style='text-transform: capitalize;'>Name of School: <?php echo $chshool = $_POST['chschool'];?></p>
 
 <hr>
 <hr>
 <p style='text-transform: capitalize;'>Name of child:<?php echo $chname2 = $_POST['chname2'];?></p>
 <p>Birthday: <?php echo $chbday2 = $_POST['chbday2'];?></p>
 <p>Age:<?php echo $age2 = date_diff(date_create($chbday2), date_create('today'))->y;?></p>
 <p style='text-transform: capitalize;'>Name of School: <?php echo $chshool2 = $_POST['chschool2'];?></p>
 
 <hr>
 <hr>
 <p style='text-transform: capitalize;'>Name of child:<?php echo $chname3 = $_POST['chname3'];?></p>
 <p>Birthday: <?php echo $chbday3 = $_POST['chbday3'];?></p>
 <p>Age:<?php echo $age3 = date_diff(date_create($chbday3), date_create('today'))->y;?></p>
 <p style='text-transform: capitalize;'>Name of School: <?php echo $chshool3 = $_POST['chschool3'];?></p>
 
 <hr>
<?php
}
?>
</form>

<?php

$html = ob_get_contents();
ob_end_clean();

$mpdf->WriteHTML($html);
$mpdf->Output('4psApplicationForm.pdf', 'D');
//
?>


</body>
</html>