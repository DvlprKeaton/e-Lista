<?php

include("condb.php");

session_start();

$logid = $_SESSION['logid'];

$sql = "SELECT * FROM residenttbl WHERE RID = '$logid' AND Status = '1'";
    $result= mysqli_query($cn,$sql);
$row= mysqli_num_rows($result);
    $row2 = mysqli_fetch_assoc($result);
?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
<script>
    window.addEventListener('load', function(){
        //Swal.fire("Login Success!", "Redirect to the dashboard", "success");
         //Swal.fire("Login Failed!", "Please Check your username & password", "error");

         Swal.fire({
          icon: 'success',
          title: 'Login Success!',
          text: 'Welcome, <?php echo ucwords($row2['Lastname'] .', '. $row2['Firstname']); ?>',
        }).then(function(){
            window.location = "udashboard.php";
        })

    });
</script>