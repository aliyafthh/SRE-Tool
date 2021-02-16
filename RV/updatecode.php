<?php   
     $connection = mysqli_connect("localhost","root","");
     $db = mysqli_select_db($connection, 'sretool');
         
        if(isset($_POST['edit']))
        {
            $id = $_POST['updateid'];
            $error = $_POST['error'];
            $foundby = $_POST['foundby'];
            $supportby = $_POST['supportby'];

            $query = "UPDATE rvp2 SET error='$error', foundby='$foundby',supportby='$supportby' WHERE id='$id' ";
            

            // $query = "UPDATE rvp2 SET  `error` = '".$_POST['error']."', `foundby` = '".$_POST['foundby']."' , `supportby` = '".$_POST['supportby']."' WHERE `id` ='$id' ";

            $query_run = mysqli_query($connection, $query);
      
        if($query_run)
        {

            echo '<script> alert ("Data updated");</script>';
            header("location:p2t.php");
        }
        else{

            echo '<script> alert ("Data not updated");</script>';
        }

        // Perform a query, check for error
        if (!mysqli_query($connection,$query)) {
            echo("Error description: " . mysqli_error($connection));
        }

    }
    mysqli_close($connection);
?>






<!-- <a href="#editModal" class="editbtn" ><i class="material-icons"  title="Edit">&#xE254;</i></a> -->

                                <!-- <a href="#editModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a> -->

                                <!-- <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a> -->