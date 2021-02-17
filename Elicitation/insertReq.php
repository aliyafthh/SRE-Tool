<?php
require_once "config.php";

if(isset($_POST['insertData'])){

    $req = $_POST['requirement'];
    $gID = $_POST['gID'];

    $query_2 = "INSERT INTO elicitation (gID,requirement) VALUES ('$gID','$req'); ";
    $query_run_2 = mysqli_query($mysqli,$query_2);

    if($query_run_2){
        echo '<script> alert("Data Saved");</script>';
        header('Location: createReq.php');
    }else{
        echo '<script> alert("Data Not Saved");</script>';
    }

}

?>
