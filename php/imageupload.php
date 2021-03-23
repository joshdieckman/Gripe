<?php
	//imageupload.php

	// Include config file
	require_once "../php/config.php";

	if(empty($_SESSION['username'])){
		header("location: ../php/login.php");
	}

	$username = ($_SESSION['username']);
	$accesslvl = ($_SESSION['accesslvl']);

	$target = "images/";
	$target = $target . basename( $_FILES['image']['name']);
	$image =  basename($_FILES['image']['name']);

	$sql = ("INSERT INTO images (image) VALUES ('$image' )");
	if($link->query($sql) === true){
		if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
			$_SESSION['username'] = $username;
			$_SESSION['accesslvl'] = $accesslvl;
          	include("../php/admin.php");
	} else{
		echo "ERROR: Not able to execute $sql. " . $link->error;
	}
    }
?>
