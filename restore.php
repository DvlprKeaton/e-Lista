<?php

include ("condb.php");



$ID = $_POST['ID'];


$sql = "UPDATE officialstbl SET Status = '1' WHERE BID = '$ID'";
	$res = mysqli_query($cn, $sql);
	
	echo "<script>document.location = 'successRestore.php'</script>";

?>
