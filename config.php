<?php
	//config.php

	session_start();
	$username = "";
	$email = "";
	$errors = array();

	$servername = "db5001102249.hosting-data.io";
	$dbusername = "dbu19026";
	$password = "D!3ckm@n";
	$db = "dbs945854";

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
			$_SESSION['success'] = "You are now logged in!";
			header("location: index.php");
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
				$_SESSION['success'] = "You are now logged in!";
				header("location: index.php");
			}else{
				array_push($errors, "The username/password combination is invalid");
				header("location: login.php");
			}
		}
    }

?>
