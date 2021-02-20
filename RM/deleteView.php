<?php
require_once "config.php";

if(isset($_POST['deleteData'])){

    $id = $_POST['delete_id'];
    $gId = $_GET['id'];
    
    $query2 = "DELETE FROM views WHERE v_id=" . $id;
    $query_run = mysqli_query($mysqli,$query2);

    if($query_run){
        echo '<script> alert("Data Deleted");</script>';
        header('Location: manageViews.php?id='.$gId);
    }else{
        echo '<script> alert("Data Not Deleted");</script>';
    }

}
