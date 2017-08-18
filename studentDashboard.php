<?php	/* Includes config.php for functions. */
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>			<!-- Builds basis of site. Sets style1 as the CSS for this page. -->
	<meta charset="utf-8">
	<title>Knightly Knowledge - Student Dashboard</title>
	<link href="style1.css" rel="stylesheet" />
	<script src="dashboard.js" type="text/javascript"></script>
</head>
<body>
	<a href="studentDashboard.php">
		<img class="logo" src="images/knight.jpg" alt="MGA Knight Logo" />
	</a>
		
	<div id="purpleBar">
		<span class="indent">Knightly Knowledge - Student Dashboard</span>
	</div>
	
	<!-- Sets up data for the side navigation bar. -->
	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="studentDashboard.php">Home</a>
		<a href="classes_student.php">Classes</a>
		<a href="yoursurveys_student.php">Your Surveys</a>
		<a href="studentfeedback.php">Feedback</a>
		<a href="logout.php">Logout</a>
	</div>
	<span class="pointer" onclick="openNav()">&#9776; Menu</span>
	
	<div class="wrapper">

		<div id="main">
				
			<h2 class="center">Welcome, <?php include ("name.php");?></h2>
			<br><br>
		
			<div class="dashboardIcon">
				<a href="classes_student.php">
					<img src="images/lecture.png" alt="Classes" />
					<figcaption>Classes</figcaption>
				</a>
			</div>
			<div class="dashboardIcon">
				<a href="yoursurveys_student.php">
					<img src="images/yoursurveys.png" alt="Your Surveys" />
					<figcaption>Your Surveys</figcaption>
				</a>
			</div>
			<div class="dashboardIcon">
				<a href="studentfeedback.php">
					<img src="images/notebook-1.png" alt="Feedback" />
					<figcaption>Feedback</figcaption>
				</a>
			</div>
			<div class="clear" ></div>
		
		</div>
	</div>
	
	<footer>
			
	</footer>
	
</body>
</html>