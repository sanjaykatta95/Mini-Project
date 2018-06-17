<?php
	require_once('php/s_core_lib.php');
	check_if_logged_in();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Some Title</title>
	<!--Import Google Icon Font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link href="css/normalize.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<!--Let browser know website is optimized for mobile-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<nav>
					<div class="nav-wrapper">
						<div class="padding-s-1"><a href="studentprofile.php" class="brand-logo">Home</a></div>
						<a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>
						<ul class="right hide-on-med-and-down">
						<!--
							<li class="active"><a href="#">Attendance</a></li>
							<li><a href="#">Assignments</a></li>
							<li><a href="#">Notes</a></li>
						-->
							<li><a href="#" class="dropdown-button" data-activates="account1"><?php echo $_SESSION['valid_user']; ?></a></li>
						</ul>
						<ul id="account1" class="dropdown-content">
							<li><a href="studentprofile.php">Profile</a></li>
							<li><a href="schangepassword.php">Change Password</a></li>
							<li><form method="post" action="php/student_logout.php"><input class="btn text-center padding-s-1 logout-btn" type="submit" value="Logout"></form></li>
						</ul>
						<ul class="side-nav" id="mobile-menu">
						<!--
							<li class="active"><a href="#">Attendance</a></li>
							<li><a href="#">Assignments</a></li>
							<li><a href="#">Notes</a></li>
						-->
							<li><a href="#" class="dropdown-button" data-activates="account"><?php echo $_SESSION['valid_user']; ?></a></li>
						</ul>
						<ul id="account" class="dropdown-content">
							<li><a href="studentprofile.php">Profile</a></li>
							<li><a href="schangepassword.php">Change Password</a></li>
							<li><form method="post" action="php/student_logout.php"><input class="btn padding-s-2 text-left logout-btn" type="submit" value="Logout"></form></li>
						</ul>
					</div>	
				</nav>
			</div>
		</div>
	</header>
	
	<main>
		<div class="container">
			<div class="row">
			</div>
		</div>
	</main>	
	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script>
		$(".button-collapse").sideNav();
		$('.dropdown-button').dropdown({
			inDuration: 300,
			outDuration: 225,
			constrain_width: false, // Does not change width of dropdown to that of the activator
			hover: true, // Activate on hover
			gutter: 0, // Spacing from edge
			belowOrigin: false, // Displays dropdown below the button
			alignment: 'left' // Displays dropdown with edge aligned to the left of button
			}	
		);
		$(document).ready(function() {
			$('select').material_select();
  		});
	</script>
</body>
</html>
