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
  <link href="../Elicitation/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Custom styles for this template-->
  <link href="../Elicitation/css/sb-admin-2.min.css" rel="stylesheet">


  <?php
  require_once "config.php";
  $id =0;
  ?>
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
      background-image: url("../images/black.jpg");
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
      height: 50px;
    }

    @font-face {
      font-family: myFirstFont;
      src: url("../images/EraserDust.ttf");
    }

    .bodyody {
      background-color: #FCF0CF !important;
    }

    .sidenavi {
      background-color: #70AE98;
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
    <img src="../images/clip.gif" alt="Study" class="img1" style="margin-top: 20px;">
    <h2 class="hed">Software Requirements Engineering</h2>
    <img src="../images/paperplane.gif" alt="Study" class="img1">
  </div>
</header>

<br class="clearBoth" />

<!-- Body -->

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    <?php
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
    ?>
      <!-- Sidebar -->
      <ul class="navbar-nav sidenavi sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laptop-code"></i>
          </div>
          <div class="sidebar-brand-text mx-3">Navigation</div>
    
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <li class='nav-item'>
          <a class='nav-link' href="../RV/createProject.php?id=<?php echo $id; ?>">
            <i class="fas fa-book-open"></i>
            <span>Create Project</span></a>
        </li>
        <hr class="sidebar-divider my-0">

        <li class='nav-item'>
          <a class='nav-link' href="../Elicitation/createReq.php?id=<?php echo $id; ?>">
            <i class="fas fa-book-open"></i>
            <span>Requirement Elicitation</span></a>
        </li>
        <hr class="sidebar-divider my-0">

        <li class='nav-item'>
          <a class='nav-link' href="../Requirement Negotation/homeNego.php?id=<?php echo $id; ?>">
            <i class="fas fa-book-open"></i>
            <span>Requirement Negotiation</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class='nav-item'>
          <a class='nav-link' href="../RV/principles.php?id=<?php echo $id; ?>">
            <i class="fas fa-book-open"></i>
            <span>Requirement Validation</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class='nav-item'>
          <a class='nav-link' href="../RM/index.php?id=<?php echo $id; ?>" >
            <i class="fas fa-book-open"></i>
            <span>Requirement Management</span></a>
        </li>

        <br>
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

      </ul>
      <!-- End of Sidebar -->
    <?php
    }
    ?>
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

            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="index.php" role="button">
                <span class="mr-2 d-none d-lg-inline small" style="color: lightgoldenrodyellow;">About</span>
              </a>
            </li>


            <div class="topbar-divider d-none d-sm-block"></div>

            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="../RV/login.php" role="button">
                <span class="mr-2 d-none d-lg-inline small" style="color: lightgoldenrodyellow;">Login</span>
              </a>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="card shadow mb-4" style="background-color:rgba(255, 255, 255, 0.95)">
            <div class="card-body shadow-sm p-5">
              <img src="../images/5 SCENE.svg" alt="Online learning" width="700" height="500" style="float: left;">
              <div style="margin-top:5%; margin-right:5%;">
                <h3 class="text-muted">
                  <h2>Software Requirements Engineering Tool </h2>
                </h3>
                <br>
                <p>This tool aims to
                  promote hands-on experiences, role-play activities, and interaction between all students in a group with the
                  involvement of the lecturer. Students can actively engage with the content through discussions,
                  problem-solving, critical thinking, and resolving conflicts which are valuable to prepare students to make better
                  decisions and better employees one day.
                </p>
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

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../Elicitation/vendor/jquery/jquery.min.js"></script>
  <script src="../Elicitation/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../Elicitation/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../Elicitation/js/sb-admin-2.js"></script>

</body>

</html>