<?php
include("condb.php");
$username = $_POST['username'];
$pword = $_POST['pword'];
$sql1 = "SELECT * FROM residenttbl WHERE Username = '$username' AND Status = '1'";
$result1= mysqli_query($cn,$sql1);
$row1= mysqli_num_rows($result1);

if($row1>0) {
	$res = mysqli_fetch_assoc($result1);
	$converted_pword = password_verify($pword, $res['Password']);

	session_start();

	$_SESSION['logid'] = $res['RID'];
	$_SESSION['logun'] = $res['Username'];

	$logid = $_SESSION['logid'];

	if($converted_pword==1)
	{
		function myAlert1($msg, $url){
				echo '<script language="javascript">alert("'.$msg.'");</script>';
				echo "<script>document.location = '$url'</script>";
				}
				myAlert1("Login Success!","udashboard.php");

		document.querySelector(".third").addEventListener('click', function(){
	  	Swal.fire("Our First Alert", "With some body text and success icon!", "success");
});
	}
	else
	{
				document.querySelector(".third").addEventListener('click', function(){
				  toastMixin.fire({
				    title: 'Wrong Password',
				    icon: 'error'
				  });
				});
	}
			
}else
{
			document.querySelector(".third").addEventListener('click', function(){
			  toastMixin.fire({
			    title: 'Wrong Password',
			    icon: 'error'
			  });
			});
			
}
?>