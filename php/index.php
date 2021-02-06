<?php
	//index.php

	// Include config file
	require_once "../php/config.php";

	if(empty($_SESSION['username'])){
		header("location: ../php/login.php");
	}

	$username = ($_SESSION['username']);

	$sql = "SELECT * FROM users WHERE username = '$username'";
	$result = mysqli_query($link,$sql);
	while($row = mysqli_fetch_array($result)){
    	$profileimage= $row['profileimage'];
    };

?>
<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="UTF-8">
      	<link rel="icon" href="/images/gripefavicon.png">
    	<title>GRIPE</title>
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      	<style>
            body{
                font: sans-serif;
                background-color: #400040;
            }
            .wrapper{
                width: 100%;
            }
            a:link, a:visited, a:hover, a:active{
                text-decoration: none;
            }
            .top-nav{
                width: 100vw;
                text-decoration: none;
                margin: 0px;
                background-color: #300030;
                border: 1px solid #500050;
                box-shadow: 2px 2px black;
				height: 10vh;
            }
            .top-nav li{
                display: inline-block;
              	margin: 0px 10px;
                padding-top: 10px;
            }
          .logo{
          	text-align: center;
            margin-left: 5vh;
          }
          .left-nav{
                width: 100%;
                margin-left: -20px;
				margin-top: -1px;
                background-color: #300030;
                border: 1px solid #500050;
                box-shadow: 2px 2px black;
            	float: left;
            	display: inline-block;
            	height: 90vh;
            }
          	.right-nav{
                width: 100%;
                margin-right: -15px;
              	margin-top: -1px;
                background-color: #300030;
                border: 1px solid #500050;
                box-shadow: 2px 2px black;
            	float: right;
              	display: inline-block;
              	height: 90vh;
            }
            .right-nav li, .left-nav li{
				text-decoration: none;
              	text-align: left;
              	margin: 10px -10px;
              	padding: 10px 0;
              	border-radius: 5px;
              	width: 100%;
            }
          	.right-nav li:hover, .left-nav li:hover{
				text-decoration: none;
            }
			.condensed{
				display: none;
			}
			.form-group{
				width: 100%;
				font-size: 16px;
				margin-top: 15vh;
			}
			input{
				margin: 5px 0;
				padding: 5px;
				width: 100%;
			}
			.btn-primary{
				padding: 10px 0;
				width: 100%;
				margin: 5px 0;
			}
          	.col-md-12{
          		width: 100%;
          	}
			.col-md-8{
				width: 100%;
				display: inline-block;
			}
          .message{
              	display: inline-block;
              	color: white;
              	background-color: #300030;
                border: 1px solid #500050;
            	width: 125%;
            	margin-left: -16px;
            	margin-top: -1px;
            	position: relative;
            	padding: 10px;
            }
            .image, .words{
              	display: inline-block;
            }
            .image{
              	margin: 0;
              	position: absolute;
              	top: 50%;
              	-ms-transform: translateY(-50%);
              	transform: translateY(-50%);
          	}
            .words{
				margin: 15px 15px 15px 120px;
          	}
          	ul{
          		list-style-type: none;
          	}
        </style>
   </head>
	<body>
        <div class="wrapper">
          <div class="top-nav">
			<nav>
              <ul>
                  <li><a href="../php/index.php"><strong><?php echo $_SESSION['username']; ?></strong></a></li>
                  <li><a href="#">Profile</a></li>
                  <li><a href="#">Settings</a></li>
                  <li><a href="../php/logout.php" class="btn btn-danger">Log Out</a></li>
                <li><a href="../php/index.php"><img class="logo" src="/images/gripelogo.png" height="50px"></a></li>
              </ul>
			</nav>
          </div>
          	<container>
			<div class="col-md-12">
  				<div class="left-nav col-md-2">
    				<nav>
      					<ul>
							<li><a href="#">Friends</a></li>
							<li><a href="#">Following</a></li>
							<li><a href="#">Notifications</a></li>
							<li><a href="#">Messages</a></li>
							<li class="condensed"><a href="#">Account</a></li>
							<li class="condensed"><a href="#">Replies</a></li>
							<li class="condensed"><a href="#">Tasks</a></li>
							<li class="condensed"><a href="#">Meetings</a></li>
      					</ul>
    				</nav>
					<form class="form-group" onsubmit="return ajaxpost()">
						<input type="hidden" id="username" name="username" value="<?php echo $_SESSION['username']; ?>">
						<input type="hidden" id="profileimage" name="profileimage" value="<?php echo $profileimage; ?>">
						<input type="text" id="gripe" name="gripe" placeholder="Gripe about it!">
						<input class="btn btn-primary btn-md" id="submit" type="submit" value="GRIPE!">
					</form>
  				</div>
  				<div class="col-md-8">
                  	<div class="message">
                        <img class="image" src="/images/Dieckman Designs Logo.png" height="100px" width="100px">
                      	<div class="words">
                            <h4>Username</h4>
                            <p>Where's the beef?</p>
                      	</div>
                  	</div>
  				</div>
  				<div class="right-nav col-md-2">
                  <nav>
                    <ul>
                       <li><a href="#">Account</a></li>
                       <li><a href="#">Replies</a></li>
                       <li><a href="#">Tasks</a></li>
                       <li><a href="#">Meetings</a></li>
      				</ul>
                  </nav>
  				</div>
			</div>
          </container>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script type="text/javascript" src="../js/gripe.js"></script>
	</div>
	</body>
</html>
