<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
		
	}		
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<link rel="icon" href="img/logo.png">
	
	<title>Power Jam</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400%7CSource+Sans+Pro:700" rel="stylesheet">

	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<link rel="stylesheet" href="css/font-awesome.min.css">

	<link type="text/css" rel="stylesheet" href="css/style.css" />

	
</head>

<body style="text-align: center;" background="./img/bk.jpg">
	<?php include"admin_menubar.php";?>

		<br><br><br><br>					
						<h4> <br><br><br><br>Enter Name to find Electricians</h4><br>
						<form id="frm" autocomplete="off">
							<input type="text" id="txt" class="input" pattern="[a-zA-Z]{3,}" title="Enter only Alphabets">
						</form>
						<br>
						<div id="box"></div>
						
					</div>

				</div>
					<center>
						<h3 >All the Electricians details</h3><br>
					
					<?php
						if(isset($_GET["mes"]))
						{
							echo"<div class='error'>{$_GET["mes"]}</div>";	
						}
					
					?>
					<table border="3px" >
						<tr>
							<th>S.No</th>
							<th>ID No</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Phone Number</th>
							<th>Mail</th>
                                                        <th>Gender</th>
                                                        <th>Date of birth</th>
                                                        <th>Education</th>
							
							
							<th>Send a message</th>
							
							<th>Delete</th>
						</tr>
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
										<tr>
											<td>{$i}</td>
											<td>{$r["RNO"]}</td>
											<td>{$r["FNAME"]}</td>
											<td>{$r["LNAME"]}</td>
											<td>{$r["PHONE"]}</td>
											<td>{$r["MAIL"]}</td>
											<td>{$r["GENDER"]}</td>
											<td>{$r["DOB"]}</td>
                                                                                        <td>{$r["EDUCATION"]}</td>
										
												<td><a href='mailto:{$r["MAIL"]}'    class='btnr'>Click</a></td>

											<td><a href='ele_delete.php?ID={$r["ID"]}' class='btnr'>Delete</a><td>
										</tr>
									
									
									
									";
								}
							}
							else
							{
								echo "No Record Found";
							}
						
						?>
						
					</table>
				</center>
				</div>
				
				
			</div>
	
				<?php include"footer.php";?>
				<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/main.js"></script>
	</body>
</html>
<script>
				$(document).ready(function(){
					$("#txt").keyup(function(){
						var txt=$("#txt").val();
						if(txt!="")
						{
							$.post("search_electrician.php",{s:txt},function(data){
								$("#box").html(data);
							});
						}
						
					});
					
					
					
				});
			</script>