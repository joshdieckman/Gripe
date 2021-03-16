<?php
	//load.php

	include('../php/config.php');

	$sql = "SELECT * FROM messages ORDER BY id DESC";
	$result = mysqli_query($link,$sql);
	while($row = mysqli_fetch_array($result)){
		echo '<div class="message">
			<img class="image" src="/images/' . $row["profileimage"] . '" height="100px" width="100px">
			<div class="words">
                <p>' . $row["timestamp"] . '</p>
				<h4>' . $row["username"] . '</h4>
				<p>' . $row["gripe"] . '</p>
			</div>
            <form class="likes" onsubmit="return likespost()">
				<input type="hidden" id="message_id" name="message_id" value=' . $row["id"] . '>
				<a href="#" id="submit" type="submit"><i class="fa fa-heart-o fa-lg" aria-hidden="true"> ' . $row["likes"] . '</i></a>
			</form>
		</div>';
	}
?>
