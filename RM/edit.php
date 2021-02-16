<!DOCTYPE html>
<html lang="en">

<head>
  <title>Requirements Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/9eba2c9c5c.js" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/umd/popper.min.js" integrity="sha512-eUQ9hGdLjBjY3F41CScH3UX+4JDSI9zXeroz7hJ+RteoCaY+GP/LDoM8AO+Pt+DRFw3nXqsjh9Zsts8hnYv8/A==" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="rm.css">

  <style>
    .tab {
      overflow: hidden;
      border: 1px solid #ccc;
      border-top: none;
      border-right: none;
      border-left: none;
      background-color: transparent;
    }

    /* Style the buttons inside the tab */
    .tab button {
      background-color: inherit;
      /* float: left; */
      border: none;
      outline: none;
      cursor: pointer;
      padding: 14px 16px 0px 16px;
      transition: 0.3s;
      font-size: 17px;
      margin: 30px 80px 0px 80px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
      background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
      border: 5px solid mediumpurple;
      border-top: none;
      border-right: none;
      border-left: none;
    }

    /* Style the tab content */
    .tabcontent {
      font-size: 14px;
      text-align: left;
      width: 80%;
      float: left;
      display: none;
      padding: 6px 12px;
      margin: 30px 80px;
      border: none;

    }

    input[type=text] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 3px solid #ccc;
      border-radius: 3px;
      -webkit-transition: 0.5s;
      transition: 0.5s;
      outline: none;
    }

    input[type=text]:focus {
      border: 3px solid #555;
    }
  </style>
  <?php
  require_once "config.php";
  ?>

