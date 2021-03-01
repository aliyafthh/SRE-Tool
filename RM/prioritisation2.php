<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SRE Tool</title>

    <!-- Custom fonts for this template-->
    <link href="../Elicitation/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css" integrity="sha512-okE4owXD0kfXzgVXBzCDIiSSlpXn3tJbNodngsTnIYPJWjuYhtJ+qMoc0+WUwLHeOwns0wm57Ka903FqQKM1sA==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous"></script>
    <!-- Custom styles for this template-->
    <link href="../Elicitation/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- <link href="inspection.css" rel="stylesheet">
  <link href="checklist.css" rel="stylesheet"> -->

    <?php
    require_once "config.php";
    $id = 0;
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }
    ?>
    <style>
        .img1 {
            width: 10%;
            float: left;
        }

        .clearBoth {
            clear: both;
        }

        .hed {
            float: left;
            padding: 30px;
            margin-left: 10px;
            margin-top: 10px;
        }

        .heder {
            float: left;
            width: 100%;
            /* background-color: #F29D4B; */
            background-image: url("../images/black.jpg");
            background-size: 1550px 135px;
            height: 120px;
        }

        .hed3 {
            margin-left: 24%;
            color: lightgoldenrodyellow;
            font-family: myFirstFont;
        }

        .topbarz {
            float: right;
            width: 100%;
            background-color: #F0A35E;
            /* background-image: url("../images/wood.png"); */
            height: 50px;
        }

        @font-face {
            font-family: myFirstFont;
            src: url("../images/EraserDust.ttf");
        }

        .bodyody {
            /* background-image: url("../images/black.jpg");
      background-size: 1500px 1000px; */
            background-color: #FCF0CF !important;
        }

        .sidenavi {
            background-color: #70AE98;
            /* background-image: linear-gradient(180deg, #4e73df 10%, #224abe 100%); */
            background-size: cover;
            font-family: myFirstFont;
        }

        div.inline {
            float: left;
            margin-left: 16%;
            margin-right: 16%;
            padding: 10px;
        }

        .btn-pastel {
            color: #fff;
            background-color: #F6A7C1;
            border-color: #F6A7C1
        }

        .button {
            border-style: solid;
            border-width: 5px;
            border-radius: 12px;
            padding: 10px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 30px 100px 30px;
            cursor: pointer;
            color: #fff;
            background-color: #F6A7C1;
            border-color: #F6A7C1
        }

        #div1,
        #div2,
        #div3 {
            width: 300px;
            height: 100px;
            margin: 10px;
            padding: 10px;
            border: 1px solid black;
        }

        #div4 {
            float: right;
            width: 300px;
            height: 300px;
            margin: 10px;
            margin-right: 10%;
            padding: 10px;
            border: 1px solid black;

        }

        .some {
            margin-bottom: 10px;
        }

        .ui-widget.success-dialog {
            font-family: Verdana, Arial, sans-serif;
            font-size: .8em;
        }

        .ui-widget-content.success-dialog {
            background: #F9F9F9;
            border: 1px solid #90d93f;
            color: #222222;
        }

        .ui-dialog.success-dialog {
            left: 0;
            outline: 0 none;
            padding: 0 !important;
            position: absolute;
            top: 0;
        }

        .ui-dialog.success-dialog .ui-dialog-content {
            background: none repeat scroll 0 0 transparent;
            border: 0 none;
            overflow: auto;
            position: relative;
            padding: 0 !important;
            margin: 5%;
        }

        .ui-dialog.success-dialog .ui-widget-header {
            background: #b0de78;
            border: 0;
            color: #fff;
            font-weight: normal;
        }

        .ui-dialog.success-dialog .ui-dialog-titlebar {
            padding: 0.1em .5em;
            position: relative;
            font-size: 1em;
        }

        .ui-dialog.success-dialog .ui-dialog-titlebar-close {
            background-color: grey;

        }
    </style>

</head>
<!-- Header -->
<header class="heder">
    <div class="hed3">
        <img src="../images/clip.gif" alt="Study" class="img1" style="margin-top: 20px;">
        <h2 class="hed">Software Requirements Engineering</h2>
        <img src="../images/paperplane.gif" alt="Study" class="img1">
    </div>
</header>

