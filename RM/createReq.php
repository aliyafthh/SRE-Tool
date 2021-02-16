<!DOCTYPE html>
<html lang="en">

<head>
  <title>Requirements Elicitation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/9eba2c9c5c.js" crossorigin="anonymous"></script>
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

        <a class="active" href="createReq.php">Create New Requirement</a>
        <a href="javascript:void(0)">Negotiate Requirement</a>
        <a href="javascript:void(0)">Validate Requirement</a>
        <a href="index.php">Manage Requirement</a>



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


      <?php

      $query = $mysqli->query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'requirements'");

      while ($row = $query->fetch_assoc()) {
        $result[] = $row;
      }

      // Array of all column names
      $columnArr = array_column($result, 'COLUMN_NAME');

      $sql = "SELECT * FROM requirements";
      $result = $mysqli->query($sql);

      if ($result->num_rows > 0) {

        echo "<table id='rm'><thead><tr>";
        $s = 0;
        foreach ($columnArr as $string) {
          echo "<th onclick='sortTable(".$s.")'>$string</th>";
          $s = $s + 1;
        }
        echo "</tr></thead><tbody>";
        while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          foreach ($columnArr as $string) {
            echo "<td>" . $row[$string] . "</td>";
          }
          echo "</tr>";
        }

        echo "</tbody></table>";
      } else {
        echo "0 results";
      }

      $mysqli->close();
      ?>

    </div>

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

      function sortTable(n) {
        var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
        table = document.getElementById("rm");
        switching = true;
        //Set the sorting direction to ascending:
        dir = "asc";
        /*Make a loop that will continue until
        no switching has been done:*/
        while (switching) {
          //start by saying: no switching is done:
          switching = false;
          rows = table.rows;
          /*Loop through all table rows (except the
          first, which contains table headers):*/
          for (i = 1; i < (rows.length - 1); i++) {
            //start by saying there should be no switching:
            shouldSwitch = false;
            /*Get the two elements you want to compare,
            one from current row and one from the next:*/
            x = rows[i].getElementsByTagName("TD")[n];
            y = rows[i + 1].getElementsByTagName("TD")[n];
            /*check if the two rows should switch place,
            based on the direction, asc or desc:*/
            if (dir == "asc") {
              if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                //if so, mark as a switch and break the loop:
                shouldSwitch = true;
                break;
              }
            } else if (dir == "desc") {
              if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                //if so, mark as a switch and break the loop:
                shouldSwitch = true;
                break;
              }
            }
          }
          if (shouldSwitch) {
            /*If a switch has been marked, make the switch
            and mark that a switch has been done:*/
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
            //Each time a switch is done, increase this count by 1:
            switchcount++;
          } else {
            /*If no switching has been done AND the direction is "asc",
            set the direction to "desc" and run the while loop again.*/
            if (switchcount == 0 && dir == "asc") {
              dir = "desc";
              switching = true;
            }
          }
        }
      }
    </script>

    <div class="item5">
      <footer>

      </footer>
    </div>
  </div>


</body>

</html>