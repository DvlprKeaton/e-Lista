<?php

include ("condb.php");

$ID = $_GET['AID'];

$sql = "UPDATE admintbl SET status = '0' WHERE AID = '$ID'";
	$res = mysqli_query($cn, $sql);
	
	function myAlert($msg, $url){
    echo '<script language="javascript">alert("'.$msg.'");</script>';
    echo "<script>document.location = '$url'</script>";
	}
	myAlert("Moved to Archive!", "aradmin.php");
?>