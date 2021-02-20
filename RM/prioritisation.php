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
  $id = 0;
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
  }
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
      /* background-image: url("../images/wood.png"); */
      height: 50px;
    }

    @font-face {
      font-family: myFirstFont;
      src: url("../images/EraserDust.ttf");
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

    .donate-now {
      list-style-type: none;
      margin: 25px 0 0 0;
      padding: 0;
    }

    .donate-now li {
      float: left;
      margin: 0 5px 0 0;
      width: 150px;
      height: 40px;
      position: relative;
    }

    .donate-now label,
    .donate-now input {
      display: block;
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
    }

    .donate-now input[type="radio"] {
      opacity: 0.01;
      z-index: 100;
    }

    .donate-now input[type="radio"]:checked+label,
    .Checked+label {
      background: mediumpurple;
      color: white;
    }

    .donate-now label {
      padding: 5px;
      border: 1px solid #CCC;
      border-radius: 5px;
      cursor: pointer;
      z-index: 90;
    }

    .donate-now label:hover {
      background: #DDD;
    }

    input[type=submit],
    input[type=reset] {
      background-color: plum;
      border: none;
      color: white;
      padding: 8px 32px;
      text-decoration: none;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 7px;
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

    <!-- Sidebar -->
    <ul class="navbar-nav sidenavi sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php?id=<?php echo $id; ?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laptop-code"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Requirements</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <?php

      $query2 = "SELECT * FROM requirements";
      $result2 = $mysqli->query($query2);

      if ($result2->num_rows > 0) {
        // output data of each row
        while ($row2 = $result2->fetch_assoc()) {
          echo "<li class='nav-item'>
    <a class='nav-link' href=\"edit.php?id=$row2[id]&gId=$id\">
    <i class='fas fa-clipboard-list'></i>
      <span>" . $row2['title'] . "</span></a>
  </li>";

          echo "<hr class='sidebar-divider my-0'>";
        }
      } else {
        echo "";
      }

      ?>

      <li class='nav-item'>
        <a class='nav-link' href="/SRET/sret/RM/book/basic/index.html">
          <i class="fas fa-book-open"></i>
          <span>Handbook</span></a>
      </li>

      <br>
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
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="home.php?id=<?php echo $id; ?>" role="button">
                <span class="mr-2 d-none d-lg-inline small" style="color: lightgoldenrodyellow;">Home</span>
              </a>
            </li>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="../Elicitation/createReq.php?id=<?php echo $id; ?>" role="button">
                <span class="mr-2 d-none d-lg-inline small" style="color: lightgoldenrodyellow;">Create New Requirement</span>
              </a>
            </li>

            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" role="button">
                <span class="mr-2 d-none d-lg-inline small" style="color: lightgoldenrodyellow;">Negotiate Requirement</span>
              </a>
            </li>

            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" role="button">
                <span class="mr-2 d-none d-lg-inline small" style="color: lightgoldenrodyellow;">Validate Requirement</span>
              </a>
            </li>

            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="index.php?id=<?php echo $id; ?>" role="button">
                <span class="mr-2 d-none d-lg-inline small" style="color: lightgoldenrodyellow;">Manage Requirement</span>
              </a>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline small" style="color: lightgoldenrodyellow;"><?php echo $id; ?></span>
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
                <h2>Requirement Management </h2>
              </h3>
              <button class="button" onclick="location.href='manageColumn.php?id=<?php echo $id; ?>';">Manage Columns</button>
              <button class="button" onclick="location.href='manageViews.php?id=<?php echo $id; ?>';">Manage Views</button>
              <button class="button" onclick="location.href='prioritisation.php?id=<?php echo $id; ?>';">Prioritize Requirements</button>
              <div style="margin-left:5%; margin-right:10%; font-size:medium; text-align:left;">
                <h5><strong>Step 1: Determine purpose of prioritization and group requirements which need to be prioritized.</strong></h5>
                <form action="prioritisation2.php?id=<?php echo $id;?>" method="POST" class="mb-3" autocomplete="off">
                  <input type='text' name='purpose' class='form-control' placeholder="Purpose of prioritisation" required><br>
                  <h6><strong>Select all the requirements that applies</strong></h6>
                  <div class="options">
                    <?php
                    $sql = "SELECT * FROM requirements";
                    $result = $mysqli->query($sql);

                    if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                        echo "<label><input type='checkbox' name='req[]' id ='req' value='" . $row["id"] . "' required>   " . $row["title"] . "</label><br>";
                      }
                    } else {
                      echo "0 results";
                    }
                    ?>
                  </div>
                  <br>
                  <h5><strong>Step 2: Choose a prioritization criteria based on the purpose of prioritization.</strong></h5>
                  <pre style="float: left;">Criteria: </pre>
                  <select name="criteria" required>
                    <option value="">Please select</option>
                    <option value="Cost of implementation">Cost of implementation</option>
                    <option value="Duration of implementation">Duration of implementation</option>
                    <option value="Risk">Risk</option>
                    <option value="Stability">Stability</option>
                    <option value="Importance">Importance</option>
                    <option value="Business Value">Business Value</option>
                  </select>
                  <br><br>
                  <h5><strong>Step 3: Choose a prioritization technique.</strong></h5>
                  <ul class="donate-now">
                    <li>
                      <input type="radio" id="a25" name="technique" value="ranking" required />
                      <label for="a25">Ranking</label>
                    </li>
                    <li>
                      <input type="radio" id="a50" name="technique" value="kano" />
                      <label for="a50">Kano Classification</label>
                    </li>
                  </ul>

                  <br><br>

                  <input type="reset" value="Reset">
                  <input type="submit" name="conductTechnique" value="Submit">
                </form>




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
            <a class="btn btn-primary" href="home.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../Elicitation/vendor/jquery/jquery.min.js"></script>
  <script src="../Elicitation/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../Elicitation/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../Elicitation/js/sb-admin-2.js"></script>

  <script>
    $(function() {
      var requiredCheckboxes = $('.options :checkbox[required]');
      requiredCheckboxes.change(function() {
        if (requiredCheckboxes.is(':checked')) {
          requiredCheckboxes.removeAttr('required');
        } else {
          requiredCheckboxes.attr('required', 'required');
        }
      });
    });
  </script>


</body>

</html>