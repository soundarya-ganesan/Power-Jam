<?php
	include "database.php";
	session_start();
	$temp="no";
	$name="";
	$amt="0";
	$nam=$_SESSION['ele_name'];

	$s2="update customer set workingprogress='$temp', ASSIGNEDWORK='$temp', ele_name='$name',amount='$amt' WHERE ID={$_GET["ID"]}";
	$s1="update electrician set ASSIGNEDWORK='$temp' WHERE FNAME='$nam'";
	$db->query($s1);
	$db->query($s2);
	echo "<script>window.open('coperations.php?mes=Data Deleted..','_self');</script>";
?>