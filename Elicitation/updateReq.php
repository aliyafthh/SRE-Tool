<?php
require_once "config.php";

if(isset($_POST['updateData'])){

    $studentID=$_GET['id'];
    $id = $_POST['update_id'];
    $req = $_POST['requirement'];

    $query_2 = "UPDATE elicitation SET requirement=\"" . $req . "\" WHERE id=$id";
    $query_run_2 = mysqli_query($mysqli,$query_2);

    if($query_run_2){
        echo '<script> alert("Data Saved");</script>';
        header('Location: createReq.php?id='.$studentID);
    }else{
        echo '<script> alert("Data Not Saved");</script>';
    }

}

?>
