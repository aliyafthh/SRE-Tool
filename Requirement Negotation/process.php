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
        $category = $_POST['option_id'];
        $mysqli->query("INSERT INTO rn_issue(req_id,issue_detail,Category,person_id) VALUES('$req_id','$issue','$category','person_1')") 
                or die($mysqli->error);
        header("location:issueNego.php?req_id=$req_id");
        $_SESSION['message']= "Record has been saved";
        $_SESSION['msg_type']= "success";

}

if(isset($_POST['delete_issue'])){
    $id=$_POST['issue_id'];
    $req_id = $_POST['req_id'];
    $result=$mysqli->query("SELECT * FROM rn_issue WHERE req_id=$id");
    $mysqli->query("DELETE FROM rn_issue WHERE issue_id=$id") 
        or die($mysqli->error);
    $mysqli->query("DELETE FROM rn_option WHERE req_id=$req_id") 
        or die($mysqli->error);
    $mysqli->query("DELETE FROM rn_vote WHERE req_id=$req_id") 
        or die($mysqli->error);

    header("location:issueNego.php?req_id=$req_id");
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
    $mysqli->query("INSERT INTO rn_option(req_id,option_detail,reason,person_id) VALUES('$req_id','$option','$reason','person_1')") 
            or die($mysqli->error);
    header("location:optionNego.php?req_id=$req_id");
    $_SESSION['message']= "Record has been saved";
    $_SESSION['msg_type']= "success";

}

if(isset($_POST['delete_option'])){
    $id=$_POST['option_id'];
    $req_id = $_POST['req_id'];
    $mysqli->query("DELETE FROM rn_vote WHERE req_id=$req_id AND option_id=$id") 
            or die($mysqli->error);
    $mysqli->query("DELETE FROM rn_option WHERE req_id=$req_id AND option_id=$id") 
            or die($mysqli->error);
    header("location:optionNego.php?req_id=$req_id");
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
        $category = $_POST['selected_id'];

        $mysqli->query("UPDATE rn_issue SET issue_detail='$issue',Category='$category' where issue_id=$id") 
                or die($mysqli->error);

        header("location:issueNego.php?req_id=$req_id");        
        $_SESSION['message']= "Record has been updated";
        $_SESSION['msg_type']= "warning";
    }
    if(isset($_POST['option_id'])){
        $id=$_POST['option_id'];
        $option=$_POST['option'];
        $reason=$_POST['reason'];
        $req_id = $_POST['req_id'];
        $mysqli->query("UPDATE rn_option SET option_detail='$option', reason='$reason' where option_id=$id") 
                or die($mysqli->error);

        header("location:optionNego.php?req_id=$req_id");        
        $_SESSION['message']= "Record has been updated";
        $_SESSION['msg_type']= "warning";
    }
}
if(isset($_POST['vote'])){
    $option_id = $_POST['option_id'];
    $req_id = $_POST['req_id'];
    // $user_name = $_POST['user_name'];
    foreach($_POST['user_id'] as $selected){
        $check =$mysqli->query("SELECT * FROM rn_vote WHERE option_id=$option_id AND userr_id=$selected") 
        or die($mysqli->error);
        if(mysqli_num_rows($check)>0){
            
        }else{
            $mysqli->query("INSERT INTO rn_vote(req_id,option_id,userr_id) VALUES('$req_id','$option_id','$selected')") 
                or die($mysqli->error);
        }
    }
    

    header("location:voteNego.php?req_id=$req_id");
    // $_SESSION['message']= "Record has been saved";
    // $_SESSION['msg_type']= "success";

}

if(isset($_GET['delete_vote'])){
    $user_id=$_GET['delete_vote'];
    $req_id = $_GET['req_id'];
    $opt_id = $_GET['opt_id'];
    $mysqli->query("DELETE FROM rn_vote WHERE req_id=$req_id AND option_id=$opt_id AND userr_id=$user_id") 
            or die($mysqli->error);
    header("location:voteNego.php?req_id=$req_id");
    $_SESSION['message']= "Vote has been deleted";
    $_SESSION['msg_type']= "danger";
}
if(isset($_GET['viewresolve'])){
    $req_id = $_GET['viewresolve'];
    
    $sql="SELECT req_detail FROM rq_main WHERE req_id = $req_id";
    $result=$mysqli->query($sql) or die($mysqli->error);
    while($row=$result->fetch_assoc()):
        echo "<a>Requirement: ".$row['req_detail']."</a>";
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
if(isset($_GET['statusNego'])){
    $req_id = $_GET['statusNego'];
    $mysqli->query("UPDATE progress SET status='0' where module='Negotiation'") 
    or die($mysqli->error);

    header("location:resultNego.php");        
    $_SESSION['message']= "Win win tree has been updated";
    $_SESSION['msg_type']= "success";
}
?>
