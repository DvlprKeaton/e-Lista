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
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
              <div class="d-flex">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
                  <use xlink:href="#user-1"> </use>
                </svg>
                <div class="ms-2">
                  <?php  

                include ("condb.php");

                  $sql = "SELECT * FROM residenttbl WHERE Status = '1' ORDER BY RID";  
                  $query_run = mysqli_query($cn, $sql);
                  $row = mysqli_num_rows($query_run);
                  

                echo "<h3 class='h4 text-dark text-uppercase fw-normal'>Total Residents</h3>";
                echo '<p class="display-6 mb-0">'.$row.'</p>';?>
                  
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
              <div class="d-flex">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
                  <use xlink:href="#numbers-1"> </use>
                </svg>
                <div class="ms-2">
                  <?php  

                include ("condb.php");

                  $sql = "SELECT * FROM 4ps WHERE Status = '1' ORDER BY CID";  
                  $query_run = mysqli_query($cn, $sql);
                  $row = mysqli_num_rows($query_run);
                  

                echo "<h3 class='h4 text-dark text-uppercase fw-normal'>Total 4p's Candidate</h3>";
                echo '<p class="display-6 mb-0">'.$row.'</p>';

                  $sql2 = "SELECT * FROM residenttbl WHERE Age BETWEEN 22 AND 60";  
                  $query_run2 = mysqli_query($cn, $sql2);
                  $row2 = mysqli_num_rows($query_run2);
                  

                echo '<p class="display-6 mb-0" id="adult" hidden>'.$row2.'</p>';

                  $sql3 = "SELECT * FROM residenttbl WHERE Age < 18";  
                  $query_run3 = mysqli_query($cn, $sql3);
                  $row3 = mysqli_num_rows($query_run3);
                  

                echo '<p class="display-6 mb-0" id="teens" hidden>'.$row3.'</p>';

                $sql4 = "SELECT * FROM residenttbl WHERE Age >= 60";  
                  $query_run4 = mysqli_query($cn, $sql4);
                  $row4 = mysqli_num_rows($query_run4);
                  

                echo '<p class="display-6 mb-0" id="senior" hidden>'.$row4.'</p>';

                $sql5 = "SELECT * FROM residenttbl WHERE Age <= 1";  
                  $query_run5 = mysqli_query($cn, $sql5);
                  $row5 = mysqli_num_rows($query_run5);
                  

                echo '<p class="display-6 mb-0" id="infant" hidden>'.$row5.'</p>';

                $sql6 = "SELECT * FROM residenttbl WHERE Age BETWEEN 1 AND 3";  
                  $query_run6 = mysqli_query($cn, $sql6);
                  $row6 = mysqli_num_rows($query_run6);
                  

                echo '<p class="display-6 mb-0" id="toddler" hidden>'.$row6.'</p>';







                  $sql2 = "SELECT * FROM residenttbl WHERE Income ='10,000 - below'";  
                  $query_run2 = mysqli_query($cn, $sql2);
                  $row2 = mysqli_num_rows($query_run2);
                  

                echo '<p class="display-6 mb-0" id="one" hidden>'.$row2.'</p>';

                  $sql3 = "SELECT * FROM residenttbl WHERE Income ='10,000 - 30,000'";  
                  $query_run3 = mysqli_query($cn, $sql3);
                  $row3 = mysqli_num_rows($query_run3);
                  

                echo '<p class="display-6 mb-0" id="two" hidden>'.$row3.'</p>';

                $sql4 = "SELECT * FROM residenttbl WHERE Income='30,000 - 50,000'";  
                  $query_run4 = mysqli_query($cn, $sql4);
                  $row4 = mysqli_num_rows($query_run4);
                  

                echo '<p class="display-6 mb-0" id="three" hidden>'.$row4.'</p>';

                $sql5 = "SELECT * FROM residenttbl WHERE Income = '50,000 - 70,000'";  
                  $query_run5 = mysqli_query($cn, $sql5);
                  $row5 = mysqli_num_rows($query_run5);
                  

                echo '<p class="display-6 mb-0" id="four" hidden>'.$row5.'</p>';

                $sql6 = "SELECT * FROM residenttbl WHERE Income = '70,000 - above'";  
                  $query_run6 = mysqli_query($cn, $sql6);
                  $row6 = mysqli_num_rows($query_run6);
                  

                echo '<p class="display-6 mb-0" id="five" hidden>'.$row6.'</p>';
                ?>
      
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </section>
      <!-- Header Section-->
      <section class="bg-white py-5">
        <div class="container-fluid">
          <div class="row d-flex align-items-md-stretch">
            <!-- Pie Chart-->
            <div style="text-align: center; border-width: 1px; border-color: black; border-style: ridge; padding: 10px;">
               <h1 class="card-title" >Announcements</h1>

               <?php

               include('condb.php');
               $sql = "SELECT * FROM `announcementtbl` WHERE Status = '1' ORDER BY PostedDate";
              $result = mysqli_query($cn,$sql);
               while($row = mysqli_fetch_array($result))
                  {
               ?>
               <h4>Title: </h4><p><?php echo $row['Title'] ?></p>
               <h4>Description: </h4><p><?php echo $row['Description'] ?></p>
               <h4>Additional Details: </h4><p><?php echo $row['Details'] ?></p>
               <h4>Date: </h4><p><?php echo $row['DateAnnouncement'] ?></p>
               <h4>Participants: </h4><p><?php echo $row['Participants'] ?></p>
               <h4>Posted Date: </h4><p><?php echo $row['PostedDate'] ?></p>
               <hr>
               <?php
             }?>
            </div>
            
            

