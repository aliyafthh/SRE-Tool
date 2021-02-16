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

    <div class="content main item3" style=" background-color: white;">
      <h3><strong>Requirements Management</strong></h3>
      <button class="button" onclick="location.href='manageColumn.php';">Manage Columns</button>
      <button class="button" onclick="location.href='manageViews.php';">Manage Views</button>
      <button class="button" onclick="location.href='prioritisation.php';">Prioritize Requirements</button>

      <table id="att">
        <tr>
          <th style='display:none;'>ID</th>
          <th>Views</th>
          <th></th>
        </tr>

        <?php

        $query = "SELECT * FROM views";
        $result = $mysqli->query($query);
        $array = [];

        if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
            $v_id = $row['v_id'];
            $view = $row['viewer'];

            if (in_array($view, $array)) {
            } else {
              echo "<tr><td style='display:none;'>$v_id</td>";
              echo "<td>$view's View</td>";
              array_push($array, $view);
              echo "<td>";
              echo "<a href=\"view.php?v_id=$v_id\" class='btn'><i class='fas fa-eye'></i></a>";

        ?>

              <!-- <button type="button" class='btn editbtn'><i class='far fa-edit fa-lg'></i></button> -->
              <button type="button" class='btn deletebtn'><i class='far fa-trash-alt fa-lg'></i></button></td>
              </tr>


        <?php
            }
          }
        }

        ?>
      </table>
      <button type="button" class="button btn-primary" data-toggle="modal" data-target="#addModal">Add New View</button>
      <!-- <button class="button">Add New Attribute</button> -->

    </div>

  </div>

  <!-- ###################################################################################################################################### -->

  <!-- Add Attribute Modal -->
  <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addModalLabel">Add New View</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="insertView.php" method="POST" autocomplete="off">
          <div class="modal-body">

            <div class="form-group">
              <label>Viewer</label>
              <input type="text" name="viewer" class="form-control" placeholder="Enter viewer's role" required>
            </div>

            <div class="form-group">
              <label>Select Attributes</label><br>
              <div class="options">
                <?php

                $query = $mysqli->query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'requirements'");
                $result = [];

                while ($row = $query->fetch_assoc()) {
                  $result[] = $row;
                }

                // Array of all column names
                $columnArr = array_column($result, 'COLUMN_NAME');
                foreach ($columnArr as $string) {
                  echo "<label><input type='checkbox' name='att[]' id ='req' value='" . $string . "' required>   " . $string . "</label><br>";
                }


                ?>
              </div>
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

  <!-- ###################################################################################################################################### -->

  <!-- Edit Attribute Modal -->

  <!-- <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit Attribute</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="updateAttribute.php" method="POST" autocomplete="off">

          <input type="hidden" name="update_id" id="update_id">

          <div class="modal-body">

            <div class="form-group">
              <label>Attribute</label>
              <input type="text" name="attribute" id="attribute" class="form-control" placeholder="Enter attribute">
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="updateData" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div> -->

  <!-- ###################################################################################################################################### -->

  <!-- Delete Attribute Modal -->

  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">Delete Attribute</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="deleteView.php" method="POST">

          <div class="modal-body">

            <input type="hidden" name="delete_id" id="delete_id">

            <h4>Are you sure you want to delete this view?</h4>
            <small>All data related will be deleted as well</small>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
            <button type="submit" name="deleteData" class="btn btn-primary">Yes</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <?php

  $mysqli->close();
  ?>
  <!-- ###################################################################################################################################### -->

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


  <script>
    window.onscroll = function() {
      myFunction()
    };

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }

    $(document).ready(function() {
      $('.editbtn').on('click', function() {

        $('#editModal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
          return $(this).text();
        }).get();

        console.log(data);

        $('#update_id').val(data[0]);
        $('#attribute').val(data[1]);

      });

    });

    $(function() {
      var requiredCheckboxes = $('.options :checkbox[required]');
      requiredCheckboxes.change(function() {
        if (requiredCheckboxes.is(':checked')) {
          requiredCheckboxes.removeAttr('required');
        } else {
          requiredCheckboxes.attr('required', 'required');
        }
      });
    });
  </script>

  <div class="item5">
    <footer>

    </footer>
  </div>
  </div>


</body>

</html>