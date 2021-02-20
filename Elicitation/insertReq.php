<?php
require_once "config.php";

if(isset($_POST['insertData'])){

    $studentID=$_GET['id'];
    $req = $_POST['requirement'];

    $query_2 = "INSERT INTO elicitation (requirement) VALUES ('$req'); ";
    $query_run_2 = mysqli_query($mysqli,$query_2);

    if($query_run_2){
        echo '<script> alert("Data Saved");</script>';
        header('Location: createReq.php?id='.$studentID);
    }else{
        echo '<script> alert("Data Not Saved");</script>';
    }

}

?>
