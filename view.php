<!DOCTYPE html>
<html lang="en">
	<header>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PHP Upload File With Progressbar</title>
		
		<!-- Bootstrap -->
		
	</header>
	<body>
		<div class="container">			
			<div class="page-header">
				<h1>Upload Multiple Files <small>Upload multiple file with progress bar demo</small> </h1>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<a href="index.php" class="btn btn-info">Go Back</a>
					<h3>Uploaded Files:</h3>
					<br/>
					<?php 
						$conn = mysqli_connect("localhost","root","","phpfiles");
						
						$query = "SELECT *FROM UserFiles";
						
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
				</div>
			</div>
		</div>
		
		
	</body>
</html>