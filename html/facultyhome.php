<?php
	require_once('php/f_core_lib.php');
	check_if_logged_in();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Some Title</title>
	<!--Import Google Icon Font-->
	<link href="css/icon.css" rel="stylesheet">
	<!--Import materialize.css-->
	<link href="css/normalize.min.css" rel="stylesheet">
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
							<div class="padding-s-1"><a href="#" class="brand-logo">Home</a></div>
							<a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>
							<ul class="right hide-on-med-and-down">
								<!--
								<li class="active"><a href="#">Attendance</a></li>
								<li><a href="#">Assignments</a></li>
								<li><a href="#">Notes</a></li>
								-->
								<li><a href="#" class="dropdown-button" data-activates="account1"><?php echo $_SESSION['valid_faculty_user']; ?></a></li>
							</ul>
							<ul id="account1" class="dropdown-content">
								<li><a href="facultyprofile.php">Profile</a></li>
								<li><a href="fchangepassword.php">Change password</a></li>
								<li><form method="post" action="php/faculty_logout.php"><input class="btn text-center padding-s-1 logout-btn" type="submit" value="Logout"></form></li>
							</ul>
							<ul class="side-nav" id="mobile-menu">
								<!--
								<li class="active"><a href="#">Attendance</a></li>
								<li><a href="#">Assignments</a></li>
								<li><a href="#">Notes</a></li>
								-->
								<li><a href="#" class="dropdown-button" data-activates="account"><?php echo $_SESSION['valid_faculty_user']; ?></a></li>
							</ul>
							<ul id="account" class="dropdown-content">
								<li><a href="facultyprofile.php">Profile</a></li>
								<li><a href="fchangepassword.php">Change password</a></li>
								<li><form method="post" action="php/faculty_logout.php"><input class="btn padding-s-2 text-left logout-btn" type="submit" value="Logout"></form></li>
							</ul>
						</div>	
					</nav>
			</div>
		</div>
	</header>
	
	<main>
		<div class="container">
			<div class="row">
				<?php check_if_ctable_failed(); ?>
				<?php check_if_att_failed(); ?>
				<ul class="collapsible" data-collapsible="accordion">
					<li>
						<div class="collapsible-header active"><i class="material-icons">create</i>Take Attendance</div>
						<div class="collapsible-body">
							<?php
								show($_SESSION['valid_faculty_user'], 'a');
							?>
						</div>
					</li>
					<li>
						<div class="collapsible-header"><i class="material-icons">add</i>Create Attendance Table</div>
						<div class="collapsible-body">
							<form method="post" action="php/create_table.php" class="padding-s-3 padding-2">
								<div class="input-field">
									<p class="flow-text text-left padding-1 no-s-padding">Select Year</p>
									<select name="year" id="year" class="validate" required>
										<option value="" disabled selected>Choose your option</option>
										<?php 
											$year_lim = get_max_and_min_from_sem_table();
											for($i = $year_lim[0]; $i <= $year_lim[1]; $i++)
												echo '<option value="'.$i.'">'.$i.'</option>'."\n";
										?>
									</select>
								</div>
								<div class="input-field">
									<div class="row">
										<p class="flow-text text-left padding-1 no-s-padding">Select Courses</p>
										<input id="P05" type="checkbox" class="filled-in" name="batch[]" value="P05">
										<label for="P05">IDP - MTech</label><br>
										<input id="U05" type="checkbox" class="filled-in" name="batch[]" value="U05">
										<label for="U05">IDP - MBA</label><br>
										<input id="A05" type="checkbox" class="filled-in" name="batch[]" value="A05">
										<label for="A05">Regular</label><br>
										<input id="M21" type="checkbox" class="filled-in" name="batch[]" value="M21">
										<label for="M21">IDDMP - CSE</label><br>
										<input id="M22" type="checkbox" class="filled-in" name="batch[]" value="M22">
										<label for="M22">IDDMP - Software Engineering</label><br>
										<input id="M35" type="checkbox" class="filled-in" name="batch[]" value="M35">
										<label for="M35">IIDDMP</label><br>
									</div>
								</div>
								<div class="input-field">
									<p class="flow-text text-left padding-1 no-s-padding">Select Subject</p>
									<input list="subjects" type="text" name="subject" id="subject" class="validate" required>
									<datalist id="subjects">
										<option value="" disabled selected>Choose your option</option>
										<?php display_subjects(); ?>
									</datalist>
								</div>
								<div class"input-field">
									<input id="submit" type="submit" value="Create Attendance Tables" class="btn validate">
								</div>
							</form>
						</div>
					</li>
					<li>
						<div class="collapsible-header active"><i class="material-icons">list</i>View Attendance</div>
						<div class="collapsible-body">
							<?php
								show($_SESSION['valid_faculty_user'], 'v');
							?>
						</div>
					</li>
					<li>
						<div class="collapsible-header active"><i class="material-icons">save</i>Download Attendance</div>
						<div class="collapsible-body">
							<?php
								show($_SESSION['valid_faculty_user'], 'd');
							?>
						</div>
					</li>
					<li>
						<div class="collapsible-header active"><i class="material-icons">delete</i>Remove Attendance Table</div>
						<div class="collapsible-body">
							<?php
								show($_SESSION['valid_faculty_user'], 'r');
							?>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</main>	
	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
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
