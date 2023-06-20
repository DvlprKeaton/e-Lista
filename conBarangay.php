<?php

include("condb.php");

$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$position = $_POST['position'];



$sql = "SELECT * FROM barangaytbl where Fname = '$fname";
$res = mysqli_query($cn, $sql);

$sql = "SELECT * FROM barangaytbl where Position = '$position'";
$res = mysqli_query($cn, $sql);
if($res && mysqli_num_rows($res)>0)
		function myAlert1($msg, $url){
			echo '<script language="javascript">alert("'.$msg.'");</script>';
			echo "<script>document.location = '$url'</script>";
			}
			myAlert1("" . $position . "Already Exist!","barangaymanagement.php");
{

		if($_POST['fname'] === $_POST['fname']){

			
			$sql2 = "INSERT INTO barangaytbl (Fname,Mname,Lname,Address,Contact,Age,Gender,Position,Status) VALUE ('$fname','$mname','$lname','$address','$contact','$age','$gender','$position','1')";
			$result = mysqli_query($cn, $sql2);
			
			function myAlert1($msg, $url){
			echo '<script language="javascript">alert("'.$msg.'");</script>';
			echo "<script>document.location = '$url'</script>";
			}
			myAlert1("Official Added!","barangaymanagement.php");
		}
		

?>


