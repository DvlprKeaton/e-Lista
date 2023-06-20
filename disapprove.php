<?php  

include ("condb.php");


$ID = $_GET['id'];
$remarks = $_POST['Remarks'];

$year = date("Y");

$sql1 = "SELECT * FROM 4ps where CID = '$ID'";
$res1 = mysqli_query($cn, $sql1);
$row1 = mysqli_fetch_assoc($res1);  

if($row1 != null) {

	$ResID = $row1['RID'];

	$sql2 = "SELECT * FROM residenttbl where RID = '$ResID'";
	$res2 = mysqli_query($cn, $sql2);
	$row2= mysqli_fetch_assoc($res2);  

	if($row2 != null) {
		$connum = $row2['ContactNum'];

		//##########################################################################
					// ITEXMO SEND SMS API - PHP - CURL-LESS METHOD
					// Visit www.itexmo.com/developers.php for more info about this API
					//##########################################################################

					function itexmo($number,$message,$apicode,$passwd){
							$url = 'https://www.itexmo.com/php_api/api.php';
							$itexmo = array('1' => $number, '2' => $message, '3' => $apicode, 'passwd' => $passwd);
							$param = array(
								'http' => array(
									'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
									'method'  => 'POST',
									'content' => http_build_query($itexmo),
								),
							);
							$context  = stream_context_create($param);
							return file_get_contents($url, false, $context);
					}
					//##########################################################################

					$result = itexmo($connum, "The 4ps Application is Rejected due to ".$remarks, 'TR-AGCAL523210_KF48W', 'tlc[mn!zah');
					if ($result == ""){
					echo "iTexMo: No response from server!!!
					Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
					Please CONTACT US for help. ";	
					}else if ($result == 0){

						$sql = "UPDATE 4ps SET Declined = '1', Status = '0', Yearly = '$year', Remarks = '$remarks' WHERE CID = '$ID'";
						$res = mysqli_query($cn, $sql);
						
						echo "<script>document.location = '4psRejected.php'</script>";
					}
					else{	
					echo "Error Num ". $result . " was encountered!";
					}

}

}



?>