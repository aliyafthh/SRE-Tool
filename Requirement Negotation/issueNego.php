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
    if (isset($_GET['id'],$_GET['req_id'])) {
      $student_id = $_GET['id'];
      $req_id=$_GET['req_id'];
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
          <div class="container">
            <ul class="breadcrumbs">
              <li class="breadcrumbs__item">
                  <a href="homeNego.php?id=<?php echo $student_id?>" style="text-decoration:none" class="breadcrumbs__link">Requirement Negotiation</a>
              </li>
              <li class="breadcrumbs__item">
                  <a href="" style="text-decoration:none" class="breadcrumbs__link--active">Identify Issue</a>
              </li>
              <?php $nextbtn=$mysqli->query("SELECT req_id FROM rn_issue WHERE req_id=$req_id"); 
                if(mysqli_num_rows($nextbtn)>0){
                echo "<li class=\"breadcrumbs__item\">";
                    echo "<a href=\"optionNego.php?req_id=".$req_id."&id=".$student_id."\" style=\"text-decoration:none\" class=\"breadcrumbs__link\">Suggest Option</a>";
                echo "</li>";
                }
              ?>
            </ul>
    <!-- Display current requirement and issue  -->
    <div class="card">
      <div class="card-body">
        <?php
          $sql="SELECT requirement FROM elicitation WHERE id = $req_id";
          $result=$mysqli->query($sql) or die($mysqli->error);
          while($row=$result->fetch_assoc()):
            echo "<a>Requirement: ".$row['requirement']."</a>";
          endwhile;
        ?>
    </div>

    <div class="card">
      <div class="card-body">
        <!-- Adding an issue  -->
      <button style="margin:0px 10px 5px 0px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_issue"> Add Issue</button>
        <!-- Display current issue in table form -->
        <?php
          $result = $mysqli->query("SELECT * FROM rn_issue WHERE req_id=$req_id") or die($mysqli->error);
          // pre_r($result->fetch_assoc());
        ?>
          <div class="row">
            <div class="table-box">
            <table class="table table-bordered" >
              <thead>
                <tr>
                  <th>Issue Details</th>
                  <th>Category</th>
                  <th>Person</th>
                  <th colspan="2" >Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  while ($row=$result->fetch_assoc()):?>
                    <tr>
                      <td style = "display:none"><?php echo $row['issue_id'];?></td>
                      <td><?php echo $row['issue_detail'];?></td>
                      <td><?php echo $row['Category'];?></td>
                      <td><?php echo $row['person_id'];?></td>
                      <td>
                      <?php if($row['person_id']==$student_id){?>
                        <button type="button" class="btn btn-info editbtn" >Edit</button>
                        <button type="button" class="btn btn-danger deletebtn" >Delete</button>
                      <?php }?>
                        </td>
                    </tr>
                <?php endwhile; ?>
              </tbody>
            </table>
            </div>      
          </div>
          <button type="button" class="btn btn-light" id="previousbtn" onclick="location.href='homeNego.php?id=<?php echo $student_id?>';" >Previous</button>
      <?php if(mysqli_num_rows($nextbtn)>0){
          echo "<button type=\"button\" class=\"btn btn-success float-right\" id=\"nextbtn\" onclick=\"location.href='optionNego.php?req_id=$req_id&id=$student_id';\">Next</button>";
          } ?>
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
<!-- ##############################################################################################         -->
    <!-- Add Issue Form -->
    <div class="modal" id="modal_issue" >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3>Add Issue</h3>
            <button type="button" class="close" data-dismiss="modal">
            <span>&times;</span></button>
          </div>
          
            <!-- Pop Up Form  -->
              <form action="process.php" method="POST">
                <div class="modal-body">
                  <input type="hidden" name="issue_id" value="<?php echo $id;?>">
                  <input type="hidden" name="req_id" value="<?php echo $req_id;?>">
                  <input type="hidden" name="student_id" value="<?php echo $student_id;?>">
                  <Div class="form-group">
                    <label>Add Issue</label>
                    <input type="text" id="input" name="issue" class="form-control" placeholder= "Enter an issue" required>
                    <!-- <span id="msg" class="badge badge-primary badge-pill"></span> -->
                  </div>
                  <div>
                    <select class="selectpicker form-control" id="option_id" name="option_id" required>
                      <option disabled selected value> -- select a category -- </option>
                      <option id="Scope" value="Scope">Project Scope Management</option>
                      <option id="Schedule" value="Schedule">Project Schedule Management</option>
                      <option id="Cost" value="Cost">Project Cost Management</option>
                      <option id="Quality" value="Quality">Project Quality Management</option>
                      <option id="Resource" value="Resource">Project Resource Management</option>
                      <option id="Communications" value="Communications">Project Communications Management</option>
                      <option id="Risk" value="Risk">Project Risk Management</option>
                      <option id="Procurement" value="Procurement">Project Procurement Management</option>
                      <option id="Stakeholder" value="Stakeholder">Project Stakeholder Management</option>
                    </select>
                  </div>
                </div>
                <div class="modal-footer" style="padding:5px 10px;">
                  <button type="submit" class="btn btn-primary" name ="save_issue">Save</button>
                </div>
              </form>
        </div>
      </div>
    </div>
<!-- ##############################################################################################         -->
    <!-- Edit Issue Form -->
    <div class= "modal" id="editmodal" >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3> Edit Issue</h3>
            <button type="button" class="close" data-dismiss="modal">
            <span>&times;</span></button>
          </div>
            <!-- Pop Up Form  -->
              <form action="process.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" id="issue_id" name="issue_id" value="<?php echo $id;?>">
                    <input type="hidden" name="req_id" value="<?php echo $req_id;?>">
                    <input type="hidden" name="student_id" value="<?php echo $student_id;?>">
                    <div class="form-group">
                      <label>Issue</label>
                      <input type="text" id="input2" name="issue2" class="form-control" placeholder= "Enter an issue" required>
                    </div>
                    <!-- <h5 id="msg"></h5> -->
                    <div>
                      <select class="selectpicker form-control" id="option_id" name="selected_id" required>
                        <option disabled selected value> -- select a category -- </option>
                        <option id="Scope1" value="Scope">Project Scope Management</option>
                        <option id="Schedule1" value="Schedule">Project Schedule Management</option>
                        <option id="Cost1" value="Cost">Project Cost Management</option>
                        <option id="Quality1" value="Quality">Project Quality Management</option>
                        <option id="Resource1" value="Resource">Project Resource Management</option>
                        <option id="Communications1" value="Communications">Project Communications Management</option>
                        <option id="Risk1" value="Risk">Project Risk Management</option>
                        <option id="Procurement1" value="Procurement">Project Procurement Management</option>
                        <option id="Stakeholder1" value="Stakeholder">Project Stakeholder Management</option>
                      </select>
                    </div>
                </div>
                <div class="modal-footer" style="padding:5px 10px;">
                  <button type="button" class="btn btn-info" data-dismiss="modal">No</button>
                  <button type="submit" class="btn btn-danger" name="update">Yes</button>
                </div>
              </form>
        </div>
      </div>
    </div>
<!-- ##############################################################################################         -->
    <!-- Delete Issue Form -->
    <div class="modal" id="deletemodal" >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4> Delete Issue</h4>
            <button type="button" class="close" data-dismiss="modal">
            <span>&times;</span></button>
          </div>
          
            <!-- Pop Up Form  -->
            
              <form action="process.php" method="POST">
                  <div class="modal-body">
                    <input type="hidden" id="delete_id" name="issue_id" value="<?php echo $id;?>">
                    <input type="hidden" name="req_id" value="<?php echo $req_id;?>">
                    <input type="hidden" name="student_id" value="<?php echo $student_id;?>">
                    <h5>Are you sure you want to delete this issue?</h5>
                    <br>
                    <h6><b style="color: tomato;">Warning</b> : If you already complete the step in [Suggest Option/Vote Option]. This action may delete all the progress you have done .<h6>
                    <h6>Please proceed with caution.</h6>
                  </div>
                  <div class="modal-footer" style="padding:5px 10px;">
                    <button type="button" class="btn btn-info" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-danger" name="delete_issue">Yes</button>
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
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script src="js/complexity.js"></script>

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
      // $("#modal_issue").modal("show");
      $('#modal_issue').on('hidden.bs.modal', function () {
      $('#modal_issue form')[0].reset();

      });
    </script>
    <script>
      $(document).ready(function(){
        $('.deletebtn').on('click',function(){
          $('#deletemodal').modal('show');
          $tr=$(this).closest('tr');

          var data = $tr.children("td").map(function(){
            return $(this).text();
          });

          console.log(data);
          $('#delete_id').val(data[0]);
        });
      });
    </script>

    <script>
      $(document).ready(function(){
        $('.editbtn').on('click',function(){
          $('#editmodal').modal('show');
          $tr=$(this).closest('tr');

          var data = $tr.children("td").map(function(){
            return $(this).text();
          });

          console.log(data);
          $('#issue_id').val(data[0]);
          $('[name="issue2"]').val(data[1]);
          var i=data[2];
          $('select[name=selected_id]').val(i);
          $('.selectpicker').selectpicker('refresh');
          
        });
      });
    </script>
  <script src="js/sb-admin-2.min.js"></script>
  
</body>

</html>
