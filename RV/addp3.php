<?php

if(isset($_POST['insert']))
{
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection, 'sretool');
    $requirement = $_POST['requirement'];
    $error = $_POST['error'];
    $solution = $_POST['solution'];
    $correctby = $_POST['correctby'];
    $cdate = $_POST['cdate'];
    $supportby = $_POST['supportby'];
    $sdate = $_POST['sdate'];

    $query = "INSERT INTO rvp3(requirement,error,solution,correctby,cdate,supportby,sdate) VALUES ('".$_POST["requirement"]."','".$_POST["error"]."','".$_POST["solution"]."','".$_POST["correctby"]."','".$_POST["cdate"]."','".$_POST["supportby"]."','".$_POST["sdate"]."')";

    $query_run = mysqli_query($connection, $query);

    if(!$query_run)
    {
      echo '<script> alert("Data Not Saved"); </script>';
    }
    
    if($requirement !=''&& $error !=''&& $correctby !=''&& $supportby !='')
{
//  To redirect form on a particular page
header("Location:previewp3.php");
}
else{
?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
}

}

?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SRE Tool</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.minn.css" rel="stylesheet">
  <link href="rvp.css" rel="stylesheet">
  <link href="principletwo.css" rel="stylesheet">
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laptop-code"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SRE Tool </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-id-badge"></i>
             <span>Profile</span></a>
      </li>

      <hr class="sidebar-divider my-0">

      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-tasks"></i>
            <span>Progress</span></a>
      </li>


      <!-- Divider -->
      <!-- <hr class="sidebar-divider"> -->

      <!-- Heading -->
      <!-- <div class="sidebar-heading">
        interface
      </div> -->

     

       
      <!-- Nav Item - Pages Collapse Menu -->
      <hr class="sidebar-divider my-0">

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-folder"></i>
          <span>Modules</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">REQUIREMENT</h6>
            <a class="collapse-item" href="buttons.html">1- Elicitation</a>
            <a class="collapse-item" href="cards.html">2- Documentation</a>
            <a class="collapse-item" href="cards.html">3- Negotiation</a>      
            <a class="collapse-item" href="rvpoption.php">4- Validation</a> 
            <a class="collapse-item" href="cards.html">5- Management</a>

          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoo" aria-expanded="true" aria-controls="collapseTwoo">
          <i class="far fa-folder-open"></i>
          <span>Requirement Validation</span>
        </a>
        <div id="collapseTwoo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="principles.php">Principles</a>
            <a class="collapse-item" href="techniques.php">Techniques</a>
          </div>
        </div>
      </li>
    
 <!-- Setting thing -->
 <hr class="sidebar-divider my-0">

 <li class="nav-item">
   <a class="nav-link" href="index.html">
     <i class="fas fa-fw fa-wrench"></i>
       <span>Setting</span></a>
 </li>
     

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

        

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
                
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

  

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Akhma Luna</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <h1  class="h3 mb-4 text-gray-800"><strong>PRINCIPLE 3: VALIDATION FROM DIFFERENT VIEW
            </strong>
            </h1>
          
            <div style="background: linear-gradient(to bottom right, #4e73df 8%, #ff99cc 100%)" class="jumbotron ">
              <div class="container">
                <form action="addp3.php" method ="post" id="my-form">
                   <br>
                
                  <select name = "requirement" id = "principle3" class="custom-select mb-3">
                    <option selected>Choose requirement</option>
                    <option value="F01">F01- The system should display the customer’s current location.</option>
                    <option value="F02">F02- The system should reduce wastage of raw materials to improve cost savings.</option>
                    <option value="F03">F03- The system should validate username and password of customer and restaurant manager.</option>
                    <option value="Q01">Q01- The system shall be able to run on Android and iOS.</option>
                    <option value="Q02">Q02- The system shall be simple to maintain and upgrade the software.</option>
                    <option value="Q03">Q03- The system will be able to response within 3 seconds.</option>
                  </select>

                  <div class="form-row">
  
                  <div class="form-group col-md-5">
                    <label for="errorFound"></label>
                    <textarea class="form-control" name = "error" rows="7" id="errorFound" placeholder="Error(s)..."></textarea>
                  </div>
  
                  <div class="form-group col">
                    <label for="solution"></label>
                    <textarea class="form-control" name="solution" rows="7" id="solution" placeholder="Solution..."></textarea>
                  </div>
  
                  
                </div>
  
                 <!-- <label  class="showOverlay" for="check">Show mask </label>
                      <input id="check" class="check" type="checkbox"> -->
                      <!-- <div class="containerrrOuter">
                        <div class="containerrr" >
                          <input type="radio" class="hidden" id="input1" name="status">
                          <label class="entry" for="input1"><div class="circle"></div><div name="ip" value = "ip" class="entry-label">In progress</div></label>
                          <input type="radio" class="hidden" id="input2" name="status">
                          <label class="entry" for="input2"><div class="circle"></div><div name="solved" value = "solved" class="entry-label">Solved</div></label>
                          <input type="radio" class="hidden" id="input3" name="status">
                          <label class="entry" for="input3"><div class="circle"></div><div name="wbs" value = "wbs" class="entry-label">Will be seen</div></label>
                          <div class="highlight"></div>
                          <div class="overlay"></div>
                        </div>
                      </div>
                      <svg width="0" height="0" viewBox="0 0 40 140">
                        <defs>
                          <mask id="holes">
                            <rect x="0" y="0" width="100" height="140" fill="white" />
                            <circle r="12" cx="20" cy="20" fill="black"/>
                            <circle r="12" cx="20" cy="70" fill="black"/>
                            <circle r="12" cx="20" cy="120" fill="black"/>
                          </mask>
                        </defs>
                      </svg> -->
  
                <div class="form-row">
                  <div class="form-group col-md-8">
                    <label for="correctName"></label>
                    <input type="Name" class="form-control" name="correctby" id="correctBy" placeholder="Corrected by :" >
                  </div>
                  <div class="form-group col">
                    <label for="correctDate"></label>
                    <input type="date" class="form-control" name="cdate" id="DateCorrect" placeholder="Date :">
                  </div>
                </div>                
  
                <div class="form-row">
                  <div class="form-group col-md-8">
                    <label for="supportName"></label>
                    <input type="Name" class="form-control" name="supportby" id="supportByy" placeholder="Support by :" >
                  </div>
                  <div class="form-group col">
                    <label for="supportDate"></label>
                    <input type="date" class="form-control" name="sdate" id="DateSupportt" placeholder="Date :">
                  </div>
                </div>    
  
                  </div>
<br>
                  <button type="submit" name="insert" value = "submit"  class="btn btn-primary btn btn-block" style='width:400px;margin:0 50%;position:relative;left:-14em;'> Save Data </button>
                </form>
                <br>
              </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script src="rvp.js"></script>


</body>

</html>
