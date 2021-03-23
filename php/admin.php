<?php
	//admin.php

	// Include config file
	require_once "../php/config.php";

	if(empty($_SESSION['username'])){
		header("location: ../php/login.php");
	}

	$username = ($_SESSION['username']);
	$accesslvl = ($_SESSION['accesslvl']);
	$profileimage = ($_SESSION['profileimage']);

	$sql = "SELECT * FROM users WHERE username = '$username'";
	$result = mysqli_query($link,$sql);
	while($row = mysqli_fetch_array($result)){
    	$profileimage= $row['profileimage'];
    };

?>
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
			h2{
				margin: 1rem 0;
			}
            .wrapper{
                width: 100%;
            }
            a:link, a:visited, a:hover, a:active{
                text-decoration: none;
            }
			.col-md-12, .container, .row, .heading, .title, .current, .body, .form-group{
          		width: 100%;
				text-align: center;
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
				box-shadow: 2px 2px black;
            }
			.container{
				margin-top: 250px;
				color: white;
				overflow-y: scroll;
			}
			.container::-webkit-scrollbar {
                display: none;
            }
          	.container{
          		-ms-overflow-style: none;  /* IE and Edge */
  				scrollbar-width: none;  /* Firefox */
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
			.condensed{
				display: none;
			}
			.logo{
          		margin-top: 2rem;
			}
			.heading a{
				margin: 1rem 0;
			}
			.btn-info, .btn-primary, .btn-danger{
				width: 15%;
			}
			.btn-primary, .btn-danger{
				margin: .5rem;
			}
			input{
				width: 40%;
			}
			@media only screen and (max-width: 1100px) {
				.top-nav{
					background-size: 300px;
					height: 150px;
				}
                .condensed{
                  	display: block;
                }
				input, .btn-primary, .btn-danger, .btn-info{
                	display: block;
              		width: 50%;
				}
          	}
			@media only screen and (max-width: 850px) {
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
				input, .btn-primary, .btn-danger{
              		width: 90%;
				}
              	.btn-info{
              		width: 90%;
				}
          	}
        </style>
		<script type="text/javascript">
			$(document).ready(function(){
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
					</ul>
				</nav>
				<div id="hamburgeritem">
					<a href="../php/index.php"><b><?php echo $_SESSION['username']; ?></b></a>
					<?php
						if($_SESSION["accesslvl"] = 10){
							echo '<a href="../php/admin.php"><b>Admin</b></a>';
						}
					?>
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
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="heading">
							<div class="title">
								<h2>Current Profile Picture</h2>
							</div>
							<div class="current">
								<img src="/images/<?php echo $profileimage; ?>" height="300px" width="300px">
							</div>
							<a href="../php/index.php" class="btn btn-info"><i class="fa fa-home" aria-hidden="true"></i></a>
						</div>
						<hr>
						<div class="options">
							<div class="heading">
								<h2>Upload a New Option</h2>
							</div>
							<div class="body">
								<form action="../php/imageupload.php" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label>JPG, JPEG, PNG, GIF, & PDF files are allowed.</label>
										<input id="file" class="form-control" type="file" name="image">
										<button type="submit" id="submit" class="btn btn-primary">Submit</button>
										<a href="../php/index.php" class="btn btn-danger">Exit</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script type="text/javascript" src="../js/gripe.js"></script>
        <script>
            function activityWatcher(){
    		  //The number of seconds that have passed
    		  //since the user was active.
    		  var secondsSinceLastActivity = 0;

    		  //Five minutes. 60 x 5 = 300 seconds.
    		  var maxInactivity = (60 * 20);

    		  //Setup the setInterval method to run
    		  //every second. 1000 milliseconds = 1 second.
    		  setInterval(function(){
                secondsSinceLastActivity++;
                console.log(secondsSinceLastActivity + ' seconds since the user was last active');
                //if the user has been inactive or idle for longer
        		//then the seconds specified in maxInactivity
        		if(secondsSinceLastActivity > maxInactivity){
            		console.log('User has been inactive for more than ' + maxInactivity + ' seconds');
           	        //Redirect them to your logout.php page.
           	        location.href = 'logout.php';
                }
    		      }, 1000);

    		      //The function that will be called whenever a user is active
    		      function activity(){
        		      //reset the secondsSinceLastActivity variable
        		      //back to 0
        		      secondsSinceLastActivity = 0;
    		      }

    		      //An array of DOM events that should be interpreted as
    		      //user activity.
   			      var activityEvents = [
        		      'mousedown', 'mousemove', 'keydown',
        		      'scroll', 'touchstart'
    		      ];

    	           //add these events to the document.
    	           //register the activity function as the listener parameter.
    	           activityEvents.forEach(function(eventName) {
        	           document.addEventListener(eventName, activity, true);
    	           });
	           }
		      activityWatcher();
        </script>
	</div>
	</body>
</html>
