<!DOCTYPE html>
<html lang="en">

<head>
    <title>Requirements Management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/9eba2c9c5c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css" integrity="sha512-okE4owXD0kfXzgVXBzCDIiSSlpXn3tJbNodngsTnIYPJWjuYhtJ+qMoc0+WUwLHeOwns0wm57Ka903FqQKM1sA==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="rm.css">
</head>


<?php
require_once "config.php";
?>

<body style="height:auto;">
    <header></header>

    <div class="grid-container noselect">
        <div class="item1">
            <div style="float: left; padding-left: 30px; text-align:left;">
                <h3><strong>Software Requirements Engineering</strong></h3>
                <p style="font-size: 20px">Faculty of Computer Science and Information Technology</p>
            </div>
            <br>
            <div id="navbar" style="float: right;">

                <a href="javascript:void(0)">Create New Requirement</a>
                <a href="javascript:void(0)">Negotiate Requirement</a>
                <a href="javascript:void(0)">Validate Requirement</a>
                <a class="active" href="index.php">Manage Requirement</a>



                <a href="javascript:void(0)" style="float: right; padding-right: 30px;">Log Out</a>


            </div>
        </div>


        <div class="item2 sidenav" style="background-color:mediumpurple;">
            <a href="index.php"><strong>Requirements</strong></a>
            <hr style="background-color: white; width: 50%;">

            <?php

            $query2 = "SELECT * FROM requirements";
            $result2 = $mysqli->query($query2);

            if ($result2->num_rows > 0) {
                // output data of each row
                while ($row2 = $result2->fetch_assoc()) {
                    echo "<br>";
                    echo "<a href=\"edit.php?id=$row2[id]\">" . $row2['title'] . "</a>";
                    echo "<br>";
                }
            } else {
                echo "";
            }

            ?>

        </div>

        <div class="content main item3" style=" background-color: white; margin:auto;">
            <h3><strong>Requirements Management</strong></h3>
            <button class="button" onclick="location.href='manageColumn.php';">Manage Columns</button>
            <button class="button" onclick="location.href='manageViews.php';">Manage Views</button>
            <button class="button" onclick="location.href='prioritisation.php';">Prioritize Requirements</button>
            <div style="margin-left:10%; margin-right:10%; font-size:medium; text-align:left;">

                <?php

                //   Retrieve value from previous page
                if (isset($_POST['conductTechnique'])) {

                    $purpose = $_POST['purpose'];
                    $req = $_POST['req'];
                    $criteria = $_POST['criteria'];
                    $technique = $_POST['technique'];



                    $sql = "SELECT * FROM requirements";
                    $result = $mysqli->query($sql);

                    if ($technique == "kano") {
                ?>
                        <h3><strong>Kano Classification</strong></h3>

                        <?php
                        echo "Purpose: " . $purpose . "<br>";
                        echo "Criteria: " . $criteria . "<br>";
                        ?>

                        <br>
                        <h5>Dissatisfier</h5>

                        <div id="div4" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <?php
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    for ($i = 0; $i < count($req); $i++) {

                                        if ($row['id'] == $req[$i]) {
                                            echo "<p draggable='true' ondragstart='drag(event)' id='drag" . $i . "'>" . $row['title'] . "</p>";
                                        }
                                    }
                                }
                            }

                            ?>

                        </div>
                        <div class="some">
                            <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            </div>
                        </div>


                        <h5>Satisfier</h5>
                        <div class="some">
                            <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                        </div>

                        <h5>Delighter</h5>
                        <div class="some">
                            <div id="div3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                        </div>


                    <?php
                    } else {
                    ?>

                        <h3><strong>Requirements Ranking</strong></h3>

                    <?php

                        echo "Purpose: " . $purpose . "<br>";
                        echo "Criteria: " . $criteria . "<br><br>";




                        echo "<table id='rank'><tr><th rowspan='2'>Requirements</th><th colspan='4'>Stakeholder(S)</th><th rowspan='2'>Sum</th></tr>";
                        echo "<tr><th>S1</th><th>S2</th><th>S3</th><th>S4</th>";

                        $sql3 = "SELECT * FROM requirements";
                        $result3 = $mysqli->query($sql3);

                        if ($result3->num_rows > 0) {
                            while ($row3 = $result3->fetch_assoc()) {
                                for ($i = 0; $i < count($req); $i++) {

                                    if ($row3['id'] == $req[$i]) {
                                        echo "<tr><td>" . $row3["title"] . "</td>
                                        <td><input type='text' class='calc'  autocomplete='off'/></td>
                                        <td><input type='text' class='calc'  autocomplete='off'/></td>
                                        <td><input type='text' class='calc'  autocomplete='off'/></td>
                                        <td><input type='text' class='calc'  autocomplete='off'/></td>
                                        <td><span id='total'></span></td></tr>";
                                    }
                                }
                            }
                        }
                        echo "</table>";
                    }


                    echo "<br><br>";
     
                    ?>

                    <div class="table-responsive" id="user_data">

                    </div>
                    <br />

                    <div id="user_dialog" title="Edit Data">

                    </div>

                    <div id="action_alert" title="Action">

                    </div>

                <?php
                ?>

            </div>

        </div>



        <div class="item5">
            <footer>

            </footer>
        </div>
    </div>

    <script>
        function allowDrop(ev) {
            ev.preventDefault();
        }

        function drag(ev) {
            ev.dataTransfer.setData("text", ev.target.id);
        }

        function drop(ev) {
            ev.preventDefault();
            var data = ev.dataTransfer.getData("text");
            ev.target.appendChild(document.getElementById(data));
        }

        jQuery(document).ready(function() {

            jQuery('.calc').change(function() {
                jQuery('#rank tr').each(function() {
                    var total = 0;
                    jQuery(this).find('.calc').each(function() {
                        if ($(this).val() != '') {
                            total += parseInt($(this).val());
                        }
                    });
                    jQuery(this).find('#total').html(total);
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {

            load_data();

            <?php $array = json_encode($req);?>

            function load_data() {
                $.ajax({
                    url: "fetch.php",
                    method: "POST",
                    data:{
                        array: '<?php echo $array ?>'
                    },
                    success: function(data) {
                        $('#user_data').html(data);
                    }
                });
            }

            $("#user_dialog").dialog({
                autoOpen: false,
                width: 400
            });


            // $('#user_form').on('submit', function(event) {
            //     event.preventDefault();
            //     $('#form_action').attr('disabled', 'disabled');
            //     var form_data = $(this).serialize();
            //     $.ajax({
            //         url: "action.php",
            //         method: "POST",
            //         data: form_data,
            //         success: function(data) {
            //             $('#user_dialog').dialog('close');
            //             $('#action_alert').html(data);
            //             $('#action_alert').dialog('open');
            //             load_data();
            //             $('#form_action').attr('disabled', false);
            //         }
            //     });

            // });

            $('#action_alert').dialog({
                autoOpen: false
            });

            $(document).on('click', '.edit', function() {
                var id = $(this).attr('id');
                load_data();

                function load_data() {
                    $.ajax({
                        url: "trial.php",
                        method: "POST",
                        data: {
                            id: id,
                        },
                        success: function(data) {
                            $('#user_dialog').html(data);
                            $('#user_dialog').dialog('open');
                        }
                    });
                }
            });

        });
    </script>
<?php

}
?>


</body>

</html>