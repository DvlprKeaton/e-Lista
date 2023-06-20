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
  <div id="tblheader">
         <img src="img/fLogo1.jpg" style="object-position: left;width: 100px; height: 100px;margin-right: 350px;">
    <img src="img/fLogo2.jpg" style="object-position: right;width: 100px; height: 100px;margin-left: 170px;">
   
        </div>
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
        <div class="container-fluid">
          <div class="row d-flex align-items-md-stretch">
          <div class="card-body">
            <div class="card-header">
                 <h3 class="card-title">List of Accomplishment</h3> 
                <form method="POST" action="uploadForms.php" enctype="multipart/form-data">

                <div>
                    <label>
                      <label for="myfile">Upload Reports:</label>
                      <br>
                      <input type="file" id="myfile" name="myfile" required>
                    </label>
                    <hr>
                    <button type="submit" class="btn btn-success btn-sm">Submit</button> 
                </div>
                </form>

                <div class="modal fade" id="add">
                        <div class="modal-dialog">
                            <form method ="POST" action="conResident.php">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Add Resident</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="card card-primary">
                              <div class="card-body">
                      <div class="row">
                        <div class="col-6">
                                  <label for="">Firstname</label>
                          <input type="text" name = "fname" pattern="[A-Za-z\s]+" class="form-control" placeholder="Enter Firstname" required>
                        </div>
                        <div class="col-6">
                                  <label for="">Middlename</label>
                          <input type="text" name = "mname" pattern="[A-Za-z\s]+"  class="form-control" placeholder="Enter Middlename" required>
                        </div>
                        <div class="col-6">
                                  <label for="">Lastname</label>
                          <input type="text" name = "lname" pattern="[A-Za-z\s]+" class="form-control" placeholder="Enter Lastname" required>
                        </div>
                        <div class="col-6">
                                  <label for="">Username</label>
                          <input type="text" name = "username" pattern="[A-Za-z0-9]+" class="form-control" placeholder="Enter Username" required>
                        </div>
                        <div class="col-6">
                                  <label for="">Password</label>
                          <input type="password" name ="password" class="form-control" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                        title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"required>
                        </div>
                        <div class="col-6">
                                  <label for="">Confirm Password</label>
                          <input type="password" name ="conpassword" class="form-control" placeholder="Confirm Password" required>
                        </div>
                        
                        <div class="col-12">
                                  <label for="">Address</label>
                          <input type="text" id ="address" name ="address" class="form-control" readonly>
                          
                        <div class="col-12">
                                  <label for="">Province</label>
                          <select name ="province" id = "province" class="form-control" onchange="copyTextValue()" required>
                                  <option value=" ">Select Province</option>
                                  <option>Ilocos Sur</option>
                                </select>
                        </div>
                        <div class="col-12">
                                  <label for="">Municipality</label>
                          <select name ="municipality" id = "municipality" class="form-control" onchange="copyTextValue()" required>
                                  <option value=" ">Select Municipality</option>
                                  <option>Sinait</option>
                                </select>
                        </div>
                        <div class="col-12">
                                  <label for="">Barangay</label>
                          <select name ="barangay" id = "barangay" class="form-control" onchange="copyTextValue()" required>
                                <option value=" ">Select Barangay</option>
                                <option>Aguing</option>
                                <option>Aguing</option>
                                <option>Ballaigui (Poblacion)</option>
                                <option>Baliw</option>
                                <option>Baracbac</option>
                                <option>Barikir</option>
                                <option>Battog</option>
                                <option>Binacud</option>
                                <option>Cabangtalan</option>
                                <option>Cabarambanan</option>
                                <option>Cabulalaan</option>
                                <option>Cadanglaan</option>
                                <option>Calingayan</option>
                                <option>Curtin</option>
                                <option>Dadalaquiten Norte</option>
                                <option>Dadalaquiten Sur</option>
                                <option>Duyay-yat</option>
                                <option>Jordan</option>
                                <option>Calanutian</option>
                                <option>Katipunan
                                <option>Macabiag (Poblacion)</option>
                                <option>Magsaysay</option>
                                <option>Marnay</option>
                                <option>Masadag</option>
                                <option>Nagcullooban</option>
                                <option>Nagbalioartian</option>
                                <option>Nagongburan</option>
                                <option>Namnama (Poblacion)</option>
                                <option>Pacis</option>
                                <option>Paratong</option>
                                <option>Dean Leopoldo Yabes (Pug-os)</option>
                                <option>Purag</option>
                                <option>Quibit-quibit</option>
                                <option>Quimmallogong</option>
                                <option>Rang-ay (Poblacion)</option>
                                <option>Ricudo</option>
                                <option>Sabangan (Marcos)</option>
                                <option>Sallacapo</option>
                                <option>Santa Cruz</option>
                                <option>Sapriana</option>
                                <option>Tapao</option>
                                <option>Teppeng</option>
                                <option>Tubigay</option>
                                <option>Ubbog</option>
                                <option>Zapat</option>
                                </select>
                        </div>

                        <div class="col-12">
                                  <label for="">Date of Birth</label>
                          <input type="date" name ="dob" class="form-control" required="">
                        </div>
                        <div class="col-12">
                                  <label for="">Gender</label>
                          <select name ="gender" id = "gender" class="form-control" required>
                                  <option>Male</option>
                                  <option>Female</option>
                                </select>
                        </div>
                        <div class="col-12">
                                  <label for="">Civil Status</label>
                          <select name ="civil" id = "civil" class="form-control" required>
                                  <option>Married</option>
                                  <option>Widowed</option>
                                  <option>Separated</option>
                                  <option>Divorced</option>
                                  <option>Single</option>
                                </select>
                        </div>
                        <div class="col-12">
                                  <label for="">Occupation</label>
                          <input type="text" name = "occupation" class="form-control" placeholder="Enter Occupation" required>
                        </div>
                        <div class="col-12">
                                  <label for="">Annual Income</label>
                          <select name ="income" id = "income" class="form-control" required>
                                  <option>N/A</option>
                                  <option>10,000 - below</option>
                                  <option>10,000 - 30,000</option>
                                  <option>30,000 - 50,000</option>
                                  <option>50,000 - 70,000</option>
                                  <option>70,000 - above</option>
                                </select>
                        </div>
                        <div class="col-12">
                                  <label for="">Contact #</label>
                          <input type="text" id ="connum" name ="connum" class="form-control" placeholder="Contact Number">
                        </div>
                        <div class="col-6" hidden="true">
                          <input type="text" name ="position" class="form-control" value="Resident">
                        </div>

                      </div>
                    </div>
                          </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                              <input type= "submit" class="btn btn-success" name = "" value = "Submit">
                            </div>
                          </div>
                          </form>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
              </div>
      <div class="card-body">

    <?php

    if(isset($_POST['search']))
    {
        $valueToSearch = $_POST['valueToSearch'];
        // search in all table columns
        // using concat mysql function
        $query = "SELECT * FROM `reportstbl` WHERE CONCAT(`RepID`, `Filename`, `SDate`) LIKE '%".$valueToSearch."%'";
        $search_result = filterTable($query);
        
    }
     else {
        $query = "SELECT * FROM `reportstbl`";
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

    <form action="accomplishment.php" method="post">
                                    <div class="input-group mb-3">
                                        <input type="text" name="valueToSearch" class="rounded" placeholder="Search data" style="text-transform: capitalize;">
                                        <input type="submit" class="btn btn-primary" name="search" value="Sort">
                                    </div>
                                </form>

              <div class="container">
            <p>
              <button class="btn btn-primary TablePrinting" id="TablePrinting">Print Table</button>
            </p>
      
                <table id='tblAccomplishment' class='table table-bordered table-striped' style="text-align:center;">
                  <caption style="text-align: center;font-weight: bold;">Republic of the Philippines<br>Municipality of Sinait, Duyay-yat<br>Ilocos Sur, 2733</p>
                <?php 
                include ("condb.php");
                  echo"<thead>
                  <tr>
                    <th width='10%'>Report ID</th>
                    <th>Filename</th>
                    <th>Date Submitted</th>
                  </tr>";

                  while($row = mysqli_fetch_array($search_result))
                  {

                  echo"<tbody>";
                  echo "<tr>";
                  echo "<form method='POST' action='certificate.php?id=" . $row['RepID'] . "'>"; 
                  echo "<input type='hidden' id='ID' name='ID' value='" . $row['RepID'] . "'>";
                  echo "<td>" . $row['RepID'] . " </td> ";
                  echo '<td><a href="reportDownload.php?src='.$row['Filename'].'&download=true">'.$row['Filename'].'</a></td>';
                  echo "<td>" . $row['SDate'] . " </td></form>";
                  echo "</tr>";
                }
                 echo" <div class='modal fade' id='archive'>
                        <div class='modal-dialog modal-md'>"; 
                          echo " <form action='RemoveResident.php?' method='POST'>
                          <div class='modal-content'>
                            <div class='modal-header'>
                              <h4 class='modal-title'>Archive the Resident?</h4>
                                <span aria-hidden='true'>&times;</span>
                              </button>
                            </div>";

                            echo "<div class='col-12'>
                            <label for=''>Resident ID</label>
                                 <input style = 'text-align:center' type='text' name = 'aID' id = 'aID' class='form-control' readonly>
                            <label for=''>Reason of Leaving Barangay</label>
                                 <input style = 'text-align:center' type='text' name = 'Remarks' id = 'Remarks' class='form-control'>
                              </div>";
                       echo "<input onSubmit = '' type = 'submit' class='btn btn-success' data-toggle='modal' data-target='#add' value = 'Yes'>
                       </div>
                         </div>
                          </div>
                          </form>";
                   ?>
         
                </table>
                <?php

                        $sql2 = "SELECT * FROM residenttbl";
                        $result2 = mysqli_query($cn, $sql2);
                        $row2 = mysqli_fetch_assoc($result2);

                      echo" <div class='modal fade' id='edit'>
                        <div class='modal-dialog modal-md'>"; 
                          echo " <form action='userUpdate.php?id=" . $row2['RID'] . "' method='POST'>
                          <div class='modal-content'>
                            <div class='modal-header'>
                              <h4 class='modal-title'>Update User</h4>
                              <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                              </button>
                            </div>
                            <div class='card card-primary'>
                              <div class='card-body'>
                      <div class='row'>";

                      echo'<div class="col-12">
                            <label for="">Resident ID</label>
                                 <input style = "text-align:center" type="text" name = "rID" id = "rID" class="form-control" readonly>
                              </div>';
                      
                     echo'<div class="col-6">
                            <label for="">Firstname</label>
                           <input type="text" name = "fname" id = "fname" class="form-control" placeholder="Enter Firstname">
                        </div>';
                     echo'<div class="col-6">
                             <label for="">Middlename</label>
                          <input type="text" name = "mname" id = "mname" class="form-control" placeholder="Enter Middlename">
                        </div>';
                     echo '<div class="col-6">
                                  <label for="">Lastname</label>
                          <input type="text" name = "lname" id = "lname" class="form-control" placeholder="Enter Lastname">
                        </div>
                        <div class="col-6">
                                  <label for="">Username</label>
                          <input type="text" name = "username" class="form-control" placeholder="Enter Username" required>
                        </div>
                        <div class="col-6">
                                  <label for="">Password</label>
                          <input type="password" name ="password" class="form-control" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"required>
                        </div>
                        <div class="col-6">
                                  <label for="">Confirm Password</label>
                          <input type="password" name ="conpassword" class="form-control" placeholder="Confirm Password" required>
                        </div>';
                     echo '<div class="col-12">
                                  <label for="">Address</label>
                          <input type="text" id ="address2" name ="address2" class="form-control" readonly>
                        </div>
                        <div class="col-6">
                                  <label for="">Province</label>
                          <select name ="province2" id = "province2" class="form-control" onchange="copyTextValue2()" required>
                                  <option value=" ">Select Province</option>
                                  <option>Ilocos Sur</option>
                                </select>
                        </div>
                        <div class="col-6">
                                  <label for="">Municipality</label>
                          <select name ="municipality2" id = "municipality2" class="form-control" onchange="copyTextValue2()" required>
                                  <option value=" ">Select Municipality</option>
                                  <option>Sinait</option>
                                </select>
                        </div>
                        <div class="col-6">
                                  <label for="">Barangay</label>
                          <select name ="barangay2" id = "barangay2" class="form-control" onchange="copyTextValue2()" required>
                                <option value=" ">Select Barangay</option>
                                <option>Aguing</option>
                                <option>Aguing</option>
                                <option>Ballaigui (Poblacion)</option>
                                <option>Baliw</option>
                                <option>Baracbac</option>
                                <option>Barikir</option>
                                <option>Battog</option>
                                <option>Binacud</option>
                                <option>Cabangtalan</option>
                                <option>Cabarambanan</option>
                                <option>Cabulalaan</option>
                                <option>Cadanglaan</option>
                                <option>Calingayan</option>
                                <option>Curtin</option>
                                <option>Dadalaquiten Norte</option>
                                <option>Dadalaquiten Sur</option>
                                <option>Duyay-yat</option>
                                <option>Jordan</option>
                                <option>Calanutian</option>
                                <option>Katipunan
                                <option>Macabiag (Poblacion)</option>
                                <option>Magsaysay</option>
                                <option>Marnay</option>
                                <option>Masadag</option>
                                <option>Nagcullooban</option>
                                <option>Nagbalioartian</option>
                                <option>Nagongburan</option>
                                <option>Namnama (Poblacion)</option>
                                <option>Pacis</option>
                                <option>Paratong</option>
                                <option>Dean Leopoldo Yabes (Pug-os)</option>
                                <option>Purag</option>
                                <option>Quibit-quibit</option>
                                <option>Quimmallogong</option>
                                <option>Rang-ay (Poblacion)</option>
                                <option>Ricudo</option>
                                <option>Sabangan (Marcos)</option>
                                <option>Sallacapo</option>
                                <option>Santa Cruz</option>
                                <option>Sapriana</option>
                                <option>Tapao</option>
                                <option>Teppeng</option>
                                <option>Tubigay</option>
                                <option>Ubbog</option>
                                <option>Zapat</option>
                                </select>
                        </div>';
                     echo '<div class="col-6">
                                  <label for="">Date of Birth</label>
                          <input type="date" name ="dob" class="form-control" required="">
                        </div>';
                     echo '<div class="col-6">
                                  <label for="">Gender</label>
                            <select name ="gender" id = "gender" id = "gender" class="form-control">
                                  <option>Male</option>
                                  <option>Female</option>
                                </select>
                            </div>';
                             echo '<div class="col-6">
                                  <label for="">Civil Status</label>
                          <select name ="civil" id = "civil" class="form-control" required>
                                  <option>Married</option>
                                  <option>Widowed</option>
                                  <option>Separated</option>
                                  <option>Divorced</option>
                                  <option>Single</option>
                                </select>
                        </div>';
                        echo'<div class="col-6">
                                  <label for="">Occupation</label>
                          <input type="text" name = "occupation" class="form-control" placeholder="Enter Occupation" required>
                        </div>
                        <div class="col-6">
                                  <label for="">Annual Income</label>
                          <select name ="income" id = "income" class="form-control" required>
                                  <option>N/A</option>
                                  <option>10,000 - below</option>
                                  <option>10,000 - 30,000</option>
                                  <option>30,000 - 50,000</option>
                                  <option>50,000 - 70,000</option>
                                  <option>70,000 - above</option>
                                </select>
                        </div>';
                        echo'
                        
                      </div>
                    </div>
                          </div>';
                            echo '<div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>Close</button>';
                        
                        //<a  href='Update.php?id=" . $row2['RID'] . "'>Confirm</a>
                       
                       echo '<input type= "submit" class="btn btn-success" name = "" value = "Submit">';
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