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
      <li class="sidebar-item"><a class="sidebar-link" href="dashboard.php"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#chart-1"> </use>
            </svg>Dashboard</a></li>                  
        <li class="sidebar-item"><a class="sidebar-link" href="4psmanagement.php"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#real-estate-1"> </use>
            </svg>4p's List </a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="barangaymanagement.php"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#survey-1"> </use>
            </svg>Barangay Official List </a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="residentmanagement.php"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#survey-1"> </use>
            </svg>Resident List </a></li>
            
        <li class="sidebar-item"><a class="sidebar-link" href="#exampledropdownDropdown" data-bs-toggle="collapse"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#browser-window-1"> </use>
            </svg>4p's Applications</a>
          <ul class="collapse list-unstyled " id="exampledropdownDropdown">
            <li><a class="sidebar-link" href="approvemanagement.php">Approved 4p's Application</a></li>
            <li><a class="sidebar-link" href="rejected.php">Rejected 4p's Application</a></li>
          </ul>
        </li>
        <li class="sidebar-item"><a class="sidebar-link" href="yearly.php"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#disable-1"> </use>
            </svg>Yearly Report</a></li>
       <li class="sidebar-item"><a class="sidebar-link" href="accomplishment.php"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#sales-up-1"> </use>
            </svg>Accomplishment Reports</a></li>
            <li class="sidebar-item"><a class="sidebar-link" href="announcement.php"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#sales-up-1"> </use>
            </svg>Announcement</a></li>
            <li class="sidebar-item"><a class="sidebar-link" href="transaction.php"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#browser-window-1"> </use>
            </svg>Transaction Report</a></li>
      </ul><span class="text-uppercase text-gray-500 text-sm fw-bold letter-spacing-0 mx-lg-2 heading">Archived</span>
      <ul class="list-unstyled py-4">
        <li class="sidebar-item"> <a class="sidebar-link" href="arbarangaymanagement.php"> 
            <svg class="svg-icon svg-icon-xs svg-icon-heavy me-xl-2">
              <use xlink:href="#chart-1"> </use>
            </svg>Barangay Official List</a></li>
        <li class="sidebar-item"> <a class="sidebar-link" href="arresidentmanagement.php"> 
            <svg class="svg-icon svg-icon-xs svg-icon-heavy me-xl-2">
              <use xlink:href="#quality-1"> </use>
            </svg>Resident List</a></li>
      </ul>
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
                  </svg></a><a class="navbar-brand ms-2" href="dashboard.php">
                  <div class="brand-text d-none d-md-inline-block text-uppercase letter-spacing-0"><span class="text-white fw-normal text-xs">e- </span><strong class="text-primary text-sm">Lista</strong></div></a></div>
              <ul class="nav-menu mb-0 list-unstyled d-flex flex-md-row align-items-md-center">
                
               <!-- Languages dropdown    -->
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle text-white text-sm" id="languages" rel="nofollow" data-bs-target="#" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="d-none d-sm-inline-block ms-2">Accomplishment Forms</span></a>
                  <ul class="dropdown-menu dropdown-menu-end mt-sm-3 shadow-sm" aria-labelledby="languages">
               
                    <li><a class="dropdown-item" href="BadaForm.php"><span>Functionality of BADAC2</span></a></li>
                    <li><a class="dropdown-item" href="BPOCForm.php"><span>Functionality of BPOC</span></a></li>
                    <li><a class="dropdown-item" href="BSWMCForm.php"><span>Functionality of BSWMC</span></a></li>
                    
                  </ul>
                </li>
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
     <section class="py-5">
        <div class="container-fluid">
          <div class="row">
               <h3 class='h4 text-dark text-uppercase fw-normal'>Accomplishment Report Dashboard</h3>
          </div>
          
        </div>
      </section>
      <!-- Header Section-->
      <section class="bg-white py-5">
        <h1 class="m-0" style="text-align: center; color: black;">Functionality of BADAC</h1>
            <p style="text-align: center; color: black;">Barangay: DUYAY-YAT<br>Municipality: SINAIT<br>Province: Ilocos Sur</p>
            
                <form method="POST" action="BadacApplication.php" enctype="multipart/form-data">

                  <div style="padding-left: 30px;">
                    <div class="row-center">
                        <div class="col-6">
                                  <label for="">REORGANIZATION REACTIVATION OF BADAC (BADAC EO)</label>
                          <input type="text" name = "entry1" class="form-control" >
                        </div>

                        <hr>

                        <div class="row-center">
                        	        <p style="text-align: center; color: black;">BRGY ANTI DRUG ABUSE COUNCIL PLAN</p>
                         <hr>
                        <div class="col-6">
                          
                                  <label for="">RESOLUTION #</label>
                          <input type="text" name = "entry2" class="form-control" >
                        </div>

                        <div class="row-center">
                        <div class="col-6">
                                  <label for="">DATE ENACTED</label>
                          <input type="text" name = "entry3" class="form-control">
                        </div>

                        <div class="row-center">
                        <div class="col-6">
                                  <label for="">MEMBERSHIP INCLUDES CSO/NGO/NGA</label>
                          <input type="text" name = "entry4" class="form-control">
                        </div>
                        <hr>

                        <div class="row-center">
                        <div class="col-6">
                                  <label for="">WITH RECORDS OF MINUTES OF MEETING</label>
                          <input type="text" name = "entry5" class="form-control">
                        </div>

                        <div class="row-center">
                        <div class="col-6">
                                  <label for="">FREQUENCY OF MEETING (MONTHLY, QUARTERLY, ANNUAL, SEMI-ANNUAL)</label>
                          <input type="text" name = "entry6" class="form-control">
                        </div>

                        <div class="row-center">
                        <div class="col-6">
                                  <label for="">ACCOMPLISHED PROGRAMS AND ACTIVITIES FOR THIS QUARTER</label>
                          <input type="text" name = "entry7" class="form-control">
                        </div>

                        </div>
                        <hr>
                    <button type="Submit" class="btn btn-success btn-sm" data-toggle="modal" data-target="#add" >Submit Report
                </button>
                </div>
                </form>
      </section>
      <footer class="main-footer w-100 position-absolute bottom-0 start-0 py-2" style="background: #222">
        <div class="container-fluid">
          <div class="row text-center gy-3">
            <div class="col-sm-6 text-sm-start">
              <p class="mb-0 text-sm text-gray-600">e-Lista &copy; 2021-2022</p>
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
    <script type="jquery.min.js"></script>
<script>
  $('.TablePrinting').click(function(){
    var printme = document.getElementById('tblAccomplishment');
    var wme = window.open("","","width=900","height=700");
    wme.document.write(printme.outerHTML);
    wme.document.close();
    wme.focus();
    wme.print();
    wme.close();

  })
</script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>