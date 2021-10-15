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
 background-image: url("./img/bk.jpg");
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

<body style="text-align: center;">
	<?php include"admin_menubar.php";?>

			<br>			<br>			<br>			<br>			<br>
	<h3> 
	Gallery of Power Jam</h3>
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
								<a href="<?php echo $url; ?>"><image src="<?php echo $url; ?>" width="200" hieght="200" /></a>
							<?php echo  "<a href='gallery_delete.php?id={$row["id"]}' class='btnr'>Delete?</a>";?>	
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