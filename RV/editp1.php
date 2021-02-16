<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, 'sretool');

    $id = $_POST['id'];

    $query = "SELECT * FROM rvp1 WHERE id = '$id' ";
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
        <h1 class="h2 mb-4 text-gray-800"><strong>Edit</strong> Stakeholder Information</h1>

            <form  action="" method = "post" >

            <input type="hidden" name = "id" id = "id" value = "<?php echo $row['id'] ?>">

            <div class="form-group">
                
                    <label for="inputName"></label>
                        <input type="text" class="form-control form-control-user" name = "name" id="name"  value = "<?php echo $row['name'] ?>" placeholder="Name ">
            </div>   
            <div class="form-group">    
                    <label for="inputPassword"></label>
                        <input type="text" class="form-control form-control-user" name = "position" id="position" value = "<?php echo $row['position'] ?>"  placeholder="Position ">
               
            </div>
        </div>
                    <br>
                    <button type="submit" name="update" class="btn btn-primary btn btn-block" style='width:400px;margin:0 50%;position:relative;left:-14em;'> Save Data </button>
            </form>

            <?php
                if(isset($_POST['update']))
                {
                    $name = $_POST['name'];
                    $position = $_POST['position'];

                    $query = "UPDATE rvp1 SET name = '$name', position = '$position' WHERE id = '$id' ";
                    $query_run = mysqli_query($connection,$query);

                    if($query_run)
                    {
                        header("Location:previewp1.php");
                        
                        
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
























