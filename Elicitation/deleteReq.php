<?php
require_once "config.php";

if(isset($_POST['deleteData'])){

    $studentID=$_GET['id'];
    $id = $_POST['delete_id'];

    $query2 = "DELETE FROM elicitation WHERE id=$id";
    $query_run = mysqli_query($mysqli,$query2);

    if($query_run){

        echo '<script> alert("Data Deleted");</script>';
        header('Location: createReq.php?id='.$studentID);
    }else{
        echo '<script> alert("Data Not Deleted");</script>';
    }

}
?>
