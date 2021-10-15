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
	<link rel="icon" href="./img/logo.png">
	
	<title>Power Jam</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400%7CSource+Sans+Pro:700" rel="stylesheet">

	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<link rel="stylesheet" href="css/font-awesome.min.css">

	<link type="text/css" rel="stylesheet" href="css/style.css" />

	
</head>

<body>
	<?php
			include"menubar.php";
	 ?>
				
		<?php
			include"database.php";
	
			$s="select * from slides where AID='1'";
			$res=$db->query($s);
			if($res->num_rows>0)
			{
				echo "<div id='home-owl' class='owl-carousel owl-theme'>";
						
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
					<div id='home-owl' class='owl-carousel owl-theme'>
						<div class='home-item'>	
							<div class='section-bg' style='background-image: url(./img/k.jpg);'>

							</div>
								<div class='home'>
									<div class='container'>
										<div class='row'>
											<div class='col-md-8'>
												<div class='home-content'>
												<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
													<h1>About</h1>
														<p class='lead'>Power Jam is recognized as the fastest-growing startup in India.We are a mobile marketplace for a local services. We help customers hire trusted professionals for all their service needs.We are staffed with young electricians,passionate people working tirelessly to make a difference in the lives of people by catering to their service needs at their doorsteps.</p>
															<a href='about.php' class='primary-button'>For More</a>
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
	




	<!-- POWERJAM -->
	<div id="about" class="section" style="text-align: justify;
 	 								text-justify: inter-word;">
		<!-- container -->
		<div class="container" style="margin-left: 40px;">
			<!-- row -->
			<div class="row">
				<!-- about content -->
				<div class="col-md-12">
						<h2><center>POWER JAM</center></h2>
						
					<div class="about-content">
						<p>Power Jam is recognized as the fastest-growing startup in India.We are a mobile marketplace for a local services. We help customers hire trusted professionals for all their service needs.We are staffed with young electricians,passionate people working tirelessly to make a difference in the lives of people by catering to their service needs at their doorsteps.</p>
						<br>
					</div>
				</div>
				<!-- /about content -->


			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /POWERJAM -->




	<div id="about" class="section">
		<div class="container" style="margin-left: 40px;">
			<div class="row">
				

				<div class="col-md-5">
					<h2 class="title"><?php echo $row1["e_name"] ?></h2><justify>
					<br>
						<h4 class="sub-title"><?php echo $row1["e_heading"] ?></h4></justify>
							<div class="about-content">
								<p style="text-align: justify;
 	 								text-justify: inter-word;"><?php echo $row1["e_description"] ?></p>
								<a href="about.php" class="primary-button" > Read More</a><br><br>
								<h3 class="title"><?php echo $row1["important_requirement"] ?></h3>
								<a href="<?php echo $row1["requirement_link"] ?>" class="primary-button" >More Info</a><br><br>
						
							</div>	
				</div>
				
				<!-- about video -->
				<div class="col-md-offset-0 col-md-7">
					<a href="https://www.youtube.com/watch?v=8Qf2eHibbyU" class="about-video">

							<img src="./img/yt.jpg" alt="">
						</a>
						<br>
				</div>
				<!-- /about video -->

		

				</div>




			</div>
		
		</div>
	



	<!-- REVIEWS -->
	<div id="testimonial" class="section">
		<!-- background section -->
				<!-- background section -->
		<div class="section-bg" style="background-image: url(./img/e25.jpg);" data-stellar-background-ratio="0.5"></div>
		<!-- /background section -->


		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				

				<!-- Testimonial owl -->
				<div class="col-md-12">
					<div id="testimonial-owl" class="owl-carousel owl-theme">
				
			<?php
				include"database.php";
	
				$s="select * from review where AID='1'";
				$res=$db->query($s);
				if($res->num_rows>0)
				{
					while($r=$res->fetch_assoc())
					{

						echo "
						<!-- testimonial -->
						<div class='testimonial'>
							<div class='testimonial-meta'>
								<div class='testimonial-img'>
								<img src='{$r["slide"]}'>
								</div>
                                                                <h3 style='color:black;'>Customer Reviews about services by<br></h3>
								<h3 style='color:black;'>{$r["name"]}</h3>
								<h5 style='color:black;'>{$r["date"]}</h5><br>
							</div>
                                                        <br><br>
							<div class='testimonial-quote'>
								<blockquote>
									<p>{$r["description"]}</p>
								</blockquote>
							</div>
						</div>
						<!-- /Review -->
						";
					}
				}
				else
				{
						echo "
						<!-- testimonial -->
                                               
						<div class='testimonial'>
							<div class='testimonial-meta'>
								<div class='testimonial-img'>
								<img src='./review/shai.png'>
								</div>
                                                                <h3 style='color:black;'>Customer Reviews about services by<br></h3>
								<h3 style='color:black;'> Shailendra</h3>
								<h5 style='color:black;'>February,2020</h5><br>
							</div>
                                                         <br><br>
							<div class='testimonial-quote'>
								<blockquote>
									<p>“Electrician was quick and very efficient with his work.Finished his job within 15 min</p>
								</blockquote>
							</div>
						</div>
						<!-- /testimonial -->

						<!-- testimonial -->
						<div class='testimonial'>
							<div class='testimonial-meta'>
								<div class='testimonial-img'>
								<img src='./review/divya.png'>
								</div>
								<h3 style='color:black;'>Customer Reviews about services by<br></h3>
								<h3 style='color:black;'> Divya</h3>
								<h5 style='color:black;'>February,2020</h5><br>
							</div>
                                                        <br><br>
							<div class='testimonial-quote'>
								<blockquote>
									<p>“Super friendly.Solved the issue very quick.Thank you power jam.”</p>
								</blockquote>
							</div>
						</div>
						<!-- /testimonial -->
						";
				}
				?>

					</div>
				</div>
				<!-- /Testimonial owl -->
			</div>
			<!-- /Row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /REVIEW-->


	<!-- NUMBERS -->

	<div id="numbers" class="section" >
		<!-- container -->
		
		<div class="container">
			<!-- row -->
			
			<div class="row">
				<!-- number -->
				<div class="col-md-3 col-sm-6">
									</div>

				<div class="col-md-3 col-sm-6">
					<div class="number">
						<i class="fa fa-smile-o"></i>
						<h3><?php echo $row1["electricians"] ?></h3>
						<span>Number of Prof. Electricians</span>
					</div>
				</div>


				<!-- number -->
				<div class="col-md-3 col-sm-6">
					<div class="number">
						<i class="fa fa-handshake-o"></i>
						<h3><?php echo $row1["customers"] ?></h3>
						<span>No. of Customers</span>
					</div>
				</div>
				<!-- /number -->
				<div class="col-md-3 col-sm-6">
									</div>
				
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /NUMBERS -->


	<!-- CTA -->
	<div id="cta" class="section">
		<!-- background section -->
		<div class="section-bg" style="background-image: url(./img/bg.jpg);" data-stellar-background-ratio="0.5"></div>
		<!-- /background section -->

		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- cta content -->
				<div class="col-md-offset-2 col-md-8">
					<div class="cta-content text-center">
						<h1 style='color:black;'>Welcome!!</h1>
						<h4 style='color:black;' class="lead"> We deliver commercial and industrial electrical services for indoor and outdoor 
projects of every size and scope. From new systems for multifamily housing developments to upgrades to government buildings to emergency back-up for medical facilities, 
our team of experienced electricians is dedicated to exceptional dependability and quality, delivered on time and on budget.</h4>
						<a href="cust_signup.php" class="primary-button">Click for more!</a>
					</div>
				</div>
				<!-- /cta content -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /CTA -->


<?php
include"web_footer.php";
?>
</body>

</html>
