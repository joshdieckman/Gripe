<?php
//login.php

// Include config file
require_once "../php/config.php";

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
      	<link rel="icon" href="/images/gripefavicon.png">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Sign In</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script type="text/javascript" src="../js/gripe.js"></script>
		<style type="text/css">
			body{
				font: 18px sans-serif;
				background-image: url("/images/gripelogo.png");
                background-position: center;
                background-repeat: no-repeat;
              	background-attachment: fixed;
				background-color: #300030;
			}
			.selector-for-some-widget {
				box-sizing: content-box;
			}
			.col-md-8{
				margin-top: 30vh;
				background-color: #500050;
				box-shadow: 4px 3px 8px 1px black;
				padding: 5vh;
				color: white;
				border-radius: 10px;
				text-shadow: 2px 2px black;
			}
			input{
				box-shadow: 4px 3px 8px 1px black;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<h2>Log In</h2>
					<p>Please fill in your credentials.</p>
					<form action="../php/login.php" method="post">
						<?php include('../php/errors.php'); ?>
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" class="form-control" value="<?php echo $username; ?>" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" required>
						</div>
						<div class="form-group">
							<input type="submit" name="login" class="btn btn-primary" value="Submit">
						</div>
						<p>Not a member? <a href="../php/register.php">Register here</a></p>
					</form>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>

