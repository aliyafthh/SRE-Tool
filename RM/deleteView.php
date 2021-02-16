<?php
require_once "config.php";

if(isset($_POST['deleteData'])){

    $id = $_POST['delete_id'];
    
    $query2 = "DELETE FROM views WHERE v_id=" . $id;
    $query_run = mysqli_query($mysqli,$query2);

    if($query_run){
        echo '<script> alert("Data Deleted");</script>';
        header('Location: manageViews.php');
    }else{
        echo '<script> alert("Data Not Deleted");</script>';
    }

}
