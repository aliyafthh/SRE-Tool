<?php
require_once "config.php";

if(isset($_POST['deleteData'])){

    $id = $_POST['delete_id'];

    $query = $mysqli->query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'requirements'");

        while ($row = $query->fetch_assoc()) {
          $result[] = $row;
        }

        $attribute = "";
        // Array of all column names
        $columnArr = array_column($result, 'COLUMN_NAME');
        $count = count($columnArr);
        for ($i = 3; $i < $count; $i++) {
            if($i == $id + 3){
                $attribute = $columnArr[$i];
            }
        }
    
    

    $query2 = "ALTER TABLE requirements DROP COLUMN " . $attribute;
    $query_run = mysqli_query($mysqli,$query2);

    if($query_run){

        echo '<script> alert("Data Deleted");</script>';
        header('Location: manageColumn.php');
    }else{
        echo '<script> alert("Data Not Deleted");</script>';
    }

}
