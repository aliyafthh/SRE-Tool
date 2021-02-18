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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/9eba2c9c5c.js" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/umd/popper.min.js" integrity="sha512-eUQ9hGdLjBjY3F41CScH3UX+4JDSI9zXeroz7hJ+RteoCaY+GP/LDoM8AO+Pt+DRFw3nXqsjh9Zsts8hnYv8/A==" crossorigin="anonymous"></script>

  <!-- Custom styles for this template-->
  <link href="../Elicitation/css/sb-admin-2.min.css" rel="stylesheet">
  <!-- <link href="inspection.css" rel="stylesheet">
  <link href="checklist.css" rel="stylesheet"> -->

  <?php
  require_once "config.php";

  $query = $mysqli->query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'requirements'");

  while ($row = $query->fetch_assoc()) {
    $result2[] = $row;
  }

  // Array of all column names
  $columnArr = array_column($result2, 'COLUMN_NAME');
  $count = count($columnArr);
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

    .tab {
      overflow: hidden;
      border: 1px solid #ccc;
      border-top: none;
      border-right: none;
      border-left: none;
      background-color: transparent;
    }

    /* Style the buttons inside the tab */
    .tab button {
      background-color: inherit;
      /* float: left; */
      border: none;
      outline: none;
      cursor: pointer;
      padding: 14px 16px 0px 16px;
      transition: 0.3s;
      font-size: 17px;
      margin: 20px 200px 0px 200px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
      background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
      border: 5px solid mediumpurple;
      border-top: none;
      border-right: none;
      border-left: none;
    }

    /* Style the tab content */
    .tabcontent {
      font-size: 14px;
      text-align: left;
      width: 80%;
      float: left;
      display: none;
      padding: 6px 12px;
      margin: 30px 80px;
      border: none;

    }

    input[type=text] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 3px solid #ccc;
      border-radius: 3px;
      -webkit-transition: 0.5s;
      transition: 0.5s;
      outline: none;
    }

    input[type=text]:focus {
      border: 3px solid #555;
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
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
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
          <a class='nav-link' href=\"edit.php?id=$row2[id]\">
            <i class='fas fa-id-badge'></i>
            <span>" . $row2['title'] . "</span></a>
        </li>";

          echo "<hr class='sidebar-divider my-0'>";
          // echo "<br>";
          // echo "<a href=\"edit.php?id=$row2[id]\">" . $row2['title'] . "</a>";
          // echo "<br>";
        }
      } else {
        echo "";
      }

      $id = $_GET['id'];
      $arrayDepReq = array();
      $arrayReqDep = array();
      $query_d = "SELECT title FROM requirements WHERE  id = $id ";
      $query_run = mysqli_query($mysqli, $query_d);
      $row = $query_run->fetch_assoc();
      $title_d = $row['title'];

      ?>
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
              <a class="nav-link dropdown-toggle" href="../Elicitation/createReq.php" role="button">
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
              <a class="nav-link dropdown-toggle" href="index.php" role="button">
                <span class="mr-2 d-none d-lg-inline small" style="color: lightgoldenrodyellow;">Manage Requirement</span>
              </a>
            </li>

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
                <h2>Requirement Management </h2>
              </h3>
              <div class="tab">
                <button class="tablinks" id="defaultOpen" onclick="openCity(event, 'Linked Requirements')">Linked Requirements</button>
                <button class="tablinks" onclick="openCity(event, 'Edit')">Edit</button>

              </div>

              <?php


              //selecting data associated with this particular id
              $result = mysqli_query($mysqli, "SELECT * FROM requirements WHERE id=$id");
              ?>

              <div id="Edit" class="tabcontent">
                <form method="post" action="editReq.php" autocomplete="off">

                  <?php

                  while ($res = mysqli_fetch_array($result)) {
                    echo "<input type='hidden' name='update_id' id='update_id' value=\"" . $res[$columnArr[0]] . "\">";
                    for ($i = 1; $i < $count; $i++) {

                      if ($columnArr[$i] == "created_on" || $columnArr[$i] == "priority") {
                        echo "<label>" . $columnArr[$i] . "</label>";
                        echo "<input type='text' name=\"" . $columnArr[$i] . "\" class='form-control' value=\"" . $res[$columnArr[$i]] . "\" readonly>";
                      } elseif ($columnArr[$i] == "requirement" || $columnArr[$i] == "title") {
                        echo " <div class='form-group'>";
                        echo " <label>" . $columnArr[$i] . "</label>";
                        echo "<input type='text' name=\"" . $columnArr[$i] . "\" class='form-control' value=\"" . $res[$columnArr[$i]] . "\" required>";
                        echo "</div>";
                      } else {
                        echo " <div class='form-group'>";
                        echo " <label>" . $columnArr[$i] . "</label>";
                        echo "<input type='text' name=\"" . $columnArr[$i] . "\" class='form-control' value=\"" . $res[$columnArr[$i]] . "\">";
                        echo "</div>";
                      }
                    }
                  }

                  ?>
                  <div style="text-align: center;">
                    <button type="submit" name="updateReq" class="button">Save changes</button>
                  </div>
                </form>
              </div>

              <div id="Linked Requirements" class="tabcontent">
                <h5 style="display: inline-block; margin-left:10%;">Requirements this requirement is dependent on</h5>
                <?php
                $sql = "SELECT * FROM dependant WHERE id LIKE '" . $id . "%'";
                $result = $mysqli->query($sql);
                if ($result->num_rows == 0) {
                  echo '<button type="button" class="button" data-toggle="modal" data-target="#addDependentModal">Add New Link</button>';
                }
                ?>
                <table class='table table-striped' id="rm">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Title</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php



                    if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                        array_push($arrayReqDep, $row['id']);
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['title'] . "</td>";
                        echo "<td><button type='button' class='btn deletebtn'><i class='far fa-trash-alt fa-lg'></i></button></td>";
                        echo "</tr>";
                      }
                    } else {
                      echo "<tr><td></td><td>No requirements</td><td></td></tr>";
                    }
                    ?>
                  </tbody>

                </table>
                <br><br>
                <h5 style="display: inline-block; margin-left:10%;">Requirements that are dependent on this requirement</h5>
                <table class='table table-striped' id="rm">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Title</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                    $sql = "SELECT * FROM dependant WHERE id LIKE '%0" . $id . "'";
                    $result = $mysqli->query($sql);

                    if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                        array_push($arrayDepReq, $row['id']);
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['title_d'] . "</td>";
                        echo "<td><button type='button' class='btn deletebtn'><i class='far fa-trash-alt fa-lg'></i></button></td>";
                        echo "</tr>";
                      }
                    } else {
                      echo "<tr><td></td><td>No requirements</td><td></td></tr>";
                    }
                    ?>
                  </tbody>

                </table>

                <p></p>
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
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../Elicitation/vendor/jquery/jquery.min.js"></script>
  <script src="../Elicitation/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../Elicitation/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../Elicitation/js/sb-admin-2.js"></script>
  <!-- Add Dependent Modal -->

  <div class="modal fade" id="addDependentModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addModalLabel">Add New Dependent Link</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="insertDependant.php" method="POST" autocomplete="off">
          <div class="modal-body">

            <div class="form-group">
              <label>Select a requirement</label>
              <?php

              echo "<input type='hidden' name='id' value=" . $id . ">";
              echo "<input type='hidden' name='title_d' value='" . $title_d . "'>";

              ?>

              <br>
              <select name="did">
                <?php
                $query_1 = "SELECT * FROM requirements";
                $result_1 = $mysqli->query($query_1);
                $counter = 0;

                if ($result_1->num_rows > 0) {
                  // output data of each row
                  while ($row_1 = $result_1->fetch_assoc()) {
                    $id_1 = $row_1['id'];
                    $title_1 = $row_1['title'];
                    if ($id == $id_1 || in_array($id_1 . "0" . $id, $arrayDepReq) || in_array($id . "0" . $id_1, $arrayReqDep)) {
                    } else {
                      echo '<option value="' . $id_1 . '">' . $title_1 . '</option>';
                      $counter++;
                    }
                  }
                } else {
                  echo "";
                }
                ?>
              </select>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="insertData" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Delete Dependant Modal -->

  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">Delete Attribute</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="deleteDependant.php" method="POST">

          <div class="modal-body">

            <input type="hidden" name="delete_id" id="delete_id">
            <?php
            echo "<input type='hidden' name='id' value=" . $id . ">";
            ?>


            <h4>Are you sure you want to delete this link?</h4>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
            <button type="submit" name="deleteData" class="btn btn-primary">Yes</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function() {
      $('.deletebtn').on('click', function() {

        $('#deleteModal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
          return $(this).text();
        }).get();

        console.log(data);

        $('#delete_id').val(data[0]);

      });

    });

    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }

    document.getElementById("defaultOpen").click();
  </script>

</body>

</html>