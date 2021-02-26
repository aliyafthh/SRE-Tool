
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="css/nego.css" rel="stylesheet">

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
  include_once ("config.php");
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
      $student_id = $_GET['id'];
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
          <a class='nav-link' href="../RV/createProject.php?id=<?php echo $student_id; ?>">
            <i class="fas fa-book-open"></i>
            <span>Create Project</span></a>
        </li>

        <hr class="sidebar-divider my-0">

        <li class='nav-item'>
        <a class='nav-link' href="../Requirement Negotation/winwinTree.php?id=<?php echo $student_id; ?>">
            <i class="fas fa-book-open"></i>
            <span>WinWin Tree</span></a>
        </li>
        <hr class="sidebar-divider my-0">

        <li class='nav-item'>
          <a class='nav-link' href="../Elicitation/createReq.php?id=<?php echo $student_id; ?>">
            <i class="fas fa-book-open"></i>
            <span>Requirement Elicitation</span></a>
        </li>
        <hr class="sidebar-divider my-0">

        <li class='nav-item'>
          <a class='nav-link' href="../Requirement Negotation/homeNego.php?id=<?php echo $student_id; ?>">
            <i class="fas fa-book-open"></i>
            <span>Requirement Negotiation</span></a>
        </li>

        <li class='nav-item'>
          <a class='nav-link' href="../Requirement Negotation/noteNego.php?id=<?php echo $student_id; ?>">
            <i class="fas fa-pencil-alt"></i>
            <span>Extra Notes</span></a>
        </li>

        <hr class="sidebar-divider my-0">
        <li class='nav-item'>
          <a class='nav-link' href="../RV/principles.php?id=<?php echo $student_id; ?>">
            <i class="fas fa-book-open"></i>
            <span>Requirement Validation</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class='nav-item'>
          <a class='nav-link' href="../RM/index.php?id=<?php echo $student_id; ?>">
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
    }else{
      header("Location: 404.php");
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

            <?php if (isset($_GET['id'])) {
              echo '<div class="topbar-divider d-none d-sm-block"></div>';
              echo '<li class="nav-item dropdown no-arrow">';
              echo '<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline small" style="color: lightgoldenrodyellow;">' . $student_id . '</span>
                  <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                </a>';

              echo ' <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </a>
                </div>
              </li>';
            } else {

              echo "<li class='nav-item dropdown no-arrow'>";
              echo "<a class='nav-link dropdown-toggle' href='../RV/login.php' role='button'>";
              echo " <span class='mr-2 d-none d-lg-inline small' style='color: lightgoldenrodyellow;'>Login</span>";
              echo " </a>
              </li>";
            } ?>
          </ul>

        </nav>
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <?php $agreements="SELECT * FROM createproject";
                    $output=$mysqli->query($agreements) or die($mysqli->error);
                    if($output->num_rows){}
                    else{
                      while($list=$output->fetch_assoc()){
                        for($i=1;$i<=5;$i++){
                          $member='groupmember'.$i;
                          $role="role".$i;
                          $mysqli->query("INSERT INTO rn_user(group_id,student_id,roles) VALUES('".$list['id']."','".$list[$member]."','".$list[$role]."')") 
                          or die($mysqli->error);
                        }
                      }
                    }
           ?>
          <!-- Page Heading -->
          <?php $result="SELECT * FROM elicitation WHERE approved=1";
                    $output=$mysqli->query($result) or die($mysqli->error);
                    if($output->num_rows){?>
          <h1 class="h3 mb-4 text-gray-800">Requirement Negotiation</h1>
                  <ul class="breadcrumbs">
                      <li class="breadcrumbs__item">
                          <a href="" style="text-decoration:none" class="breadcrumbs__link--active">Requirement Negotiation</a>
                      </li>
                  </ul>
                  <div class="card">
                      <div class="card-body">
                          <div class="row">
                          <p>For more information about Requirement Negotiation, go to "Extra Notes section"</p>
                              <div class="table-box">
                              <table class="table table-bordered" >
                                  <thead >
                                      <tr>
                                          <th rowspan="2" class="text-center">Id</th>
                                          <th rowspan="2" class="text-center">Requirement</th>
                                          <th colspan="3" class="text-center">Status</th>
                                      </tr>
                                      <tr>
                                          <th>Identify Issue</th>
                                          <th>Suggest Option</th>
                                          <th>Vote Option</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                          $result=$mysqli->query("SELECT * FROM elicitation WHERE approved=1") or die($mysqli->error);
                                          
                                      ?>
                                      <?php while($row=$result->fetch_assoc()):?>
                                      <tr>
                                          <td><?php echo $row['id'];?></td>
                                          <td><?php echo $row['requirement'];?></td>
                                          <?php $issue_req=$row['id'];?>
                                      <?php $result_issue=$mysqli->query("SELECT * FROM rn_issue WHERE req_id = $issue_req") 
                                              or die($mysqli->error);
                                              if($result_issue->num_rows){
                                                  // have data in rn_issue --> assign tick
                                                  // $rows=$result_issue->fetch_array();
                                                  echo "<td align=\"center\"><a href=\"issueNego.php?req_id=".$issue_req."&id=".$student_id."\"><i class=\"material-icons\" id=\"completebtn\">check_box</i></a></td>";
                                              }else
                                              {
                                                  // no data in rn_issue --> assign edit 
                                                  echo "<td align=\"center\"><a href=\"issueNego.php?req_id=".$issue_req."&id=".$student_id."\"><i class=\"material-icons\" >assignment</i></a></td>";
                                              }
                                      ?>
                                      <?php $result_option=$mysqli->query("SELECT * FROM rn_option WHERE req_id = $issue_req") 
                                              or die($mysqli->error);
                                              if($result_issue->num_rows){
                                                  if($result_option->num_rows){
                                                      // have data in rn_option --> assign tick 
                                                      // $rows=$result_option->fetch_array();
                                                      echo "<td align=\"center\"><a href=\"optionNego.php?req_id=".$issue_req."&id=".$student_id."\"><i class=\"material-icons\" id=\"completebtn\">check_box</i></a></td>";

                                                  }
                                                  else
                                                  {
                                                      // no data in rn_option --> assign clear
                                                      echo "<td align=\"center\"><a href=\"optionNego.php?req_id=".$issue_req."&id=".$student_id."\"><i class=\"material-icons\" id=\"incompletebtn\">clear</i></a></td>";
                                                  }
                                              }
                                              else{
                                                  echo "<td></td>";
                                              }
                                      ?>
                                      <?php $result_vote=$mysqli->query("SELECT * FROM rn_vote WHERE req_id = $issue_req") 
                                              or die($mysqli->error);
                                          if($result_issue->num_rows){
                                              if($result_option->num_rows){
                                                  if($result_vote->num_rows){
                                                      // have data in rn_vote --> assign tick 
                                                      // $rows=$result_option->fetch_array();
                                                      echo "<td align=\"center\"><a href=\"voteNego.php?req_id=".$issue_req."&id=".$student_id."\"><i class=\"material-icons\" id=\"completebtn\">check_box</i></a></td>";

                                                  }
                                                  else
                                                  {
                                                      // no data in rn_vote --> assign clear
                                                      echo "<td align=\"center\"><a href=\"voteNego.php?req_id=".$issue_req."&id=".$student_id."\"><i class=\"material-icons\" id=\"incompletebtn\">clear</i></a></td>";
                                                  }
                                              }
                                              else
                                              {
                                                  echo "<td align=\"center\"><a><i class=\"material-icons\" id=\"incompletebtn\">clear</i></a></td>";
                                              }
                                          }
                                          else{
                                              echo "<td></td>";
                                          }
                                      ?>
                                      </tr>
                                      <?php endwhile;?>
                                  </tbody>
                              </table>
                              </div>
                          </div>
                          <button type="button" class="btn btn-success float-right" id="resultbtn" onclick="location.href='resultNego.php?id=<?php echo $student_id?>';" >View Result</button>
                          <i class="material-icons" id="question" data-toggle="collapse" data-target="#demo">info</i>
                            <div id="demo" class="collapse">
                            <div class="alert alert-success">
                              <b>Status of the requirement :</b> 
                              <ul>
                                <li><i class="material-icons">assignment</i> No issue (Click the icon to add an issue to the requirement)</li>
                                <li><i class="material-icons" id="completebtn">check_box</i> Completed Progress (Shows the progress have an issue/option/vote)</li>
                                <li><i class="material-icons" id="incompletebtn">clear</i> Incomplete progress (Show the progress have no issue/option/vote)</li>
                              </ul>
                            </div>
                            </div>

                            </div>
                          </div>
                    <?php  
                    // Looping the data as object
                    function pre_r($array){
                        echo '<pre>';
                        print_r($array);
                        echo '</pre>';
                    }
                  }else{
                    echo "<div class=\"card shadow mb-4\" style=\"background-color:rgba(255, 255, 255, 0.95)\">";
                    echo "<div class=\"card-body shadow-sm p-5\">";
                    echo "<h3 class=\"text-muted\">
                    <h2>Requirement Negotiation </h2>
                    </h3>";
                    echo "<h5>Nothing to show yet. Please complete Elicitation Module before proceed to this module.</h5>";
                    echo "</div></div></div>";
                  }
                    ?>
                  
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
   <!-- Bootstrap core JavaScript-->
   <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>                                    
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
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
</body>

</html> 
