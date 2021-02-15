<?php
include_once ("config.php");
$ID=$_GET['req_id'];
?>

<div class="modal-header">
    <h3> Resolved Requirement</h3>
    <button type="button" class="close" data-dismiss="modal">
    <span>&times;</span></button>
</div>
<div class="modal-body">
    <div class="box">
        <table class="table">
            <thead >
                <tr>
                    <?php
                    $sql="SELECT req_detail FROM rq_main WHERE req_id = $ID";
                    $result=$mysqli->query($sql) or die($mysqli->error);
                    while($row=$result->fetch_assoc()):
                        echo "<th>Requirement: </th>";
                        echo "<td>".$row['req_detail']."</td>";
                    endwhile;
                    ?>
                </tr>
            </thead>
            <tbody >
                <tr>
                <?php
                $sql="SELECT issue_detail,Category FROM rn_issue WHERE req_id = $ID";
                $result=$mysqli->query($sql) or die($mysqli->error);
                echo "<th>Issue: </th> ";
                echo "<td>";
                while($row=$result->fetch_assoc()):
                echo "<span class=\"badge badge-pill badge-primary\">".$row['Category']."</span>";
                echo " ".$row['issue_detail']."  ";
                echo "<br>";
                endwhile;
                echo "</td>";
                ?>
                </tr>
            </tbody>
        </table>
        <div class="container" style="background-color:#E0E0E0;padding:10px; margin:10px 0px;  border: 2px; border-radius: 8px;">
                <p style="word-break:break-all;"><b>Voted Solution : </b><br>
                * The highest voted of the suggested option will choosen as the solution for the issues. However, "Top Management" will make the <b>final decision</b> which solutions will be choosen as the solutions.
                <br>
                * The voters who are the Top Management will be highlighted as red.
                </p>
                
                <div class="boxx" style="background-color:white; padding:10px;">
                    <table class="table">
                        <thead >
                            <tr>
                                <th class="text-center">Suggested Option</th>
                                <th style="width: 25%" class="text-center">Voted By</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php 
                                $resultt = $mysqli->query("SELECT * FROM rn_option WHERE req_id=$ID") or die($mysqli->error);                  
                                while ($row=$resultt->fetch_assoc()):
                                    $opt_id=$row['option_id'];?>
                                <?php $vote_result = $mysqli->query("SELECT `user`.* FROM rn_vote INNER JOIN user ON rn_vote.userr_id = user.user_id WHERE req_id=$ID AND option_id=$opt_id "); ?>
                                    <tr>
                                    <td><?php echo $row['option_detail'];?></td>
                                    <td class="text-center">
                            <?php if($vote_result->num_rows){
                                    while ($row_vote=$vote_result->fetch_assoc()){?>
                                    <?php
                                        if($row_vote['roles_id']==1){?>
                                            <a style="color:red;"><?php echo $row_vote['user_name'];?></a><br> 
                                        <?php }?>
                                       
                                    <a><?php echo $row_vote['user_name'];?></a><br>
                                <?php } 
                                    }
                                    else{?>
                                    <a style="color:red">Not voted yet</a><br> <?php }?>
                                    </td>
                            </tr>
                        <?php   endwhile;?>
                        </tr>
                        </tbody>
                    </table>
                </div>
        </div>
        
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>