<?php

include("condb.php");

$title = $_POST['title'];
$desc = $_POST['desc'];
$details = $_POST['details'];
$posteddate = $_POST['posteddate'];
$parti = $_POST['parti'];

$sql = "SELECT * FROM announcementtbl";
$res = mysqli_query($cn, $sql);
if($res && mysqli_num_rows($res)>0)
{
	date_default_timezone_set("Asia/Manila");
	$posted = date("d/m/Y - l - h:i:sa");

	$sql2 = "INSERT INTO `announcementtbl`(`Title`, `Description`, `Details`, `DateAnnouncement`, `Participants`, `PostedDate`, `Status`) VALUES ('$title','$desc','$details','$posteddate','$parti','$posted','1')";
	$result = mysqli_query($cn, $sql2);

		echo "<script>document.location = 'announcementPosted.php'</script>";
	
}else{

	echo "<script>document.location = 'announcementPosted.php'</script>";
}
	
	
?>

