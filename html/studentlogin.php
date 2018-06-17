<?php
	require_once('php/s_core_lib.php');
	student_login();
?>
<!DOCTYPE html>
<html>
<head>
	<!--Import Google Icon Font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/normalize.css" media="screen,projection">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link href="css/style.css" rel="stylesheet">
	<!--Let browser know website is optimized for mobile-->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="mobile-web-app-capable" content="yes">
</head>
<body>
	<header>
		<div class="container teal">
			<div class="row no-margin">
				<h1 class="white-text heading center-align no-margin padding-1">Student Login</h1>
			</div>
		</div>
	</header>
	<main>
		<div class="padding-10"></div>
		<div class="container">
			<?php
				check_for_failed_login();
			?>
			<div class="row">
				<form class="col s10 m8 l6 offset-s1 offset-m2 offset-l3" method="post" action="studentlogin.php">
					<div class="row">
						<div class="input-field col s12">
							<input name ="rollno" id="rollno" type="text" class="validate" maxlength="10">
							<label for="rnum">Roll Number</label>
						</div>
						<div class="input-field col s12">
							<input name="password" id="password" type="password" class="validate">
							<label for="password">Password</label>
						</div>
						<div class="input-field col s12">
							<input id="submit" type="submit" class="btn validate">
						</div>
					</div>
				</form>
			</div>
		</div>
	</main>
	<footer>
		<div class="container teal">
			<p class="white-text no-margin padding-2">
				<span class="side-space"></span>
				&copy; 2014 Copyright Text
				<a class="white-text right right-space" href="#!">More Links</a>
			</p>
		</div>
	</footer>
	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script>window.scrollTo(0,1);</script>
</body>
</html>
