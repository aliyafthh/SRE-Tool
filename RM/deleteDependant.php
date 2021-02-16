<?php
require_once "config.php";

if(isset($_POST['deleteData'])){

    $id = $_POST['delete_id'];
    $pid = $_POST['id'];

    $query2 = "DELETE FROM dependant WHERE id=$id";
    $query_run = mysqli_query($mysqli,$query2);

    if($query_run){

        echo '<script> alert("Data Deleted");</script>';
        header('Location: edit.php?id=' . $pid);
    }else{
        echo '<script> alert("Data Not Deleted");</script>';
    }

}
