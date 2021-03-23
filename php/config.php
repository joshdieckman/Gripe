<?php
	//config.php

	session_start();
	$username = "";
	$email = "";
	$errors = array();

	//$servername = "XXXXX";
	//$dbusername = "XXXXX";
	//$password = "XXXXX";
	//$db = "XXXX";

	/* Attempt to connect to MySQL database */
	$link = mysqli_connect($servername, $dbusername, $password, $db);

	// Check connection
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}

	if(isset($_POST['register'])){
		$username = ($_POST['username']);
		$email = ($_POST['email']);
		$password = ($_POST['password']);
		$confirm_password = ($_POST['confirm_password']);

		if (empty($username)){
			array_push($errors, "Username is required!");
		}

		if (empty($email)){
			array_push($errors, "Email is required!");
		}

		if (empty($password)){
			array_push($errors, "Password is required!");
		}

		if ($password != $confirm_password){
			array_push($errors, "The passwords do not match!");
		}

		if (count($errors) == 0){
			$password = md5($password);
			$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
			mysqli_query($link, $sql);
			$_SESSION['username'] = $username;
			$_SESSION['accesslvl'] = $accesslvl;
			$_SESSION['profileimage'] = $profileimage;
			$_SESSION['success'] = "You are now logged in!";
			header("location: ../php/index.php");
		}
	}

	if(isset($_POST['login'])){
		$username = ($_POST['username']);
		$password = ($_POST['password']);

		if (empty($username)){
			array_push($errors, "Username is required!");
		}

		if (empty($password)){
			array_push($errors, "Password is required!");
		}

		if(count($errors) == 0){
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
			$result = mysqli_query($link, $query);
			if (mysqli_num_rows($result) == 1){
				$_SESSION['username'] = $username;
				$_SESSION['profileimage'] = $profileimage;
				$_SESSION['accesslvl'] = $accesslvl;
				$_SESSION['success'] = "You are now logged in!";
				header("location: ../php/index.php");
			}else{
				array_push($errors, "The username/password combination is invalid");
				header("location: ../php/login.php");
			}
		}
	}

?>
