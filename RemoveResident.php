<?php

include ("condb.php");


$ID = $_POST['aID'];
$remarks = $_POST['Remarks'];

$year = date("Y");

$sql = "UPDATE residenttbl SET Status = '0', Remarks = '$remarks', EResidency = '$year' WHERE RID = '$ID'";
	$res = mysqli_query($cn, $sql);
	
	echo "<script>document.location = 'moveArchive.php'</script>";

?>