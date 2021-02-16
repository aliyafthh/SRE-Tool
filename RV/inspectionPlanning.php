<!-- insert into db -->

<?php
if(isset($_POST['insert']))
{
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection, 'sretool');

    $goal =  $_POST['goal'];
    $work = $_POST['work'];
    $insdate = $_POST['insdate'];
    $insstart =  $_POST['insstart'];
    $insend = $_POST['insend'];
    $name1 = $_POST['name1'];
    $role1 = $_POST['role1'];
    $name2 = $_POST['name2'];
    $role2 = $_POST['role2'];
    $name3 = $_POST['name3'];
    $role3 = $_POST['role3'];
    $name4 = $_POST['name4'];
    $role4 = $_POST['role4'];
    $name5 = $_POST['name5'];
    $role5 = $_POST['role5'];
    $name6 = $_POST['name6'];
    $role6 = $_POST['role6'];

   
    $query = "INSERT INTO inspection1(goal,work,insdate,insstart,insend,name1,role1,name2,role2,name3,role3,name4,role4,name5,role5,name6,role6) VALUES ('".$_POST["goal"]."','".$_POST["work"]."','".$_POST["insdate"]."','".$_POST["insstart"]."','".$_POST["insend"]."','".$_POST["name1"]."','".$_POST["role1"]."','".$_POST["name2"]."','".$_POST["role2"]."','".$_POST["name3"]."','".$_POST["role3"]."','".$_POST["name4"]."','".$_POST["role4"]."','".$_POST["name5"]."','".$_POST["role5"]."','".$_POST["name6"]."','".$_POST["role6"]."')";

    $query_run = mysqli_query($connection, $query);

    if(!$query_run)
    {
      echo '<script> alert("Data Not Saved"); </script>';
    }
    if($goal !='' && $work !='' && $insdate !='' && $insstart !='' && $insend !='' && $name1 !='' && $role1 !='' && $name2 !='' && $role2 !=''&& $name3 !='' && $role3 !='' && $name4 !='' && $role4 !='' && $name5 !='' && $role5 !='' && $name6 !='' && $role6 !='')
{
//  To redirect form on a particular page
header("Location:previewInsPlanning.php");
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
  <link href="inspection.css" rel="stylesheet">
  <link href="checklist.css" rel="stylesheet">
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
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
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

        <div class="card shadow mb-4">
          <div class="card-body shadow-sm p-5">
            <!-- Arrow breadcrumb-->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-arrow p-0">
              <li aria-current="page" class="breadcrumb-item pl-0 active text-uppercase pl-4">Planning</li>
                <li class="breadcrumb-item"><a href="inspectionError.php" class="text-uppercase pl-3">Error Detection</a></li>
                <li class="breadcrumb-item pl-0"><a href="inspectionMeeting.php" class="text-uppercase">Meeting Session</a></li>
                
              </ol>
            </nav>
            <h4 class="text-muted"><b>Inspection : Planning Phase</b></h4>
            <div class="row">
                <div class="col-md-12">
                <div class="container">  
                    <form id="contact" action="inspectionPlanning.php" method="post">
                        <h3><b>Inspection</b> Planning</h3>
                        <hr>
                        <fieldset>
                        <input id = "goal" name= "goal" placeholder="Goal :" type="text" tabindex="1" required autofocus>
                        </fieldset>
                        <br>
                        <fieldset>
                        <textarea id = "work" name= "work" placeholder="Work to be inspect :" tabindex="5" required></textarea>
                        </fieldset>
                        
                         <div class="col-sm-13">
                        <label for="example-date-input" class="col-2 col-form-label">Date :</label>
                            <input placeholder = "Date :" class="form-control" type="date" value="Date:" id="insdate" name ="insdate">
                        </div>
                        <br>
                    <div class="form-group row">
                                            <div class="col-sm-6">
                        <label for="example-time-input" class="col-2 col-form-label">Start:</label>
                             <input class="form-control" type="time" value="Start time :" id="insstart" name ="insstart">
                         </div>

                        <div class="col-sm-6">               
                        <label for="example-time-input" class="col-2 col-form-label">End:</label>
                            <input class="form-control" type="time" value="End time :" id="insend" name ="insend">
                        </div>
                    </div>

                      <br>
                        <h3>Inspection Roles</h3>
                        <br>
                        <div class="form-group row">
                        <div class="col-sm-7 mb-3 mb-sm-0">
                        <fieldset>
                        <input placeholder="Name" type="text" tabindex="1" id="name1" name ="name1" required autofocus>
                        </fieldset>
                        </div>
                        <div class="col-sm-5">
                        <fieldset>
                        <!-- <input placeholder="Position" type="text" tabindex="1" id="role1" name ="role1" required autofocus> -->
                        <select name = "role1" id = "role1" class="custom-select" >
                              <option selected>Position</option>
                              <option value="Organizer">Organizer</option>
                              <option value="Requirement Engineering">Requirement Engineering</option>
                              <option value="Domain Expert">Domain Expert</option>
                              <option value="Development Representator">Development Representator</option>
                              <option value="Moderator">Moderator</option>
                              <option value="Inspector">Inspector</option>
                              <option value="Author">Author</option>
                              <option value="Reader">Reader</option>
                              <option value="Scribe">Scribe</option>
                          </select>
                        </fieldset>
                        </div>
                        <div class="col-sm-7 mb-3 mb-sm-0">
                        <fieldset>
                        <input placeholder="Name" type="text" tabindex="1" id="name2" name ="name2" required autofocus>
                        </fieldset>
                        </div>
                        <div class="col-sm-5">
                        <fieldset>
                        <select name = "role2" id = "role2" class="custom-select" >
                              <option selected>Position</option>
                              <option value="Organizer">Organizer</option>
                              <option value="Requirement Engineering">Requirement Engineering</option>
                              <option value="Domain Expert">Domain Expert</option>
                              <option value="Development Representator">Development Representator</option>
                              <option value="Moderator">Moderator</option>
                              <option value="Inspector">Inspector</option>
                              <option value="Author">Author</option>
                              <option value="Reader">Reader</option>
                              <option value="Scribe">Scribe</option>
                          </select>                        </fieldset>
                        </div>
                        <div class="col-sm-7 mb-3 mb-sm-0">
                        <fieldset>
                        <input placeholder="Name" type="text" tabindex="1" id="name3" name ="name3" required autofocus>
                        </fieldset>
                        </div>
                        <div class="col-sm-5">
                        <fieldset>
                        <select name = "role3" id = "role3" class="custom-select" >
                              <option selected>Position</option>
                              <option value="Organizer">Organizer</option>
                              <option value="Requirement Engineering">Requirement Engineering</option>
                              <option value="Domain Expert">Domain Expert</option>
                              <option value="Development Representator">Development Representator</option>
                              <option value="Moderator">Moderator</option>
                              <option value="Inspector">Inspector</option>
                              <option value="Author">Author</option>
                              <option value="Reader">Reader</option>
                              <option value="Scribe">Scribe</option>
                          </select>                        </fieldset>
                        </div>
                        <div class="col-sm-7 mb-3 mb-sm-0">
                        <fieldset>
                        <input placeholder="Name" type="text" tabindex="1" id="name4" name ="name4" required autofocus>
                        </fieldset>
                        </div>
                        <div class="col-sm-5">
                        <fieldset>
                        <select name = "role4" id = "role4" class="custom-select" >
                              <option selected>Position</option>
                              <option value="Organizer">Organizer</option>
                              <option value="Requirement Engineering">Requirement Engineering</option>
                              <option value="Domain Expert">Domain Expert</option>
                              <option value="Development Representator">Development Representator</option>
                              <option value="Moderator">Moderator</option>
                              <option value="Inspector">Inspector</option>
                              <option value="Author">Author</option>
                              <option value="Reader">Reader</option>
                              <option value="Scribe">Scribe</option>
                          </select>                        </fieldset>
                        </div>
                        <div class="col-sm-7 mb-3 mb-sm-0">
                        <fieldset>
                        <input placeholder="Name" type="text" tabindex="1" id="name5" name ="name5" required autofocus>
                        </fieldset>
                        </div>
                        <div class="col-sm-5">
                        <fieldset>
                        <select name = "role5" id = "role5" class="custom-select" >
                              <option selected>Position</option>
                              <option value="Organizer">Organizer</option>
                              <option value="Requirement Engineering">Requirement Engineering</option>
                              <option value="Domain Expert">Domain Expert</option>
                              <option value="Development Representator">Development Representator</option>
                              <option value="Moderator">Moderator</option>
                              <option value="Inspector">Inspector</option>
                              <option value="Author">Author</option>
                              <option value="Reader">Reader</option>
                              <option value="Scribe">Scribe</option>
                          </select>                        </fieldset>
                        </div>
                        <div class="col-sm-7 mb-3 mb-sm-0">
                        <fieldset>
                        <input placeholder="Name" type="text" tabindex="1" id="name6" name ="name6" required autofocus>
                        </fieldset>
                        </div>
                        <div class="col-sm-5">
                        <fieldset>
                        <select name = "role6" id = "role6" class="custom-select" >
                              <option selected>Position</option>
                              <option value="Organizer">Organizer</option>
                              <option value="Requirement Engineering">Requirement Engineering</option>
                              <option value="Domain Expert">Domain Expert</option>
                              <option value="Development Representator">Development Representator</option>
                              <option value="Moderator">Moderator</option>
                              <option value="Inspector">Inspector</option>
                              <option value="Author">Author</option>
                              <option value="Reader">Reader</option>
                              <option value="Scribe">Scribe</option>
                          </select>                        
                        </fieldset>
                        </div>
                        </div>
                        <fieldset>
                        <button type="submit" name="insert" value = "submit" >Save</button>
                        </fieldset>
                    </form>
                    </div>
                </div>

          </div>
        </div>
              
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


</body>

</html>
