<!-- insert into db -->

<?php
if(isset($_POST['insert']))
{
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection, 'sretool');

    $groupleader = $_POST['groupleader'];
    $lecture = $_POST['lecture'];
    $projectname = $_POST['projectname'];
    $projectdesc = $_POST['projectdesc'];
    $groupmember1 = $_POST['groupmember1'];
    $groupmember2 = $_POST['groupmember2'];
    $groupmember3 = $_POST['groupmember3'];
    $groupmember4 = $_POST['groupmember4'];
    $groupmember5 = $_POST['groupmember5'];
    
    $query = "INSERT INTO createproject(groupleader,lecture,projectname,projectdesc,groupmember1,groupmember2,groupmember3,groupmember4,groupmember5) VALUES ('".$_POST["groupleader"]."','".$_POST["lecture"]."','".$_POST["projectname"]."','".$_POST["projectdesc"]."','".$_POST["groupmember1"]."','".$_POST["groupmember2"]."','".$_POST["groupmember3"]."','".$_POST["groupmember4"]."','".$_POST["groupmember5"]."')";

    $query_run = mysqli_query($connection, $query);

    if(!$query_run)
    {
      echo '<script> alert("Data Not Saved"); </script>';
    }
    if($groupleader !='' && $lecture !='' && $projectname !='' && $projectdesc !='' && $groupmember1 !='' && $groupmember2 !='' && $groupmember3 !='' && $groupmember4 !='' && $groupmember5 !='')
        {
        //  To redirect form on a particular page
        // *******
        header("Location:previewCreateProject.php");
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
  <link href="css/sb-admin-2.min.css" rel="stylesheet">


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

       
      <!-- Nav Item - Pages Collapse Menu -->
      <hr class="sidebar-divider my-0">

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-folder-open"></i>
          <span>Modules</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">REQUIREMENT:</h6>
            <a class="collapse-item" href="buttons.html">1- Elicitation</a>
            <a class="collapse-item" href="cards.html">2- Documentation</a>
            <a class="collapse-item" href="cards.html">3- Negotiation</a>      
            <a class="collapse-item" href="rvoption.html">4- Validation</a> 
            <a class="collapse-item" href="cards.html">5- Management</a>

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
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <img class="img-profile rounded-circle" src="https://images.unsplash.com/photo-1600880292089-90a7e086ee0c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80">
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

          <div class="container">

            <div class="card o-hidden border-0 shadow-lg my-5">
              <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                  <div class="col-lg-5 d-none d-lg-block svg-image"></div>
                  <div class="col-lg-7">
                    <div class="p-5">
                      <div class="text-center">
                        <h1 class="h3 text-gray-900 mb-4">Create New Project !</h1>
                      </div>
                      <form class = "user" action="createProject.php" id="my-form" method ="post">
                      <!-- <input type="hidden" name = "idd" id = "idd" value = "idd"> -->
                      
                        <div class="form-group row">
                          <div class="col-sm-8 mb-5 mb-sm-0">
                            <input type="text" class="form-control " name = "groupleader" id="groupleader" placeholder="Group Leader">
                          </div>
                          <div class="col-sm-4">
                            <!-- <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Lecture"> -->
                            <select name = "lecture" id = "lecture" class=" form-control custom-select" >
                              <option selected>Lecture</option>
                              <option value="Lecture 1">Lecture 1</option>
                              <option value="Lecture 2">Lecture 2</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" name = "projectname" id="projectname" placeholder="Project Name">
                        </div>
                        <div class="form-group">
                          <textarea class="form-control" name="projectdesc" rows="5" cols="30" id = "projectdesc" placeholder="Project Description"></textarea>
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" name = "groupmember1" id="groupmember1" placeholder="Member's ID 1">
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" name = "groupmember2" id="groupmember2" placeholder="Member's ID 2">
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" name = "groupmember3" id="groupmember3" placeholder="Member's ID 3">
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" name = "groupmember4" id="groupmember4" placeholder="Member's ID 4">
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" name = "groupmember5" id="groupmember5" placeholder="Member's ID 5">
                        </div>
                        <hr>

                        <button type="submit" name="insert" value = "submit"  class="btn btn-primary btn-user btn-block" > Save Project </button>
                        
                 
                      </form>
                      <hr>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
          </div>


        </div>  <!-- //jangan sentuh k ni -->
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


</body>

</html>
