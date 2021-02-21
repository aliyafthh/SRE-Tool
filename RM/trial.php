

<?php
include("database_connection.php");


if (isset($_POST["action"])) {
    if ($_POST["action"] == "fetch_single") {
        $query = "
		SELECT * FROM requirements WHERE id = '" . $_POST["id"] . "'
		";
        $statement = $connect->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        foreach ($result as $row) {
            $output['title'] = $row['title'];
            $output['priority'] = $row['priority'];
        }
        echo json_encode($output);
    }
    if ($_POST["action"] == "update") {
        $query = "
		UPDATE requirements 
		SET 
		priority = '" . $_POST["priority"] . "' 
		WHERE id = '" . $_POST["hidden_id"] . "'
		";
        $statement = $connect->prepare($query);
        $statement->execute();
        echo '<script>window.history.go(-1)</script>';
    }
} else {

    $id = $_POST['id'];
    $query = "SELECT * FROM requirements WHERE id=$id";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $total_row = $statement->rowCount();

    ##Fetch mysql results for dependent reqs
    $query2 = "SELECT * FROM dependant";
    $statement2 = $connect->prepare($query2);
    $statement2->execute();
    $result2 = $statement2->fetchAll();
    $total_row2 = $statement2->rowCount();
    $dependent = array();

    $dependency = false;

    ##Get max id
    $stmt = $connect->prepare("SELECT MAX(id) AS max_id FROM requirements");
    $stmt->execute();
    $invNum = $stmt->fetch(PDO::FETCH_ASSOC);
    $max_id = $invNum['max_id'];

    if ($total_row2 > 0) {
        foreach ($result2 as $row2) {
            array_push($dependent, $row2['id']);
        }
    }
    $output = '<form method="post" id="user_form" action="' . $_SERVER['PHP_SELF'] . '">
                <div class="form-group">
                    <p>Please select priority level:</p>';
    if ($total_row > 0) {
        foreach ($result as $row) {
            for ($i = 0; $i < count($dependent); $i++) {
                for ($j = 0; $j <= $max_id; $j++) {

                    if ($id . "0" . $j == $dependent[$i]) {
                        // $dep_id = substr($dependent[$i], strpos($dependent[$i], "0") + 1);
                        $dependency = true;
                        $query3 = "SELECT * FROM requirements WHERE id=$j";
                        $statement3 = $connect->prepare($query3);
                        $statement3->execute();
                        $result3 = $statement3->fetchAll();
                        $total_row3 = $statement3->rowCount();

                        if ($total_row3 > 0) {
                            foreach ($result3 as $row3) {
                                $priority = $row3['priority'];

                                if ($priority == "high") {
                                    if ($row['priority'] == "high") {
                                        $output .= '<input type="radio" id="high" name="priority" value="high" checked required>
                            <label for="high">High (Recommended)</label><br>
                            <input type="radio" id="medium" name="priority" value="medium">
                            <label for="medium">Medium</label><br>
                            <input type="radio" id="low" name="priority" value="low">
                            <label for="low">Low</label>';
                                    } elseif ($row['priority'] == "medium") {
                                        $output .= '<input type="radio" id="high" name="priority" value="high" required>
                            <label for="high">High (Recommended)</label><br>
                            <input type="radio" id="medium" name="priority" value="medium" checked>
                            <label for="medium">Medium</label><br>
                            <input type="radio" id="low" name="priority" value="low">
                            <label for="low">Low</label>';
                                    } elseif ($row['priority'] == "low") {
                                        $output .= '<input type="radio" id="high" name="priority" value="high" required>
                            <label for="high">High (Recommended)</label><br>
                            <input type="radio" id="medium" name="priority" value="medium">
                            <label for="medium">Medium</label><br>
                            <input type="radio" id="low" name="priority" value="low" checked>
                            <label for="low">Low</label>';
                                    } else {
                                        $output .= '<input type="radio" id="high" name="priority" value="high" required>
                            <label for="high">High (Recommended)</label><br>
                            <input type="radio" id="medium" name="priority" value="medium">
                            <label for="medium">Medium</label><br>
                            <input type="radio" id="low" name="priority" value="low">
                            <label for="low">Low</label>';
                                    }
                                } elseif ($priority == "medium") {
                                    if ($row['priority'] == "high") {
                                        $output .= '<input type="radio" id="high" name="priority" value="high" checked required>
                            <label for="high">High</label><br>
                            <input type="radio" id="medium" name="priority" value="medium">
                            <label for="medium">Medium (Recommended)</label><br>
                            <input type="radio" id="low" name="priority" value="low">
                            <label for="low">Low</label>';
                                    } elseif ($row['priority'] == "medium") {
                                        $output .= '<input type="radio" id="high" name="priority" value="high" required>
                            <label for="high">High</label><br>
                            <input type="radio" id="medium" name="priority" value="medium" checked>
                            <label for="medium">Medium (Recommended)</label><br>
                            <input type="radio" id="low" name="priority" value="low">
                            <label for="low">Low</label>';
                                    } elseif ($row['priority'] == "low") {
                                        $output .= '<input type="radio" id="high" name="priority" value="high" required>
                            <label for="high">High</label><br>
                            <input type="radio" id="medium" name="priority" value="medium">
                            <label for="medium">Medium (Recommended)</label><br>
                            <input type="radio" id="low" name="priority" value="low" checked>
                            <label for="low">Low</label>';
                                    } else {
                                        $output .= '<input type="radio" id="high" name="priority" value="high" required>
                            <label for="high">High</label><br>
                            <input type="radio" id="medium" name="priority" value="medium">
                            <label for="medium">Medium (Recommended)</label><br>
                            <input type="radio" id="low" name="priority" value="low">
                            <label for="low">Low</label>';
                                    }
                                } elseif ($priority == "low") {
                                    if ($row['priority'] == "high") {
                                        $output .= '<input type="radio" id="high" name="priority" value="high" checked required>
                            <label for="high">High</label><br>
                            <input type="radio" id="medium" name="priority" value="medium">
                            <label for="medium">Medium</label><br>
                            <input type="radio" id="low" name="priority" value="low">
                            <label for="low">Low (Recommended)</label>';
                                    } elseif ($row['priority'] == "medium") {
                                        $output .= '<input type="radio" id="high" name="priority" value="high" required>
                            <label for="high">High</label><br>
                            <input type="radio" id="medium" name="priority" value="medium" checked>
                            <label for="medium">Medium</label><br>
                            <input type="radio" id="low" name="priority" value="low">
                            <label for="low">Low (Recommended)</label>';
                                    } elseif ($row['priority'] == "low") {
                                        $output .= '<input type="radio" id="high" name="priority" value="high" required>
                            <label for="high">High</label><br>
                            <input type="radio" id="medium" name="priority" value="medium">
                            <label for="medium">Medium</label><br>
                            <input type="radio" id="low" name="priority" value="low" checked>
                            <label for="low">Low (Recommended)</label>';
                                    } else {
                                        $output .= '<input type="radio" id="high" name="priority" value="high" required>
                            <label for="high">High</label><br>
                            <input type="radio" id="medium" name="priority" value="medium">
                            <label for="medium">Medium</label><br>
                            <input type="radio" id="low" name="priority" value="low">
                            <label for="low">Low (Recommended)</label>';
                                    }
                                } else {
                                    $dependency = false;
                                }
                            }
                        }
                    }
                }
            }

            if ($dependency == false) {
                if ($row['priority'] == "high") {
                    $output .= '<input type="radio" id="high" name="priority" value="high" checked required>
                <label for="high">High</label><br>
                <input type="radio" id="medium" name="priority" value="medium">
                <label for="medium">Medium</label><br>
                <input type="radio" id="low" name="priority" value="low">
                <label for="low">Low</label>';
                } elseif ($row['priority'] == "medium") {
                    $output .= '<input type="radio" id="high" name="priority" value="high" required>
                <label for="high">High</label><br>
                <input type="radio" id="medium" name="priority" value="medium" checked>
                <label for="medium">Medium</label><br>
                <input type="radio" id="low" name="priority" value="low">
                <label for="low">Low</label>';
                } elseif ($row['priority'] == "low") {
                    $output .= '<input type="radio" id="high" name="priority" value="high" required>
                <label for="high">High</label><br>
                <input type="radio" id="medium" name="priority" value="medium">
                <label for="medium">Medium</label><br>
                <input type="radio" id="low" name="priority" value="low" checked>
                <label for="low">Low</label>';
                } else {
                    $output .= '<input type="radio" id="high" name="priority" value="high" required>
                <label for="high">High</label><br>
                <input type="radio" id="medium" name="priority" value="medium">
                <label for="medium">Medium</label><br>
                <input type="radio" id="low" name="priority" value="low">
                <label for="low">Low</label>';
                }
            }

            $output .= '</div>
                <div class="form-group">
                    <input type="hidden" name="action" id="action" value="update" />
                    <input type="hidden" name="hidden_id" id="hidden_id" value=' . $row["id"] . ' />
                    <input type="submit" name="form_action" id="form_action" class="btn btn-info" value="Update" data-rel="back" />
                </div>
            </form>';
        }
    }

    echo $output;
}
?>
