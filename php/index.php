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
      	<meta name="viewport" content="width=device-width, initial-scale=1">
      	<link rel="icon" href="/images/gripefavicon.png">
    	<title>GRIPE</title>
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      	<style>
			html{
				font-size: 100%;
			}
            body{
                font: sans-serif;
                background-color: #300030;
            }
            .wrapper{
                width: 100%;
            }
            a:link, a:visited, a:hover, a:active{
                text-decoration: none;
            }
            .top-nav{
				background-image: url("/images/gripelogo.png");
				background-position: center;
				background-repeat: no-repeat;
				background-size: 500px;
                width: 100%;
              	height: 250px;
              	position: fixed;
              	left: 0;
              	right: 0;
              	top: 0;
                text-decoration: none;
                background-color: #300030;
                border: 1px solid #500050;
              	z-index: 10;
            }
            #hamburgermenu{
                display: none;
				text-align: left;
				margin-top: 35px;
				width: 100%;
				font-size: 3rem;
				color: white;
				cursor: pointer;
            }
			#hamburgeritem{
          		display: none;
			}
			.left-nav{
				width: 14%;
                background-color: #300030;
            	display: inline-block;
            	font-size: 1.25rem;
            	float: left;
            	top: 250px;
            	left: 0;
            	position: fixed;
            }
          	.right-nav{
              	width: 14%;
                background-color: #300030;
              	display: inline-block;
              	font-size: 1.25rem;
              	float: right;
            	top: 250px;
              	right: 0;
              	position: fixed;
            }
            .right-nav li, .left-nav li{
				text-decoration: none;
              	text-align: left;
              	margin: .25rem -1.25rem;
              	padding: .25rem;
              	border-radius: 5px;
              	width: 100%;
            }
          	.right-nav li:hover, .left-nav li:hover{
				text-decoration: none;
            }
			.condensed{
				display: none;
			}
			.logo{
          		margin-top: 2rem;
			}
			#gripeform{
            	width: 100%;
            	margin: 1rem 0;
            	text-align: center;
			}
			.form-group{
				width: 100%;
				font-size: 1rem;
              	text-align: center;
			}
			input{
				width: 20%;
              	padding: .5rem;
              	margin-right: .5rem;
              	border-radius: 5px;
              	margin-top: .5rem;
			}
			.btn-primary{
				width: 20%;
              	padding: .6rem;
              	margin-left: .5rem;
              	margin-top: .04rem;
			}
          	.col-md-12{
          		width: 100%;
			}
			.messagecolumn{
				display: inline-block;
              	width: 70%;
              	overflow-y: scroll;
              	margin-top: 250px;
              	margin-left: 14%;
              	margin-right: 14%;
              	margin-bottom: 6rem;
			}
          	.messagecolumn::-webkit-scrollbar {
                display: none;
            }
          	.messagecolumn{
          		-ms-overflow-style: none;  /* IE and Edge */
  				scrollbar-width: none;  /* Firefox */
          	}
			.message{
              	display: inline-block;
              	color: white;
              	background-color: #300030;
            	border: 1px solid #500050;
            	margin-top: -1px;
            	position: relative;
            	padding: 1rem;
            	width: 100%;
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
				margin: 1rem 1rem 1rem 7rem;
          	}
          	ul{
          		list-style-type: none;
          	}
			.container {
				width: 30%;
              	display: inline-block;
              	float: right;
              	right: 0;
              	position: fixed;
				color: white;
				margin: 1rem 0;
			}
			.weather {
				text-align: center;
              	padding: .25rem;
              	width: 100%;
				font-size: 2rem;
			}
			#location {
				text-align: center;
              	padding: .25rem;
              	width: 100%;
				font-size: 1.25rem;
			}
			.desc {
				text-align: center;
              	padding: .25rem;
              	width: 100%;
				font-size: 1.25rem;
			}
			.info{
				text-align: center;
              	padding: .25rem;
              	width: 100%;
				font-size: 1.25rem;
			}
			footer{
				width: 100%;
				height: 6rem;
				position: fixed;
				background-color: #300030;
				border: 1px solid #500050;
				z-index: 10;
				bottom: 0;
				left: 0;
			}
			@media only screen and (max-width: 1100px) {
				.container{
					font-size: .75rem;
				}
				.info{
					display: none;
				}
				.top-nav{
					background-size: 300px;
					height: 150px;
				}
				.right-nav{
					display: none;
				}
                .condensed{
                  	display: block;
                }
				.left-nav{
					width: 30%;
                  	height: 80vh;
					top: 150px;
				}
				.messagecolumn{
					width: 71%;
                  	height: 80vh;
                  	margin-left: 30%;
                  	margin-right: -1%;
                  	margin-top: 150px;
				}
				.message{
              		width: 100%;
				}
				input, .btn-primary{
                	display: block;
              		width: 50%;
                	margin: .5rem 15rem;
				}
				footer{
              		height: 7rem;
                	text-align: center;
				}
          	}
			@media only screen and (max-width: 850px) {
                .container{
					display: none;
				}
				#hamburgermenu{
					display: block;
                    margin-left: -2rem;
				}
				#hamburgeritem{
					width: 100%;
					text-align: center;
					background-color: black;
					padding: .5rem;
				}
				#hamburgeritem a, .f2{
					width: 100%;
					display: block;
					margin: .5rem 0;
				}
				.f2, .desc2{
					color: white;
					font-size: 1rem;
				}
				.left-nav{
                    display: none;
                }
                .messagecolumn{
                  	width: 108%;
					margin-left: -.9rem;
					margin-bottom: 7rem;
                }
                .message{
              		width: 100%;
                }
              	input, .btn-primary{
              		width: 90%;
                  	margin: .5rem 1.4rem;
				}
          	}
        </style>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#messagecolumn').load('../php/load.php');
                setInterval(function(){
                    $('#messagecolumn').load('../php/load.php');
					}, 3000);
                $('#hamburgermenu').click(function(){
    				$('#hamburgeritem').slideToggle("slow");
  				});
			});
		</script>
   </head>
	<body>
        <div class="wrapper">
          <div class="top-nav">
			<nav>
              <ul class="d-flex justify-content-around flex-wrap">
                	<li id="hamburgermenu" class="menu"><a class="#"><i class="fa fa-bars"></i></a></li>
					<li>
						<div class="container">
							<div id="location">Currently in your area:</div>
							<div class="desc">No Information Available.</div>
							<div class="weather">
								<div class="f"><b>Error</b></div>
							</div>
							<div class="info">
								<p>Sunrise: <span class="sunrise">No Information Available</span></p>
								<p>Sunset: <span class="sunset">No Information Available</span></p>
							</div>
						</div>
					</li>
              </ul>
			</nav>
          	<div id="hamburgeritem">
          		<a href="../php/index.php"><b><?php echo $_SESSION['username']; ?></b></a>
				<a href="#"><b>Friends</b></a>
				<a href="#"><b>Following</b></a>
				<a href="#"><b>Notifications</b></a>
				<a href="#"><b>Messages</b></a>
				<a href="#"><b>Account</b></a>
				<a href="#"><b>Replies</b></a>
				<a href="#"><b>Tasks</b></a>
				<a href="#"><b>Meetings</b></a>
				<div class="desc2">No Information Available.</div>
				<div class="f2">Error</div>
                <a href="../php/logout.php" class="btn btn-danger btn-md">Log Out</a>
          	</div>
          </div>
          	<container>
			<div class="col-md-12">
  				<div class="left-nav">
    				<nav>
      					<ul class="d-flex flex-column">
							<li><a href="../php/index.php"><strong><?php echo $_SESSION['username']; ?></strong></a></li>
							<li><a href="#">Friends</a></li>
							<li><a href="#">Following</a></li>
							<li><a href="#">Notifications</a></li>
							<li><a href="#">Messages</a></li>
							<li class="condensed"><a href="#">Account</a></li>
							<li class="condensed"><a href="#">Replies</a></li>
							<li class="condensed"><a href="#">Tasks</a></li>
							<li class="condensed"><a href="#">Meetings</a></li>
							<li><a href="../php/logout.php" class="btn btn-danger btn-md">Log Out</a></li>
      					</ul>
    				</nav>
  				</div>
  				<div id="messagecolumn" class="messagecolumn">
					<?php
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
							</div>';
						 }
					?>
  				</div>
  				<div class="right-nav">
                  <nav>
                    <ul class="d-flex flex-column">
						<li><a href="#">Account</a></li>
						<li><a href="#">Replies</a></li>
						<li><a href="#">Tasks</a></li>
						<li><a href="#">Meetings</a></li>
      				</ul>
                  </nav>
  				</div>
			</div>
        </container>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script type="text/javascript" src="../js/gripe.js"></script>
	</div>
      <footer>
        <div id="gripeform d-flex justify-content-center">
      		<form class="form-group" onsubmit="return ajaxpost()">
				<input type="hidden" id="username" name="username" value="<?php echo $_SESSION['username']; ?>">
				<input type="hidden" id="profileimage" name="profileimage" value="<?php echo $profileimage; ?>">
				<input type="text" id="gripe" name="gripe" placeholder="Gripe about it!" required>
				<input class="btn btn-primary btn-sm" id="submit" type="submit" value="GRIPE!">
			</form>
        </div>
      </footer>
	</body>
</html>
