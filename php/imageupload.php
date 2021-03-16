<?php
	//index.php

	// Include config file
	require_once "../php/config.php";

	if(empty($_SESSION['username'])){
		header("location: ../php/login.php");
	}

	$username = ($_SESSION['username']);

	$sql = "SELECT * FROM users WHERE username = '$username'";
	$result = mysqli_query($link,$sql);
	while($row = mysqli_fetch_array($result)){
    	$profileimage= $row['profileimage'];
    };

	$profile= $_FILES["file"]["name"];
	$profiletmp=addslashes (file_get_contents($_FILES['file']['tmp_name']));

	$sql = ("INSERT INTO users (filename) VALUES ('$profiletmp') WHERE username = $username");
	if($link->query($sql) === true){
		$profiletmp = $_SESSION['profiletmp'];
		include("../php/index.php");
	} else{
		echo "ERROR: Not able to execute $sql. " . $link->error;
	}

?>
