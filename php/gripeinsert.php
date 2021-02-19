<?php
	//gripeinsert.php

	include('config.php');

	session_start();

	$username = ($_SESSION['username']);
	$profileimage = ($_POST['profileimage']);
	$gripe = ($_POST['gripe']);
	$gripe = str_replace("'","''", $gripe);

	$sql = ("INSERT INTO messages (username, profileimage, gripe) VALUES ('$username', '$profileimage', '$gripe' )");
	if($link->query($sql) === true){
	  $_SESSION['username'] = $username;
      $_SESSION['profileimage'] = $profileimage;
	} else{
		echo "ERROR: Not able to execute $sql. " . $link->error;
	}
?>
