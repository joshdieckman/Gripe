<?php
	//index.php

	// Include config file
	require_once "../php/config.php";

	if(empty($_SESSION['username'])){
		header("location: ../php/login.php");
	}

	$username = ($_SESSION['username']);

	$profile= $_FILES["file"]["name"];
	$profileimage=addslashes (file_get_contents($_FILES['file']['tmp_name']));

	$sql = ("INSERT INTO users (profileimage) VALUES ('$profileimage') WHERE username = $username");
	if($link->query($sql) === true){
		$profileimage = $_SESSION['profileimage'];
		include("./php/index.php");
	} else{
		echo "ERROR: Not able to execute $sql. " . $link->error;
	}
?>
