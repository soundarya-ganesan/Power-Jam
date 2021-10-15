<?php
	include"database.php";
		$sql1="SELECT * FROM home_others WHERE id='1'";
		$res1=$db->query($sql1);

		if($res1->num_rows>0)
		{
			$row1=$res1->fetch_assoc();
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

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400%7CSource+Sans+Pro:700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />


			<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
<style>
			.images{
				width:150px;
				height:150px;
				cursor:pointer;
				margin:10px;
			}
			.images:hover{
				-webkit-transform: scale(1.2);
				-moz-transform: scale(1.2);
				-o-transform: scale(1.2);
				transform: scale(1.2);
				transition: all 0.3s;
				-webkit-transition: all 0.3s;
			}
		</style>
</head>

<body >
	<?php
			include"menubar.php";
	 ?>
		<div id='home-owl' class='owl-carousel owl-theme'>		
		<?php
			include"database.php";
	
			$s="select * from slides where AID='1'";
			$res=$db->query($s);
			if($res->num_rows>0)
			{
				
				echo "
						<div class='home-item'>	
							<div class='section-bg' style='background-image: url(./img/e1.jpg);'>

							</div>
								<div class='home'>
									<div class='container'>
										<div class='row'>
											<div class='col-md-8'>
												<div class='home-content'>
													<h1>ABOUT US</h1>
														<p class='lead'>Power Jam provides customers to hire trusted professionals for all their electrical service needs.</p>
						<br></p>
															<a href='blog.php' class='primary-button'>For More</a>
												</div>
											</div>
										</div>
									</div>
								</div>
						
					</div>
							
							";		
				while($r=$res->fetch_assoc())
				{

					echo "
							<div class='home-item'>
								<div class='section-bg' style='background-image: url({$r["slide"]});'>

								</div>			
									<div class='home'>
										<div class='container'>
											<div class='row'>
												<div class='col-md-8'>
													<div class='home-content'>
														<h1>{$r["heading"]} </h1>
															<p class='lead'>{$r["description"]}</p>
																<a href='{$r["page_link"]}' class='primary-button'>Click for More</a>
													</div>
												</div>
											</div>
										</div>
									</div>
							</div>
						
						
					";
				}
				echo "</div>";
			}
			else
			{
				echo "
					
						<div class='home-item'>	
							<div class='section-bg' style='background-image: url(./img/e1.pjg);'>

							</div>
								<div class='home'>
									<div class='container'>
										<div class='row'>
											<div class='col-md-8'>
												<div class='home-content'>
													<h1>Power Jam </h1>
														<p class='lead'>Serves all electrical problems</p>
															<a href='blog.php' class='primary-button'>For More</a>
												</div>
											</div>
										</div>
									</div>
								</div>
						</div>
					</div>
							
							";
			}
			?>


	</header>


	

	
	<h3> Gallery of Power Jam</h3>
						<?php 
						$conn = mysqli_connect("localhost","root","","powerjam");
						
						$query = "SELECT * FROM gallery";
						
						$result = mysqli_query($conn, $query);
						
						if(mysqli_num_rows($result) > 0)
						{
							while($row = mysqli_fetch_assoc($result))
							{
								$url = $row["FilePath"]."/".$row["FileName"];
					?>
								<a href="<?php echo $url; ?>"><image src="<?php echo $url; ?>" class="images" /></a>
					<?php
							}
						}
						else
						{
					?>
						<p>There are no images uploaded to display.</p>
					<?php
						}
					?>					
		
 	<!-- FOOTER -->
	
	<?php include"web_footer.php";?>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/main.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/js/jQuery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/js/bootstrap.min.js"></script>	
</body>

</html>
