<center>
<?php 
	include"database.php";
	
	$sql="SELECT * FROM electrician WHERE NAME LIKE '{$_POST["s"]}%' ";
	$res=$db->query($sql);
		echo "<table border='1px' >
						<tr>
							<th>Roll No</th>
							<th>First Name</th>
                                                        <th>Last Name</th>
							<th>Phone</th>
							<th>Mail</th>
                                                        <th>Gender</th>
                                                        <th>DOB</th>
                                                        <th>Education</th>
									
					
							<th>Delete</th>
						</tr>
					
				";
	if($res->num_rows>0)
		
	{
		while($r=$res->fetch_assoc())
		{

			echo "
			<tr>
											<td>{$r["RNO"]}</td>
											<td>{$r["NAME"]}</td>
                                                                                        <td>{$r["LNAME"]}</td>
											<td>{$r["PHONE"]}</td>
											<td>{$r["MAIL"]}</td>
                                                                                        <td>{$r["GENDER"]}</td>
											<td>{$r["DOB"]}</td>
											<td>{$r["EDUCATION"]}</td>


											<td><a href='ele_delete.php?ID={$r["ID"]}' class='btnr'>Delete</a><td>
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
</center>