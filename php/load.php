<?php
	//load.php

	// Initialize the session
	session_start();

	include('../php/config.php');

	$username = ($_SESSION["username"]);

	$sql = "SELECT * FROM messages ORDER BY id DESC";
	$result = mysqli_query($link,$sql);
	while($row = mysqli_fetch_array($result)){
		echo '<div class="message">
			<img class="image" src="/images/' . $row["profileimage"] . '" height="100px" width="100px">
			<div class="words">
				<h4>' . $row["username"] . '</h4>
				<p>' . $row["gripe"] . '</p>
			</div>
		</div>';
	}
?>
