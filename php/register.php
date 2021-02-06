<?php
//register.php

// Include config file
require_once "../php/config.php";

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
      	<link rel="icon" href="/images/gripefavicon.png">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Sign Up</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
				margin-top: 25vh;
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
			p {
				margin: 0 0 2em 0;
				position: relative;
			}
			p.error {
				border: 1px solid #ffa3a3;
				border-radius: 1em;
				background: #ffe5e9;
			}
			span {
				border-radius: 5px;
				display: none;
				font-size: 1em;
				text-align: center;
				position: absolute;
				background: #2F558E;
				left: 105%;
				top: 25px;
				width: 250px;
				padding: 7px 10px;
				color: #fff;
			}
			span:after {
				right: 100%;
				top: 50%;
				border: solid transparent;
				content: " ";
				height: 0;
				width: 0;
				position: absolute;
				pointer-events: none;
				border-color: rgba(136, 183, 213, 0);
				border-right-color: #2F558E;
				border-width: 8px;
				margin-top: -8px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
        			<h2>Sign Up</h2>
        			<p>Please fill out this form to create an account.</p>
        			<form action="../php/register.php" method="post">
						<?php include('../php/errors.php'); ?>
            			<div class="form-group">
							<p>
								<label>Username</label>
								<input id="username" type="text" name="username" class="form-control" value="<?php echo $username; ?>" required>
							</p>
           				</div>
						<div class="form-group">
							<p>
								<label>Email</label>
								<input id="email" type="text" name="email" class="form-control" value="<?php echo $email; ?>" required>
								<span>Must be a valid email address</span>
							</p>
            			</div>
            			<div class="form-group">
							<p>
								<label>Password</label>
								<input id="password" type="password" name="password" class="form-control">
								<span>Must contain a lowercase, uppercase letter and a number</span>
							</p>
            			</div>
            			<div class="form-group">
							<p>
								<label>Confirm Password</label>
								<input id="confirm_password" type="password" name="confirm_password" class="form-control">
							</p>
            			</div>
            			<div class="form-group">
                			<input type="submit" name="register" class="btn btn-primary" value="Submit">
            			</div>
            			<p>Already have an account? <a href="../php/login.php">Login here</a></p>
        			</form>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script type="text/javascript" src="../js/gripe.js"></script>
	</body>
</html>
