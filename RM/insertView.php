<?php
require_once "config.php";

if (isset($_POST['insertData'])) {

    $studentID = $_GET['id'];
    $viewer = $_POST['viewer'];
    $att = $_POST['att'];
    $arr = $_POST['arr'];
    $max_id;
    $v_id;
    $run = false;
    $exist = false;

    for ($h = 0; $h < count($arr); $h++) {
        if ($viewer == $arr[$h]) {
            $exist = true;
        }
    }

    if ($exist == false) {
        $sql = "SELECT * FROM views";
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            $sql2 = "SELECT * FROM views ORDER BY v_id DESC LIMIT 1;";
            $result2 = $mysqli->query($sql2);
            while ($row = $result2->fetch_assoc()) {
                $max_id = $row['v_id'];
                $v_id = $max_id + 1;
            }
        } else {
            $v_id = 1;
        }

        for ($i = 0; $i < count($att); $i++) {
            $attribute = $att[$i];
            $sql3 = "INSERT INTO views (v_id,viewer,attribute) VALUES('$v_id','$viewer','$attribute')";
            $sql3_run = mysqli_query($mysqli, $sql3);

            if ($sql3_run && $i == count($att) - 1) {
                $run = true;
            }
        }

        if ($run) {
            echo '<script> alert("Data Saved");</script>';
            header('Location: manageViews.php?id=' . $studentID);
        } else {
            echo '<script> alert("Data Not Saved");</script>';
        }
    } else {
        echo '<script> alert("Viewer already exists.");
        window.location = window.history.back();</script>';
        
    }
}
