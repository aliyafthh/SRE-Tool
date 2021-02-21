<?php
require_once "config.php";

if(isset($_POST['insertData'])){

    $attribute = $_POST['attribute'];
    $gId = $_GET['id'];

    $query = "ALTER TABLE requirements ADD " . $attribute . " VARCHAR(25)";
    $query_run = mysqli_query($mysqli,$query);

    if($query_run){

        echo '<script> alert("Data Saved");</script>';
        header('Location: manageColumn.php?id='.$gId);
    }else{
        echo '<script> alert("Data Not Valid");
        window.location = window.history.back();
        </script>';
    }

}

?>
