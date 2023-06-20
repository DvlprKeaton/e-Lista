<?php

include("condb.php");

$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$username = $_POST['username'];
$password = $_POST['password'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$position = $_POST['position'];
$civil = $_POST['civil'];
$income = $_POST['income'];
$occupation = $_POST['occupation'];
$connum = $_POST['connum'];


$sql = "SELECT * FROM residenttbl where Username = '$username'";
$res = mysqli_query($cn, $sql);
if($res && mysqli_num_rows($res)>0)
{
  echo "<script>document.location = 'usernameAlready.php'</script>";
}else{

			$age = date_diff(date_create($dob), date_create('today'))->y;

			$hash_pword=password_hash($password, PASSWORD_DEFAULT);

			$year = date("Y");
			
			$famhead = $_POST['famhname'];

			$FID = rand(1000,9999). '-' . $famhead;

			if ($famhead != null) {
				$sql2 = "INSERT INTO residenttbl (Username,Password,Firstname,Middlename,Lastname,Birthdate,Address,CivilStatus,Status,Age,Gender,Income, Occupation,SResidency,ContactNum,FamilyStats,FamilyName, FamilyID) VALUE ('$username','$hash_pword','$fname','$mname','$lname','$dob','$address','$civil','1','$age','$gender','$income','$occupation','$year','$connum','Family Head','$famhead','$FID')";
			$result = mysqli_query($cn, $sql2);
			
			echo "<script>document.location = 'registerResident.php'</script>";
			}else{

				$fammem = $_POST['famMem'];
				$sql2 = "INSERT INTO residenttbl (Username,Password,Firstname,Middlename,Lastname,Birthdate,Address,CivilStatus,Status,Age,Gender,Income, Occupation,SResidency,ContactNum,FamilyStats,FamilyID	) VALUE ('$username','$hash_pword','$fname','$mname','$lname','$dob','$address','$civil','1','$age','$gender','$income','$occupation','$year','$connum','Family Member','$fammem')";
			$result = mysqli_query($cn, $sql2);
			
			echo "<script>document.location = 'registerResident.php'</script>";

		
		}
	}

?>