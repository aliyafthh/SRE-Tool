<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, 'sretool');

    $id = $_POST['id'];

    $query = "SELECT * FROM student WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        while($row = mysqli_fetch_array($query_run))
        {
            ?>
<div class="container">
    <div class="jumbotron">
        <h2> PHP - CRUD : Update Data</h2>
        <hr>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
            <div class="form-group">
                <label for=""> Error </label>
                <textarea id = "error" name="error" class="form-control" value="<?php echo $row['error'] ?>" placeholder="Error" required></textarea>
            </div>
            <div class="form-group">
                <label for="">Found by :</label>
                <input type="text" id = "foundby" name = "foundby" class="form-control" value="<?php echo $row['lname'] ?>" placeholder="Found by :" required>
            </div>
            <div class="form-group">
                <label for="">Support by :</label>
                <input type="text" id = "supportby" name = "supportby" class="form-control" value="<?php echo $row['contact'] ?>" placeholder="Support by :" required>
            </div>

            <button type="submit" name="update" class="btn btn-primary"> Update Data </button>

            <a href="p2t.php" class="btn btn-danger"> CANCEL </a>
        </form>

        <?php
        if(isset($_POST['edit']))
        {
            $fname = $_POST['error'];
            $lname = $_POST['foundby'];
            $contact = $_POST['supportby'];

            $query = "UPDATE rvp2 SET error='$error', foundby='$foundby', supportby=' $supportby' WHERE id='$id'  ";
            $query_run = mysqli_query($connection, $query);

            if($query_run)
            {
                echo '<script> alert("Data Updated"); </script>';
                header("location:p2t.php");
            }
            else
            {
                echo '<script> alert("Data Not Updated"); </script>';
            }
        }
        ?>

    </div>
</div>


            <?php
        }
    }
    else
    {
        echo '<script> alert("No Record Found"); </script>';
    }
    ?>
</body>
</html>

