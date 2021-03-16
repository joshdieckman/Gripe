<?php
	//likes.php

	include('config.php');

	session_start();

	$message_id = ($_POST['message_id']);
	$total_likes = ($_POST['total_likes']);
	$add_likes = ($_POST['add_likes']);
	$new_likes_total = $total_likes + $add_likes;

	$sql = "UPDATE messages SET likes = '$new_likes_total' WHERE id = '$message_id'";
	if($link->query($sql) === true){
	  $_SESSION['username'] = $username;
	} else{
		echo "ERROR: Not able to execute $sql. " . $link->error;
	}
?>
