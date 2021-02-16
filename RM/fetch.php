<?php

//fetch.php

include("database_connection.php");

$query = "SELECT * FROM requirements";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$total_row = $statement->rowCount();
$temp = $_POST['array'];
$temp2 = str_replace(array('[',']',',','"'), '',$temp);
$array = str_split($temp2);

$output = '
<table>
	<tr>
		<th>Requirement</th>
		<th>Priority</th>
		<th>Edit</th>
	</tr>
';
if($total_row > 0)
{
	foreach($result as $row)
	{
		for($i=0;$i<count($array);$i++){

			if($row['id']==$array[$i]){
		$output .= '
		<tr>
			<td>'.$row["title"].'</td>
			<td>'.$row["priority"].'</td>
			<td>
				<button type="button" name="edit" class="btn btn-primary btn-xs edit" id="'.$row["id"].'">Edit</button>
			</td>
		</tr>
		';
			}
		}
	}
}
else
{
	$output .= '
	<tr>
		<td colspan="4" align="center">Data not found</td>
	</tr>
	';
}
$output .= '</table>';
echo $output;
?>
