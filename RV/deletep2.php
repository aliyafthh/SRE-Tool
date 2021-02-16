<?php   
     $connection = mysqli_connect("localhost","root","");
     $db = mysqli_select_db($connection, 'sretool');

if(isset($_POST['delete']))
{
    $id = $_POST['id'];

    $query = "DELETE FROM rvp2 WHERE id = '$id' ";
    $query_run = mysqli_query($connection,$query);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
  }


    if($query_run)
    {
        echo '<script> alert("Data deleted"); </script>';
        header("location:p2t.php");
    }
    else
    {
        echo '<script> alert("Data not deleted"); </script>';

    }

}

?>