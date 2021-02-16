<!-- insert into db -->

<?php
if(isset($_POST['insert']))
{
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection, 'sretool');

    
    $regname = $_POST['regname'];
    $studentid = $_POST['studentid'];
    $email = $_POST['email'];
    $pw = $_POST['pw'];
    $repeatpw = $_POST['repeatpw'];
   
    $query = "INSERT INTO register(regname,studentid,email,pw,repeatpw) VALUES ('".$_POST["regname"]."','".$_POST["studentid"]."','".$_POST["email"]."','".$_POST["pw"]."','".$_POST["repeatpw"]."')";

    $query_run = mysqli_query($connection, $query);

    if(!$query_run)
    {
      echo '<script> alert("Data Not Saved"); </script>';
    }
    if($regname !='' && $studentid !='' && $email !='' && $pw !='' && $repeatpw !='')
{
//  To redirect form on a particular page
header("Location:login.php");
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

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block register-img"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h2 text-gray-900 mb-4">Sign up !</h1>
              </div>
              <br>
              <form class = "user" action="register.php" id="my-form" method ="post">
                <div class="form-group row">
                  <div class="col-sm-7 mb-3 mb-sm-0">
                    <input type="text" class="form-control " name="regname" id="regname" placeholder="Name">
                  </div>
                  <div class="col-sm-5">
                    <input type="text" class="form-control " name="studentid" id="studentid" placeholder="Student ID">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control " name="email" id="email" placeholder="Email Address">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control " name="pw" id="pw" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control " name="repeatpw" id="repeatpw" placeholder="Repeat Password">
                  </div>
                </div>
                <br>
                <hr>

                <button type="submit" name="insert" value = "submit"  class="btn btn-primary btn-user btn-block" > Register </button>
                               
              </form>
              <hr>

              <div class="text-center">
                <a class="small" href="login.php">Already have an account? Login!</a>
              </div>
            </div>
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
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
