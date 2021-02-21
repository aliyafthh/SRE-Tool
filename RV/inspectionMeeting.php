<!-- insert into db -->

<?php
if(isset($_POST['insert']))
{
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection, 'sretool');

    $requirement = $_POST['requirement'];
    $class = $_POST['class'];
    $solution = $_POST['solution'];
    $decision = $_POST['decision'];
    $comment = $_POST['comment'];
   
    $query = "INSERT INTO inspection3(requirement,class, solution,decision,comment) VALUES ('".$_POST["requirement"]."','".$_POST["class"]."','".$_POST["solution"]."','".$_POST["decision"]."','".$_POST["comment"]."')";
    $query_run = mysqli_query($connection, $query);

    if(!$query_run)
    {
      echo '<script> alert("Data Not Saved"); </script>';
    }
    if($requirement !='' && $class !='' && $solution !='' && $decision !='' && $comment !='')
{
//  To redirect form on a particular page
header("Location:previewInsMeeting.php");
}
else{
?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
  }
}
?>
  
!DOCTYPE html>
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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/9eba2c9c5c.js" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/umd/popper.min.js" integrity="sha512-eUQ9hGdLjBjY3F41CScH3UX+4JDSI9zXeroz7hJ+RteoCaY+GP/LDoM8AO+Pt+DRFw3nXqsjh9Zsts8hnYv8/A==" crossorigin="anonymous"></script> -->

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="inspection.css" rel="stylesheet">
  <link href="checklist.css" rel="stylesheet">

 
  <style>
    .img1 {
      width: 10%;
      float: left;
    }

    .clearBoth {
      clear: both;
    }

    .hed {
      float: left;
      padding: 30px;
      margin-left: 10px;
      margin-top: 10px;
    }

    .heder {
      float: left;
      width: 100%;
      /* background-color: #F29D4B; */
      background-image: url("images/black.jpg");
      background-size: 1550px 135px;
      height: 120px;
    }

    .hed3 {
      margin-left: 24%;
      color: lightgoldenrodyellow;
      font-family: myFirstFont;
    }

    .topbarz {
      float: right;
      width: 100%;
      background-color: #F0A35E;
      /* background-image: url("../images/wood.png"); */
      height: 50px;
    }

    @font-face {
      font-family: myFirstFont;
      src: url("images/EraserDust.ttf");
    }

    .bodyody {
      /* background-image: url("../images/black.jpg");
      background-size: 1500px 1000px; */
      background-color: #FCF0CF !important;
    }

    .sidenavi {
      background-color: #70AE98;
      /* background-image: linear-gradient(180deg, #4e73df 10%, #224abe 100%); */
      background-size: cover;
      font-family: myFirstFont;
    }

    input[type="radio"] {
      display: none;
    }

    input[type="radio"]:checked+label {
      border: 2px solid lightgray;
      border-radius: 4px;
    }

    div.inline {
      float: left;
      margin-left: 16%;
      margin-right: 16%;
      padding: 10px;
    }

    .btn-pastel {
      color: #fff;
      background-color: #F6A7C1;
      border-color: #F6A7C1
    }

    .button {
      border-style: solid;
      border-width: 5px;
      border-radius: 12px;
      padding: 10px 10px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 30px 100px 30px;
      cursor: pointer;
      color: #fff;
      background-color: #F6A7C1;
      border-color: #F6A7C1
    }
  </style>

</head>
<!-- Header -->
<header class="heder">
  <div class="hed3">
    <img src="images/clip.gif" alt="Study" class="img1" style="margin-top: 20px;">
    <h2 class="hed">Software Requirements Engineering</h2>
    <img src="images/paperplane.gif" alt="Study" class="img1">
  </div>
</header>

<br class="clearBoth" />

<!-- Body -->

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidenavi sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laptop-code"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SRE Tool</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

<li class='nav-item'>
  <a class='nav-link' href="../RV/createProject.php">
    <i class="fas fa-book-open"></i>
    <span>Create Project</span></a>
