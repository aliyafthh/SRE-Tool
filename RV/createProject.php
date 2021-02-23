<?php
if(isset($_POST['insert']))
{
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection, 'sretool');

    $groupmember1 = $_POST['groupmember1'];
    $role1 = $_POST['role1'];
    $projectname = $_POST['projectname'];
    $projectdesc = $_POST['projectdesc'];
    $groupmember2 = $_POST['groupmember2'];
    $role2 = $_POST['role2'];
    $groupmember3 = $_POST['groupmember3'];
    $role3 = $_POST['role3'];
    $groupmember4 = $_POST['groupmember4'];
    $role4 = $_POST['role4'];
    $groupmember5 = $_POST['groupmember5'];
    $role5 = $_POST['role5'];
    
    
    $query = "INSERT INTO createproject(groupmember1,role1,projectname,projectdesc,groupmember2,role2,groupmember3,role3,groupmember4,role4,groupmember5,role5) VALUES ('".$_POST["groupmember1"]."','".$_POST["role1"]."','".$_POST["projectname"]."','".$_POST["projectdesc"]."','".$_POST["groupmember2"]."','".$_POST["role2"]."','".$_POST["groupmember3"]."','".$_POST["role3"]."','".$_POST["groupmember4"]."','".$_POST["role4"]."','".$_POST["groupmember5"]."','".$_POST["role5"]."')";

    $query_run = mysqli_query($connection, $query);

    if(!$query_run)
    {
      echo '<script> alert("Data Not Saved"); </script>';
    }
    if($groupmember1 !='' && $role1 !='' && $projectname !='' && $projectdesc !='' && $groupmember2 !='' && $role2 !='' && $groupmember3 !='' && $role3 !='' && $groupmember4 !='' && $role4 !='' && $groupmember5 !='' && $role5 !='')
        {
        //  To redirect form on a particular page
        // *******
        header("Location:previewCreateProject.php");
        }
        else{
        ?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
        }
        }
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SRE Tool</title>
  <style>