<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row">
            <div class="container-fluid d-flex justify-content-center">
                <div class="col-sm-8 col-md-6">
                    <div class="card">
                        <div class="card-body" style="height: 500px">
                            <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                </div>
                            </div> <canvas id="chart-line" width="299" height="200" class="chartjs-render-monitor" style="display: block; width: 299px; height: 200px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-4">

    <p class="font-weight-bold" style="text-align:center;font-weight: bold;">Monthly Income of Residents</p>

    <hr class="my-4">

    <div>
      <canvas id="barChart"></canvas>
    </div>

  </div>

            <!-- Statistics Section-->
      <section class="py-5">
        <div class="container-fluid">
          <div class="row align-items-stretch gy-4">
            <div class="col-lg-4">
              <!-- Income-->
              <div class="card text-center h-100 mb-0">
                <div class="card-body">
                  <svg class="svg-icon svg-icon-big svg-icon-light mb-4 text-muted">
                    <use xlink:href="#sales-up-1"> </use>
                  </svg>
                  <?php  

                include ("condb.php");

                  $sql = "SELECT * FROM residenttbl ORDER BY RID";  
                  $query_run = mysqli_query($cn, $sql);
                  $row = mysqli_num_rows($query_run);
                  

                echo "<h3 class='h4 text-dark text-uppercase fw-normal'>Total Number of Residents</h3>";

                 echo ' <p class="text-gray-700 display-6">'.$row.'</p>';?>
                  <p class="text-primary h2 fw-bold">Overall Number of Residents</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <!-- Monthly Usage-->
              <div class="card h-100 mb-0">
                <div class="card-body">
                  <h2 class="h3 fw-normal mb-4">Overall Approved 4p's Candidates</h2>
                  <div class="row align-items-center mb-3 gx-lg-5">
                    <div class="col-lg-6">
                      <table class="w-100">
                        <tbody>
                          <tr>
                            <td>
                              <div class="position-relative mx-auto" style="max-width: 120px">
                                <canvas class="mx-auto" id="monthlyProgress" width="150" height="150"></canvas>

                                <?php

                                $approved = $row3;
                                $totalres = $row;

                                $percentage = ($totalres / 100) * $approved;

                                echo '<p class="h3 text-primary fw-normal position-absolute top-50 start-50 translate-middle text-center m-0">'.$percentage.'%</p>'

                                ?>
                                
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="col-lg-6 border-start">
                      <p class="fw-bold h2 text-primary"><?php echo $row3; ?></p>
                      <p class="text-xs fw-light text-gray-500 mb-0">Approved Candidates</p>
                      <p class="text-gray-500"><?php echo $row2 + $row3 + $row4; ?> Total Number of 4p's Application</p>
                    </div>
                  </div>
                
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <!-- User Actibity-->
              <div class="card h-100 mb-0">
                <div class="card-body">
                  <h2 class="h3 fw-normal mb-4">4p's Application & Number of Residents</h2>
                  <p class="display-6"><?php echo $row; ?></p>
                  <h3 class="h4 fw-normal">Residents</h3>
                  <div class="progress rounded-0 mb-3">
                    <div class="progress-bar progress-bar bg-primary" role="progressbar" <?php echo 'style="width: '.$row2 + $row3 + $row4.'%"'; ?>  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="d-flex justify-content-between">
                    <div class="text-start">
                      <p class="h5 fw-normal mb-2">4p's Applicant</p>
                      <p class="fw-bold text-xl text-primary mb-0"><?php echo $row2 + $row3 + $row4; ?></p>
                    </div>
                    <div class="text-end">
                      <p class="h5 fw-normal mb-2">4p's Applicant in Percentage</p>
                      <?php

                                $totalapp = $row2 + $row3 + $row4;
                                $totalres = $row;

                                $percentage = ($totalres / 100) * $totalapp;

                                echo '<p class="fw-bold text-xl text-primary mb-0">'.$percentage.'%</p>'

                      ?>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
        var adult = document.getElementById("adult").innerHTML;
        var teens = document.getElementById("teens").innerHTML;
        var senior = document.getElementById("senior").innerHTML;
        var infant = document.getElementById("infant").innerHTML;
        var toddler = document.getElementById("toddler").innerHTML;
        var myLineChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["Adult", "Teens", "Senior","Infant","Toddlers"],
                datasets: [{
                    data: [adult, teens, senior, infant, toddler],
                    backgroundColor: ["rgba(238, 96, 85)", "rgba(96, 211, 148)", "rgba(170, 246, 131)", "rgba(255, 217, 125)","rgba(255, 155, 133)"]
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'Residents by age'
                }
            }
        });
    });
</script>
<script>
  var ctxB = document.getElementById("barChart").getContext('2d');
  var one = document.getElementById("one").innerHTML;
        var two = document.getElementById("two").innerHTML;
        var three = document.getElementById("three").innerHTML;
        var four = document.getElementById("four").innerHTML;
        var five = document.getElementById("five").innerHTML;
    var myBarChart = new Chart(ctxB, {
      type: 'bar',
      data: {
        labels: ["10,000 - below", "10,000 - 30,000", "30,000 - 50,000", "50,000 - 70,000", "70,000 - above"],
        datasets: [{
          label: '# of Residents',
          data: [one, two, three, four, five],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
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