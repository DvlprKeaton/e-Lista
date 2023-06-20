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

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  </head>
  <body>
    <div id="tblheader">
         <img src="img/fLogo1.jpg" style="object-position: left;width: 100px; height: 100px;margin-right: 350px;">
    <img src="img/fLogo2.jpg" style="object-position: right;width: 100px; height: 100px;margin-left: 170px;">
   
        </div>
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
               <h3 class='h4 text-dark text-uppercase fw-normal'>4p's Candidate  List</h3>
          </div>

        </div>
      </section>
      <!-- Header Section-->
      <section class="bg-white py-5">
        <div class="container-fluid">
          <div class="row d-flex align-items-md-stretch">
          <div class="card-body">
            <?php

    if(isset($_POST['search']))
    {
        $valueToSearch = $_POST['valueToSearch'];
        // search in all table columns
        // using concat mysql function
        $query = "SELECT * FROM `4ps` WHERE Status = '1' AND CONCAT(`CID`, `RID`, `Status`, `Approved`, `Declined`, `Application`, `Yearly`, `Remarks`) LIKE '%".$valueToSearch."%'";
        $search_result = filterTable($query);
        
    }
     else {
        $query = "SELECT * FROM `4ps` WHERE Status = '1'";
        $search_result = filterTable($query);
    }

    // function to connect and execute the query
    function filterTable($query)
    {
        include ("condb.php");
        $filter_Result = mysqli_query($cn, $query);
        return $filter_Result;
    }

    ?>

    <form action="4psmanagement.php" method="post">
                                    <div class="input-group mb-3">
                                        <input type="text" name="valueToSearch" class="rounded" placeholder="Search data" style="max-width:100%;text-transform: capitalize;" >
                                        <input type="submit" class="btn btn-primary" name="search" value="Sort">
                                    </div>
                                </form>

              <div class="container">
            <p>
              <button class="btn btn-primary TablePrinting" id="TablePrinting">Print Table</button>
            </p>
        </div>
        
      
                <table id='4psTable' class='table table-bordered table-striped' style="text-align:center;">
                  <caption style="text-align: center; font-weight: bold;">Republic of the Philippines<br>Municipality of Sinait, Duyay-yat<br>Ilocos Sur, 2733</p>
                <?php 

                 include ("condb.php");
                  echo"<thead>
                  <tr>
                    <th>Firstname</th>
                    <th>Middlename</th>
                    <th>Lastname</th>
                    <th>Address</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Civil Status</th>
                    <th width='10%'></th>
                  </tr>";


                  

                  while($row = mysqli_fetch_array($search_result))
                  {

                  if ($row != null) {
                    $rid = $row['RID'];
                  }else{
                    $rid = 0;
                  }

                  $sql2 = "SELECT * FROM residenttbl WHERE RID = '$rid' ORDER BY RID";
                  $res = mysqli_query($cn, $sql2);
                  $row2 = mysqli_fetch_assoc($res);  
                 

                  echo"<tbody>";
                  echo "<tr>";
                  echo "<form method='POST' action='download.php?id=" . $row['CID'] . "&file=" . $row['Application'] . "'>"; 
                  echo "<input type='hidden' id='ID' name='ID' value='" . $row['CID'] . "'>";
                  echo "<td hidden>" . $row['CID'] . " </td> ";
                  echo "<td hidden>" . $row2['RID'] . " </td> ";
                  echo "<td style='text-transform: capitalize;' >" . $row2['Firstname'] . " </td> ";
                  echo "<td style='text-transform: capitalize;' >" . $row2['Middlename'] . " </td> ";
                  echo "<td style='text-transform: capitalize;' >" . $row2['Lastname'] . " </td> ";
                  echo "<td>" . $row2['Address'] . " </td> ";
                  echo "<td>" . $row2['Age'] . " </td> ";
                  echo "<td>" . $row2['Gender'] . " </td> ";
                  echo "<td style='text-transform: capitalize;' >" . $row2['CivilStatus'] . " </td> ";
                  echo "<td>
                  <button type='submit' class='btn btn-primary btn-xs' data-toggle='tooltip' title='Download Application'><i class='fa fa-bars' aria-hidden='true'></i></button>
                  <span data-toggle='modal' data-target='#approve'><button type='button' class='btn btn-success btn-xs' data-toggle='tooltip' title='Approve'><i class='fa fa-thumbs-up' aria-hidden='true'></i></button></span>
                  <span data-toggle='modal' data-target='#disapprove'><button type='button' class='open-archive btn btn-danger btn-xs' data-toggle='tooltip' title='Disapprove'><i class='fa fa-thumbs-down' aria-hidden='true'></i></button></span></td></form>";


                  echo" <div class='modal fade' id='approve'>
                        <div class='modal-dialog modal-md'>"; 
                          echo " <form action='approve.php?id=" . $row['CID'] . "' method='POST'>
                          <input type='hidden' id='ID' name='ID' value='" . $row['CID'] . "'>
                          <div class='modal-content'>
                            <div class='modal-header'>
                              <h4 class='modal-title'>Approve the 4ps Application?</h4>
                            </div>";
                       echo "<input type = 'submit' class='btn btn-success' data-toggle='modal' data-target='#add' value = 'Yes'>
                       </div>
                         </div>
                          </div>
                          </form>";

                          echo" <div class='modal fade' id='disapprove'>
                        <div class='modal-dialog modal-md'>"; 
                          echo " <form action='disapprove.php?id=" . $row['CID'] . "' method='POST'>
                          <div class='modal-content'>
                            <div class='modal-header'>
                              <h4 class='modal-title'>Reject the 4ps Application?</h4>
                              <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                              </button>
                            </div>";
                            echo "<div class='col-12'>
                            <label for=''>Resident ID</label>
                                 <input style = 'text-align:center' type='text' name = 'aID' id = 'aID' class='form-control' readonly>
                            <label for=''>Reason of Rejected Application</label>
                                 <input style = 'text-align:center' type='text' name = 'Remarks' id = 'Remarks' class='form-control' required>
                              </div>";
                       echo "<input onSubmit = '' type = 'submit' class='btn btn-success' data-toggle='modal' data-target='#add' value = 'Yes'>
                       </div>
                         </div>
                          </div>
                          </form>";
                  echo "</tr>";
                }
                  echo "</table>";

                 
               
                       //echo "<script>function myFunction(){
                      // alert(''Update.php?id=" . $row2['RID'] . "'')
                      // }</script>";
                       ?>

                            </div>
                          </div>
                          </form>
                          <!-- /.modal-content -->

                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <div class="modal fade" id="update">
                        <div class="modal-dialog">
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
              </div>
          </div>
        </div>
      </section>
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

    <script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": [""]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script type="jquery.min.js"></script>
<script>
  $('.TablePrinting').click(function(){
    var printme = document.getElementById('4psTable');
    var header = document.getElementById('tblheader');
    var wme = window.open("","","width=900","height=700");
    wme.document.write(header.outerHTML + printme.outerHTML);
    wme.document.close();
    wme.focus();
    wme.print();
    wme.close();

  })
</script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>