<br><br><br><br>
   <?php
            if(isset($_POST["submit"]))
            {
              echo "<div class='success'>Password has been distributed so Kindly check your mail</div>";
			}?>

<html>
<head>
<title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="img/logo.jpg">
	
	<title>Power Jam</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400%7CSource+Sans+Pro:700" rel="stylesheet">

	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<link rel="stylesheet" href="css/font-awesome.min.css">

	<link type="text/css" rel="stylesheet" href="css/style.css" />
</title>
</head>
<body>
<?php include"menubar.php";?>
<form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"];?>">
<div class="lbox" style="text-align: left; color: black">
<center>
<br><br>
<h2>Please give your mail to issue the password</h2> 
 Email<input type="email" class="input" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please enter a valid email address." required="" placeholder="Email"  ><br><br>
           <button type="submit" class="primary-button" name="submit">submit</button> <br><br><br>
</center>    
    </div>
		</form>
		</body>
		</html>