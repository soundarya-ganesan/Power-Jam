<?php
	include "database.php";
	session_start();
	$s1="INSERT INTO archive_contact SELECT * FROM contact WHERE id={$_GET["id"]}";
	$db->query($s1);
	
	$s="delete from contact where id={$_GET["id"]}";
	$db->query($s);
	echo "<script>window.open('admin_home.php?mes=Data Deleted..','_self');</script>";
?>