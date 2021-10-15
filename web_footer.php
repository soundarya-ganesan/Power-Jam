
<?php
	include"database.php";
		$sql1="SELECT * FROM home_others WHERE id='1'";
		$res1=$db->query($sql1);

		if($res1->num_rows>0)
		{
			$row1=$res1->fetch_assoc();
		}
	$msg = "";
	use PHPMailer\PHPMailer\PHPMailer;

	if (isset($_POST['submit'])) {
		
		$email = $db->real_escape_string($_POST['email']);
		
		if ($email == "")
			$msg = "Please check your inputs!";
		else {
			$sql = $db->query("SELECT id FROM users WHERE email='$email'");
			if ($sql->num_rows > 0) {
				$msg = "Email already exists in the database!";
			} else {
				$token = 'qwertzuiopasdfghjklyxcvbnmQWERTZUIOPASDFGHJKLYXCVBNM0123456789!$/()*';
				$token = str_shuffle($token);
				$token = substr($token, 0, 10);

			
				$db->query("INSERT INTO users (email,isEmailConfirmed,token)
					VALUES ('$email', '0', '$token');
				");

                include_once "PHPMailer/PHPMailer.php";

                $mail = new PHPMailer();
                $mail->setFrom('power2020jam@gmail.com');
                $mail->addAddress($email);
                $mail->Subject = "Please verify email for Power Jam mail activation!";
                $mail->isHTML(true);
                $mail->Body = "
                    Please click on the link below to Confirm email:<br><br>
                    
                    <a href='http://000webhostapp.com/confirm.php?email=$email&token=$token'>Click Here</a>
                ";

                if ($mail->send())
                    $msg = "You have been registered! Please verify your email!";
                else
                    $msg = "Something wrong happened! Please try again!";
			}
		}
	}
?>

<!-- FOOTER -->
	<footer id="footer" class="section">
		<!-- container -->
		<div class="container" >
			<!-- row -->
			<div class="row">
				<!-- footer contact -->
				<div class="col-md-4">
					<div class="footer">
						<div class="footer-logo">
							<a class="logo" href="#"><img src="./img/logo.png" alt=""><p>POWER JAM</p></a>
						</div>
						<p style="text-align: justify;
  text-justify: inter-word;">Power Jam is recognized as the fastest-growing startup in India.We are a mobile marketplace for a local services. We help customers hire trusted professionals for all their service needs.We are staffed with young electricians,passionate people working tirelessly to make a difference in the lives of people by catering to their service needs at their doorsteps. </p>
						<ul class="footer-contact">
							<li><i class="fa fa-map-marker"></i> #7, Weavers Colony
Opposite Mangalya Ashirvad apartments,
Bannerghatta Road,
Bangalore – 560083</li>
							<li><i class="fa fa-phone"></i><?php echo $row1["phone1"] ?>, <?php echo $row1["phone2"] ?></li>
							<li><i class="fa fa-envelope"></i> <a href="mailto:power2020jam@gmail.com">power2020jam@gmail.com</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer contact -->

						<?php 
						include"database.php";
	
						$s="select * from gallery order by id desc limit 12";
						$res=$db->query($s);
						if($res->num_rows>0)
						{
							echo "	<div class='col-md-4'>
												<div class='footer'>
													<ul class='footer-galery'>
								
						";
							while($r=$res->fetch_assoc())
							{

								$url = $r["FilePath"]."/".$r["FileName"];
								echo " 
													
								<li><a href='gallery.php'><image src='$url' height=80 width=25></a></li>";
							}

echo "


													</ul>

													</div>
											</div>";
							}
					?>
						
				
				<!-- footer newsletter -->
				<div class="col-md-4">
					<div class="footer">
						<h3 class="footer-title">Follow Power Jam Blog via Email</h3>
						<p>Enter your email address to follow this blog and receive notifications of new posts by email.</p>
				
						<form class="footer-newsletter" method="post" enctype="multipart/form-data"><center>
							<input class="input" type="text" name="email" placeholder="Enter your email" required class ="input" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please enter a valid email address.">
							
						
							<button class="primary-button" onclick="alert('<?php if ($msg != "") echo $msg . "" ?>')" style="width: 270px;" name="submit">Subscribe</button></center>
						</form>
						<ul class="footer-social">
							<br><br><li><a href="https://www.facebook.com/powerjam" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://powerjam.com/contact-us/?share=twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://powerjam/contact-us/?share=google-plus-1"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
				<!-- /footer newsletter -->
			</div>
			<!-- /row -->

			<!-- footer copyright & nav -->
			<div id="footer-bottom" class="row">
				<div class="col-md-6 col-md-push-6">
					<ul class="footer-nav">
						<li><a href="gallery.php">Gallery</a></li>
						<li><a href="operations.php">Operations</a></li>
						<li><a href="blog.php">Blog</a></li>
						<li><a href="contact_us.php">Contact</a></li>

					</ul>
				</div>

			</div>
		</div>
		<br>
		<center><p>Copyright &copy; POWERJAM </p> </center>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/main.js"></script>
