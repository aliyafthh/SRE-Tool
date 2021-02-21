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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">


  <?php
  require_once "config.php";
  $id = 0;
  $mID = 0;
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
        <a class='nav-link' href="../RM/index.php?id=<?php echo $id; ?>">
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
              <a class="nav-link dropdown-toggle" href="../RM/home.php?id=<?php echo $id ?>" role="button">
                <span class="mr-2 d-none d-lg-inline small" style="color: lightgoldenrodyellow;">Home</span>
              </a>
            </li>

            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="/SRET/sret/Elicitation/createReq.php?id=<?php echo $id ?>" role="button">
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
              <a class="nav-link dropdown-toggle" href="../RM/index.php?id=<?php echo $id ?>" role="button">
                <span class="mr-2 d-none d-lg-inline small" style="color: lightgoldenrodyellow;">Manage Requirement</span>
              </a>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline small" style="color: lightgoldenrodyellow;"><?php echo $id;?></span>
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
                <h2>Requirement Elicitation </h2>
              </h3>

              <button type="button" class="btn btn-pastel" data-toggle="modal" data-target="#addReqModal" style="float:right;"><i class="material-icons">&#xE147;</i> Add New Requirement</button>
              <br class="clearBoth" /><br>
              <?php
              if (isset($_GET['id'])) {
                $studentID = 0;
                for ($i = 1; $i < 6; $i++) {
                  $queryA = "SELECT id FROM createproject WHERE groupmember" . $i . "=" . $id;
                  $resultA = $mysqli->query($queryA);
                  if ($resultA->num_rows > 0) {
                    while ($rowA = $resultA->fetch_assoc()) {
                      $studentID = $i;
                    }
                  }
                }

                $query = "SELECT * FROM elicitation";
                $result = $mysqli->query($query);
                $mID = "m" . $studentID;
                if ($result->num_rows > 0) {
                  echo "<table class='table table-striped' id='req'>";
                  echo "<thead>
                <tr>
                <th style='display:none;'onclick='sortTable(0)'>No</th>
                <th onclick='sortTable(1)'>Requirement</th>
                <th onclick='sortTable(2)'>&nbsp &nbsp Edit/Delete</th>
                <th onclick='sortTable(3)'>&nbsp &nbsp &nbsp Approval</th>
                </tr></thead><tbody>";
                  // output data of each row
                  while ($row = $result->fetch_assoc()) {
                    echo "<tr><td style='display:none;'>" . $row["id"] . "</td>
                  <td>" . $row["requirement"] . "</td>";
                    echo "<td><button type='button' class='btn editbtn'><i class='far fa-edit fa-lg'></i></button>
                  <button type='button' class='btn deletebtn'><i class='far fa-trash-alt fa-lg'></i></button></td>";
                    if ($row[$mID] == null) {
                      echo "<td><button type='button' class='btn approvalbtn'>Pending <i class='fas fa-cog fa-pulse'></i></i></button></td>";
                    } elseif ($row[$mID] == true) {
                      echo "<td><button type='button' class='btn approvalbtn'>Approved <i class='fas fa-check' style='color:green;'></i></i></button></td>";
                    } elseif ($row[$mID] == false) {
                      echo "<td><button type='button' class='btn approvalbtn'>Rejected <i class='fas fa-times' style='color:red;'></i></button></td>";
                    }

                    echo "</tr>";
                  }
                  echo "</tbody></table>";
                } else {
                  echo "No Requirements Created Yet.";
                }
              } else {
                echo "<br>";
                echo "Nothing to see yet, please join a group.";
              }

              $queryB = "UPDATE elicitation SET approved=1 WHERE m1=1 AND m2=1 AND m3=1 AND m4=1 AND m5=1";
              $resultB = $mysqli->query($queryB);
              ?>
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
            <a class="btn btn-primary" href="../RM/home.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </div>

    <?php
         $queryC = "SELECT * FROM elicitation WHERE approved=1";
         $resultC = $mysqli->query($queryC);
         if ($resultC->num_rows > 0) {
          while ($row = $resultC->fetch_assoc()) {
            $queryD = "INSERT INTO rvp2 (id,requirement) VALUES ('" . $row['id'] . "','" .$row['requirement']. "'); ";
            $resultD = $mysqli->query($queryD);
          }
         }
              
    ?>          

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script src="rvp.js"></script>

  <!-- Add Requirement Modal-->
  <div class="modal fade" id="addReqModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addModalLabel">Add New Requirement</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="insertReq.php?id=<?php echo $id; ?>" method="POST" autocomplete="off">
          <div class="modal-body">

            <div class="form-group">
              <label>Requirement</label>
              <input type="text" name="requirement" class="form-control" placeholder="Enter requirement">
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

  <!-- ###################################################################################################################################### -->

  <!-- Edit Requirement Modal -->

  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit Requirement</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="updateReq.php?id=<?php echo $id; ?>" method="POST" autocomplete="off">

          <input type="hidden" name="update_id" id="update_id">

          <div class="modal-body">

            <div class="form-group">
              <label>Requirement</label>
              <input type="text" name="requirement" id="requirement" class="form-control" placeholder="Enter requirement">
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="updateData" class="btn btn-primary">Save changes</button>
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
          <h5 class="modal-title" id="deleteModalLabel">Delete Requirement</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="deleteReq.php?id=<?php echo $id; ?>" method="POST">

          <div class="modal-body">

            <input type="hidden" name="delete_id" id="delete_id">


            <h4>Are you sure you want to delete this requirement?</h4>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
            <button type="submit" name="deleteData" class="btn btn-primary">Yes</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Approve Requirement Modal -->

  <div class="modal fade" id="approvalModal" tabindex="-1" role="dialog" aria-labelledby="approvalModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Approval Status</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="approveReq.php?id=<?php echo $id; ?>" method="POST" autocomplete="off">

          <input type="hidden" name="approval_id" id="approval_id">
          <input type="hidden" name="member" value="<?php echo $mID; ?>">

          <div class="modal-body">

            <div class="form-group" style="text-align:center;">
              <h3>Do you approve the requirement created?</h3>
              <div class="button inline">
                <input type="radio" name="approval" value="1" id="yes">
                <label for="yes"><i class="fas fa-check fa-3x" style="color:green;"></i></label>

              </div>
              <div class="button inline">
                <input type="radio" name="approval" value="0" id="no">
                <label for="no"><i class="fas fa-times fa-3x" style="color:red;"></i></label>
              </div>
              <br class="clearBoth" />
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="updateData" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  </div>

