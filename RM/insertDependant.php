<?php
require_once "config.php";

if(isset($_POST['insertData'])){

    $id = $_POST['id'];
    $did = $_POST['did'];
    $title_d = $_POST['title_d'];
    $gId = $_GET['gId'];

    $query = "SELECT title FROM requirements WHERE  id = $did ";
    $query_run = mysqli_query($mysqli,$query);
    $row = $query_run->fetch_assoc();
    $title = $row['title'];

    $query_2 = "INSERT INTO dependant VALUES ('" . $id . "0" . $did . "','" .$title_d. "','" .$title. "'); ";
    $query_run_2 = mysqli_query($mysqli,$query_2);

    if($query_run_2){
        echo '<script> alert("Data Saved");</script>';
        header('Location: edit.php?id=' . $id . '&gId=' . $gId);
    }else{
        echo '<script> alert("Data Not Saved");</script>';
    }

}

?>
