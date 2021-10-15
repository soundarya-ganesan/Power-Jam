<?php
	include "database.php";
	session_start();
	
	$s="delete from gallery where id={$_GET["id"]}";
	$db->query($s);
	echo "<script>window.open('preview_gallery.php?mes=Data Deleted..','_self');</script>";
?>