</body>
<script>
  $(document).ready(function() {
    $('.editbtn').on('click', function() {

      $('#editModal').modal('show');

      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function() {
        return $(this).text();
      }).get();

      console.log(data);

      $('#update_id').val(data[0]);
      $('#requirement').val(data[1]);

    });

  });

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

  $(document).ready(function() {
    $('.approvalbtn').on('click', function() {

      $('#approvalModal').modal('show');

      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function() {
        return $(this).text();
      }).get();

      console.log(data);

      $('#approval_id').val(data[0]);
      $('#member').val(data[1]);
      $('#approval').val(data[2]);

    });

  });

  function sortTable(n) {
    var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
    table = document.getElementById("req");
    switching = true;
    //Set the sorting direction to ascending:
    dir = "asc";
    /*Make a loop that will continue until
    no switching has been done:*/
    while (switching) {
      //start by saying: no switching is done:
      switching = false;
      rows = table.rows;
      /*Loop through all table rows (except the
      first, which contains table headers):*/
      for (i = 1; i < (rows.length - 1); i++) {
        //start by saying there should be no switching:
        shouldSwitch = false;
        /*Get the two elements you want to compare,
        one from current row and one from the next:*/
        x = rows[i].getElementsByTagName("TD")[n];
        y = rows[i + 1].getElementsByTagName("TD")[n];
        /*check if the two rows should switch place,
        based on the direction, asc or desc:*/
        if (dir == "asc") {
          if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
            //if so, mark as a switch and break the loop:
            shouldSwitch = true;
            break;
          }
        } else if (dir == "desc") {
          if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
            //if so, mark as a switch and break the loop:
            shouldSwitch = true;
            break;
          }
        }
      }
      if (shouldSwitch) {
        /*If a switch has been marked, make the switch
        and mark that a switch has been done:*/
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
        //Each time a switch is done, increase this count by 1:
        switchcount++;
      } else {
        /*If no switching has been done AND the direction is "asc",
        set the direction to "desc" and run the while loop again.*/
        if (switchcount == 0 && dir == "asc") {
          dir = "desc";
          switching = true;
        }
      }
    }
  }
</script>

</html>