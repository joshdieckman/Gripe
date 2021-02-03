<?php
	//logout.php

	//initialize the session
	session_start();

	include('config.php');

	//unset all fo the session variables
	$_SESSION = array();

	//destroy the session
	session_destroy();

	//redirect to the login page
	header('location: login.php');
	exit();
?>
