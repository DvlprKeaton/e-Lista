<?php

include("condb.php");

session_start();

$id = $_SESSION['logid'];

$pname = rand(1000,10000)."-".$_FILES["myfile"]["name"];

$tname = $_FILES["myfile"]["tmp_name"];

$uploads_dir = 'files';

move_uploaded_file($tname, $uploads_dir.'/'.$pname);
                  
$sql = "SELECT * FROM 4ps WHERE RID = '$id'";
$res = mysqli_query($cn, $sql);

if($res && mysqli_num_rows($res)>0)
		{
		  echo "<script>document.location = 'uploadedAlready.php'</script>";
		}
else 
    {
    		date_default_timezone_set("Asia/Manila");
			$submittedDate = date("d/m/Y - l - h:i:sa");
            $sql2 = "INSERT INTO 4ps(RID,Status,Approved,Declined,Application,Yearly) VALUE ('$id','1','0','0','$pname','$submittedDate')";
			$result = mysqli_query($cn, $sql2);

			echo "<script>document.location = 'uploaded4ps.php'</script>";
						
    }
?>

