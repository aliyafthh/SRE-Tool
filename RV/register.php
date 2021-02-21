<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $studentid = $password = $confirm_password = $leader = "";
$username_err = $studentid_err = $password_err = $confirm_password_err = $leader_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM register WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate student ID
    if(empty(trim($_POST["studentid"]))){
      $studentid_err = "Please enter you student ID.";
  } else{
      // Prepare a select statement
      $sql = "SELECT id FROM register WHERE studentid = ?";
      
      if($stmt = mysqli_prepare($link, $sql)){
          // Bind variables to the prepared statement as parameters
          mysqli_stmt_bind_param($stmt, "s", $param_studentid);
          
          // Set parameters
          $param_studentid = trim($_POST["studentid"]);
          
          // Attempt to execute the prepared statement
          if(mysqli_stmt_execute($stmt)){
              /* store result */
              mysqli_stmt_store_result($stmt);
              
              if(mysqli_stmt_num_rows($stmt) == 1){
                  $studentid_err = "This ID is already taken.";
              } else{
                  $studentid = trim($_POST["studentid"]);
              }
          } else{
              echo "Oops! Something went wrong. Please try again later.";
          }

          // Close statement
          mysqli_stmt_close($stmt);
      }
  }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Validate confirm radio
    if(empty(trim($_POST["leader"]))){
      $leader_err = "Please select one";
    $error=true;
    }
    else
    {
        $leader = $_POST['leader'];
    }


    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($studentid_err) && empty($password_err) && empty($confirm_password_err && empty($leader_err))){
        
        // Prepare an insert statement
        $sql = "INSERT INTO register (username, studentid, password, confirm_password, leader) VALUES (?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_username, $param_studentid, $param_password, $param_confirm_password, $param_leader);
            
            // Set parameters
            $param_username = $username;
            $param_studentid = $studentid;
            $param_password = $password; // Creates a password hash
            // $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            $param_confirm_password = $confirm_password;
            $param_leader = $leader;
         
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
                
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
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
  background : #D4F1EF;


}
</style>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="hi">

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

              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
              
            

            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <input type="text" name="username" placeholder="Name" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div> 

            <div class="form-group <?php echo (!empty($studentid_err)) ? 'has-error' : ''; ?>">
                <input type="text" class="form-control " value = "<?php echo $studentid; ?>" name="studentid" id="studentid" placeholder="Student ID">
                <span class="help-block"><?php echo $studentid_err; ?></span>
            </div>   

            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <input type="password" name="password" placeholder="Password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <input type="password" placeholder = "Confirm Password"  name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
<br>
            <div class="form-group row">
                <p>&nbsp; &nbsp;Are you a group leader ? &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</p>
                <div class="form-check">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input class="form-check-input" type="radio" name="leader" value="1" 
<?php echo ($leader=='1'); ?> checked>
                  <label class="form-check-label" for="flexRadioDefault1">
                    Yes
                  </label>
                   </div>
                </div>
                <div class="form-check">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input class="form-check-input" type="radio" name="leader" value="0" 
<?php echo ($leader=='0'); ?> >
                  <label class="form-check-label" for="flexRadioDefault2">
                    No
                  </label>
                  </div>
                </div>
              </div>


         



            <!-- <div class="form-group" style= "float:right">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div> -->

            <button type="submit" name="insert" value = "Submit"  class="btn btn-primary btn-user btn-block" > Register </button>

            <br>
            <p class="text-center" >Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
              <hr>

            
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
