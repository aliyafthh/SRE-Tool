
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
    if (isset($_GET['id'],$_GET['req_id'])) {
      $student_id = $_GET['id'];
      $req_id=$_GET['req_id'];
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
        <?php
            if(isset($_SESSION['message'])):?>
            <div class="alert alert-<?=$_SESSION['msg_type']?>">
            <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            ?>
            </div>
        <?php endif;?>

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
                    <a href="issueNego.php?req_id=<?php echo $req_id?>&id=<?php echo $student_id?>" style="text-decoration:none" class="breadcrumbs__link">Identify Issue</a>
                </li>
                <li class="breadcrumbs__item">
                    <a href="optionNego.php?req_id=<?php echo $req_id?>&id=<?php echo $student_id?>" style="text-decoration:none" class="breadcrumbs__link">Suggest Option</a>
                </li>
                <li class="breadcrumbs__item">
                    <a href="" style="text-decoration:none" class="breadcrumbs__link--active">Vote Option</a>
                </li>
            </ul>
            <!-- Display current requirement -->
            <div class="box">
                <table class="table">
                    <thead >
                        <tr>
                            <?php
                            $sql="SELECT requirement FROM elicitation WHERE id = $req_id";
                            $result=$mysqli->query($sql) or die($mysqli->error);
                            while($row=$result->fetch_assoc()):
                                echo "<th>Requirement: </th>";
                                echo "<td>".$row['requirement']."</td>";
                            endwhile;
                            ?>
                        </tr>
                    </thead>
                    <tbody >
                        <tr>
                        <?php
                        $sql="SELECT issue_detail,Category FROM rn_issue WHERE req_id = $req_id";
                        $result=$mysqli->query($sql) or die($mysqli->error);
                        echo "<th>Issue: </th> ";
                        echo "<td>";
                        while($row=$result->fetch_assoc()):
                        echo "<span class=\"badge badge-pill badge-primary\">".$row['Category']."</span>";
                        echo " ".$row['issue_detail']."  ";
                        echo "<br>";
                        endwhile;
                        echo "</td>";
                        ?>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="card">
                    <div class="card-body">
                    <!-- Add vote -->
                    <button style="margin:0px 10px 5px 0px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_vote">Vote</button>
                    <!-- Display current vote in table form -->
                        <?php
                            $resultt = $mysqli->query("SELECT * FROM rn_option WHERE req_id=$req_id") or die($mysqli->error);
                            // pre_r($result->fetch_assoc());
                        ?>
                        <div class="row">
                            <div class="table-box">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Suggestion / Option</th>
                                        <th>Reason</th>
                                        <th>Proposed by</th>
                                        <th colspan="2">Vote</th>
                                    </tr>
                                </thead>
                                <?php while ($row=$resultt->fetch_assoc()){?>
                                    <tr>
                                        <?php 
                                        $opt_id=$row['option_id'];
                                        $rq_id=$row['req_id'];
                                        $vote_result = $mysqli->query("SELECT * FROM rn_vote WHERE req_id=$rq_id AND option_id=$opt_id") or die($mysqli->error);        
                                        ?>
                                        <td style = "display:none"><?php echo $row['option_id'];?></td>
                                        <td><?php echo $row['option_detail'];?></td>
                                        <td><?php echo $row['reason'];?></td>
                                        <td><?php echo $row['person_id'];?></td>
                                        <td>
                                        <?php while ($row_vote=$vote_result->fetch_assoc()){
                                            if($row_vote['student_id']==$student_id){
                                              echo "<a>".$row_vote['student_id']."</a>";
                                              echo "<a href=\"process.php?delete_vote=".$row_vote['student_id']."&req_id=".$row['req_id']."&opt_id=".$row['option_id']."\">";
                                              echo "<i class=\"material-icons\" id=\"deletebtn\">delete</i></a><br>";
                                            }else{
                                              echo "<a>".$row_vote['student_id']."</a><br>";
                                            }
                                          } ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                            </div>
                        </div>

                        <button type="button" class="btn btn-light" id="previousbtn" onclick="location.href='optionNego.php?req_id=<?php echo $req_id?>&id=<?php echo $student_id?>';">Previous</button>
                        <button type="button" class="btn btn-success float-right" id="nextbtn" onclick="location.href='homeNego.php?id=<?php echo $student_id?>'">Requirement Negotiation</button>
                    </div>
                  </div>
                </div>
            <!-- End of container class -->            
        </div>                
            <?php  
                // Looping the data as object
                function pre_r($array){
                    echo '<pre>';
                    print_r($array);
                    echo '</pre>';
                }
            ?>
  <!-- ####################################################################################################### -->
            <!-- Add vote  -->
            <?php $result_optiondet=$mysqli->query("SELECT * FROM rn_option WHERE req_id=$req_id") 
                or die($mysqli->error);?>

            <div class="modal" id="modal_vote">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3>Vote Suggestion / Option</h3>
                            <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span></button>
                        </div>
                        
                            <!-- Pop Up Form  -->
                              <form action="process.php" method="POST">
                                <div class="modal-body">
                                    <input type="hidden" name="req_id" value="<?php echo $req_id;?>">
                                    <input type="hidden" name="student_id" value="<?php echo $student_id;?>">
                                    <label>Suggestion / Option</label>
                                    <div class="form-group">
                                    <select class="custom-select mb-3" name="option_id">
                                        <?php while($row=$result_optiondet->fetch_assoc()){?>
                                                <option value="<?php echo $row['option_id'];?>"> <?php echo $row['option_detail'];?></option>
                                        <?php }?>
                                    </select>
                                    </div>
                                    <div class="modal-footer" style="padding:5px 10px;">
                                        <button type="submit" class="btn btn-info" name="vote" id="checkBtn">Vote</button>
                                    </div>
                              </form>
                    </div>
                </div>
            </div>

    <!-- ##############################################################################################         -->
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

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
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
  
</body>

</html>
