<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
	

<?php
include("condb.php");
$username = $_POST['username'];
$pword = $_POST['pword'];
$sql = "SELECT * FROM officialstbl WHERE Username = '$username' AND Status = '1'";
$result= mysqli_query($cn,$sql);
$row= mysqli_num_rows($result);


//echo $converted_pword;
//echo $row2['BID'];

if($row<>0) {
	$row2 = mysqli_fetch_assoc($result);
	$converted_pword = password_verify($pword, $row2['Password']);

	session_start();

	$_SESSION['logid'] = $row2['BID'];
	$_SESSION['logun'] = $row2['Username'];

	date_default_timezone_set("Asia/Manila");
	$logtime = date("d/m/Y - l - h:i:sa");

	$logid = $_SESSION['logid'];

	$sqlPos = "SELECT * FROM officialstbl WHERE Position = 'Captain' || Position = 'Secretary' AND Status = '1'";
	$resultPos= mysqli_query($cn,$sqlPos);
	$rowPos= mysqli_num_rows($resultPos);


	if ($rowPos>0) {
		
	
		if($converted_pword==1)
		{
			$sql2 = "INSERT INTO transactiontbl (UID,LogTime,UserType) VALUE ('$logid','$logtime','Barangay Official')";
			$result2 = mysqli_query($cn, $sql2);
			echo "<script>document.location = 'loginSuccess.php'</script>";
		}
		else
		{
					echo "<script>document.location = 'loginFailed.php'</script>";

		}
	}	
}else{

	$sql1 = "SELECT * FROM residenttbl WHERE Username = '$username' AND Status = '1'";
	$result1= mysqli_query($cn,$sql1);
	$row1= mysqli_num_rows($result1);

	if($row1>0) {
	$res = mysqli_fetch_assoc($result1);
	$converted_pword = password_verify($pword, $res['Password']);

	session_start();

	$_SESSION['logid'] = $res['RID'];
	$_SESSION['logun'] = $res['Username'];
	
	date_default_timezone_set("Asia/Manila");
	$logtime = date("d/m/Y - l - h:i:sa");

	$logid = $_SESSION['logid'];

	if($converted_pword==1)
	{
		$sql2 = "INSERT INTO transactiontbl (UID,LogTime,UserType) VALUE ('$logid','$logtime','Resident')";
		$result2 = mysqli_query($cn, $sql2);
		echo "<script>document.location = 'loginSuccessUser.php'</script>";
	}
	else
	{	
				echo "<script>document.location = 'loginFailed.php'</script>";
	}
			
	}else
	{
				echo "<script>document.location = 'loginFailed.php'</script>";
				
	}

}


?>