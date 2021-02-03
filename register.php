<?php
//register.php

// Include config file
require_once "config.php";

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Sign Up</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<style type="text/css">
			body{
				font: 14px sans-serif;
			}
			.selector-for-some-widget {
				box-sizing: content-box;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
        			<h2>Sign Up</h2>
        			<p>Please fill out this form to create an account.</p>
        			<form action="register.php" method="post">
						<?php include('errors.php'); ?>
            			<div class="form-group">
                			<label>Username</label>
                			<input type="text" name="username" class="form-control" value="<?php echo $username; ?>" required>
           				</div>
						<div class="form-group">
                			<label>Email</label>
                			<input type="text" name="email" class="form-control" value="<?php echo $email; ?>" required>
            			</div>
            			<div class="form-group">
                			<label>Password</label>
                			<input type="password" name="password" class="form-control">
            			</div>
            			<div class="form-group">
                			<label>Confirm Password</label>
                			<input type="password" name="confirm_password" class="form-control">
            			</div>
            			<div class="form-group">
                			<input type="submit" name="register" class="btn btn-primary" value="Submit">
            			</div>
            			<p>Already have an account? <a href="login.php">Login here</a>.</p>
        			</form>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>
