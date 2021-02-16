<?php

//action.php

include('database_connection.php');

if(isset($_POST["action"]))
{
	if($_POST["action"] == "fetch_single")
	{
		$query = "
		SELECT * FROM requirements WHERE id = '".$_POST["id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			$output['title'] = $row['title'];
			$output['priority'] = $row['priority'];
		}
		echo json_encode($output);
	}
	if($_POST["action"] == "update")
	{
		$query = "
		UPDATE requirements 
		SET 
		priority = '".$_POST["priority"]."' 
		WHERE id = '".$_POST["hidden_id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Updated</p>';
	}

}

?>
