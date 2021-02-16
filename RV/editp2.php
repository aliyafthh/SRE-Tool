<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, 'sretool');

    $id = $_POST['id'];

    $query = "SELECT * FROM rvp2 WHERE id = '$id' ";
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
        <h1 text-align = "right" class="h3 mb-4 text-gray-800"><strong>Edit Error Identification</strong>
            </h1>
          
            <div style="background: linear-gradient(to bottom right, #4e73df 8%, #ff99cc 100%)" class="jumbotron ">

              <div class="container">
                <form action="" method ="post"> 

                <input type="hidden" name = "id" id = "id" value = "<?php echo $row['id'] ?>">

               
                  <select  class="custom-select mb-3" >
                    <option selected>Requirement References</option>
                    <option value="F01">F01- The system should display the customer’s current location.</option>
                    <option value="F02">F02- The system should reduce wastage of raw materials to improve cost savings.</option>
                    <option value="F03">F03- The system should validate username and password of customer and restaurant manager.</option>
                    <option value="Q01">Q01- The system shall be able to run on Android and iOS.</option>
                    <option value="Q02">Q02- The system shall be simple to maintain and upgrade the software.</option>
                    <option value="Q03">Q03- The system will be able to response within 3 seconds.</option>
                  </select>

             
                  <div class="form-row">
                  <div class="form-group col">
                    <label for="requirement"></label>
                    <input class="form-control" name = "requirement" value = "<?php echo $row['requirement'] ?>" id = "requirement">
                  </div>
                  <div class="form-group col-md-8">
                    <label for="error"></label>
                    <input name = "error"  value = "<?php echo $row['error'] ?>" class="form-control" id="error" placeholder="Error :">
                  </div>
                </div>


                <div class="form-row">
                  <div class="form-group col-md-8">
                    <label for="foundName"></label>
                    <input type="Name" name = "foundby" value = "<?php echo $row['foundby'] ?>" class="form-control" id="foundBy" placeholder="Found by :" >
                  </div>
                  <div class="form-group col">
                    <label for="foundDate"></label>
                    <input type="date" name = "fdate"  value = "<?php echo $row['fdate'] ?>" class="form-control" id="DateFound" placeholder="Date :">
                  </div>
                </div>                
  
                <div class="form-row">
                  <div class="form-group col-md-8">
                    <label for="supportName"></label>
                    <input type="Name" name = "supportby"  value = "<?php echo $row['supportby'] ?>" class="form-control" id="supportBy" placeholder="Support by :" >
                  </div>
                  
                  <div class="form-group col">
                    <label for="supportDate"></label>
                    <input type="date" name = "sdate"  value = "<?php echo $row['sdate'] ?>" class="form-control" id="DateSupport" placeholder="Date :">
                  </div>
                </div>    
  
                  </div>

                <button type="submit" name="update" value = "submit"  class="btn btn-primary btn btn-block" style='width:400px;margin:0 50%;position:relative;left:-14em;'> Save Changes </button>

             </form>

            <?php
                if(isset($_POST['update']))
                {
                    $requirement = $_POST['requirement'];
                    $error = $_POST['error'];
                    $foundby = $_POST['foundby'];
                    $fdate = $_POST['fdate'];
                    $supportby = $_POST['supportby'];
                    $sdate = $_POST['sdate'];

                    $query = "UPDATE rvp2 SET requirement = '$requirement', error = '$error', foundby = '$foundby', fdate = '$fdate', supportby = '$supportby', sdate = '$sdate' WHERE id = '$id' ";
                    $query_run = mysqli_query($connection,$query);

                    if($query_run)
                    {
                        header("Location:previewp2.php");
                        
                        
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
























