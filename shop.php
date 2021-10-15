<?php
	include "database.php";
		session_start();
	if(!isset($_SESSION["MAIL"]))
	{
		echo"<script>window.open('cust_login.php?mes=Access Denied..','_self');</script>";
		
	}	

?>

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
	<style>
	body {
 background-image: url("img/bk.jpg");
 background-color: black;
}
</style>
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

	
</head>

<body >

<?php 
if(isset($_SESSION["MAIL"]))
	{
include "clogout.php";
	}
	?>


<br><br><br>

<?php error_reporting (E_ALL ^ E_NOTICE); 
$switch1=$_POST["switch1"];
$switch2=$_POST["switch2"];
$switch3=$_POST["switch3"];
$switch4=$_POST["switch4"];

$fan1=$_POST["fan1"];
$fan2=$_POST["fan2"];
$fan3=$_POST["fan3"];
$fan4=$_POST["fan4"];

$light1=$_POST["light1"];
$light2=$_POST["light2"];
$light3=$_POST["light3"];
$light4=$_POST["light4"];

$fuse1=$_POST["fuse"];
$fuse2=$_POST["fuse2"];
$fuse3=$_POST["fuse3"];

echo "<br>";
$s1=($switch1*299);
$s2=($switch2*229);
$s3=($switch3*79);
$s4=($switch4*49);
$f1=($fan1*59);
$f2=($fan2*399);
$f3=($fan3*149);
$f4=($fan4*149);

$l1=($light1*99);
$l2=($light2*129);
$l3=($light3*59);
$l4=($light4*399);

$fu1=($fuse1*299);
$fu2=($fuse2*79);
$fu3=($fuse3*89);

$total=$s1+$s2+$s3+$s4+$f1+$f2+$f3+$f4+$l1+$l2+$l3+$l4+$fu1+$fu2+$fu3;
$amt=$total+100;
									if($_POST["submit"])
									{

										$amount=$amt;
										$pn="yes";
										$s="update customer SET newphone='{$_POST["newphone"]}',address='{$_POST["address"]}',place='{$_POST["place"]}',amount='$amount',workingprogress='$pn'  where MAIL='{$_SESSION["MAIL"]}'";
										$db->query($s);
										echo "<div class='success'>Please check home page</div>";
									}
echo "<table border=1  cellspacing=1 cellpadding=50 align =center width= 50% height=40%>
<tr > <th colspan=2 > <center><Font color=black> Power Jam </th></tr>
<tr> <th> <Font color=black align > Item Total price </th>
<th><Font color=black> $total </font></th></tr>
<tr> <th> <Font color=black align = center> service charge </th>
<th><Font color=black> 100 </font></th></tr>
<tr> <th> <Font color=black > Total Amount  </th>
<th><Font color=black> $amt</font></th></tr></table>" ;




?>
<center>

<h2>Fill the form to Proceed with the booking</h2>
<form method="post" action="shop.php">  
  <h4>phone: </h4><input type="text" name="newphone"  required="">
  <br><br>
 <h4> Address:</h4> <textarea name="address" rows="5" cols="40" required=""  ></textarea>
  <br><br>
  <select name="place" value="SelectPlace" required="">
  <option required="">Select Place</option>
  <option>Mookanda Palli</option>
  <option>Santhi Nagar</option>
  <option>Dinnur</option>
  <option>Railway Station</option>
  <option>Gandhi Statue</option>
  <option>Arasanathi</option>
  <option>Mathigiri</option>
  <option>GH</option>
  <option>Ganga Nagar</option>
  <option>Alasanattham</option>
  <option>Basthi</option>
  <option>Parvathi Nagar</option>
  <option>Amrutha Nagar</option>
    <option>Muneeswara Nagar</option>
  </select>
  <br><br>
  <input type="submit" name="submit" value="proceed?">  </form></centre>
<br><br>