<br class="clearBoth" />

<!-- Body -->

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidenavi sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php?id=<?php echo $id; ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Requirements</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <?php

            $query2 = "SELECT * FROM requirements";
            $result2 = $mysqli->query($query2);

            if ($result2->num_rows > 0) {
                // output data of each row
                while ($row2 = $result2->fetch_assoc()) {
                    echo "<li class='nav-item'>
    <a class='nav-link' href=\"edit.php?id=$row2[id]&gId=$id\">
    <i class='fas fa-clipboard-list'></i>
      <span>" . $row2['title'] . "</span></a>
  </li>";

                    echo "<hr class='sidebar-divider my-0'>";
                }
            } else {
                echo "";
            }

            ?>

            <li class='nav-item'>
                <a class='nav-link' href="/SRET/sret/RM/book/basic/index.html">
                    <i class="fas fa-book-open"></i>
                    <span>Handbook</span></a>
            </li>

            <br>
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column bodyody">
            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow topbarz">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="home.php?id=<?php echo $id; ?>" role="button">
                                <span class="mr-2 d-none d-lg-inline small" style="color: lightgoldenrodyellow;">Home</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="/SRET/sret/Requirement%20Negotation/winwinTree.php?id=<?php echo $id; ?>" role="button">
                                <span class="mr-2 d-none d-lg-inline small" style="color: lightgoldenrodyellow;">View Progress</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="../Elicitation/createReq.php?id=<?php echo $id; ?>" role="button">
                                <span class="mr-2 d-none d-lg-inline small" style="color: lightgoldenrodyellow;">Create New Requirement</span>
                            </a>
                        </li>

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="../Requirement Negotation/homeNego.php?id=<?php echo $id; ?>" role="button">
                                <span class="mr-2 d-none d-lg-inline small" style="color: lightgoldenrodyellow;">Negotiate Requirement</span>
                            </a>
                        </li>

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="../RV/rvpoption.php?id=<?php echo $id; ?>" role="button">
                                <span class="mr-2 d-none d-lg-inline small" style="color: lightgoldenrodyellow;">Validate Requirement</span>
                            </a>
                        </li>

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="index.php?id=<?php echo $id; ?>" role="button">
                                <span class="mr-2 d-none d-lg-inline small" style="color: lightgoldenrodyellow;">Manage Requirement</span>
                            </a>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline small" style="color: lightgoldenrodyellow;"><?php echo $id; ?></span>
                                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="card shadow mb-4" style="background-color:rgba(255, 255, 255, 0.95)">
                        <div class="card-body shadow-sm p-5">
                            <h3 class="text-muted">
                                <h2>Requirement Management </h2>
                            </h3>
                            <button class="button" onclick="location.href='manageColumn.php?id=<?php echo $id; ?>';">Manage Columns</button>
                            <button class="button" onclick="location.href='manageViews.php?id=<?php echo $id; ?>';">Manage Views</button>
                            <button class="button" onclick="location.href='prioritisation.php?id=<?php echo $id; ?>';">Prioritize Requirements</button>
                            <div style="margin-left:5%; margin-right:10%; font-size:medium; text-align:left;">

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




                                        echo "<table class='table table-striped' id='rank' style='width: 100% !important;'><tr><th rowspan='2'>Requirements</th><th colspan='4'>Stakeholder(S)</th><th rowspan='2'>Sum</th></tr>";
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

                                    <div class="table-responsive table table-striped" id="user_data" style="margin-left: 35%;">

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
                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2020</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="home.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <!-- <script src="../Elicitation/vendor/jquery/jquery.min.js"></script> -->
    <script src="../Elicitation/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../Elicitation/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../Elicitation/js/sb-admin-2.js"></script>

    <script>
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

        $(document).ready(function() {

            load_data();

            <?php $array = json_encode($req); ?>

            function load_data() {
                $.ajax({
                    url: "fetch.php",
                    method: "POST",
                    data: {
                        array: '<?php echo $array ?>'
                    },
                    success: function(data) {
                        $('#user_data').html(data);
                    }
                });
            }

            $("#user_dialog").dialog({
                autoOpen: false,
                width: 400,
                dialogClass: 'no-close success-dialog'
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



        });

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
<?php

                                }
?>
</body>

</html>