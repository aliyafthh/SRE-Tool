<?php
session_start();
include_once ("config.php");

$id=0;
$update=false;
$issue='';
$option='';
$reason='';
if(isset($_POST['save_issue'])){
        $req_id = $_POST['req_id'];
        $issue = $_POST['issue'];
        $student_id=$_POST['student_id'];
        $category = $_POST['option_id'];
        $mysqli->query("INSERT INTO rn_issue(req_id,group_id,issue_detail,Category,person_id) VALUES('$req_id','9','$issue','$category','$student_id')") 
                or die($mysqli->error);
        header("location:issueNego.php?req_id=$req_id&id=$student_id");
        $_SESSION['message']= "Record has been saved";
        $_SESSION['msg_type']= "success";

}

if(isset($_POST['delete_issue'])){
    $id=$_POST['issue_id'];
    $req_id = $_POST['req_id'];
    $student_id=$_POST['student_id'];
    $result=$mysqli->query("SELECT * FROM rn_issue WHERE req_id=$id");
    $mysqli->query("DELETE FROM rn_issue WHERE issue_id=$id") 
        or die($mysqli->error);
    $mysqli->query("DELETE FROM rn_option WHERE req_id=$req_id") 
        or die($mysqli->error);
    $mysqli->query("DELETE FROM rn_vote WHERE req_id=$req_id") 
        or die($mysqli->error);

    header("location:issueNego.php?req_id=$req_id&id=$student");
    $_SESSION['message']= "Record has been deleted";
    $_SESSION['msg_type']= "danger";
}

// if(isset($_GET['edit_issue'])){
//     $id=$_GET['edit_issue'];
//     $update=true;
//     $result =$mysqli->query("SELECT * FROM rn_issue WHERE issue_id=$id") 
//             or die($mysqli->error);
//     if($result->num_rows){
//         $row=$result->fetch_array();
//         $issue=$row['issue_detail'];
//         $category=$row['Category'];
//     }

// }

if(isset($_POST['save_option'])){
    $option = $_POST['option'];
    $reason = $_POST['reason'];
    $req_id = $_POST['req_id'];
    $student_id=$_POST['student_id'];
    $mysqli->query("INSERT INTO rn_option(req_id,group_id,option_detail,reason,person_id) VALUES('$req_id','9','$option','$reason','$student_id')") 
            or die($mysqli->error);
    header("location:optionNego.php?req_id=$req_id&id=$student_id");
    $_SESSION['message']= "Record has been saved";
    $_SESSION['msg_type']= "success";

}

if(isset($_POST['delete_option'])){
    $id=$_POST['option_id'];
    $req_id = $_POST['req_id'];
    $student_id=$_POST['student_id'];
    $mysqli->query("DELETE FROM rn_vote WHERE req_id=$req_id AND option_id=$id") 
            or die($mysqli->error);
    $mysqli->query("DELETE FROM rn_option WHERE req_id=$req_id AND option_id=$id") 
            or die($mysqli->error);
    header("location:optionNego.php?req_id=$req_id&id=$student_id");
    $_SESSION['message']= "Record has been deleted";
    $_SESSION['msg_type']= "danger";
}

// if(isset($_GET['edit_option'])){
//     $id=$_GET['edit_option'];
//     $update=true;
//     $result =$mysqli->query("SELECT * FROM rn_option WHERE option_id=$id") 
//             or die($mysqli->error);
//     if($result->num_rows){
//         $row=$result->fetch_array();
//         $option=$row['option_detail'];
//         $reason=$row['reason'];
//     }

// }

