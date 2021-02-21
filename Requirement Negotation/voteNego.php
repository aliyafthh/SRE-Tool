<?php
    include_once ("config.php");
    $req_id=$_GET['req_id'];
    $group_id=$_GET["group_id"];
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="css/nego.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>SRE TOOL</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->

  <link href="css/sb-admin-2.min.css" rel="stylesheet">


</head>

<body id="page-top">
  <?php require_once 'process.php'?>
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SRE <sup>Tool</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Win Win Tree -->
      <li class="nav-item ">
        <a class="nav-link" href="winwinTree.php">
          <i class="fas fa-fw fa-wrench"></i>
          <span>WinWin Tree</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Main 
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Modules</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">REQUIREMENT:</h6>
            <a class="collapse-item" href="">Elicitation</a>
            <a class="collapse-item" href="">Documentation</a>
            <a class="collapse-item active" href="homeNego.php">Negotiation</a>      
            <a class="collapse-item" href="">Validation</a> 
            <a class="collapse-item" href="">Management</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Extra Notes -->
      <li class="nav-item">
        <a class="nav-link" href="noteNego.php">
          <i class="fas fa-pencil-alt"></i>
          <span>Extra Notes</span></a>
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

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

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

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
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
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

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
        <div class="jumbotron">
            <ul class="breadcrumbs">
                <li class="breadcrumbs__item">
                    <a href="homeNego.php" style="text-decoration:none" class="breadcrumbs__link">Requirement Negotiation</a>
                </li>
                <li class="breadcrumbs__item">
                    <a href="issueNego.php?req_id=<?php echo $req_id?>&group_id=<?php echo $group_id ?>" style="text-decoration:none" class="breadcrumbs__link">Identify Issue</a>
                </li>
                <li class="breadcrumbs__item">
                    <a href="optionNego.php?req_id=<?php echo $req_id?>&group_id=<?php echo $group_id ?>" style="text-decoration:none" class="breadcrumbs__link">Suggest Option</a>
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
                            $sql="SELECT requirement FROM elicitation WHERE id = $req_id AND approved=1 AND gID = $group_id ";
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
                        $sql="SELECT issue_detail,Category FROM rn_issue WHERE req_id = $req_id AND group_id=$group_id";
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
                                <?php while ($row=$resultt->fetch_assoc()):?>
                                    <tr>
                                        <?php 
                                        $opt_id=$row['option_id'];
                                        $rq_id=$row['req_id'];
                                        $vote_result = $mysqli->query("SELECT * FROM rn_vote INNER JOIN user ON rn_vote.userr_id = user.user_id WHERE req_id=$rq_id AND option_id=$opt_id") 
                                        or die($mysqli->error);        
                                        ?>
                                        <td style = "display:none"><?php echo $row['option_id'];?></td>
                                        <td><?php echo $row['option_detail'];?></td>
                                        <td><?php echo $row['reason'];?></td>
                                        <td><?php echo $row['person_id'];?></td>
                                        <td>
                                        <?php while ($row_vote=$vote_result->fetch_assoc()){?>
                                            <a><?php echo $row_vote['user_name'];?></a>
                                            <a href="process.php?delete_vote=<?php echo $row_vote['userr_id'];?>&req_id=<?php echo $row['req_id'];?>&opt_id=<?php echo $row['option_id'];?>&group_id=<?php echo $row['group_id'];?>">
                                            <i class="material-icons" id="deletebtn">delete</i></a><br>
                                        <?php } ?>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            </table>
                            </div>
                        </div>

                        <button type="button" class="btn btn-light" id="previousbtn" onclick="location.href='optionNego.php?req_id=<?php echo $req_id?>&group_id=<?php echo $group_id?>';">Previous</button>
                        <button type="button" class="btn btn-success float-right" id="nextbtn" onclick="location.href='homeNego.php'">Requirement Negotiation</button>
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
            <?php $result_optiondet=$mysqli->query("SELECT * FROM rn_option WHERE req_id=$req_id AND group_id=$group_id") 
                or die($mysqli->error);?>
            <?php $users=$mysqli->query("SELECT `user`.*, `rn_vote`.`req_id` FROM `user` LEFT JOIN `rn_vote` 
                ON `user`.`user_id` = `rn_vote`.`userr_id` AND `rn_vote`.`req_id`=$req_id ORDER BY `user`.`user_id`") 
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
                                    <input type="hidden" name="group_id" value="<?php echo $group_id;?>">
                                    <label>Suggestion / Option</label>
                                    <div class="form-group">
                                    <select class="custom-select mb-3" name="option_id">
                                        <?php while($row=$result_optiondet->fetch_assoc()){?>
                                                <option value="<?php echo $row['option_id'];?>"> <?php echo $row['option_detail'];?></option>
                                                <option style="display:none;" value="<?php echo $row['option_detail'];?>"></option>
                                        <?php }?>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                    <label>Person</label>
                                    <br>
                                    <?php 
                                        while ($row = $users->fetch_assoc()) {?>
                                            <input type="checkbox" name="user_id[]" value="<?=$row['user_id']?>"<?=($row['req_id'] !== NULL ? 'disabled' : '')?>> <?=$row['user_name']?>
                                            <br>
                                <?php  }?>
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

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
  <script>
        $(document).ready(function () {
            $('#checkBtn').click(function() {
                checked = $("input[type=checkbox]:checked").length;

                if(!checked) {
                    alert("You must check at least one checkbox.");
                return false;
                }

            });
    });
    </script>
    <script src="js/sb-admin-2.min.js"></script>
  
</body>

</html>
