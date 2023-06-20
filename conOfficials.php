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

$sql = "SELECT * FROM officialstbl where Username = '$username'";
$res = mysqli_query($cn, $sql);
if($res && mysqli_num_rows($res)>0)
{
  echo "<script>document.location = 'usernameAlready.php'</script>";
}else{

$sql1 = "SELECT * FROM officialstbl where Position = '$position'";
$res1 = mysqli_query($cn, $sql1);

if ($res1 && mysqli_num_rows($res1)>0) {
	echo "<script>document.location = 'positionAlready.php'</script>";
}
else{
	$age = date_diff(date_create($dob), date_create('today'))->y;
			//echo $age;

			$hash_pword=password_hash($password, PASSWORD_DEFAULT);

			$year = date("Y");

			$term = $year + 3;

			$fullterm = $year . " - " . $term;
		
			$sql2 = "INSERT INTO officialstbl (Username,Password,Firstname,Middlename,Lastname,Birthdate,Position,Address,Status,Age,Gender,Term) VALUE ('$username','$hash_pword','$fname','$mname','$lname','$dob','$position','$address','1','$age','$gender','$fullterm')";
			$result = mysqli_query($cn, $sql2);
			
			echo "<script>document.location = 'registerBarangay.php'</script>";
}
		
			

		}

?>


