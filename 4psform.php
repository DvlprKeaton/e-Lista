<?php
            include('condb.php');

            session_start();

            $logid = $_SESSION['logid'];

            $sql = "SELECT * FROM residenttbl WHERE Status = '1' AND RID = '$logid'";  
            $query_run = mysqli_query($cn, $sql);
            $row = mysqli_num_rows($query_run);
            $result = mysqli_fetch_array($query_run);

            ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>e-Lista</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/overlayscrollbars/css/OverlayScrollbars.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <!-- Sidebar Header    -->
      <div class="sidebar-header d-flex align-items-center justify-content-center p-3 mb-3">
        <!-- User Info-->
        <div class="sidenav-header-inner text-center"><img class="img-fluid rounded-circle avatar mb-3" src="dist/img/AdminIcon.png" alt="person">
          <h2 class="h5 text-white text-uppercase mb-0">e-Lista</h2>
          <p class="text-sm mb-0 text-muted">Admin Dashboard</p>
        </div>
        <!-- Small Brand information, appears on minimized sidebar--><a class="brand-small text-center" href="index.html">
          <p class="h1 m-0">e-L</p></a>
      </div>
      <!-- Sidebar Navigation Menus--><span class="text-uppercase text-gray-500 text-sm fw-bold letter-spacing-0 mx-lg-2 heading">Main</span>
      <ul class="list-unstyled">
      <li class="sidebar-item"><a class="sidebar-link" href="udashboard.php"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#chart-1"> </use>
            </svg>Dashboard</a></li>                  
        <li class="sidebar-item"><a class="sidebar-link" href="4psform.php"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#real-estate-1"> </use>
            </svg>Apply 4p's Candidate </a></li>
            <li class="sidebar-item"><a class="sidebar-link" href="upload4ps.php"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#real-estate-1"> </use>
            </svg>Upload 4p's Application </a></li>
        
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between w-100">
              <div class="d-flex align-items-center"><a class="menu-btn d-flex align-items-center justify-content-center p-2 bg-gray-900" id="toggle-btn" href="#">
                  <svg class="svg-icon svg-icon-sm svg-icon-heavy text-white">
                    <use xlink:href="#menu-1"> </use>
                  </svg></a><a class="navbar-brand ms-2" href="udashboard.php">
                  <div class="brand-text d-none d-md-inline-block text-uppercase letter-spacing-0"><span class="text-white fw-normal text-xs">e- </span><strong class="text-primary text-sm">Lista</strong></div></a></div>
              <ul class="nav-menu mb-0 list-unstyled d-flex flex-md-row align-items-md-center">
                
               
                <!-- Log out-->
                <li class="nav-item"><a class="nav-link text-white text-sm ps-0" href="index.php"> <span class="d-none d-sm-inline-block">Logout</span>
                    <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                      <use xlink:href="#security-1"> </use>
                    </svg></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- Counts Section -->
      <br>
      <br>
      <h1 class="m-0" style="text-align: center; color: black;">4p's Application</h1>
            <p style="text-align: center; color: black;">Fill up the 4p's Application form</p>

            
                <form method="POST" action="4psApplication.php?id=<?php echo $result['RID'];?>&fname=<?php echo $result['Lastname'] . ', ' . $result['Firstname'] . ' ' . $result['Middlename']?>&address=<?php echo $result['Address'] ?>&Age=<?php echo $result['Age'] ?>" enctype="multipart/form-data">

                  <div style="padding-left: 30px;">
                    <div class="row-center"> 
                        <div class="col-6">
                                  <label for="">Fullname</label>
                          <input style='text-transform: capitalize;' type="text" name = "fname" class="form-control" value="<?php echo $result['Lastname'] . ', ' . $result['Firstname'] . ' ' . $result['Middlename']?>" readonly>
                        </div>

                        <div class="row-center">
                        <div class="col-6">
                                  <label for="">Address</label>
                          <input style='text-transform: capitalize;' type="text" name = "address" class="form-control" value="<?php echo $result['Address'] ?>" readonly>
                        </div>

                        <div class="row-center">
                        <div class="col-6">
                                  <label for="">Age</label>
                          <input type="text" name = "Age" class="form-control" value="<?php echo $result['Age'] ?>" readonly>
                        </div>

                        <div class="col-6">
                                  <label for="">Pregnant</label>
                          <select name ="preg" id = "preg" class="form-control" required>
                                  <option value=" ">Yes or No?</option>
                                  <option value="Yes">Yes</option>
                                  <option value="No">No</option>
                                </select>
                        </div>

                        <div class="row-center">
                        <div class="col-6">
                                  <label for="">Occupation</label>
                          <input style='text-transform: capitalize;' type="text" name = "occupation" class="form-control" value="<?php echo $result['Occupation'] ?>" readonly>
                        </div>

                        <div class="row-center">
                        <div class="col-6">
                                  <label for="">Monthly Income</label>
                          <input type="text" name = "income" class="form-control" value="<?php echo $result['Income'] ?>" readonly>
                        </div>

                         <div class="col-6">
                                  <label for="">Do you have family Aborad?</label>
                          <select name ="abroad" id = "abroad" class="form-control" required>
                                  <option value=" ">Yes or No?</option>
                                  <option value="Yes">Yes</option>
                                  <option value="No">No</option>
                                </select>
                        </div>


                        <div class="row-center">
                        <div class="col-6">
                                  <label for="">How Many Children do you have?</label>
                          <input type="number" name = "numchild" class="form-control" required>
                        </div>

                        <hr>

                        <h1 class="m-0" style="text-align: center; color: black;">Children Information</h1>
            <p style="text-align: center; color: black;">Please fill atleast 1 to 3 children</p>

            <div class="col-6">
                                  <label for="">Name of Child</label>
                          <input style='text-transform: capitalize;' type="text" name = "chname" class="form-control" placeholder="Lastname, Firsname Middle Initial" required>
                        </div>
                  </div>

                   <div class="col-6">
                                  <label for="">Birthdate</label>
                          <input type="date" name = "chbday" class="form-control" required>
                        </div>


                        <div class="col-6">
                                  <label for="">Name of School</label>
                          <input style='text-transform: capitalize;' type="text" name = "chschool" class="form-control" placeholder="Lastname, Firsname Middle Initial" required>
                        </div>
                        <hr>


                        <div class="col-6">
                                  <label for="">Name of Child</label>
                          <input style='text-transform: capitalize;' type="text" name = "chname2" class="form-control" placeholder="Lastname, Firsname Middle Initial" >
                        </div>
                  </div>

                   <div class="col-6">
                                  <label for="">Birthdate</label>
                          <input type="date" name = "chbday2" class="form-control" >
                        </div>


                        <div class="col-6">
                                  <label for="">Name of School</label>
                          <input style='text-transform: capitalize;' type="text" name = "chschool2" class="form-control" placeholder="Lastname, Firsname Middle Initial" >
                        </div>
                        <hr>


                        <div class="col-6">
                                  <label for="">Name of Child</label>
                          <input style='text-transform: capitalize;' type="text" name = "chname3" class="form-control" placeholder="Lastname, Firsname Middle Initial" >
                        </div>
                  </div>

                   <div class="col-6">
                                  <label for="">Birthdate</label>
                          <input type="date" name = "chbday3" class="form-control" >
                        </div>


                        <div class="col-6">
                                  <label for="">Name of School</label>
                          <input style='text-transform: capitalize;' type="text" name = "chschool3" class="form-control" placeholder="Lastname, Firsname Middle Initial" >
                        </div>
                        <hr>
                  </div>
                    <button type="Submit" class="btn btn-success btn-sm" data-toggle="modal" data-target="#add" >Apply Now!
                </button>
                </div>
                </form>
      </section>
      <footer class="main-footer w-100 position-absolute bottom-0 start-0 py-2" style="background: #222">
        <div class="container-fluid">
          <div class="row text-center gy-3">
            <div class="col-sm-6 text-sm-start">
              <p class="mb-0 text-sm text-gray-600">e-Lista &copy; 2021-20212</p>
            </div>
            <div class="col-sm-6 text-sm-end">
              <p class="mb-0 text-sm text-gray-600">e<a href="https://bootstrapious.com/p/bootstrap-4-dashboard" class="external">-Lista</a></p>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/just-validate/js/just-validate.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="vendor/overlayscrollbars/js/OverlayScrollbars.min.js"></script>
    <script src="js/charts-home.js"></script>
    <!-- Main File-->

<script>
    $(document).ready(function() {
        var ctx = $("#chart-line");
        var pending = document.getElementById("pending").innerHTML;
        var approve = document.getElementById("approve").innerHTML;
        var decline = document.getElementById("decline").innerHTML;
        var myLineChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["Pending", "Approved", "Declined"],
                datasets: [{
                    data: [pending, approve, decline],
                    backgroundColor: ["rgba(255, 0, 0, 0.5)", "rgba(100, 255, 0, 0.5)", "rgba(200, 50, 255, 0.5)", "rgba(0, 100, 255, 0.5)"]
                }]
            },
            options: {
                title: {
                    display: true,
                    text: '4ps Summary of Data'
                }
            }
        });
    });
</script>
    <script src="js/front.js"></script>
    <script>
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
      
    </script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>