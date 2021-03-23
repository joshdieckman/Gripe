<?php
	//imageupload.php

	// Include config file
	require_once "../php/config.php";

	if(empty($_SESSION['username'])){
		header("location: ../php/login.php");
	}

	$username = ($_SESSION['username']);
	$accesslvl = ($_SESSION['accesslvl']);

	$target = "../images/";
	$target = $target . basename( $_FILES['image']['name']);
	$image =  basename($_FILES['image']['name']);

	$sql = ("INSERT INTO images (artist, filename) VALUES ('$username', '$image' )");
	if($link->query($sql) === true){
        include("../php/admin.php");
    }else{
		echo "ERROR: Not able to execute $sql. " . $link->error;
	}
?>