if(isset($_POST['update'])){
    if(isset($_POST['issue_id'])){
        $id=$_POST['issue_id'];
        $issue=$_POST['issue2'];
        $req_id = $_POST['req_id'];
        $student_id=$_POST['student_id'];
        $category = $_POST['selected_id'];

        $mysqli->query("UPDATE rn_issue SET issue_detail='$issue',Category='$category' where issue_id=$id") 
                or die($mysqli->error);

        header("location:issueNego.php?req_id=$req_id&id=$student_id");        
        $_SESSION['message']= "Record has been updated";
        $_SESSION['msg_type']= "warning";
    }
    if(isset($_POST['option_id'])){
        $id=$_POST['option_id'];
        $option=$_POST['option'];
        $reason=$_POST['reason'];
        $req_id = $_POST['req_id'];
        $student_id=$_POST['student_id'];
        $mysqli->query("UPDATE rn_option SET option_detail='$option', reason='$reason' where option_id=$id") 
                or die($mysqli->error);

        header("location:optionNego.php?req_id=$req_id&id=$student_id");        
        $_SESSION['message']= "Record has been updated";
        $_SESSION['msg_type']= "warning";
    }
}
if(isset($_POST['vote'])){
    $option_id = $_POST['option_id'];
    $req_id = $_POST['req_id'];
    $student_id=$_POST['student_id'];
    // $user_name = $_POST['user_name'];
    $check =$mysqli->query("SELECT * FROM rn_vote WHERE option_id=$option_id AND student_id=$student_id AND req_id=$req_id") 
    or die($mysqli->error);
    if(mysqli_num_rows($check)>0){
        header("location:voteNego.php?req_id=$req_id&id=$student_id");
        $_SESSION['message']= "User already voted";
        $_SESSION['msg_type']= "warning";
    }else{
        
        $mysqli->query("INSERT INTO rn_vote(req_id,group_id,option_id,student_id) VALUES('$req_id','9','$option_id','$student_id')") 
        or die($mysqli->error);

        $sql="SELECT * FROM rn_option WHERE option_id = $option_id";
        $result=$mysqli->query($sql) or die($mysqli->error);
        while($row=$result->fetch_assoc()){
            $option_detail =$row['option_detail'];
            $mysqli->query("UPDATE rn_vote SET option_detail='$option_detail' where option_id='$option_id'") 
            or die($mysqli->error);
        }
        header("location:voteNego.php?req_id=$req_id&id=$student_id");
        $_SESSION['message']= "Vote has been saved";
        $_SESSION['msg_type']= "success";
    }
}

if(isset($_GET['delete_vote'])){
    $student_id=$_GET['delete_vote'];
    $req_id = $_GET['req_id'];
    $opt_id = $_GET['opt_id'];
    $mysqli->query("DELETE FROM rn_vote WHERE req_id=$req_id AND option_id=$opt_id AND student_id=$student_id") 
            or die($mysqli->error);
    header("location:voteNego.php?req_id=$req_id&id=$student_id");
    $_SESSION['message']= "Vote has been deleted";
    $_SESSION['msg_type']= "danger";
}
if(isset($_GET['viewresolve'])){
    $req_id = $_GET['viewresolve'];
    $sql="SELECT requirement FROM elicitation WHERE id = $req_id AND approved=1";
    $result=$mysqli->query($sql) or die($mysqli->error);
    while($row=$result->fetch_assoc()):
        echo "<a>Requirement: ".$row['requirement']."</a>";
        echo "<br>";
    endwhile;

    $sql="SELECT issue_detail FROM rn_issue WHERE req_id = $req_id";
    $result=$mysqli->query($sql) or die($mysqli->error);
        echo "<br>Issue: <br> ";
        while($row=$result->fetch_assoc()):
            echo "<a> --> ".$row['issue_detail']."</a>";
            echo "<br>";
        endwhile;
    
}
if(isset($_POST['statusUpdate'])){
    $module = $_POST['module'];
    $student_id=$_POST['id'];
    $sql="SELECT * FROM progress WHERE module='$module'";
    $result=$mysqli->query($sql) or die($mysqli->error);
    while($row=$result->fetch_assoc()):
        if($row['status']==1){
            $mysqli->query("UPDATE progress SET status='0' where module='$module'") 
            or die($mysqli->error);
        }else{
            $mysqli->query("UPDATE progress SET status='1' where module='$module'") 
            or die($mysqli->error);
        }
        continue;
    endwhile;
    header("location:winwintree.php?id=$student_id");        
    $_SESSION['message']= "Progress has been updated";
    $_SESSION['msg_type']= "success";
}
?>
