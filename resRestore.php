<?php 

include ("condb.php");



$ID = $_POST['ID'];

$sql = "UPDATE residenttbl SET Status = '1' WHERE RID = '$ID'";
	$res = mysqli_query($cn, $sql);
	
	echo "<script>document.location = 'successRestore.php'</script>";
	 ?>