
<?php
	$db=new mysqli("localhost","root","","powerjam");
	if(!$db)
	{
		echo "failed";
	}
	
?>

<html>
<head>
	<title>POWER JAM</title>
	<link rel="stylesheet" href="profile.css">

	</head>
<body background=back.jpg>

<br><br><br><br><br><br>
<form name =f1 id=t1 action="" method="post" enctype="multipart/form-data">
<br><br><br><br><br><br><br><br><br><br><br>


<?php
  if(isset($_GET["mes"]))
     {
	echo"<div class='error'>{$_GET["mes"]}</div>";	
	}
					
 ?>


<?php
	$s="select * from electrician";
	$res=$db->query($s);
	if($res->num_rows>0)
	{
	   $i=0;
	while($r=$res->fetch_assoc())
	{
	  $i++;

	echo"
<table  align=center id=rcorners class=container1 border=0 noresize >
<hr><tr>
<th colspan=2 class=pi>PERSONAL INFORMATION</th>
</tr>
										
<tr>
<td class=info ><br><legend>Name</legend>
<input type=text id=txt1 value={$r["FNAME"]}></td>
</tr>


<tr>
<td class=info colspan=0><legend>E-mail ID</legend>
<input type=text id=txt1 value={$r["MAIL"]}></td>

</tr>

<tr>
<td class=info><legend>Mobile</legend>
<input type=text id=txt2 value={$r["PHONE"]}></td>

</tr>

<tr>
<td class=info><legend>Education</legend>
<input type=text id=txt2 value={$r["EDUCATION"]}></td>

</tr>
<tr>
<td class=info><legend>Address</legend>
<textarea rows=5 cols=47></textarea>
</td>
</tr>

<tr>
</tr>
<tr>

<tr>
</tr>
<tr>

<tr>
</tr>
<td class=info ><legend>Sex</legend>
<input type=text id=txt2 value={$r["GENDER"]}></td>
</td>
</tr>

<tr>
</tr>
<td class=info><legend>Date of Birth</legend>
<input type=date id=dat value={$r["DOB"]}></td>
</tr>
<tr>

<tr>
</tr>
<tr>

<tr>
</tr>
<tr>

<tr>
</tr>
</tr>

<td><br><button id=edit>Edit Profile</button></td>
<td align=right><br><button id=save>Save</button></td>
</tr><tr>
											
									
									";
								}
							}
							else
							{
								echo "No Record Found";
							}
						
						?>
</table>
</body>
</html>