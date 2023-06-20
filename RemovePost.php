<?php

include ("condb.php");


$ID = $_POST['AnnounceID'];

$sql = "UPDATE announcementtbl SET Status = '0' WHERE AID = '$ID'";
$res = mysqli_query($cn, $sql);

	echo "<script>document.location = 'removePosted.php'</script>";

?>