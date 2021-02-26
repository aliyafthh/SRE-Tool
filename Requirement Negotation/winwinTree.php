<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="css/nego.css" rel="stylesheet">
  <link href="css/winwintree.css" rel="stylesheet">


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
  $student_id = 0;
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

          <!-- Page Heading -->
            <h1 class="h3 mb-0 text-gray-800">WinWin Tree</h1>
          <!-- Content Row -->
          <div class="row">
        <div class="col-xl-8 col-lg-7">
        <!-- WinWin Tree -->
        <div class="card shadow mb-4">

          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">WinWin Tree</h6>
          </div>
          
          <div class="card-body">
            <h5 class="small font-weight-bold">Click to view Winwin tree</h5>
            <div class="tree">
              <ul>
                  <li><a>Winwin Tree</a>
                      <ul>
                          <?php $sql="SELECT * FROM elicitation WHERE approved=1";
                            $result=$mysqli->query($sql) or die($mysqli->error);
                            while($row=$result->fetch_assoc()):
                              $req_id = $row["id"];
                          ?>
                          <li><a>Win Conditions : <?php echo $row['requirement'];?></a>
                            <ul>
                              <?php $issue="SELECT * FROM rn_issue WHERE req_id=$req_id";
                                $output=$mysqli->query($issue) or die($mysqli->error);
                                if($output->num_rows){
                                  echo "<li><a>Issues</a>";
                                  echo "<ul>";
                                  while($list=$output->fetch_assoc()){
                                    echo "<li><a>".$list['issue_detail']."</a></li>";}
                                  echo "</ul>";
                                  echo "</li>";
                                }else{}
                                
                                $options="SELECT * FROM rn_option WHERE req_id=$req_id";
                                  $output=$mysqli->query($options) or die($mysqli->error);
                                  if($output->num_rows){
                                    echo "<li><a>Options</a>";
                                    echo "<ul>";
                                    while($list=$output->fetch_assoc()){
                                      echo "<li><a>".$list['option_detail']."</a></li>";}
                                    echo "</ul>";
                                    echo "</li>";
                                  }else{}

                                $agreements="SELECT rn_vote.*,rn_user.roles,COUNT(rn_user.roles) AS HIGHEST FROM rn_vote INNER JOIN rn_user ON rn_vote.group_id=rn_user.group_id AND rn_vote.student_id=rn_user.student_id WHERE req_id=$req_id GROUP BY option_id order by HIGHEST DESC";
                                  $output=$mysqli->query($agreements) or die($mysqli->error);
                                  if($output->num_rows){
                                    echo "<li><a>Agreements</a>";
                                    echo "<ul>";
                                    while($list=$output->fetch_assoc()){
                                      if($list['roles']=="Top Management"){
                                        echo "<li><a>".$list['option_detail'].". <b>Voted</b> by Top Management </a></li>";
                                        break;
                                      }else{
                                        echo "<li><a>".$list['option_detail'].". <b>Voted</b> = (".$list['HIGHEST'].") </a></li>";
                                        break;}}
                                    echo "</ul>";
                                    echo "</li>";
                                  }else{}
                              ?>
                            </ul>
                          </li>
                          <?php endwhile;?>
                      </ul>
                  </li>
              </ul>
            </div>
            <p>The figure above shows the WinWin Tree: Win Conditions, Issues, Options, Agreements. It allows stakeholders to argue their case against any given win condition, should they have an issue with something proposed by someone else</p>
            <a href="resultNego.php?id=<?php echo $student_id?>">For more details... &rarr;</a>
          </div>

        </div>
        </div>
            <!-- Content Column -->
            <div class="col-xl-4 col-lg-5">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h5 class="m-0 font-weight-bold text-primary">Projects<a style="color:white; float:right; " data-toggle="modal" data-target="#modal_progress" class="btn btn-sm btn-primary shadow-sm">Update Progress</a></h5>
                </div>
                <div class="card-body">
                <?php $overall=$mysqli->query("SELECT COUNT(status) as row FROM progress WHERE status='1'");
                  while($row=$overall->fetch_assoc()){ 
                    if($row['row']==0){
                      echo "<h4 class=\"small font-weight-bold\">Overall progress <span class=\"float-right\">0%</span></h4>";
                      echo "<div class=\"progress mb-4\">";
                      echo "<div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div></div>";
                    }else if($row['row']==1){
                      echo "<h4 class=\"small font-weight-bold\">Overall progress <span class=\"float-right\">20%</span></h4>";
                      echo "<div class=\"progress mb-4\">";
                      echo "<div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 20%\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div></div>";
                    }else if($row['row']==2){
                      echo "<h4 class=\"small font-weight-bold\">Overall progress <span class=\"float-right\">40%</span></h4>";
                      echo "<div class=\"progress mb-4\">";
                      echo "<div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 40%\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div></div>";
                    }else if($row['row']==3){
                      echo "<h4 class=\"small font-weight-bold\">Overall progress <span class=\"float-right\">60%</span></h4>";
                      echo "<div class=\"progress mb-4\">";
                      echo "<div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div></div>";
                    }else if($row['row']==4){
                      echo "<h4 class=\"small font-weight-bold\">Overall progress <span class=\"float-right\">80%</span></h4>";
                      echo "<div class=\"progress mb-4\">";
                      echo "<div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 80%\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div></div>";
                    }else if($row['row']==5){
                      echo "<h4 class=\"small font-weight-bold\">Overall progress <span class=\"float-right\">Complete!</span></h4>";
                      echo "<div class=\"progress mb-4\">";
                      echo "<div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 100%\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div></div>";
                  }
                  }?>
                  <h2 class="small font-weight-bold" style="text-align:center;">Modules</h4>
                  <?php $progress=$mysqli->query("SELECT * FROM progress");
                  while($row=$progress->fetch_assoc()){ ?>
                    <?php if($row['status']==1){
                      echo "<h4 class=\"small font-weight-bold\">".$row['module']." <span class=\"float-right\">Complete</span></h4>";
                    }else{
                      echo "<h4 class=\"small font-weight-bold\">".$row['module']."<span class=\"float-right\">Incomplete</span></h4>";
                    }
                    ?>
                  <?php }?>
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
  <div class="modal" id="modal_progress" >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3>Update Module Progress</h3>
            <button type="button" class="close" data-dismiss="modal">
            <span>&times;</span></button>
          </div>
          <?php
          $sql="SELECT * FROM progress";
          $result=$mysqli->query($sql) or die($mysqli->error);?>
            <!-- Pop Up Form  -->
              <form action="process.php" method="POST">
                <div class="modal-body">
                  <label>Update Module Progress</label>
                  <input type="hidden" name="id" value="<?php echo $student_id;?>">
                  <div class="form-group">
                    <select class="custom-select mb-3" name="module">
                      <?php while($row=$result->fetch_assoc()){?>
                        <option value="<?php echo $row['module'];?>"> <?php echo $row['module'];?></option>
                      <?php }?>
                    </select>
                </div>
                </div>
                <div class="modal-footer" style="padding:5px 10px;">
                  <button type="submit" class="btn btn-primary" name ="statusUpdate">Update</button>
                </div>
              </form>
        </div>
      </div>
    </div>
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>                                    
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script>
    $(function () {
      $('.tree li').hide();
      $('.tree li:first').show();
      $('.tree li').on('click', function (e) {
          var children = $(this).find('> ul > li');
          if (children.is(":visible")) children.hide('fast');
          else children.show('fast');
          e.stopPropagation();
        });
    });
  </script>
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
