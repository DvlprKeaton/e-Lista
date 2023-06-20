<?php

include("condb.php");

$pname = rand(1000,10000)."-".$_FILES["myfile"]["name"];

$tname = $_FILES["myfile"]["tmp_name"];

$uploads_dir = 'Reports';

move_uploaded_file($tname, $uploads_dir.'/'.$pname);
                  
                  $year = date("Y/m/d");

            $sql2 = "INSERT INTO reportstbl(Filename,SDate) VALUE ('$pname','$year')";
			$result = mysqli_query($cn, $sql2);

			echo "<script>document.location = 'reportSubmitted.php'</script>";
						
    
?>

