<?php
require_once "config.php";

if(isset($_POST['updateData'])){

    $id = $_POST['update_id'];
    $gId = $_GET['id'];

    $query = $mysqli->query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'requirements'");

        while ($row = $query->fetch_assoc()) {
          $result[] = $row;
        }

        $current_Att = "";
        // Array of all column names
        $columnArr = array_column($result, 'COLUMN_NAME');
        $count = count($columnArr);
        for ($i = 3; $i < $count; $i++) {
            if($i == $id + 3){
                $current_Att = $columnArr[$i];
            }
        }
    
    
    $attribute = $_POST['attribute'];

    $query2 = "ALTER TABLE requirements CHANGE " . $current_Att . " " . $attribute . " VARCHAR(25)" ;
    $query_run = mysqli_query($mysqli,$query2);

    if($query_run){

        echo '<script> alert("Data Saved");</script>';
        header('Location: manageColumn.php?id='.$gId);
    }else{
        echo '<script> alert("Data Not Saved");</script>';
    }

}