.hi{
  background : #238C89;


}
</style>
</head>
<body class =  "hi">


  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/9eba2c9c5c.js" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/umd/popper.min.js" integrity="sha512-eUQ9hGdLjBjY3F41CScH3UX+4JDSI9zXeroz7hJ+RteoCaY+GP/LDoM8AO+Pt+DRFw3nXqsjh9Zsts8hnYv8/A==" crossorigin="anonymous"></script> -->

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <!-- <link href="inspection.css" rel="stylesheet">
  <link href="checklist.css" rel="stylesheet"> -->

 

        <!-- Begin Page Content -->
        <div class="container-fluid hi">
          <!-- <div class="card shadow mb-4" style="background-color:#238C89"> -->
            <div class="card-body shadow-sm p-5">
              <h3 class="text-muted">
              <div class="card o-hidden border-0 shadow-lg my-5">
              <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                  <div class="col-lg-5 d-none d-lg-block svg-image"></div>
                  <div class="col-lg-7">
                    <div class="p-5">
                      <div class="text-center">
                        <h1 class="h3 text-gray-900 mb-4">Create New Project !</h1>
                      </div>
                      <form class = "user" action="createProject.php" id="my-form" method ="post">
                      <!-- <input type="hidden" name = "idd" id = "idd" value = "idd"> -->
                      
                        <div class="form-group row">
                          <div class="col-sm-7 mb-5 mb-sm-0">
                            <input type="text" class="form-control " name = "groupmember1" id="groupmember1" placeholder="Group Leader ID" pattern="[0-9]+" maxlength="8" title = "ID must be [example: 18XXXXXXXX]" required>
                          </div>
                         
                          <div class="col-sm-5">
                            <!-- <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Lecture"> -->
                            <select name = "role1" id = "role1" class=" form-control custom-select" required >
                              <option disable value="" selected hidden>Roles</option>
                              <option value="Top Management">Top Management</option>
                              <option value="Project Manager">Project Manager</option>
                              <option value="System Analyst">System Analyst</option>
                              <option value="Requirement Engineering">Requirement Engineering</option>
                              <option value="Programmer">Programmer</option>
                              <option value="Stakeholder">Stakeholder</option>
                              <option value="User">User</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" name = "projectname" id="projectname" placeholder="Project Name" required>
                        </div>
                        
                        <div class="form-group">
                          <textarea class="form-control" name="projectdesc" rows="5" cols="30" id = "projectdesc" placeholder="Project Description" required></textarea>
                        </div>

                        <div class="form-group row">
                          <div class="col-sm-7 mb-5 mb-sm-0">
                            <input type="text" class="form-control " name = "groupmember2" id="groupmember2" placeholder="Member's ID 1" pattern="[0-9]+" maxlength="8" title = "ID must be [example: 18XXXXXXXX]" required>
                          </div>
                          <div class="col-sm-5">
                            <!-- <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Lecture"> -->
                            <select name = "role2" id = "role2" class=" form-control custom-select" required >
                              <option disable value="" selected hidden>Roles</option>
                              <option value="Top Management">Top Management</option>
                              <option value="Project Manager">Project Manager</option>
                              <option value="System Analyst">System Analyst</option>
                              <option value="Requirement Engineering">Requirement Engineering</option>
                              <option value="Programmer">Programmer</option>
                              <option value="Stakeholder">Stakeholder</option>
                              <option value="User">User</option>
                            </select>
                          </div>
                        </div>

                        <div class="form-group row">
                          <div class="col-sm-7 mb-5 mb-sm-0">
                            <input type="text" class="form-control " name = "groupmember3" id="groupmember3" placeholder="Member's ID 2" pattern="[0-9]+" maxlength="8" title = "ID must be [example: 18XXXXXXXX]" required>
                          </div>
                          <div class="col-sm-5">
                            <!-- <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Lecture"> -->
                            <select name = "role3" id = "role3" class=" form-control custom-select" required >
                              <option disable value="" selected hidden>Roles</option>
                              <option value="Top Management">Top Management</option>
                              <option value="Project Manager">Project Manager</option>
                              <option value="System Analyst">System Analyst</option>
                              <option value="Requirement Engineering">Requirement Engineering</option>
                              <option value="Programmer">Programmer</option>
                              <option value="Stakeholder">Stakeholder</option>
                              <option value="User">User</option>
                            </select>
                          </div>
                        </div>

                         <div class="form-group row">
                          <div class="col-sm-7 mb-5 mb-sm-0">
                            <input type="text" class="form-control " name = "groupmember4" id="groupmember4" placeholder="Member's ID 3" pattern="[0-9]+" maxlength="8" title = "ID must be [example: 18XXXXXXXX]" required>
                          </div>
                          <div class="col-sm-5">
                            <!-- <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Lecture"> -->
                            <select name = "role4" id = "role4" class=" form-control custom-select" required >
                              <option disable value="" selected hidden>Roles</option>
                              <option value="Top Management">Top Management</option>
                              <option value="Project Manager">Project Manager</option>
                              <option value="System Analyst">System Analyst</option>
                              <option value="Requirement Engineering">Requirement Engineering</option>
                              <option value="Programmer">Programmer</option>
                              <option value="Stakeholder">Stakeholder</option>
                              <option value="User">User</option>
                            </select>
                          </div>
                        </div>

                        <div class="form-group row">
                          <div class="col-sm-7 mb-5 mb-sm-0">
                            <input type="text" class="form-control " name = "groupmember5" id="groupmember5" placeholder="Member's ID 4" pattern="[0-9]+" maxlength="8" title = "ID must be [example: 18XXXXXXXX]" required>
                          </div>
                          <div class="col-sm-5">
                            <!-- <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Lecture"> -->
                            <select name = "role5" id = "role5" class=" form-control custom-select" required >
                              <option disable value="" selected hidden>Roles</option>
                              <option value="Top Management">Top Management</option>
                              <option value="Project Manager">Project Manager</option>
                              <option value="System Analyst">System Analyst</option>
                              <option value="Requirement Engineering">Requirement Engineering</option>
                              <option value="Programmer">Programmer</option>
                              <option value="Stakeholder">Stakeholder</option>
                              <option value="User">User</option>
                            </select>
                          </div>
                        </div>
                        <hr>

                        <button type="submit" name="insert" value = "submit"  class="btn btn-primary btn-user btn-block" > Save Project </button>
                        
                 
                      </form>
                      <hr>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
          </div>

                
              </h3>
             
            <!-- </div> -->
          </div>
          <!-- /.container-fluid -->


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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.js"></script>

</body>

</html>