</li>
    <hr class="sidebar-divider my-0">

    <li class="nav-item">
      
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <li class='nav-item'>
      <a class='nav-link' href="../Elicitation/createReq.php">
        <i class="fas fa-book-open"></i>
        <span>Requirement Elicitation</span></a>
    </li>
    <hr class="sidebar-divider my-0">

    <li class='nav-item'>
      <a class='nav-link' href="../Requirement Negotation/homeNego.php">
        <i class="fas fa-book-open"></i>
        <span>Requirement Negotiation</span></a>
    </li>
    <hr class="sidebar-divider my-0">
    <li class='nav-item'>
      <a class='nav-link' href="../RV/rvpoption.php">
        <i class="fas fa-book-open"></i>
        <span>Requirement Validation</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoo" aria-expanded="true" aria-controls="collapseTwoo">
          <i class="far fa-folder-open"></i>
          <span>Validation</span>
        </a>
        <div id="collapseTwoo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="principles.php">Principles</a>
            <a class="collapse-item" href="techniques.php">Techniques</a>
          </div>
        </div>
      </li>
    <hr class="sidebar-divider my-0">
    <li class='nav-item'>
      <a class='nav-link' href="../RM/index.php?id=<?php echo $id; ?>" >
        <i class="fas fa-book-open"></i>
        <span>Requirement Management</span></a>
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
    <div id="content-wrapper" class="d-flex flex-column bodyody">
      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow topbarz">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
           

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline small" style="color: lightgoldenrodyellow;">Akhma Luna</span>
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
          <div class="card shadow mb-4" style="background-color:rgba(255, 255, 255, 0.95)">
            <div class="card-body shadow-sm p-5">
              <h3 class="text-muted">
              <div class="card shadow mb-4">
          <div class="card-body shadow-sm p-5">
            <!-- Arrow breadcrumb-->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-arrow p-0">
              <li class="breadcrumb-item"><a href="inspectionPlanning.php" class="text-uppercase pl-3">Planning</a></li>
              <li class="breadcrumb-item pl-0"><a href="inspectionError.php" class="text-uppercase">Error Detection</a></li>
              <li aria-current="page" class="breadcrumb-item pl-0 active text-uppercase pl-4">Meeting Session</li>
               
              </ol>
            </nav>
            <h4 class="text-muted"><b>Inspection : Meeting</b></h4>
            <div class="row">
                <div class="col-md-12">
                <div class="container">  
                    <form id="contact" action="inspectionMeeting.php" method="post">
                        <h3><b>Meeting</b> Session</h3>
                        <hr>
                        <fieldset>
                        <select name = "requirement" id = "requirement" class="custom-select sm-3">
                            <option selected>Choose requirement</option>
                            <option value="F01">F01- The system should display the customer’s current location.</option>
                            <option value="F02">F02- The system should reduce wastage of raw materials to improve cost savings.</option>
                            <option value="F03">F03- The system should validate username and password of customer and restaurant manager.</option>
                            <option value="Q01">Q01- The system shall be able to run on Android and iOS.</option>
                            <option value="Q02">Q02- The system shall be simple to maintain and upgrade the software.</option>
                            <option value="Q03">Q03- The system will be able to response within 3 seconds.</option>
                        </select>
                        </fieldset>
                        <br>
                        <fieldset>
                        <select name = "class" id = "class" class="custom-select sm-3">
                            <option selected>Classifications of findings</option>
                            
                            <option value="Critical Error">Critical error : Must be fixed, no approval of checked item without further review</option>
                            <option value="Major Defect">Major defect : Shall be fixed, no approval without update of checked item</option>
                            <option value="Minor Defect">Minor defect : The checked item can be approved with/without update (Grammar/Layout)</option>
                            <option value="Open Issue">Open issue : No approval of the checked item without clarification</option>
                            <option value="Good">Good</option>
                            
                        </select>
                        </fieldset>
                        <br>
                        <fieldset>
                        <textarea name = "solution" id = "solution" placeholder="Solution :" tabindex="5" required></textarea>
                        </fieldset>
                        <br>
                        <fieldset>
                        <select name = "decision" id = "decision" class="custom-select sm-3">
                            <option selected>Decision</option>
                            <option value="Accept">Accept [With or without update]</option>
                            <option value="Reject">Reject [Update is compulsary, Re-revie is mandatory]</option>
                        </select>
                        </fieldset>
                        <br>
                        <fieldset>
                            <textarea name = "comment" id = "comment" placeholder="Comments..." tabindex="5" required></textarea>
                            </fieldset>
                            <br>
                       
                        <fieldset>
                        <button type="submit" name="insert" value = "submit">Save</button>                        
                        </fieldset>
                    </form>
                    </div>
                </div>

          </div>
        </div>

                
              </h3>
             
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
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.js"></script>

</body>

</html>