</head>

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

    <?php

    $query = $mysqli->query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'requirements'");

    while ($row = $query->fetch_assoc()) {
      $result2[] = $row;
    }

    // Array of all column names
    $columnArr = array_column($result2, 'COLUMN_NAME');
    $count = count($columnArr);
    ?>


    <div class="item2 sidenav" style="background-color:mediumpurple;">
      <a href="index.php"><strong>Requirements</strong></a>
      <hr style="background-color: white; width: 50%;">

      <?php

      $query2 = "SELECT * FROM requirements";
      $result3 = $mysqli->query($query2);

      if ($result3->num_rows > 0) {
        // output data of each row
        while ($row2 = $result3->fetch_assoc()) {
          echo "<br>";
          echo "<a href=\"edit.php?id=$row2[id]\">" . $row2['title'] . "</a>";
          echo "<br>";
        }
      } else {
        echo "";
      }

      $id = $_GET['id'];
      $arrayDepReq = array();
      $arrayReqDep = array();
      $query_d = "SELECT title FROM requirements WHERE  id = $id ";
      $query_run = mysqli_query($mysqli, $query_d);
      $row = $query_run->fetch_assoc();
      $title_d = $row['title'];


      ?>

    </div>

    <div class="content main item3" style=" background-color: white;">
      <h3><strong>Requirements Management</strong></h3>

      <div class="tab">
        <button class="tablinks" id="defaultOpen" onclick="openCity(event, 'Linked Requirements')">Linked Requirements</button>
        <button class="tablinks" onclick="openCity(event, 'Edit')">Edit</button>

      </div>

      <?php


      //selecting data associated with this particular id
      $result = mysqli_query($mysqli, "SELECT * FROM requirements WHERE id=$id");
      ?>

      <div id="Edit" class="tabcontent">
        <form method="post" action="editReq.php" autocomplete="off">

          <?php

          while ($res = mysqli_fetch_array($result)) {
            echo "<input type='hidden' name='update_id' id='update_id' value=\"" . $res[$columnArr[0]] . "\">";
            for ($i = 1; $i < $count; $i++) {

              if ($columnArr[$i] == "created_on" || $columnArr[$i] == "priority") {
                echo "<label>" . $columnArr[$i] . "</label>";
                echo "<input type='text' name=\"" . $columnArr[$i] . "\" class='form-control' value=\"" . $res[$columnArr[$i]] . "\" readonly>";
              } elseif ($columnArr[$i] == "requirement" || $columnArr[$i] == "title") {
                echo " <div class='form-group'>";
                echo " <label>" . $columnArr[$i] . "</label>";
                echo "<input type='text' name=\"" . $columnArr[$i] . "\" class='form-control' value=\"" . $res[$columnArr[$i]] . "\" required>";
                echo "</div>";
              } else {
                echo " <div class='form-group'>";
                echo " <label>" . $columnArr[$i] . "</label>";
                echo "<input type='text' name=\"" . $columnArr[$i] . "\" class='form-control' value=\"" . $res[$columnArr[$i]] . "\">";
                echo "</div>";
              }
            }
          }

          ?>
          <div style="text-align: center;">
            <button type="submit" name="updateReq" class="button">Save changes</button>
          </div>
        </form>
      </div>

      <div id="Linked Requirements" class="tabcontent">
        <h5 style="display: inline-block; margin-left:10%;">Requirements this requirement is dependent on</h5>
        <?php
        $sql = "SELECT * FROM dependant WHERE id LIKE '" . $id . "%'";
        $result = $mysqli->query($sql);
        if($result->num_rows == 0){
          echo '<button type="button" class="button btn-primary" data-toggle="modal" data-target="#addDependentModal">Add New Link</button>';
        }
        ?>
        <table id="rm">
          <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php

            

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                array_push($arrayReqDep,$row['id']);
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td><button type='button' class='btn deletebtn'><i class='far fa-trash-alt fa-lg'></i></button></td>";
                echo "</tr>";
              }
            } else {
              echo "<tr><td></td><td>No requirements</td><td></td></tr>";
            }
            ?>
          </tbody>

        </table>
        <br><br>
        <h5 style="display: inline-block; margin-left:10%;">Requirements that are dependent on this requirement</h5>
        <table id="rm">
          <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php

            $sql = "SELECT * FROM dependant WHERE id LIKE '%0" . $id . "'";
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                array_push($arrayDepReq,$row['id']);
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['title_d'] . "</td>";
                echo "<td><button type='button' class='btn deletebtn'><i class='far fa-trash-alt fa-lg'></i></button></td>";
                echo "</tr>";
              }
            } else {
              echo "<tr><td></td><td>No requirements</td><td></td></tr>";
            }
            ?>
          </tbody>

        </table>

        <p></p>
      </div>


    </div>

    <script>
      var navbar = document.getElementById("navbar");
      var sticky = navbar.offsetTop;

      function myFunction() {
        if (window.pageYOffset >= sticky) {
          navbar.classList.add("sticky")
        } else {
          navbar.classList.remove("sticky");
        }
      }

      function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
      }

      document.getElementById("defaultOpen").click();
    </script>

    <div class="item5">
      <footer>

      </footer>
    </div>
  </div>

  <!-- Add Dependent Modal -->

  <div class="modal fade" id="addDependentModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addModalLabel">Add New Dependent Link</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="insertDependant.php" method="POST" autocomplete="off">
          <div class="modal-body">

            <div class="form-group">
              <label>Select a requirement</label>
              <?php

              echo "<input type='hidden' name='id' value=" . $id . ">";
              echo "<input type='hidden' name='title_d' value='" . $title_d . "'>";

              ?>

              <br>
              <select name="did">
                <?php
                $query_1 = "SELECT * FROM requirements";
                $result_1 = $mysqli->query($query_1);
                $counter = 0;

                if ($result_1->num_rows > 0) {
                  // output data of each row
                  while ($row_1 = $result_1->fetch_assoc()) {
                    $id_1 = $row_1['id'];
                    $title_1 = $row_1['title'];
                    if ($id == $id_1 || in_array($id_1."0".$id,$arrayDepReq) || in_array($id."0".$id_1,$arrayReqDep)) {
                    } else {
                      echo '<option value="' . $id_1 . '">' . $title_1 . '</option>';
                      $counter++;
                    }
                  }
                } else {
                  echo "";
                }
                ?>
              </select>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="insertData" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Delete Dependant Modal -->

  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">Delete Attribute</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="deleteDependant.php" method="POST">

          <div class="modal-body">

            <input type="hidden" name="delete_id" id="delete_id">
            <?php
            echo "<input type='hidden' name='id' value=" . $id . ">";
            ?>


            <h4>Are you sure you want to delete this link?</h4>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
            <button type="submit" name="deleteData" class="btn btn-primary">Yes</button>
          </div>
        </form>
      </div>
    </div>
  </div>



  <script>
    $(document).ready(function() {
      $('.deletebtn').on('click', function() {

        $('#deleteModal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
          return $(this).text();
        }).get();

        console.log(data);

        $('#delete_id').val(data[0]);

      });

    });
  </script>


</body>

</html>