<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
<script>
    window.addEventListener('load', function(){
        //Swal.fire("Login Success!", "Redirect to the dashboard", "success");
         //Swal.fire("Login Failed!", "Please Check your username & password", "error");

         Swal.fire({
          position: 'top-center',
          icon: 'success',
          title: '4ps Application Approved!',
          showConfirmButton: false,
          timer: 1500
        }).then(function(){
            window.location = "4psmanagement.php";
        })

    });
</script>