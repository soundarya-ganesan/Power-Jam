<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied...','_self');</script>";
		
	}	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Edit gallery-Power Jam</title>
		<link rel="stylesheet" type="text/css" href="css/style1.css">
	</head>
	<body>
		<?php include"navbar.php";?><br>
		
			<div id="section" style="margin-left:10px;">
				<?php include"sidebar.php";?><br><br><br>
				<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
				<div class="content">
					
					<h3 >Edit gallery</h3><br>
					<?php
						if(isset($_POST["submit"]))
						{
							$target="gallery/";
							$target_file1=$target.basename($_FILES["slide1"]["name"]);
							$sq="insert into gallery_pics(gallery_number,slide1,AID) values ('{$_POST["gallery_number"]}','{$target_file1}','{$_SESSION["AID"]}')";
								
								if($db->query($sq))
								{
									echo "<div class='success'>Insert Success</div>";
								}
								else
								{
									echo "<div class='error'>Insert Failed</div>";
								}
							
					

					
						}
					
					
					
					
					?>
			
				<form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"];?>">
				<div class="lbox">
					<label>Slide Number</label><br>
						<?php
							$no="S1";
							$sql="select * from gallery order by id desc limit 1";
							$res=$db->query($sql);
							if($res->num_rows>0)
							{
								$row1=$res->fetch_assoc();
								$no=substr($row1["gallery_number"],1,strlen($row1["gallery_number"]));
								
								$no="S".$no;
							}
						
						
						
						?>
					<input type="text" class="input3" name="gallery_number" style="background:#b1b1b1;" value="<?php echo $no-1;?>" readonly  ><br><br>
					
					<label>Image</label><br>
					<input type="file"  class="input3" name="slide1" required=""><br>
					
			
			
					<button type="submit" style="float:left;" class="btn" name="submit">Insert</button>
				</div>
					
				</form>
				<div class="lbox">
				
					<h3 style="margin-top:30px;"> <a href="preview_gallery.php">Preview</h3></a><br>
				</div>
				</div>
				
				
			</div>
	
				<?php include"footer.php";?>
	</body>
</html>
<script>
function mydate()
{
  //alert("");
document.getElementById("dt").hidden=false;
document.getElementById("ndt").hidden=true;
}
function mydate1()
{
 d=new Date(document.getElementById("dt").value);
dt=d.getDate();
mn=d.getMonth();
mn++;
yy=d.getFullYear();
document.getElementById("ndt").value=dt+"-"+mn+"-"+yy
document.getElementById("ndt").hidden=false;
document.getElementById("dt").hidden=true;
}
</script>