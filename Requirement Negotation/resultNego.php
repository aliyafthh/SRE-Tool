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
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
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
            <span>View Progress</span></a>
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

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Requirement Negotiation</h1>
          <div class="row">

<div class="container">
        <ul class="breadcrumbs">
                    <li class="breadcrumbs__item">
                        <a href="homeNego.php?id=<?php echo $student_id?>" style="text-decoration:none" class="breadcrumbs__link">Requirement Negotiation</a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a href="" style="text-decoration:none" class="breadcrumbs__link--active">View Result</a>
                    </li>
                  </ul>
            <div class="card">
                <div class="card-body">
                    <h3>Conflicted Requirement</h3>
                    <?php
                          $result=$mysqli->query("SELECT DISTINCT rn_issue.req_id,elicitation.requirement FROM rn_issue INNER JOIN elicitation ON rn_issue.req_id=elicitation.id WHERE elicitation.m1=1 ORDER BY rn_issue.req_id");                      
                      ?>
                    <?php if($result->num_rows){?>
                    <div class="row">
                        <div class="table-box">
                            <table class="table table-striped" >
                                <thead >
                                    <tr>
                                        <th>Id</th>
                                        <th>Requirement</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                <?php while($row=$result->fetch_assoc()): ?>
                                    <tr>
                                        <td><?php echo $row['req_id'];?></td>
                                        <td><?php echo $row['requirement'];?></td>
                                    <?php 
                                        $des_req_id=$row['req_id'];
                                        $votedet=$mysqli->query("SELECT req_id FROM rn_vote WHERE req_id=$des_req_id");
                                        if($votedet->num_rows){
                                          echo "<td id=\"resolvebtn\">RESOLVED</td>";
                                          echo "<td align=\"center\"><a class=\"resolve\" href=\"#modal_resolve\" data-toggle=\"modal\" data-target=\"#modal_resolve\" data-id=$des_req_id><button type=\"button\" class=\"btn btn-primary\">View</button></a></td>";
                                        }else
                                        {
                                          echo "<td id=\"pendingbtn\">PENDING</td>";
                                          echo "<td align=\"center\"><a class=\"resolve\" href=\"#modal_resolve\" data-toggle=\"modal\" data-target=\"#modal_resolve\" data-id=$des_req_id><button type=\"button\" class=\"btn btn-primary\">View</button></a></td>";
                                        }
                                    ?>  
                                    </tr>
                                <?php endwhile;
                                
                                ?>
                                
                                </tbody>
                            </table>
                        </div>
                    </div>    
                    <?php 
                    }
                    else{
                     echo "<h5> No result</h5>";
                    }?>
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
 <!-- ####################################################################### -->
          <!-- Resolve requirement -->
          <div class="modal fade" id="modal_resolve">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                    </div>
                </div>
            </div>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>                                    
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="js/sb-admin-2.min.js"></script>
  
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

  <script>
        $('.resolve').click(function(){
            var famID=$(this).attr('data-id');
            console.log(famID);
            $.ajax({url:"voteresult.php?req_id="+famID,cache:false,success:function(result){
                $(".modal-content").html(result);
            }});
        });
    </script>                                
  
</body>

</html>
