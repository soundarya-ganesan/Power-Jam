<?php 
	include"database.php";
	
	$sql="SELECT * FROM c_events WHERE event_name LIKE '{$_POST["s"]}%' ";
	$res=$db->query($sql);
		echo "<br><table border='1px' class='table'>
				<tr>
					<th>Event Number</th>
					<th>Event Name</th>
					<th>Event Date</th>
					<th>Event description</th>
					<th>Event Link</th>
					<th>Slide</th>
				</tr>
				";
	if($res->num_rows>0)
		
	{
		while($row=$res->fetch_assoc())
		{

			echo "<tr>
				<td>{$row["event_number"]}</td>
				<td>{$row["event_name"]}</td>
				<td>{$row["event_date"]}</td>
				<td>{$row["description"]}</td>
				<td>{$row["event_link"]}</td>
				<td><img src='{$row["slide"]}' height='40' width='40'></td>
					
	
				<td><a href='event_c_delete.php?id={$row["id"]}' class='btnr'>Delete</a></td>
				</tr>
			";
			break;
		}
				echo "</table>";
	}
		
	else
	{
		echo "<p>No Record Found</p>";
	}
	
?>