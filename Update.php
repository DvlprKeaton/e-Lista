<?php

include ("condb.php");
			
session_start();

//$ID = $_GET['oID'];

$ID = $_POST['oID'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$address = $_POST['address2'];
$username = $_POST['username'];
$password = $_POST['password'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$position = $_POST['position'];

$sql = "SELECT * from officialstbl WHERE Status='1' AND BID ='$ID'";
$result = mysqli_query($cn,$sql);
$row= mysqli_num_rows($result);
if ($row <> 0)
{
	$age = date_diff(date_create($dob), date_create('today'))->y;

	$hash_pword=password_hash($password, PASSWORD_DEFAULT);
			
	$sql2 = "UPDATE officialstbl SET Firstname='$fname', Middlename = '$mname', Lastname = '$lname',Birthdate = '$dob' ,Address = '$address', Age = '$age', Gender = '$gender', Position = '$position', Username = '$username', Password = '$hash_pword' WHERE BID='$ID'";
	$res = mysqli_query($cn, $sql2);
	
	echo "<script>document.location = 'updateSuccess.php'</script>";
	
}





?>