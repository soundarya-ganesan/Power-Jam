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
<style>
	body {
 background-image: url("slides/pj.jpg");
 background-color: white;
  background-size: cover;
 background-attachment: fixed;

}
</style>
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

<body>
	<header id="home">
		<nav id="main-navbar">
			<div class="container">
			
				<div class="navbar-header">
					<div class="navbar-brand">
						<a class="logo" href="home.php"><img src="img/logo.png" alt="logo"></a>
					</div>

					<button class="navbar-toggle-btn">
						<i class="fa fa-bars"></i>
					</button>
				</div>

				<ul class="navbar-menu nav navbar-nav navbar-right">
					<li><a href="admin_home.php">Admin Home</a></li>
			
					<li class="has-dropdown"><a href="programmes.php">Home Page</a>
					<ul class="dropdown">
						<li><a href="cms_slide.php">Edit Slides</a></li>
						<li><a href="cms_home_others.php">Home Others</a></li>
						<li><a href="cms_testmonial.php">Testimonials</a></li>
					</ul>
					</li>

					<li class="has-dropdown"><a href="programmes.php">Program Page</a>
					<ul class="dropdown">
						<li><a href="cms_events.php">Upcoming Programs</a></li>
						<li><a href="cms_c_events.php">Current Programs</a></li>
					</ul>
					</li>
						<li class="has-dropdown"><a href="programmes.php">Events Page</a>
					<ul class="dropdown">
						<li><a href="cms_slide.php">Upcoming Events</a></li>
						<li><a href="cms_home_others.php">Current Events</a></li>
					
					</ul>
					</li>
					<li class="has-dropdown"><a href="cms_contact.php">Contact Page</a>
					<ul class="dropdown">
						<li><a href="cms_support.php">Support Page</a></li>
						
					
					</ul>
					</li>
							<li><a href="view_volunteer.php">View Volunteers </a></li>
							<li><a href="about.php">Settings</a></li>
							<li><a href="logout.php">Logout</a></li>
					
						
					
					
				
			</div>
		</nav>
					<br><br>
					<br><br>
					<br><br>
		
				<center>
						<a href="cms_slide.php">Go Back</a><br><br>



					<table border="1px" >
						<tr>
							<th>Slide</th>
							<th>Slide Number</th>
							<th>Heading</th>
							<th>Descripton</th>
							<th>Page Link</th>
							<th>Want to Delete?</th>
						</tr>
						<?php
							$s="select * from slides order by id desc";
							$res=$db->query($s);
							if($res->num_rows>0)
							{
								
								while($r=$res->fetch_assoc())
								{
										echo "
										<tr>
										<td><img src='{$r["slide"]}' height='70' width='70'></td>
					
										<td>{$r["slide_number"]}</td>
										
										<td>{$r["heading"]}</td>
										<td>{$r["description"]}</td>
										<td>{$r["page_link"]}</td>
		
										<td><a href='slide_edit.php?ids={$r["id"]}'class='btnr'>Click</a></td> 	
										
											
										<td><a href='slide_delete.php?id={$r["id"]}' class='btnr'>Yes</a></td>
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