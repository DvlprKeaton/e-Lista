<?php

include ("condb.php");


$ID = $_POST['aID'];

$sql = "SELECT * from officialstbl WHERE Status='1' AND BID ='$ID'";
$result = mysqli_query($cn,$sql);
$row= mysqli_num_rows($result);
$res = mysqli_fetch_array($result);

$BID = $res['BID'];
$Fname = $res['Firstname'];
$Mname = $res['Middlename'];
$Lname = $res['Lastname'];
$Bday = $res['Birthdate'];
$Pos = $res['Position'];
$Add = $res['Address'];
$Age = $res['Age'];
$Gender = $res['Gender'];
$Term = $res['Term'];


if ($row>0) {
$sql = "UPDATE officialstbl SET Status = '0' WHERE BID = '$ID'";
$res = mysqli_query($cn, $sql);



$sql2 = "INSERT INTO endoftermtbl (BID,Firstname,Middlename,Lastname,Birthdate,Position,Address,Status,Age,Gender,Term) VALUE ('$BID','$Fname','$Mname','$Lname','$Bday;','$Pos','$Add','0','$Age','$Gender','Term')";
$result = mysqli_query($cn, $sql2);

	echo "<script>document.location = 'moveArchive.php'</script>";

}else{


}


?>