<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, 'sretool');

    $id = $_POST['id'];

    $query = "SELECT * FROM rvp3 WHERE id = '$id' ";
    $query_run = mysqli_query($connection,$query) ;

    if($query_run)
    {
        while($row = mysqli_fetch_array($query_run))
        {
            ?>

<div class="container-fluid">
 <br> 

    <div style="background:linear-gradient(to bottom right, #4e73df 8%, #ff99cc 100%)" class="jumbotron" >
        <div class="container">
        <h1 class="h2 mb-4 text-gray-800"><strong>Edit</strong> Viewpoints</h1>

        <form action="" method ="post">

        <input type="hidden" name = "id" id = "id" value = "<?php echo $row['id'] ?>">

                
                  <select class="custom-select mb-3">
                    <option selected>Requirement References</option>
                    <option value="F01">F01- The system should display the customer’s current location.</option>
                    <option value="F02">F02- The system should reduce wastage of raw materials to improve cost savings.</option>
                    <option value="F03">F03- The system should validate username and password of customer and restaurant manager.</option>
                    <option value="Q01">Q01- The system shall be able to run on Android and iOS.</option>
                    <option value="Q02">Q02- The system shall be simple to maintain and upgrade the software.</option>
                    <option value="Q03">Q03- The system will be able to response within 3 seconds.</option>
                  </select>

                  <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="requirement" id = "requirement"></label>
                    <input class="form-control" name = "requirement" value = "<?php echo $row['requirement'] ?>" id = "requirement">
                  </div>
                  <div class="form-group col-md-9">
                    <label for="error" id = "error"></label>
                    <input name = "error"  value = "<?php echo $row['error'] ?>" class="form-control" id="error" placeholder="Error :">
                  </div>
                  
                </div>

                <div class="form-group">
                    <label for="solution"></label>
                    <input name = "solution"  value = "<?php echo $row['solution'] ?>" class="form-control" id="solution" placeholder="Solution :">
                  </div>
  
                <div class="form-row">
                  <div class="form-group col-md-8">
                    <label for="correctName"></label>
                    <input type="Name" class="form-control" name="correctby" value = "<?php echo $row['correctby'] ?>" id="correctBy" placeholder="Corrected by :" >
                  </div>
                  <div class="form-group col">
                    <label for="correctDate"></label>
                    <input type="date" class="form-control" name="cdate" value = "<?php echo $row['cdate'] ?>" id="DateCorrect" placeholder="Date :">
                  </div>
                </div>                
  
                <div class="form-row">
                  <div class="form-group col-md-8">
                    <label for="supportName"></label>
                    <input type="Name" class="form-control" name="supportby" value = "<?php echo $row['supportby'] ?>" id="supportByy" placeholder="Support by :" >
                  </div>
                  <div class="form-group col">
                    <label for="supportDate"></label>
                    <input type="date" class="form-control" name="sdate" value = "<?php echo $row['sdate'] ?>" id="DateSupportt" placeholder="Date :">
                  </div>
                </div>    
  
                  </div>
<br>
                  <button type="submit" name="update" value = "submit"  class="btn btn-primary btn btn-block" style='width:400px;margin:0 50%;position:relative;left:-14em;'> Update Data </button>
                </form>

            <?php
                if(isset($_POST['update']))
                {
                    $requirement = $_POST['requirement'];
                    $error = $_POST['error'];
                    $solution = $_POST['solution'];
                    $correctby = $_POST['correctby'];
                    $fdate = $_POST['cdate'];
                    $supportby = $_POST['supportby'];
                    $sdate = $_POST['sdate'];

                    $query = "UPDATE rvp3 SET requirement = '$requirement', error = '$error', solution = '$solution', correctby = '$correctby', cdate = '$cdate', supportby = '$supportby', sdate = '$sdate' WHERE id = '$id' ";
                    $query_run = mysqli_query($connection,$query);

                    if($query_run)
                    {
                        header("Location:previewp3.php");
                        
                        
                        exit;
                    }
                    else
                    {
                        echo '<script> alert("Data not updated"); </script>';
                    }

                }
                
        }
    }
    else
    {
        echo '<script> alert("No record found"); </script>';
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>SRE Tool</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="rvp.css" rel="stylesheet">

  </head>


  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  </body>
</html>
























