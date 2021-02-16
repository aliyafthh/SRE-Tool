<!DOCTYPE html>
<html lang="en">

<head>
  <title>Requirements Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/9eba2c9c5c.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="rm.css">
</head>

<style>
  .donate-now {
    list-style-type: none;
    margin: 25px 0 0 0;
    padding: 0;
  }

  .donate-now li {
    float: left;
    margin: 0 5px 0 0;
    width: 150px;
    height: 40px;
    position: relative;
  }

  .donate-now label,
  .donate-now input {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
  }

  .donate-now input[type="radio"] {
    opacity: 0.01;
    z-index: 100;
  }

  .donate-now input[type="radio"]:checked+label,
  .Checked+label {
    background: mediumpurple;
    color: white;
  }

  .donate-now label {
    padding: 5px;
    border: 1px solid #CCC;
    border-radius: 5px;
    cursor: pointer;
    z-index: 90;
  }

  .donate-now label:hover {
    background: #DDD;
  }

  input[type=submit],
  input[type=reset] {
    background-color: plum;
    border: none;
    color: white;
    padding: 8px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 7px;
  }
</style>


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
        <h5><strong>Step 1: Determine purpose of prioritization and group requirements which need to be prioritized.</strong></h5>
        <form action="prioritisation2.php" method="POST" class="mb-3" autocomplete="off">
          <input type='text' name='purpose' class='form-control' placeholder="Purpose of prioritisation" required><br>
          <h6><strong>Select all the requirements that applies</strong></h6>
          <div class="options">
            <?php
            $sql = "SELECT * FROM requirements";
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo "<label><input type='checkbox' name='req[]' id ='req' value='" . $row["id"] . "' required>   " . $row["title"] . "</label><br>";
              }
            } else {
              echo "0 results";
            }
            ?>
          </div>
          <br>
          <h5><strong>Step 2: Choose a prioritization criteria based on the purpose of prioritization.</strong></h5>
          <pre style="float: left;">Criteria: </pre>
          <select name="criteria" required>
            <option value="">Please select</option>
            <option value="Cost of implementation">Cost of implementation</option>
            <option value="Duration of implementation">Duration of implementation</option>
            <option value="Risk">Risk</option>
            <option value="Stability">Stability</option>
            <option value="Importance">Importance</option>
            <option value="Business Value">Business Value</option>
          </select>
          <br><br>
          <h5><strong>Step 3: Choose a prioritization technique.</strong></h5>
          <ul class="donate-now">
            <li>
              <input type="radio" id="a25" name="technique" value="ranking" required />
              <label for="a25">Ranking</label>
            </li>
            <li>
              <input type="radio" id="a50" name="technique" value="kano" />
              <label for="a50">Kano Classification</label>
            </li>
          </ul>

          <br><br>

          <input type="reset" value="Reset">
          <input type="submit" name="conductTechnique" value="Submit">
        </form>




      </div>

    </div>



    <div class="item5">
      <footer>

      </footer>
    </div>
  </div>

  <script>
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


</body>

</html>