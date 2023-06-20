<?php

include("condb.php");

$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pword = $_POST['password'];
$cnpword = $_POST['conpassword'];
$logtype = $_POST['logtype'];


	if ($logtype == 'Admin') {
		$logtype = '0';
	}
	if ($logtype == 'User') {
		$logtype = '1';
	}


$sql = "SELECT * FROM usertbl where Email = '$email'";
$res = mysqli_query($cn, $sql);
if($res && mysqli_num_rows($res)>0)
{
  function myAlert($msg, $url)
	{
    echo '<script language="javascript">alert("'.$msg.'");</script>';
    echo "<script>document.location = '$url'</script>";
	}
	myAlert("Email already taken!", "register.php");
}
else 
	{
		if ($_POST['password'] === $_POST['conpassword']){
			
			$sql2 = "INSERT INTO usertbl(Fname,Mname,Lname,Email,Password,Logtype,Status) VALUE ('$fname','$mname','$lname','$email','$pword','$logtype','0')";
			$result = mysqli_query($cn, $sql2);
			
			function myAlert1($msg, $url){
			echo '<script language="javascript">alert("'.$msg.'");</script>';
			echo "<script>document.location = '$url'</script>";
			}
			myAlert1("Registration Success!", "register.php");
			
		}
		else {
			function myAlert1($msg, $url){
			echo '<script language="javascript">alert("'.$msg.'");</script>';
			echo "<script>document.location = '$url'</script>";
			}
			myAlert1("Password Did Not Match!", "register.php");
		}
	}



?>

