<?php
	// updateimage.php

	// Include config file
	require_once "../php/config.php";

	if(empty($_SESSION['username'])){
		header("location: ../php/login.php");
	}

	$username = ($_SESSION["username"]);
	$accesslvl = ($_SESSION['accesslvl']);
	$profileimage = ($_GET['profileimage']);

	$sql = "UPDATE users SET profileimage = '$profileimage'";
	if($link->query($sql) === true){
		$profileimage = $_SESSION['profileimage'];
		$username = $_SESSION['username'];
		$accesslvl = ($_SESSION['accesslvl']);
		include("../php/profile.php");
	} else{
		echo "ERROR: Not able to execute $sql. " . $link->error;
	}
?>
