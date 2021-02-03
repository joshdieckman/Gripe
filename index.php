<?php
	//index.php

	// Include config file
	require_once "config.php";

	if(empty($_SESSION['username'])){
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="UTF-8">
    	<title>GRIPE</title>
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      	<style>
            body{
                font: 20px sans-serif;
                background-color: #400040;
            }
            .wrapper{
                width: 100%;
            }
            a:link, a:visited, a:hover, a:active{
                text-decoration: none;
            }
            .top-nav{
                width: 100%;
                text-decoration: none;
                margin: 0px;
                background-color: #300030;
                border: 1px solid #500050;
                box-shadow: 2px 2px black;
            }
            .top-nav li{
                display: inline-block;
              	margin: 10px;
                padding-top: 10px;
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
            	height: 95vh;
            }
          	.right-nav{
                width: 100%;
                margin-right: -15px;
              	margin-top: -2px;
                background-color: #300030;
                border: 1px solid #500050;
                box-shadow: 2px 2px black;
            	float: right;
              	display: inline-block;
              	height: 95vh;
            }
            .right-nav li, .left-nav li{
				text-decoration: none;
              	text-align: left;
              	margin: 25px -10px;
              	padding: 10px 0;
              	border-radius: 5px;
              	width: 100%;
            }
          	.right-nav li a, .left-nav li a{
				vertical-align: middle;
              	padding: 10px 30px;
            }
          	.right-nav li:hover, .left-nav li:hover{
				text-decoration: none;
              	background-color: #500050;
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
                  <li><a href="index.php"><strong><?php echo $_SESSION['username']; ?></strong></a></li>
                  <li><a href="#">Profile</a></li>
                  <li><a href="#">Settings</a></li>
                  <li><a href="logout.php" class="btn btn-danger">Log Out</a></li>
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
      					</ul>
    				</nav>
  				</div>
  				<div class="col-md-8">
                  	<div class="message">
                        <img class="image" src="/images/Dieckman Designs Logo.png" height="100px" width="100px">
                      	<div class="words">
                            <h4>Username</h4>
                            <p><b>What is everyone doing tonight?</b></p>
                          	<p><b>What is everyone doing tonight?</b></p>
                          	<p><b>What is everyone doing tonight?</b></p>
                          	<p><b>What is everyone doing tonight?</b></p>
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
	</div>
	</body>
</html>
