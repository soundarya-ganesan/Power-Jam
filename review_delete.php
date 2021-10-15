<?php
	include "database.php";
	session_start();
	$s1="INSERT INTO archive_review SELECT * FROM review WHERE id={$_GET["id"]}";
	$s="delete from review where id={$_GET["id"]}";
	$db->query($s);
	echo "<script>window.open('cms_review.php?mes=Data Deleted..','_self');</script>";
?>