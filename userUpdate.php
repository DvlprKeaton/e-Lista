<?php

include ("condb.php");
			
session_start();

//$ID = $_GET['id'];

$ID = $_POST['rID'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$address = $_POST['address2'];
$username = $_POST['username'];
$password = $_POST['password'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$civil = $_POST['civil'];
$income = $_POST['income'];
$occupation = $_POST['occupation'];

$sql = "SELECT * from residenttbl WHERE Status='1' AND RID ='$ID'";
$result = mysqli_query($cn,$sql);
$row= mysqli_num_rows($result);
if ($row <> 0)
{

	$age = date_diff(date_create($dob), date_create('today'))->y;
	
	$hash_pword=password_hash($password, PASSWORD_DEFAULT);

	$sql2 = "UPDATE residenttbl SET Firstname ='$fname', Middlename = '$mname', Lastname = '$lname', Address = '$address', Username = '$username', Age = '$age', Gender = '$gender', Password = '$hash_pword', CivilStatus = '$civil', Birthdate = '$dob', Income = '$income', Occupation = '$occupation' WHERE RID='$ID'";
	$res = mysqli_query($cn, $sql2);
	
	echo "<script>document.location = 'updateSuccess.php'</script>";
}





?>